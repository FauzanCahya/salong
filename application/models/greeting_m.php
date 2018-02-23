<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Greeting_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_data_greeting(){
        $sql = "SELECT * FROM greeting ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_kode_akuntansi WHERE ID = $id"; 
            $this->db->query($sql);
        
    }

}

?>