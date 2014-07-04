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


?>