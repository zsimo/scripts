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

	  $headers="GET ".$target." ".$protocol.$br ;
	  $headers.="Accept: image/gif, image/x-xbitmap, image/jpeg".$br ;
	  $headers.="Accept-Language: dialetto veneto".$br ;
	  $headers.="Host: ".$host.$br ;
	  $headers.="Connection: Keep-Alive".$br ;
	  $headers.="User-Agent: Socket-PHP-browser 1.0".$br;
	  // pagina di provenienza
	  $headers.="Referer: http://www.bwbwabwa.it".$br ;
	  // estensione. il cui nome, come richiedono le specifiche HTTP, deve essere preceduto dal prefisso "X-".
	  $headers.="X-INVENTATO: Ciao a tutti".$br.$br;


 	fputs ($socket, $headers);

 	while (!feof($socket)) {

  		$dati.= fgets ($socket, 2048);

 	}
}

fclose($socket) ;
print_r($dati);
// file_put_contents('prova.html', $dati);




?>



