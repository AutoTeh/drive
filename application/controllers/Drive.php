<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drive extends CI_Controller {

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
        $this->load->model('drive');
        $this->load->model('car');
    }

    public function index($id = '')
	{

			if ($id == '') {
                $data = Array(
					"title" 	=> "Добавление водителя",
		            "page" 		=> "drive",
	                "url_form" 	=> "drive/change/"
                );

            } Else {

				$tempp = Array(
					"title" 	=> "Редактирование водителя",
		            "page" 		=> "drive",
	                "url_form" 	=> "drive/change/".$id,
	                "AllCar" 	=>  $this->car->get_allcar()
                );

	            $data = array_merge ($tempp, $this->drive->get_drive($id));

            }

			$this->load->view('main', $data);
	}

	public function change($id = '')
	{
			if($id = '') ? $data['title'] = "Добавление водителя" : $data['title'] = "Редактирование водителя";
			$data['page'] = 'drive';

			$this->form_validation->set_rules('fio', 'Fio', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('addCar', 'AddCar', 'required');
	        if ($this->form_validation->run() == TRUE)
	        {
	        	if($id = '') ? $this->drive->insert_car(); : $this->drive->update_car($id);
	        	$data['page'] = 'formsuccess';
	        }

			$this->load->view('main', $data);
	}

}
