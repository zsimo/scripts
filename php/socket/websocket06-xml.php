<?php


$host     = 'localhost' ;
$target   = '/simonesacchi.com/scripts/php/info.php';
$port     = 80 ;
$timeout  = 60;
// lento e lavora male con HTTP/1.1
$protocol = "HTTP/1.1";

$br       = "\r\n" ;

$dati = '' ;


$socket = fsockopen($host, $port, $errnum, $errstr, $timeout);

if (!is_resource($socket)) {
	exit('Connessione fallita: '.$errnum.' ' .$errstr);
}
else {


	  $xml_body = '<prova attributo="primo attributo">
					<commento>Questo è un test</commento>
					<contenuto>Invio di una request XML di prova</contenuto>
				   </prova>' ;
		$json_body = '{"prova": "ok"}';

  	  $headers="POST ".$target." ".$protocol.$br ;
	  $headers.="Host: ".$host.$br ;
	  $headers.="Content-Type: text/json".$br ;
	  $headers.="Content-Length: ".strlen($json_body).$br.$br;

	  $headers.= $json_body;
	  // die($headers);

 	fputs ($socket, $headers);

 	while (!feof($socket)) {

  		$dati.= fgets ($socket, 2048);

 	}
}

fclose($socket) ;
print_r($dati);
// file_put_contents('prova.html', $dati);




?>



