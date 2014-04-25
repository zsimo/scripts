<?php


log("Handshaking...");
list($resource,$host,$origin) = getheaders($buffer);
$upgrade = "HTTP/1.1 101 Web Socket Protocol Handshake\r\n" .
           "Upgrade: WebSocket\r\n" .
           "Connection: Upgrade\r\n" .
           "WebSocket-Origin: " . $origin . "\r\n" .
           "WebSocket-Location: ws://" . $host . $resource . "\r\n" .
           "\r\n";
$handshake = true;
socket_write($socket,$upgrade.chr(0),strlen($upgrade.chr(0)));







?>