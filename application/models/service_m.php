<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_customer_front(){
        $sql = "SELECT * FROM customer ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function get_cust_excisting(){
        $sql = "SELECT COUNT(*) as hitung FROM customer WHERE CREATED_AT <= DATE(NOW('d-m-Y') - INTERVAL 1 MONTH)";
        return $this->db->query($sql)->row();
    }

    function get_cust_active(){
        $sql = "SELECT COUNT(*) as hitung FROM customer WHERE LAST_VISITED <= DATE(NOW('d-m-Y') - INTERVAL 1 MONTH)";
        return $this->db->query($sql)->row();
    }

    function get_cust_chun(){
        $sql = "SELECT COUNT(*) as hitung FROM customer WHERE LAST_VISITED <= DATE(NOW('d-m-Y') - INTERVAL 2 MONTH)";
        return $this->db->query($sql)->row();
    }

    function get_group_count($id){
        $sql = "SELECT COUNT(*) as HITUNG FROM services WHERE GROUP_SERVICE = '$id' ";
        return $this->db->query($sql)->row();
    }

    function get_detail_service($id){
        $sql = "SELECT s.* FROM services s , service_group sg WHERE s.GROUP_SERVICE = sg.ID AND s.GROUP_SERVICE = '$id' ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function get_data_group(){
        $sql = "SELECT * FROM service_group ORDER BY ID DESC";
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