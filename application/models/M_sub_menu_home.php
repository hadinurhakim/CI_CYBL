<?php

class M_sub_menu_home extends CI_Model{

      function show_listMenu(){

            $data =$this->db->query("SELECT * FROM list_menu_home");

            return $data;

      }    

}