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


  	  $headers="POST ".$target." ".$protocol.$br ;
	  $headers.="Accept: image/gif, image/x-xbitmap, image/jpeg, image/pjpeg, */*".$br;
	  $headers.="Accept-Encoding: gzip, deflate".$br ;
	  $headers.="Accept-Language: it".$br ;
	  $headers.="Host: ".$host.$br ;
	  $headers.="Connection: Keep-Alive".$br ;
	  $headers.="User-Agent: Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)".$br;
	  // pagina di provenienza
	  $headers.="Referer: http://www.bwbwabwa.it".$br ;
	  $headers.="Content-Length: ".strlen($req_body).$br ;

	  // specificando questo (come tutti i dati inviati da un form)
	  // tutti gli spazi e gli altri caratteri non ammessibili in un URL
	  // vengono sostituiti con il loro corrispondente esadecimale preceduto dal simbolo "%"
	  $headers.="Content-Type: application/x-www-form-urlencoded".$br ;
	  // estensione. il cui nome, come richiedono le specifiche HTTP, deve essere preceduto dal prefisso "X-".
	  $headers.="X-INVENTATO: Ciao a tutti".$br.$br;

	  $headers.= $req_body;
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



