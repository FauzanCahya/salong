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
                <strong>Saved!</strong> Top Up Wallet has been succesfull.
            </div>
            <?PHP } ?>  
            
                  
            <form class="form-horizontal" method="post" action="<?=base_url();?>top_up_wallet_c">

                <div class="form-group">
                    <label class="col-md-2 control-label">Customer</label>
                    <div class="col-md-5">
                        <select name="filter_customer" class="s2-select-search form-control">
                            <?php foreach ($dt_customer as $key => $value) {
                                # code...
                             ?>
                            <option value="<?=$value->ID;?>"><?=$value->NAMA;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Nominal</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="text" name="nominal" class="form-control" onkeyup="FormatCurrency(this);">
                            <span class="input-group-addon">.00</span>
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