<?php



    print_r("*************************");

	// print_r(crypt("simone"));


	$hashed_password = crypt('mypasswor'); // let the salt be automatically generated
/* You should pass the entire results of crypt() as the salt for comparing a
   password, to avoid problems when different hashing algorithms are used. (As
   it says above, standard DES-based password hashing uses a 2-character salt,
   but MD5-based hashing uses 12.) */
if (crypt('mypassword', $hashed_password) == $hashed_password) {
   echo "Password verified!";
}



	print_r("*************************");
	print_r($hashed_password);

	// echo password_hash("mypassword", PASSWORD_BCRYPT);
	
	if (CRYPT_SHA256 == 1) {
	    echo 'SHA-256:      ' . crypt('rasmuslerdorf', '$5$rounds=5000$usesomesillystringforsalt$') . "\n";
	}
	
	if (CRYPT_SHA512 == 1) {
	    echo 'SHA-512:      ' . crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$') . "\n";
	}
	
	
	require 'password.php';
	$password = 'password';
	
//	$hash = password_hash($password, PASSWORD_BCRYPT);
	$hash = '$2y$10$7mDqcCspgQCmZIHaTbkeE.1XHHi4JyWvje83irQ82sTZ6OO0/YoIa';
	
	print_r("\n");
	print_r($hash);
	print_r("\n");
	print_r("\n");
	
	
//	$password = 'pippo';
	
	if (password_verify($password, $hash)) {
        print_r("valid");
    } else {
        print_r("not valid");
    }
	
	print_r("\n");	


?>
