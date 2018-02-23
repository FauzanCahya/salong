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
                    <h2>Add Discount Coupon</h2>
                    <p>Insert your coupon</p>
                </div>                                
            </div>
            
            <?PHP if($msg == 1){ ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Saved!</strong> New Greeting has been saved.
            </div>
            <?PHP } ?>  
            
                  
            <form class="form-horizontal" method="post" action="<?=base_url();?>add_greeting_c">

                <div class="form-group">
                    <label class="col-md-2 control-label">Greeting Type</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <select name="type_greeting" class="form-control">
                                <option value="HAPPY">HAPPY</option>
                                <option value="ANNIVERSARY">ANNIVERSARY</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Message Name</label>
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
                    <label class="col-md-2 control-label">Greeting Date</label>
                    <div class="col-md-5">
                         <input type="text" name="greeting_date" class="form-control bs-datepicker">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Send This Messages Before</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="text" name="send_before" class="form-control">
                            <span class="input-group-addon">Days</span>
                        </div>
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