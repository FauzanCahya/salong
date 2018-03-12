<div class="block">
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 10px;">
            <button class="btn btn-primary btn-icon-fixed pull-right" data-toggle="modal" data-target="#modal-primary"><span class="icon-pushpin"></span> Add Group</button>

        </div>
        
        <?php 
            foreach ($get_group as $key => $value) {

                $val = $this->model->get_group_count($value->ID);
            
        ?>
        <div class="col-md-12">
            <div class="panel panel-default" id="panel-toggle">
                <div class="panel-heading">
                    <h3 class="panel-title"><?=$value->NAMA_GROUP;?> (<?=$val->HITUNG;?>)</h3>
                    <div class="panel-elements panel-elements-cp pull-right">                                            
                        <button class="btn btn-success btn-icon-fixed btn-lg" data-toggle="modal" data-target="#modal-success" onclick="id_gr(<?=$value->ID;?>);"><span class="icon-pushpin"></span> Add Service</button>
                    </div>
                </div>
                <?php 

                    $get_det_group = $this->model->get_detail_service($value->ID);


                ?>                        
                <table class="table table-striped"> 
                    <thead> 
                        <tr>
                            <th style="width: 5%;">No</th> 
                            <th style="width: 30%;">Nama</th> 
                            <th style="width: 15%;">Duration</th> 
                            <th style="width: 25%;">Price</th>                                                
                            <th style="width: 25%;">Action</th>                                                
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php 
                            $i = 0;
                            foreach ($get_det_group as $key => $det) {
                             $i++;
                        ?>
                        <tr> 
                            <th><?=$i;?></th> 
                            <th><?=$det->NAMA;?></th> 
                            <td><?=$det->DURATION;?></td> 
                            <td><?=$det->FULL_PRICE;?></td>                                                 
                            <td><?=$det->FULL_PRICE;?></td>                                                 
                        </tr> 
                        <?php } ?>
                    </tbody> 
                </table>
            </div>
        </div>
        <?php } ?>     
    </div>
</div>       

<div class="modal fade" id="modal-primary" tabindex="-1" role="dialog" aria-labelledby="modal-primary-header">                        
    <div class="modal-dialog modal-primary" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

        <div class="modal-content">
            <div class="modal-header">                        
                <h4 class="modal-title" id="modal-primary-header">Input Group Service</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="<?=base_url();?>service_c">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Group Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
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

<div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="modal-primary-header">                        
    <div class="modal-dialog modal-success modal-lg" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="icon-cross"></span></button>

        <div class="modal-content">
            <div class="modal-header">                        
                <h4 class="modal-title" id="modal-primary-header">Add Service</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="<?=base_url();?>service_c">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Service Name</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" name="id_group" id="id_group">
                                <input type="text" name="service_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Duration</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" name="duration" class="form-control">
                                <span class="input-group-addon">Mins</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tax Applicable</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <select name="tax_app" class="form-control">
                                    <option value="Not Applicable">Not Applicable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Full Price</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="text" name="full_price" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Special Price</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input type="text" name="special_price" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Select Staff</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <select class="bs-select" name="staff" multiple>
                                    <?php
                                        foreach ($get_data_staff as $key => $value) {
                                         
                                    ?>
                                    <option value=""></option> 
                                    <?php } ?>                                      
                                </select>
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