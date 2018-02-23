<div class="block">
    <div class="row">
        <div class="col-md-12">
            <div class="app-heading app-heading-small app-heading-condensed">
                <div class="title">
                   
                </div>                                    
            </div>
            
        <div class="block-content">

            <div style="float: left;">
                <h3>Greeting List</h3>
            
            </div>
            <div style="float: right;"><a href="<?=base_url();?>add_greeting_c"><button class="btn btn-info btn-icon-fixed"><span class="icon-tag"></span> Add Greeting </button></a></div>
            <br>
            <br>
            <br>
            <br>
            <table class="table table-striped table-bordered datatable-extended">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 15%;">Type</th>
                        <th style="width: 20%;">Name</th>
                        <th style="width: 20%;">Send Before (Days)</th>
                        <th style="width: 20%;">Greeting Date</th>
                        <th style="width: 20%;">Actions</th>
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
                        <td><?=$value->TYPE_GREETING;?></td>
                        <td><?=$value->NAMA;?></td>
                        <td><?=$value->INTERVAL_DATE;?></td>
                        <td><?=$value->DATE_GREETING;?></td>
                        <td><button type="button" class="btn btn-info btn-icon"><span class="icon-eye"></span></button> <button type="button" class="btn btn-warning btn-icon"><span class="icon-trash"></span></button> <button type="button" class="btn btn-success btn-icon"><span class="icon-magic-wand"></span></button></td>
                    </tr>  
                    <?php } ?>                               
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>       