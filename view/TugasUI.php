<?php 

require_once 'View.php';
/**
* 
*/
class TugasUI extends View
{
	
	public function tampilForm()
	{
		include_once 'pages/tugas.php';
		$this->end();
	}
}


