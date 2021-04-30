<?php

class Db extends CI_Controller
{
	private function indek()
	{
		echo "Hello World";
	}

	public function panggil()
	{
		$this->indek();
	}

}