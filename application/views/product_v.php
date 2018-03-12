<div class="block">
    <div class="row">
        <div class="col-md-12">
            <div class="app-heading app-heading-small app-heading-condensed">
                <div class="title">
                   
                </div>                                    
            </div>
            
            <div>
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#tabs-10" data-toggle="tab" aria-expanded="true">Product List</a></li>
                    <li class=""><a href="#tabs-11" data-toggle="tab" aria-expanded="false">Supplier</a></li>
                    <li class=""><a href="#tabs-12" data-toggle="tab" aria-expanded="false">Order</a></li>
                </ul>
                <div class="tab-content tab-content-bordered">
                    <div class="tab-pane active" id="tabs-10">
                        <div class="col-md-12">
                            <div style="float: left;">
                                <h3>Data Staff</h3>
                            
                            </div>
                            <div style="float: right;"><a href="<?=base_url();?>staff_c/tambah_data"><button class="btn btn-info btn-icon-fixed"><span class="icon-tag"></span> Add New Staff </button></a></div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <table class="table table-striped table-bordered datatable-extended">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 5%;">Name</th>
                                        <th style="width: 20%;">Price</th>
                                        <th style="width: 10%;">Quantity</th>
                                        <th style="width: 10%;">Stock History</th>
                                        <th style="width: 19%;">Actions</th>
                                    </tr>
                                </thead>                                    
                                <tbody>
                                    <?php 
                                    $i = 0;
                                        foreach ($dt as $key => $value) {

                                        $i++;

                                    ?>
                                    <tr>
                                        <td><?=$i;?></td>
                                        <td><?=$value->NAMA;?></td>
                                        <td><?=$value->MOBILE_NUMBER;?></td>
                                        <td><?=$value->EMAIL;?></td>
                                        <td><?=$value->ENABLE_APPOINTMENT;?></td>
                                        <td><?=$value->LOGIN_AKSES;?></td>
                                        <td><button type="button" class="btn btn-info btn-icon"><span class="icon-eye"></span></button> <button type="button" class="btn btn-warning btn-icon"><span class="icon-trash"></span></button> <button type="button" class="btn btn-success btn-icon"><span class="icon-magic-wand"></span></button></td>
                                    </tr>  
                                    <?php } ?>                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-11">
                        <div class="col-md-12">
                            <div style="float: left;">
                                <h3>Data Working Hourly</h3>
                            
                            </div>
                            
                            <br>
                            <br>
                            <br>
                            <br>
                            <table class="table table-striped table-bordered datatable-extended">
                                <thead>
                                    <tr>

                                        <th style="width: 20%;">Staff</th>
                                        <th style="width: 10%;">Monday</th>
                                        <th style="width: 10%;">Tuesday</th>
                                        <th style="width: 10%;">Wednesday</th>
                                        <th style="width: 10%;">Thursday</th>
                                        <th style="width: 19%;">Friday</th>
                                        <th style="width: 19%;">Saturday</th>
                                        <th style="width: 19%;">Sunday</th>
                                    </tr>
                                </thead>                                    
                                <tbody>
                                    <?php 
                                    
                                        foreach ($dt as $key => $value) {
                                            $id_staff = $value->ID;
                                    ?>
                                    
                                    <tr>
                                        <td><?=$value->FIRST_NAME;?></td>
                                        <td>
                                            <?php 
                                            $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'senin' AND ID_STAFF = '$id_staff'")->result();
                                            if(count($sql_cek) > 0){
                                               
                                                $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'senin' AND ID_STAFF = '$id_staff'")->row();
                                            
                                            echo $sql_cek->AWAL.'-'.$sql_cek->AKHIR;
                                            }else{
                                                echo 'Empty';
                                            }   
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'selasa' AND ID_STAFF = '$id_staff'")->result();
                                            if(count($sql_cek) > 0){
                                               
                                                $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'selasa' AND ID_STAFF = '$id_staff'")->row();
                                            
                                            echo $sql_cek->AWAL.'-'.$sql_cek->AKHIR;
                                            }else{
                                                echo 'Empty';
                                            }   
                                        ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'rabu' AND ID_STAFF = '$id_staff'")->result();
                                            if(count($sql_cek) > 0){
                                               
                                                $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'rabu' AND ID_STAFF = '$id_staff'")->row();
                                            
                                            echo $sql_cek->AWAL.'-'.$sql_cek->AKHIR;
                                            }else{
                                                echo 'Empty';
                                            }   
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'kamis' AND ID_STAFF = '$id_staff'")->result();
                                            if(count($sql_cek) > 0){
                                               
                                                $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'kamis' AND ID_STAFF = '$id_staff'")->row();
                                            
                                            echo $sql_cek->AWAL.'-'.$sql_cek->AKHIR;
                                            }else{
                                                echo 'Empty';
                                            }   
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'jumat' AND ID_STAFF = '$id_staff'")->result();
                                            if(count($sql_cek) > 0){
                                               
                                                $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'jumat' AND ID_STAFF = '$id_staff'")->row();
                                            
                                            echo $sql_cek->AWAL.'-'.$sql_cek->AKHIR;
                                            }else{
                                                echo 'Empty';
                                            }   
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'sabtu' AND ID_STAFF = '$id_staff'")->result();
                                            if(count($sql_cek) > 0){
                                               
                                                $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'sabtu' AND ID_STAFF = '$id_staff'")->row();
                                            
                                            echo $sql_cek->AWAL.'-'.$sql_cek->AKHIR;
                                            }else{
                                                echo 'Empty';
                                            }   
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'minggu' AND ID_STAFF = '$id_staff'")->result();
                                            if(count($sql_cek) > 0){
                                               
                                                $sql_cek = $this->db->query("SELECT * FROM detail_hari_kerja WHERE hari = 'minggu' AND ID_STAFF = '$id_staff'")->row();
                                            
                                            echo $sql_cek->AWAL.'-'.$sql_cek->AKHIR;
                                            }else{
                                                echo 'Empty';
                                            }   
                                            ?>
                                        </td>
                                    </tr>  
                                    <?php } ?>                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-12">
                        <div class="col-md-12">
                            <div style="float: left;">
                                <h3>Data Commission Profile</h3>
                            
                            </div>
                            <div style="float: right;"><a href="<?=base_url();?>staff_c/tambah_data_target"><button class="btn btn-info btn-icon-fixed"><span class="icon-tag"></span> Add Commission Profile By Target </button></a></div>
                            <div style="float: right;margin-right: 10px;"><a href="<?=base_url();?>staff_c/tambah_data_item"><button class="btn btn-primary btn-icon-fixed"><span class="icon-tag"></span> Add Commission Profile By Item </button></a></div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <table class="table table-striped table-bordered datatable-extended">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 35%;">Name</th>
                                        <th style="width: 35%;">Profile Type</th>
                                        <th style="width: 20%;">Actions</th>
                                    </tr>
                                </thead>                                    
                                <tbody>
                                    <?php 
                                    $i = 0;
                                        foreach ($dt_komisi as $key => $value) {

                                        $i++;

                                    ?>
                                    <tr>
                                        <td><?=$i;?></td>
                                        <td><?=$value->NAMA;?></td>
                                        <td><?=$value->PERIOD;?></td>
                                        <td><button type="button" class="btn btn-info btn-icon"><span class="icon-eye"></span></button> <button type="button" class="btn btn-warning btn-icon"><span class="icon-trash"></span></button> <button type="button" class="btn btn-success btn-icon"><span class="icon-magic-wand"></span></button></td>
                                    </tr>  
                                    <?php } ?>                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-13">
                        <div class="col-md-12">
                            <div style="float: left;">
                                <h3>Assigned Profile</h3>
                            
                            </div>
                            
                            <br>
                            <br>
                            <br>
                            <br>
                            <table class="table table-striped table-bordered datatable-extended">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">No</th>
                                        <th style="width: 35%;">Staff Name</th>
                                        <th style="width: 35%;">Commission Profile</th>
                                    </tr>
                                </thead>                                    
                                <tbody>
                                    <?php 
                                    $i = 0;
                                        foreach ($dt as $key => $value_a) {

                                        $i++;

                                    ?>
                                    <tr>
                                        <td><?=$i;?></td>
                                        <td><?=$value_a->FIRST_NAME;?></td>
                                        <td>
                                           <?php 
                                            $lid = $value_a->ID;

                                                $loop_prof = $this->db->query("SELECT p.NAMA as NAMA_PROFILE FROM komisi_profile p , detail_staff_komisi s WHERE s.ID_PROFILE = p.ID AND s.ID_STAFF = '$lid'")->result();

                                                if(count($loop_prof) > 0){

                                                foreach ($loop_prof as $key => $value_b) {
                                                    ?>
                                                    <a href="" data-toggle="modal" data-target="#modal-success" onclick="id_gr(<?=$value_a->ID;?>);">
                                                    <?php  
                                                    echo $value_b->NAMA_PROFILE.',';
                                                    ?></a><?php
                                                }
                                            }else{ 
                                                ?>
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary" onclick="id_gr(<?=$value_a->ID;?>);">Tambah</button>
                                                <?php 

                                            }
                                           ?>
                                        </td>
                                    </tr>  
                                    <?php } ?>                               
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
            </div>
                
        </div>
    </div>
</div>


<div class="modal fade" id="modal-primary" tabindex="-1" role="dialog" aria-labelledby="modal-primary-header">                        
    <div class="modal-dialog modal-primary" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

        <div class="modal-content">
            <div class="modal-header">                        
                <h4 class="modal-title" id="modal-primary-header">Input Profile</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="<?=base_url();?>service_c">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Group Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="hidden" name="id_group" id="id_group">
                                <input type="text" name="name_group" class="form-control">
                            </div>
                        </div>
                    </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
        </div>
    </div>            
</div>

<script type="text/javascript">
    function id_gr($id){
        $('#id_group').val($id);
    }
</script>