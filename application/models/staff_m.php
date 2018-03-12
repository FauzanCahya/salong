<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_staff_front(){
        $sql = "SELECT * FROM staff ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function data_service(){
        $sql = "SELECT * FROM services ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function get_komisi(){
        $sql = "SELECT * FROM komisi_profile ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function looping_staaf_profile($id){
        $sql = "SELECT p.NAMA as NAMA_PROFILE FROM komisi_profile p , detail_staff_komisi s WHERE s.ID_PROFILE = p.ID AND s.ID_STAFF = '$id'  ORDER BY ID DESC";
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

    function input_data_detail_service($id,$id_service){
        
            $sql = " INSERT INTO detail_staff_service (ID_STAFF,ID_SERVICE) values ('$id','$id_service')"; 
            $this->db->query($sql);
        
    }

    function input_item_komisi($id,$nama){
        
            $sql = " INSERT INTO detail_item_komisi (ID_KOMISI,ITEM_LIST) values ('$id','$nama')"; 
            $this->db->query($sql);
            
        
    }

    function input_detail_komisi_target($id,$from_kom,$to_kom,$komisi_by,$val_kom){
        
            $sql = " INSERT INTO detail_komisi_target (ID_KOMISI,FROM_KOMISI,TO_KOMISI,KOMISI_BY,VALUE_KOMISI) values ('$id','$from_kom','$to_kom','$komisi_by','$val_kom')"; 
            $this->db->query($sql);
            
        
    }


    function input_senin($id,$awal,$akhir){
        
            $sql = " INSERT INTO detail_hari_kerja (ID_STAFF,HARI,AWAL,AKHIR) values ('$id','senin','$awal','$akhir')"; 
            $this->db->query($sql);
        
    }

    function input_selasa($id,$awal,$akhir){
        
            $sql = " INSERT INTO detail_hari_kerja (ID_STAFF,HARI,AWAL,AKHIR) values ('$id','selasa','$awal','$akhir')"; 
            $this->db->query($sql);
        
    }

    function input_rabu($id,$awal,$akhir){
        
            $sql = " INSERT INTO detail_hari_kerja (ID_STAFF,HARI,AWAL,AKHIR) values ('$id','rabu','$awal','$akhir')"; 
            $this->db->query($sql);
        
    }

    function input_kamis($id,$awal,$akhir){
        
            $sql = " INSERT INTO detail_hari_kerja (ID_STAFF,HARI,AWAL,AKHIR) values ('$id','kamis','$awal','$akhir')"; 
            $this->db->query($sql);
        
    }

    function input_jumat($id,$awal,$akhir){
        
            $sql = " INSERT INTO detail_hari_kerja (ID_STAFF,HARI,AWAL,AKHIR) values ('$id','jumat','$awal','$akhir')"; 
            $this->db->query($sql);
        
    }

    function input_sabtu($id,$awal,$akhir){
        
            $sql = " INSERT INTO detail_hari_kerja (ID_STAFF,HARI,AWAL,AKHIR) values ('$id','sabtu','$awal','$akhir')"; 
            $this->db->query($sql);
        
    }

    function input_minggu($id,$awal,$akhir){
        
            $sql = " INSERT INTO detail_hari_kerja (ID_STAFF,HARI,AWAL,AKHIR) values ('$id','minggu','$awal','$akhir')"; 
            $this->db->query($sql);
        
    }


}

?>