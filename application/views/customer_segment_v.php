<div class="block">
    <div class="row">
        <div class="col-md-3">
            <div class="app-widget-tile app-widget-tile-info">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon icon-lg">
                            <span class="icon-users"></span>
                        </div>
                    </div>
                    <div class="col-sm-8">                                                    
                        <div class="line">
                            <div class="title" style="font-size: 16px;">Existing Customers</div>         
                            <div class="title pull-right"></div>
                        </div>                                        
                        <div class="intval text-left" style="font-size: 40px;"><?=$cust_exs->hitung;?> People</div>                                        
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="app-widget-tile app-widget-tile-primary">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon icon-lg">
                            <span class="icon-users"></span>
                        </div>
                    </div>
                    <div class="col-sm-8">                                                    
                        <div class="line">
                            <div class="title" style="font-size: 16px;">Active Customers</div>         
                            <div class="title pull-right"></div>
                        </div>                                        
                        <div class="intval text-left" style="font-size: 40px;"><?=$cust_act->hitung;?> People</div>                                        
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="app-widget-tile app-widget-tile-warning">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon icon-lg">
                            <span class="icon-users"></span>
                        </div>
                    </div>
                    <div class="col-sm-8">                                                    
                        <div class="line">
                            <div class="title" style="font-size: 16px;">Chun Prediction</div>         
                            <div class="title pull-right"></div>
                        </div>                                        
                        <div class="intval text-left" style="font-size: 40px;"><?=$cust_chun->hitung;?> People</div>                                        
                        
                    </div>
                </div>
            </div>
        </div>

         <div class="col-md-3">
            <div class="app-widget-tile app-widget-tile-danger">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon icon-lg">
                            <span class="icon-users"></span>
                        </div>
                    </div>
                    <div class="col-sm-8">                                                    
                        <div class="line">
                            <div class="title" style="font-size: 16px;">Defected Customers</div>         
                            <div class="title pull-right"></div>
                        </div>                                        
                        <div class="intval text-left" style="font-size: 40px;"><?=$cust_deac->hitung;?> People</div>                                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="app-heading app-heading-small app-heading-condensed">
                <div class="title">
                   
                </div>                                    
            </div>
            
        <div class="block-content">

            <div style="float: left;">
                <h3>Data Wallet Customer</h3>
            
            </div>
            <div style="float: right;"><a href="<?=base_url();?>add_customer_c"><button class="btn btn-info btn-icon-fixed"><span class="icon-tag"></span> Add Customer </button></a></div>
            <br>
            <br>
            <br>
            <br>
            <table class="table table-striped table-bordered datatable-extended">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 20%;">Name</th>
                        <th style="width: 10%;">Purchase Value</th>
                        <th style="width: 10%;">Visit Count</th>
                        <th style="width: 10%;">Last Visited Date</th>
                        <th style="width: 10%;">Last Visited Day</th>
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
                        <td><?=$value->PURCHASE_TOTAL;?></td>
                        <td><?=$value->VISIT_COUNT;?></td>
                        <td><?=$value->LAST_VISITED;?></td>
                        <?php 
                            $tanggal_skrg = new DateTime();
                            $last = new DateTime($value->LAST_VISITED);

                            $beda = $tanggal_skrg->diff($last)->format("%d");

                        ?>
                        <td><?php echo $beda;?> (Days)</td>
                        <td><button type="button" class="btn btn-info btn-icon"><span class="icon-eye"></span></button> <button type="button" class="btn btn-warning btn-icon"><span class="icon-trash"></span></button> <button type="button" class="btn btn-success btn-icon"><span class="icon-magic-wand"></span></button></td>
                    </tr>  
                    <?php } ?>                               
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>       