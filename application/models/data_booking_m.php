<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_booking_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_data_booking(){
        $sql = "SELECT b.* , c.NAMA AS NAMA_CUSTOMER FROM booking b, customer c WHERE b.ID_CUSTOMER = c.ID ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_kode_akuntansi WHERE ID = $id"; 
            $this->db->query($sql);
        
    }

}

?>