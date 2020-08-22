<?php

class M_sub_menu extends CI_Model{


     public function show_listMenu(){

            $data = $this->db->query("SELECT * FROM list_menu_php");

            return $data;

      }    
      public function pagejoin($id_menu = NULL){
      		$query = $this->db->get_where('data_page', array('id_menu' => $id_menu))->row();

      		return $query;
   			
		}

}