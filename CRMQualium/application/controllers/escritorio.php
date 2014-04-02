<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require (APPPATH'.libraries/REST_Controller.php');

class Escritorio extends CI_Controller {

<<<<<<< HEAD
	public function index($page = 'escritorio')
	{
		if(!file_exists('application/views/'.$page.'.php'))
		{
			//La pagina solicitada no existe....
			show_404();
		}

=======
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function index()
	{

		//$this->load->view('');
>>>>>>> 28af385c7042a65b2d8e4675058722cf16e64473
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
<<<<<<< HEAD
		//$this->load->view('modulo_cotizaciones_consulta');
		
		//$this->load->view('dashboard_gustavo');
		
	}*/

	public function json()
	{

=======
		$this->load->view('modulo_cotizaciones_consulta');
		//$this->load->view('modulo_cotizaciones_nuevo');
		//$this->load->view('dashboard_gustavo');
		
	}*/
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
		$this->load->view($page);	
>>>>>>> 28af385c7042a65b2d8e4675058722cf16e64473
	}
}
