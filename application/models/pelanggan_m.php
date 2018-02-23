<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pelanggan_m extends CI_Model
{
    function __construct() {
          parent::__construct();
          $this->load->database();
    }

    function get_data_pelanggan(){
        $sql = "SELECT * FROM ak_pelanggan
                            ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_pelanggan WHERE ID = $id"; 
            $this->db->query($sql);
        
    }

}

?>