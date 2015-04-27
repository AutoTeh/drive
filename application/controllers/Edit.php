<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

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

	function __construct() {
        parent::__construct();

		if(!$this->authldap->is_authenticated()) ? redirect('/', 'refresh');

    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function car()
	{
			$data['title'] = "Добавление машины";
            $data['page'] = 'edit/car';

			$this->form_validation->set_rules('marka', 'Marka', 'required');
			$this->form_validation->set_rules('passengers', 'Passengers', 'required');
            $this->form_validation->set_rules('gosNum', 'GosNum', 'required');
			$this->form_validation->set_rules('color', 'Color', 'required');
            $this->form_validation->set_rules('typeCar', 'TypeCar', 'required');

	        if ($this->form_validation->run() == TRUE)
	        {
	        	$this->load->model('add/car');	        	$this->add->insert_car();
	        }

			$this->load->view('main', $data);
	}

	public function drive()
	{
			$data['title'] = "Добавление водителя";
            $data['page'] = 'edit/drive';

			$this->form_validation->set_rules('fio', 'Fio', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('addCar', 'AddCar', 'required');

	        if ($this->form_validation->run() == TRUE)
	        {
	        	$this->load->model('add/drive');
	        	$this->add->insert_drive();
	        }

			$this->load->view('main', $data);
	}

}
