<?php
$url = "https://raw.githubusercontent.com/dbghelp/Abema-TV/refs/heads/main/abema.m3u8";

//cURLセッションを初期化する
$ch = curl_init();

//URLとオプションを指定する
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//URLの情報を取得する
$res =  curl_exec($ch);
//セッションを終了する
curl_close($ch);

$res = delete_license_type($res);
$res = convert_license_legacy($res);
//結果を表示する
print($res);

function delete_license_type($str) {
    $str = str_replace("#KODIPROP:inputstream.adaptive.license_type=clearkey","",$str);
    return $str;
}

function convert_license_legacy($str) {
    $ret = "";
    $target = "#KODIPROP:inputstream.adaptive.license_key=";
    $ary = preg_split("/\r\n|\r|\n/", $str);
    foreach($ary as $line) {
        if ($pos = strpos($line, $target) === false) {
            $ret .= $line . "\n";
        }
        else {
            $json = substr($line, $pos + strlen($target));
            $obj = json_decode($json);
            $ret = $ret . "#KODIPROP:contentlookup=False\n#KODIPROP:mimetype=application/dash+xml\n#KODIPROP:inputstream=inputstream.adaptive\n#KODIPROP:inputstream.adaptive.drm_legacy=org.w3.clearkey|";
            foreach($obj->keys as $key) {
                $ret .= bin2hex(base64_decode($key->kid)) . ":" . bin2hex(base64_decode($key->k)) . ",";
            }
            $ret = substr($ret, 0, strlen($ret) - 1) . "\n";
        }
    }
    return $ret;
}
?>
