# abema_m3uplaylist
 KodiのIPTV Simple Client用のAbemaTV M3Uプレイリストです。
 dbghelpのAbemaTVプレイリストをIPTVシンプルクライアントで動作するように変換したものです

## オリジナルのAbemaTVとAbemaTV-EPG
  https://github.com/dbghelp/Abema-TV  
  https://github.com/dbghelp/Abema-TV-EPG

## IPTVシンプルクライアントを使ってKodiでAbemaTVを視聴する方法
  1. abema_m3uplaylist.phpを適当なWebサーバーに配置します。
  2. KodiでIPTV Simple Clientの設定を開きます。(システム>アドオン>Myアドオン)
  3. 一般>M3UプレイリストのURLをYOUR_WEBSERVER_URL(abema_m3uplaylist.php)に設定します。
     phpの設置ができない方はこちらをお試しください: https://castanet.tokyo/abema.php
  4. (optional)Set EPG XMLTV URL:
  https://raw.githubusercontent.com/dbghelp/Abema-TV-EPG/refs/heads/main/abema.xml
  5. (optional)Enable timeshift.  
  Enable timeshift all streams.
  6. (optional)Modify inputstream.ffmpegdirect settings.  
     Timeshift:Enable timeshift limit.  
     		      Maximum time shift buffer length: 0.25hours  
	Network:Bandwidth 102400 kbps  
  7. Advanced:Streaming:  
	Use FFmpeg http reconnect option if possible: on  
	Use inputstream.adaptive for m3u8(HLS) streams: on  


# abema_m3uplaylist
  AbemaTV M3U Playlist for IPTV Simple Client.  
  Converter dbghelp Abema-TV playlist to work IPTV Simple Client.

## Abema-TV and Abema-TV-EPG
  https://github.com/dbghelp/Abema-TV  
  https://github.com/dbghelp/Abema-TV-EPG  

## How to watch AbemaTV on Kodi by IPTV Simple Client
  1. Put abema_m3uplaylist.php on your web server.
  2. Open Settings for IPTV Simple Client on kodi.
  3. Set M3U playlist url YOUR_WEBSERVER_URL(abema_m3uplaylist.php).  
     Sample: https://castanet.tokyo/abema.php
  4. (optional)Set EPG XMLTV URL  https://raw.githubusercontent.com/dbghelp/Abema-TV-EPG/refs/heads/main/abema.xml
  5. (optional)Enable timeshift. Enable timeshift all streams.  
  6. (optional)Modify inputstream.ffmpegdirect settings.  
     Timeshift:Enable timeshift limit.  
     		      Maximum time shift buffer length: 0.25hours  
	Network:Bandwidth 102400 kbps  
  7. Advanced:Streaming:  
	Use FFmpeg http reconnect option if possible: on  
	Use inputstream.adaptive for m3u8(HLS) streams: on  

