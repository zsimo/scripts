<?php

	if (isset($_POST['var1'])) {
		print_r("ok\n");
		print_r($_POST);
	}
	else if (isset($HTTP_RAW_POST_DATA)) {

		$json = $HTTP_RAW_POST_DATA;
		$json_array = json_decode($json, TRUE);
		print_r($json_array);
		echo "\n";
		echo($_SERVER["CONTENT_TYPE"]);
	}
	else {
		phpinfo();
	}




?>