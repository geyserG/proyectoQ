<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Escritorio extends CI_Controller {

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
		$this->load->view('cabecra_y_menu.html');
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('modulo_cotizaciones');
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
<<<<<<< HEAD
=======
		//$this->load->view('modulo_Clientes');
		//$this->load->view('modulo_cliente_nuevo');
		//$this->load->view('modulo_cotizaciones');
>>>>>>> 25ea2aaa1543ddb1ab87c93c475996993f87bc41
		$this->load->view($page);	
	}
}
