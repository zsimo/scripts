<?php

/*
 * OPEN and READ a file
 * http://devzone.zend.com/266/php-101-part-5-rank-and-file/
 */
// set file to read
$file = '/usr/local/stuff/that/should/be/elsewhere/recipes/omelette.txt' or die('Could not open file!');

// open file
$fh = fopen($file, 'r') or die('Could not open file!');
// read file contents (returns a string)
$data = fread($fh, filesize($file)) or die('Could not read file!');
// close file
fclose($fh);

/*
 * OPPURE file
 */
// read the file directly into array (each line is an array entries)
$data = file($file) or die('Could not read file!');
// foreach ($data as $line) {
	// echo $line;
// }


/*
 * OPPURE file_get_contents
 */
// read the file directly into a string
$data = file_get_contents($file) or die('Could not read file!');


// print file contents
print_r($data);


/*
 * OPEN and WRITE a file
 */
// set file to write
$file = '/tmp/dump.txt';

// open file (w: write)(a: append)
// se il file non esiste, lo crea
$fh = fopen($file, 'w') or die('Could not open file!');

// write to file
fwrite($fh, "Look, Ma, I wrote a file!") or die('Could not write to file');

// close file
fclose($fh);

/*
 * OPPURE file_put_contents
 */
// Notice that double quotes are needed to convert into a carriage return.
file_put_contents($filename, "Look, Ma, I wrote a file!
") or die('Could not write to file');





/*
 * a bunch of functions that allow you to test the status of a file
 */
// file_exists($filename)
// is_dir($filename)
// is_file($filename)
// filesize($filename)



?>
