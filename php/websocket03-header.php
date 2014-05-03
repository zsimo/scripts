<?php


$host     = 'localhost' ;
$target   = '/simonesacchi.com/scripts/php/info.php?var1=test';
$port     = 80 ;
$timeout  = 60;
// lento e lavora male con HTTP/1.1
$protocol = "HTTP/1.0";

$br       = "\r\n" ;

$dati = '' ;


$socket = fsockopen($host, $port, $errnum, $errstr, $timeout);

if (!is_resource($socket)) {
	exit('Connessione fallita: '.$errnum.' ' .$errstr);
}
else {
	// Il metodo HEAD consente di ottenere esclusivamente gli header inviati dal server anzichè
	// l’intero corpo del documento e, dato che la risposta è molto più rapida
	// diventa utile in operazioni come la verifica dei link interrotti all’interno di un sito
	$header = "HEAD /percorso/pag.ext HTTP 1.0 \r\n\r\n";


 	fputs ($socket, $header);

 	while (!feof($socket)) {

  		$dati.= fgets ($socket, 2048);

 	}
}

fclose($socket) ;
print_r($dati);
// file_put_contents('prova.html', $dati);




?>



