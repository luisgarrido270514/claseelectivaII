<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suma extends CI_Controller {

	
	public function index()
	{
		$this->load->view('viewsSuma');
    }
    
public function sumar(){


    $num1=$_POST['num1'];
    $num2=$_POST['num2'];

    $suma= $num1 + $num2;

    echo $suma;
}

}
