<?php




$host = 'localhost'; //host
$port = '8080'; //port

//Create TCP/IP sream socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//reuseable port
socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);

//bind socket to specified host
socket_bind($socket, 0, $port);

//listen to port
socket_listen($socket);

socket_accept($socket);

// print_r($socket);
$secKey = $headers['Sec-WebSocket-Key'];
$secAccept = base64_encode(pack('H*', sha1($secKey . '258EAFA5-E914-47DA-95CA-C5AB0DC85B11')));
$upgrade  = "HTTP/1.1 101 Web Socket Protocol Handshake\r\n" .
"Upgrade: websocket\r\n" .
"Connection: Upgrade\r\n" .
"WebSocket-Origin: $host\r\n" .
"WebSocket-Location: ws://$host:$port/deamon.php\r\n".
"Sec-WebSocket-Accept:$secAccept\r\n\r\n";
socket_write($client_conn,$upgrade,strlen($upgrade));











?>