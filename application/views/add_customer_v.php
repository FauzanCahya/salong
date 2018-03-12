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
                    <h2>Add Customer</h2>
                    <p>Insert your new customer</p>
                </div>                                
            </div>
            
            <?PHP if($msg == 1){ ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Saved!</strong> New Customer has been succesfull added.
            </div>
            <?PHP } ?>  
            
                  
            <form class="form-horizontal" method="post" action="<?=base_url();?>add_customer_c">

                <div class="form-group">
                    <label class="col-md-2 control-label">Mobile Number</label>
                    <div class="col-md-5">
                        <input type="text" name="mobile_number" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Customer Name</label>
                    <div class="col-md-5">
                        <input type="text" name="cust_name" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Customer ID</label>
                    <div class="col-md-5">
                        <input type="text" name="cust_id" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Email ID</label>
                    <div class="col-md-5">
                        <input type="text" name="email_id" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">DOB</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control bs-datepicker" name="dob">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="locat">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Kota</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="kota">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Gender</label>
                    <div class="col-md-5">
                        <select name="gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Customer Note</label>
                    <div class="col-md-5">
                        <textarea class="form-control" name="cust_note" rows="5"></textarea>
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