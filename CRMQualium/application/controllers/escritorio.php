<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
<<<<<<< HEAD

		$this->load->view($page);	

=======
		$this->load->view($page);	
>>>>>>> 253283784e69b0de1255fec3c86e6002c58999bf
	}
}
