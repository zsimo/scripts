<?php

/*
 * OPEN and READ a file
 * http://devzone.zend.com/266/php-101-part-5-rank-and-file/
 */
// set file to read
$file = '/usr/local/stuff/that/should/be/elsewhere/recipes/omelette.txt' or die('Could not open file!');
// open file
$fh = fopen($file, 'r') or die('Could not open file!');
// read file contents
$data = fread($fh, filesize($file)) or die('Could not read file!');
// close file
fclose($fh);
// print file contents
echo $data;
















?>