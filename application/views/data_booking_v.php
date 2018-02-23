<div class="block">
    <div class="row">
        <div class="col-md-12">
            <div class="app-heading app-heading-small app-heading-condensed">
                <div class="title">
                   
                </div>                                    
            </div>
            
        <div class="block-content">

            <div style="float: left;">
                <h3>Data Booking</h3>
            
            </div>
            
            <br>
            <br>
            <br>
            <br>
            <table class="table table-striped table-bordered datatable-extended">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 20%;">Name</th>
                        <th style="width: 10%;">Date of Booking</th>
                        <th style="width: 10%;">Time</th>
                        <th style="width: 10%;">Type</th>
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
                        <td><?=$value->NAMA_CUSTOMER;?></td>
                        <td><?=$value->TANGGAL_BOOKING;?></td>
                        <td><?=$value->JAM_BOOKING;?></td>
                        <td><?=$value->TYPE;?></td>
                        <td><button type="button" class="btn btn-info btn-icon"><span class="icon-eye"></span></button> <button type="button" class="btn btn-warning btn-icon"><span class="icon-trash"></span></button> <button type="button" class="btn btn-success btn-icon"><span class="icon-magic-wand"></span></button></td>
                    </tr>  
                    <?php } ?>                               
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>       