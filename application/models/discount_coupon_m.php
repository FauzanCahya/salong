<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Discount_coupon_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_data_coupon(){
        $sql = "SELECT * FROM discount_coupon ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_kode_akuntansi WHERE ID = $id"; 
            $this->db->query($sql);
        
    }

}

?>