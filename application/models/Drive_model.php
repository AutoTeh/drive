<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drive_model extends CI_Model {

        public $FIO;
        public $Phone;
        public $ID_Car;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function insert_drive()
        {
                $this->$FIO 		= $this->input->post('fio');
		        $this->$Phone 		= $this->input->post('phone');
		        $this->$ID_Car 		= $this->input->post('addCar');

                $this->db->insert('Driver', $this);
        }

        public function update_drive($id = '')
        {
                $this->$FIO 		= $this->input->post('fio');
		        $this->$Phone 		= $this->input->post('phone');
		        $this->$ID_Car 		= $this->input->post('addCar');

                $this->db->update('Driver', $this, array('ID_Driver' => $id));
        }

        public function get_drive($id = '')
        {
                $this->db->select('FIO, Phone, ID_Car');
                $this->db->where('ID_Driver', $id);
				$query = $this->db->get('Driver');
                return $query->result_array();
        }

}
