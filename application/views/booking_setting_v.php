
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
                    <h2>Booking Setting</h2>
                    <p>Setting your preference booking</p>
                </div>                                
            </div>
            
            <?PHP if($msg == 1){ ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Saved!</strong> Booking Setting has been saved.
            </div>
            <?PHP } ?>  
            
                  
            <form class="form-horizontal" method="post" action="<?=base_url();?>booking_setting_c">

                <div class="form-group">
                    <label class="col-md-2 control-label">Booking can be done before</label>
                    <div class="col-md-10">
                        <select name="jam" class="s2-select-search form-control">
                            <option value="<?=$dt->BE_DONE;?>"><?=$dt->BE_DONE;?> Hours</option>
                            <option value="1">1 Hours</option>
                            <option value="2">2 Hours</option>
                            <option value="3">3 Hours</option>
                            <option value="4">4 Hours</option>
                            <option value="5">5 Hours</option>
                            <option value="6">6 Hours</option>
                            <option value="7">7 Hours</option>
                            <option value="8">8 Hours</option>
                            <option value="9">9 Hours</option>
                            <option value="10">10 Hours</option>
                            <option value="11">11 Hours</option>
                            <option value="12">12 Hours</option>
                            <option value="13">13 Hours</option>
                            <option value="14">14 Hours</option>
                            <option value="15">15 Hours</option>
                            <option value="16">16 Hours</option>
                            <option value="17">17 Hours</option>
                            <option value="18">18 Hours</option>
                            <option value="19">19 Hours</option>
                            <option value="20">20 Hours</option>
                            <option value="21">21 Hours</option>
                            <option value="22">22 Hours</option>
                            <option value="23">23 Hours</option>
                            <option value="24">24 Hours</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-2 control-label">Booking allowed till (Days)</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <input type="text" name="till_days" value="<?=$dt->TILL_DAYS;?>" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">To Display Custom Policy Info</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="display_custom" rows="5" ><?=$dt->DISPLAY_CUSTOM;?></textarea>
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
