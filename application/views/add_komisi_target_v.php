<script>
    function ganti(val) {
        $('.coy').hide();
        if(val == "Percent"){
            $('#persen').show();
        } else if(val == "Value"){
            $('#valuee').show();
        }
    }

</script>
<input id="tr_utama_count" value="1" type="hidden"/>
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
                    <h2>Add Commission Profile</h2>
                    <p>By Target</p>
                </div>                                
            </div>
            
            <?PHP if($msg == 1){ ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Saved!</strong> New Profile has been succesfull added.
            </div>
            <?PHP } ?>  
            
                  
            <form class="form-horizontal" method="post" action="<?=base_url();?>staff_c/tambah_data_target">

                <div class="form-group">
                    <label class="col-md-2 control-label">Profile Name</label>
                    <div class="col-md-5">
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Chose Period</label>
                    <div class="col-md-5">
                        <select class="form-control" name="period">
                            <option value="Daily">Daily</option>
                            <option value="Monthly">Monthly</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Items</label>
                    <div class="col-md-5">
                        <select class="bs-select" name="item_list[]" multiple>
                            <option value="Service">Service</option>
                            <option value="Product">Product</option>
                            <option value="Package">Package</option>
                            <option value="Membership">Membership</option>
                            <option value="Prepaid">Prepaid</option>
                        </select>
                    </div>
                </div>

                <div class="app-heading app-heading-small">                                
                    <div class="title">
                        <h2>Commission Slab</h2>
                    </div>                                
                </div>

                <table class="stat-table table table-hover">
                    <thead>
                        <tr>
                            <th align="center" style="width: 25%;"> From </th>
                            <th align="center" style="width: 20%;"> To</th>
                            <th align="center" style="width: 20%;"> Commission Type </th>
                            <th align="center" style="width: 25%;"> Value </th>
                            <th align="center" style="width: 10%;">  </th>
                        </tr>                       
                    </thead>
                    <tbody id="tes">
                        <tr id="tr_1" class="tr_utama">
                            <td align="left" style="vertical-align:middle;"> 
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="text" name="from_komisi[]" class="form-control" onkeyup="FormatCurrency(this);">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="text" name="to_komisi[]" class="form-control" onkeyup="FormatCurrency(this);">
                                    <span class="input-group-addon">.00</span>
                                </div>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <select class="form-control" name="komisi_by[]" onchange="ganti(this.value)">
                                    <option value="Percent">By Percent</option>
                                    <option value="Value">By Value</option>
                                </select>
                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                <div class="coy input-group" style="display: none;" id="persen">
                                    <span class="input-group-addon">Rp</span>
                                    <input type="text" name="value_komisi[]" class="form-control" onkeyup="FormatCurrency(this);">
                                    <span class="input-group-addon">.00</span>
                                </div>

                                <div class="coy input-group" id="valuee">
                                    <input type="text" name="value_komisi[]" class="form-control" onkeyup="FormatCurrency(this);">
                                    <span class="input-group-addon">%</span>
                                </div>

                            </td>

                            <td align="center" style="vertical-align:middle;"> 
                                
                            </td>

                            
                        </tr>
                    </tbody>
                </table>
                <button style="margin-bottom: 15px;" onclick="tambah_data();" type="button" class="btn btn-info"><i class="icon-plus"></i> Tambah Baris Data </button>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-5">
               <button class="btn btn-success pull-right" name="simpan" type="submit">SAVE</button>
            </div>
        </div>
    </div>
    </form>
</div>
</div>       
<script type="text/javascript">

    function tambah_data() {
    var jml_tr = $('#tr_utama_count').val();
    var i = parseInt(jml_tr) + 1;

    

    $isi_1 = 
    '<tr id="tr_'+i+'" class="tr_utama">'+
    '                        <td align="left" style="vertical-align:middle;"> '+
    '                            <div class="input-group">'+
    '                                <span class="input-group-addon">Rp</span>'+
    '                                <input type="text" name="from_komisi[]" class="form-control" onkeyup="FormatCurrency(this);">'+
    '                                <span class="input-group-addon">.00</span>'+
    '                            </div>'+
    '                        </td>'+

    '                        <td align="center" style="vertical-align:middle;"> '+
    '                            <div class="input-group">'+
    '                                <span class="input-group-addon">Rp</span>'+
    '                                <input type="text" name="to_komisi[]" class="form-control" onkeyup="FormatCurrency(this);">'+
    '                                <span class="input-group-addon">.00</span>'+
    '                            </div>'+
    '                        </td>'+

    '                        <td align="center" style="vertical-align:middle;"> '+
    '                            <select class="form-control" name="komisi_by[]" onchange="ganti(this.value)">'+
    '                                <option value="Percent">By Percent</option>'+
    '                                <option value="Value">By Value</option>'+
    '                            </select>'+
    '                        </td>'+

    '                        <td align="center" style="vertical-align:middle;"> '+
    '                            <div class="input-group" style="display:none;">'+
    '                                <span class="input-group-addon">Rp</span>'+
    '                                <input type="text" name="value_komisi[]" class="form-control" onkeyup="FormatCurrency(this);">'+
    '                                <span class="input-group-addon">.00</span>'+
    '                            </div>'+

    '                            <div class="input-group">'+
    '                                <input type="text" name="value_komisi[]" class="form-control" onkeyup="FormatCurrency(this);">'+
    '                                <span class="input-group-addon">%</span>'+
    '                            </div>'+

    '                        </td>'+


        '<td class="center" style="background:#FFF; text-align:center;">'+
            '<button style="width: 100%;" onclick="hapus_row('+i+');" type="button" class="btn btn-danger"> Hapus </button>'+
        '</td>'+
    '</tr>';

    $('#tes').append($isi_1);

    $('#tr_'+i).find('.cek_select').attr('class', 'cek_select_'+i);

    $('#tr_utama_count').val(i);
    $(".cek_select_"+i).chosen();

}

function hapus_row (id) {
    $('#tr_'+id).remove();
}


    function acc_format(n, currency) {
    return currency + " " + n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
}
</script>