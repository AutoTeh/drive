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

        public function get_car($id = '')
        {
                $this->db->select('Marka, Passengers, Gos_Num, Color, Type_Car');
                $this->db->where('ID_Car', $id);
				$query = $this->db->get('Car');
                return $query->result_array();
        }

        public function get_allcar()
        {
                $this->db->select('concat(Marka, ' ', Gos_Num) AS Description, ID_Car');
				$query = $this->db->get('Car');


				foreach ($query->result() as $row)
				{
				   $Temp_Array_Car[$row->ID_Car] = $row->Description;
				}

                return $Temp_Array_Car;
        }

        public function update_car($id = '')
        {
                $this->$Marka 			= $this->input->post('marka');
		        $this->$Passengers 		= $this->input->post('passengers');
		        $this->$Gos_Num 		= $this->input->post('gosNum');
		        $this->$Color 			= $this->input->post('color');
		        $this->$Type_Car 		= $this->input->post('typeCar');

                $this->db->update('Car', $this, array('ID_Car' => $id));
        }

}
