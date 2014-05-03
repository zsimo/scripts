<?php



// initialize a session
session_start();

// increment a session counter
if (!isset($_SESSION['counter'])) {
	$_SESSION['counter'] = 0;
}
$_SESSION['counter']++;

// print value
echo "You have viewed this page " . $_SESSION['counter'] . " times";



// print_r(session_id());
// session_destroy();



$bodyRequest = "var1=data passed via body request a mano";
print_r(urlencode($bodyRequest));








?>