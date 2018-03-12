<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resource_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_resource(){
        $sql = "SELECT * FROM resource ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function get_detail_wallet(){
        $sql = "SELECT c.NAMA as NAMA ,w.* FROM customer c , detail_transaksi_wallet w WHERE c.ID = w.ID_CUSTOMER ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function get_cust(){
        $sql = "SELECT * FROM customer ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function update_wallet_customer($id,$nominal){
        $value = $this->db->query("SELECT * FROM customer WHERE ID = '$id'")->row();

        $uang = $value->WALLET + $nominal;

        $sql = " UPDATE customer SET WALLET = '$uang' WHERE ID = '$id'"; 
        $this->db->query($sql);
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_kode_akuntansi WHERE ID = $id"; 
            $this->db->query($sql);
        
    }

}

?>