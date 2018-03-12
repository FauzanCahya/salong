<div class="block">
    <div class="row">
        <div class="col-md-6">
            <div class="app-heading app-heading-small app-heading-condensed">
                <div class="title">
                   
                </div>                                    
            </div>
        
        <div class="block">              
            <div class="app-heading app-heading-small">                                
                <div class="title">
                    <h2>Add Staff</h2>
                    <p>Insert your new staff</p>
                </div>                                
            </div>
            
            <?PHP if($msg == 1){ ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Saved!</strong> New Staff has been succesfull added.
            </div>
            <?PHP } ?>  
            
                  
            <form class="form-horizontal" method="post" action="<?=base_url();?>staff_c/tambah_data">

                <div class="form-group">
                    <label class="col-md-3 control-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" name="first_name" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-9">
                        <input type="text" name="last_name" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Mobile Number</label>
                    <div class="col-md-9">
                        <input type="text" name="mobile_number" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Select Service</label>
                    <div class="col-md-9">
                        <select class="bs-select" name="service[]" multiple>
                            <?php foreach ($dt_service as $key => $value) {
                                # code...
                             ?>
                            <option value="<?=$value->ID;?>"><?=$value->NAMA;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Enable Login Access ?</label>
                    <div class="col-md-9">
                        <label class="switch">
                            <input type="checkbox" name="login_akses" value="1" >
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Enable Appointment ?</label>
                    <div class="col-md-9">
                        <label class="switch">
                            <input type="checkbox" name="appointment" value="1" >
                        </label>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-md-3 control-label">&nbsp;</label>
                    <div class="col-md-9">
                       
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">&nbsp;</label>
                    <div class="col-md-9">
                       
                    </div>
                </div>
 
        </div>
    </div>

    <div class="col-md-6">
            <div class="app-heading app-heading-small app-heading-condensed">
                <div class="title">
                   
                </div>                                    
            </div>
        
        <div class="block">              
            <div class="app-heading app-heading-small">                                
                <div class="title">
                    <h2>Work Schedule</h2>
                    <p>&nbsp;</p>
                </div>                                
            </div>
            
            <table class="table">
                <tr>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                </tr>
                <tr>
                    <td><div class="app-checkbox"> 
                        <label><input type="checkbox" name="senin" value="1" checked=""> Monday<span></span></label> 
                    </div></td>
                    <td><input type="text" name="senin_awal" class="form-control bs-timepicker"></td>
                    <td><input type="text" name="senin_akhir" class="form-control bs-timepicker"></td>
                </tr>
                <tr>
                    <td><div class="app-checkbox"> 
                        <label><input type="checkbox" name="selasa" value="1" checked=""> Tuesday<span></span></label> 
                    </div></td>
                    <td><input type="text" name="selasa_awal" class="form-control bs-timepicker"></td>
                    <td><input type="text" name="selasa_akhir" class="form-control bs-timepicker"></td>
                </tr>
                <tr>
                    <td><div class="app-checkbox"> 
                        <label><input type="checkbox" name="rabu" value="1" checked=""> Wednesday<span></span></label> 
                    </div></td>
                    <td><input type="text" name="rabu_awal" class="form-control bs-timepicker"></td>
                    <td><input type="text" name="rabu_akhir" class="form-control bs-timepicker"></td>
                </tr>
                <tr>
                    <td><div class="app-checkbox"> 
                        <label><input type="checkbox" name="kamis" value="1" checked=""> Thursday<span></span></label> 
                    </div></td>
                    <td><input type="text" name="kamis_awal" class="form-control bs-timepicker"></td>
                    <td><input type="text" name="kamis_akhir" class="form-control bs-timepicker"></td>
                </tr>
                <tr>
                    <td><div class="app-checkbox"> 
                        <label><input type="checkbox" name="jumat" value="1" checked=""> Friday<span></span></label> 
                    </div></td>
                    <td><input type="text" name="jumat_awal" class="form-control bs-timepicker"></td>
                    <td><input type="text" name="jumat_akhir" class="form-control bs-timepicker"></td>
                </tr>
                <tr>
                    <td><div class="app-checkbox"> 
                        <label><input type="checkbox" name="sabtu" value="1" checked=""> Saturday<span></span></label> 
                    </div></td>
                    <td><input type="text" name="sabtu_awal" class="form-control bs-timepicker"></td>
                    <td><input type="text" name="sabtu_akhir" class="form-control bs-timepicker"></td>
                </tr>
                <tr>
                    <td><div class="app-checkbox"> 
                        <label><input type="checkbox" name="minggu" value="1" checked=""> Sunday<span></span></label> 
                    </div></td>
                    <td><input type="text" name="minggu_awal" class="form-control bs-timepicker"></td>
                    <td><input type="text" name="minggu_akhir" class="form-control bs-timepicker"></td>
                </tr>
            </table>
            
            
            
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-9">
               <button class="btn btn-success pull-right" name="simpan" type="submit">SAVE</button>
            </div>
        </div>
    </div>
    </form>
</div>
</div>       
<script type="text/javascript">
    function acc_format(n, currency) {
    return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
}
</script>