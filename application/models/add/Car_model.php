<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car_model extends CI_Model {

        public $Marka;
        public $Passengers;
        public $Gos_Num;
        public $Color;
        public $Type_Car;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function insert_car()
        {
                $this->$Marka 			= $this->input->post('marka');
		        $this->$Passengers 		= $this->input->post('passengers');
		        $this->$Gos_Num 		= $this->input->post('gosNum');
		        $this->$Color 			= $this->input->post('color');
		        $this->$Type_Car 		= $this->input->post('typeCar');

                $this->db->insert('Car', $this);
        }

        public function update_car()
        {
                $this->$Marka 			= $this->input->post('marka');
		        $this->$Passengers 		= $this->input->post('passengers');
		        $this->$Gos_Num 		= $this->input->post('gosNum');
		        $this->$Color 			= $this->input->post('color');
		        $this->$Type_Car 		= $this->input->post('typeCar');

                $this->db->update('Car', $this, array('ID_Car' => $this->input->post('ID_Car')));
        }

}
