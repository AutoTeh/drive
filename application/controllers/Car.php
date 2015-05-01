<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

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

    	$this->load->model('car');
    }

	public function index($id = '')
	{

			if ($id == '') {
                $data = Array(
					"title" 	=> "Добавление машины",
		            "page" 		=> "car",
	                "url_form" 	=> "car/change/"
                );

            } Else {				$tempp = Array(
					"title" 	=> "Редактирование машины",
		            "page" 		=> "car",
	                "url_form" 	=> "car/change/".$id,
	                "AllCar" 	=>  $this->car->get_allcar()
                );

	            $data = array_merge ($tempp, $this->car->get_car($id));

            }

			$this->load->view('main', $data);
	}

	public function change($id = '')
	{
			if($id = '') ? $data['title'] = "Добавление машины" : $data['title'] = "Редактирование машины";
			$data['page'] = 'car';

			$this->form_validation->set_rules('marka', 'Marka', 'required');
			$this->form_validation->set_rules('passengers', 'Passengers', 'required');
            $this->form_validation->set_rules('gosNum', 'GosNum', 'required');
			$this->form_validation->set_rules('color', 'Color', 'required');
            $this->form_validation->set_rules('typeCar', 'TypeCar', 'required');

	        if ($this->form_validation->run() == TRUE)
	        {
	        	if($id = '') ? $this->car->insert_car(); : $this->car->update_car($id);
	        	$data['page'] = 'formsuccess';
	        }

			$this->load->view('main', $data);
	}



}
