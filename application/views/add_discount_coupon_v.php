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
                <strong>Saved!</strong> New Discount Coupon has been saved.
            </div>
            <?PHP } ?>  
            
                  
            <form class="form-horizontal" method="post" action="<?=base_url();?>add_discount_coupon_c">

                <div class="form-group">
                    <label class="col-md-2 control-label">Name Coupon</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Kode Coupon</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="text" name="kode_kupon" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Minimum Current Bill Value</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="text" name="min_bill" class="form-control" onkeyup="FormatCurrency(this);">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Coupon for Next Purchase</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="text" name="coupon_next" class="form-control" onkeyup="FormatCurrency(this);">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Coupon Validity</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="text" name="coupon_valid" class="form-control">
                            <span class="input-group-addon">Days</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Terms & Conditions (T&C)</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="terms_condition" rows="5" ></textarea>
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