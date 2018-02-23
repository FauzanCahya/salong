<div class="block">
    <div class="row">
        <div class="col-md-12">
            <div class="app-heading app-heading-small app-heading-condensed">
                <div class="title">
                   
                </div>                                    
            </div>
            
        <div class="block-content">

            <div style="float: left;">
                <h3>Reminder List</h3>
            
            </div>
            <div style="float: right;"><a href="<?=base_url();?>add_reminder_c"><button class="btn btn-info btn-icon-fixed"><span class="icon-tag"></span> Add Reminder </button></a></div>
            <br>
            <br>
            <br>
            <br>
            <table class="table table-striped table-bordered datatable-extended">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 15%;">Name</th>
                        <th style="width: 20%;">Type</th>
                        <th style="width: 20%;">By</th>
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
                        <td><?=$value->NAMA_REMINDER;?></td>
                        <td><?=$value->TYPE;?></td>
                        <?PHP if($value->INTERVAL_DATE == 'NONE'){ ?>
                        <td><?=$value->GENDER;?></td>
                        <?PHP }else{ ?>
                        <td><?=$value->INTERVAL_DATE;?> Days</td>
                        <?PHP } ?>
                        <td><button type="button" class="btn btn-info btn-icon"><span class="icon-eye"></span></button> <button type="button" class="btn btn-warning btn-icon"><span class="icon-trash"></span></button> <button type="button" class="btn btn-success btn-icon"><span class="icon-magic-wand"></span></button></td>
                    </tr>  
                    <?php } ?>                               
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>       