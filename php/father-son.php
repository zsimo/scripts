<?php



   class Father {

   	private $private = 'private';
	public $public = 'public';

	public function getPrivate() {
		return $this->private;
	}

	public function setPrivate($newPrivate) {
		$this->private = $newPrivate;
	}



   }


   class Son extends Father {

	public function log () {
		print_r($this->getPrivate());
	}

   }



	$son = new Son();
	$son->setPrivate('pippo');
	$son->log();



?>