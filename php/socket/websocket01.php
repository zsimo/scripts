<?php


// print_r("simon");

// log("Handshaking...");
// list($resource,$host,$origin) = getheaders($buffer);
// $upgrade = "HTTP/1.1 101 Web Socket Protocol Handshake\r\n" .
           // "Upgrade: WebSocket\r\n" .
           // "Connection: Upgrade\r\n" .
           // "WebSocket-Origin: " . $origin . "\r\n" .
           // "WebSocket-Location: ws://" . $host . $resource . "\r\n" .
           // "\r\n";
// $handshake = true;
// socket_write($socket,$upgrade.chr(0),strlen($upgrade.chr(0)));




// print_r(stream_get_transports());
$host    = 'localhost' ;
$target  = '/simonesacchi.com/scripts/php/info.php';
$port    = 80 ;
$timeout = 60;

$dati = '' ;


$socket = fsockopen($host, $port, $errnum, $errstr, $timeout);

if (!is_resource($socket)) {
	exit('Connessione fallita: '.$errnum.' ' .$errstr);
}
else {


 fputs ($socket, "GET {$target}\r\n");

 	while (!feof($socket)) {

  		$dati.= fgets ($socket, 2048);

 	}
}

print_r($dati);
// file_put_contents('prova.html', $dati);




?>



