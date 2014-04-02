<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require (APPPATH'.libraries/REST_Controller.php');

class Escritorio extends CI_Controller {

	public function index($page = 'escritorio')
	{
		if(!file_exists('application/views/'.$page.'.php'))
		{
			//La pagina solicitada no existe....
			show_404();
		}

		$this->load->view('cabecra_y_menu.html');
		$this->load->view('header');
		$this->load->view('menu');
		//$this->load->view('modulo_Clientes');
		//$this->load->view('modulo_cliente_nuevo');
		//$this->load->view('modulo_cotizaciones');
		$this->load->view($page);	
	}
}
