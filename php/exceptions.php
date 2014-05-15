<?php




	set_exception_handler('handler');

	function handler ($exception) {
		// cathca tutte gli errori tirati e non presi
		print_r("handler");
	}


	// try {
		throw new Exception("pippo error", 1);
	// }
	// catch (Exception $e) {
		// print_r($e->getCode());
	// }



?>