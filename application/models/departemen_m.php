<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departemen_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_data_dep(){
        $sql = "SELECT * FROM ak_departemen ORDER BY ID";
        return $this->db->query($sql)->result();
    }


    function get_data_gudang(){
        $sql = "SELECT * FROM ak_gudang ORDER BY ID";
        return $this->db->query($sql)->result();
    }


    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_departemen WHERE ID = $id"; 
            $this->db->query($sql);

            $sql2 = " DELETE FROM ak_saldo_departemen WHERE ID = $id"; 
            $this->db->query($sql2);
        
    }

}

?>