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
		//$this->load->view('modulo_cotizaciones_nuevo');
		$this->load->view($page);	
	}
	/*public function index()
	{
		//$this->load->view('');
		
		$this->load->view('modulo_cotizaciones');
		//$this->load->view('modulo_cotizaciones_consulta');
		
		//$this->load->view('dashboard_gustavo');
		
	}*/

	public function json()
	{

	}
}
