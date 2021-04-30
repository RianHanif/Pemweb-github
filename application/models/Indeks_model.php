<?php

class Indeks_model extends CI_Model
{
	public function get_data()
	{
		$mobil = array(
			array('volvo', 22, 18, 30),
			array('BMW', 15, 13, 20),
			array('Saab', 5, 2, 9),
			array('Land Rover', 17, 15, 19),
			array('Tesla', 20, 12, 22),
		);

		return $mobil;
	}
}