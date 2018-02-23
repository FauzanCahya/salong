<script>
    function showDiv(val) {
        $('.display').hide();
        if(val == "GENDER"){
            $('#gender').show();
        } else if(val == "LAST VISIT"){
            $('#last_visit').show();
        }
    }

</script>
<div class="block">
    <div class="row">
        <div class="col-md-12">
            <div class="app-heading app-heading-small app-heading-condensed">
                <div class="title">
                   
                </div>                                    
            </div>
        
        <div class="block">              
            <div class="app-heading app-heading-small">                                
                <div class="title">
                    <h2>Add Reminder</h2>
                    <p>Insert your reminder</p>
                </div>                                
            </div>
            
            <?PHP if($msg == 1){ ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Saved!</strong> New Reminder has been saved.
            </div>
            <?PHP } ?>  
            
                  
            <form class="form-horizontal" method="post" action="<?=base_url();?>add_reminder_c">

                <div class="form-group">
                    <label class="col-md-2 control-label">Type</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <select name="type_greeting" class="form-control" onchange="showDiv(this.value);">
                                <option value="NONE">NONE</option>
                                <option value="GENDER">BY GENDER</option>
                                <option value="LAST VISIT">BY LAST VISIT</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="display form-group" style="display: none;" id="gender">
                    <label class="col-md-2 control-label">Gender</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <select name="gender" class="form-control">
                                <option value="NONE">NONE</option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="display form-group" style="display: none;" id="last_visit">
                    <label class="col-md-2 control-label">Last Visit</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <select name="last_visit" class="form-control">
                                <option value="NONE">NONE</option>
                                <option value="7">A Week</option>
                                <option value="14">Two Week</option>
                                <option value="30">A Month</option>
                                <option value="more">More than a month</option>
                                <option value="all">All Customer</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Nama</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Messages</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="messages" rows="5" ></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                       <button class="btn btn-success txt-right" name="simpan" type="submit">SAVE</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
</div>       
<script type="text/javascript">
    function acc_format(n, currency) {
    return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
}
</script>