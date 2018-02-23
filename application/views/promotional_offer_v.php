<div class="block">
    <div class="row">
        <div class="col-md-12">
            <div class="app-heading app-heading-small app-heading-condensed">
                <div class="title">
                   
                </div>                                    
            </div>
            
            <div>
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#tabs-10" data-toggle="tab" aria-expanded="true">Create Offer</a></li>
                    <li class=""><a href="#tabs-11" data-toggle="tab" aria-expanded="false">Recommended Campaign</a></li>
                    <li class=""><a href="#tabs-12" data-toggle="tab" aria-expanded="false">Campaign Sent</a></li>
                </ul>
                <div class="tab-content tab-content-bordered">
                    <div class="tab-pane active" id="tabs-10">
                        <div class="col-md-12">
                            <div class="alert alert-info alert-icon-block alert-dismissible" role="alert"> 
                                <div class="alert-icon">
                                    <span class="icon-alarm"></span> 
                                </div>
                                <strong>Info!</strong> Ketik & buat pesan Anda sendiri untuk mengirimkan penawaran promosi. Pesan Non Trackabe dikirim tanpa kode penawaran.
                            </div>
                            <br>
                            <br>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Offer Title</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="title" placeholder="Flat 50% Off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Offer Message</label>
                                    <div class="col-md-10">
                                        <textarea rows="9" class="form-control" name="message" placeholder="Type your message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Offer end date</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control bs-datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Filter Customer</label>
                                    <div class="col-md-10">
                                        <select name="filter_customer" class="s2-select-search form-control">
                                            <option value="All Customers">All Customers</option>
                                            <option value="Returning Customers">Returning Customers</option>
                                            <option value="Non-Returning Customers">Non-Returning Customers</option>
                                            <option value="Select By Gender">Select By Gender</option>
                                            <option value="Select By Visited Date Range">Select By Visited Date Range</option>
                                            <option value="Select By Service Group">Select By Service Group</option>
                                            <option value="Select By Service">Select By Service</option>
                                            <option value="Customers Segment">Customers Segment</option>
                                            <option value="New Customers ">New Customers </option>
                                            <option value="Membership">Membership</option>
                                            <option value="Non Membership">Non Membership</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Is Trackable ?</label>
                                    <div class="col-md-1">
                                        <input type="checkbox" class="form-control" style="text-align: left;">
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-10">
                                        <button class="btn btn-success pull-right" style="margin-left: 7px;"><span class="icon-launch"></span> Send Offer</button>
                                        <button type="button" class="btn btn-info pull-right" id="preview_message" onclick="pre_mes();">Preview Message</button>
                                    
                                        
                                    </div>
                                </div>
                                

                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-11">
                        <p>Dicunt vocent accusata ei pri, in solum ornatus constituam mei. Posse feugiat id est, pro mundi ridens nusquam ex. Duo oblique facilis detracto an, alii error saepe ad sit. Has decore sapientem deseruisse ad, eligendi pericula electram te mei, consul labores cu sit.</p>
                        <p>Mea id quas lucilius laboramus, ex per malis everti consectetuer, sumo aperiam deseruisse ea eum.</p>
                    </div>
                    <div class="tab-pane" id="tabs-12">
                        <div class="block block-condensed">
                            <!-- START HEADING -->
                            <div class="app-heading app-heading-small">
                                <div class="title">
                                    <h3>Campaign Sent</h3>
                                    
                                </div>
                            </div>
                            <!-- END HEADING -->
                            
                            <div class="block-content">
                                
                                <table class="table table-striped table-bordered datatable-extended">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title Offer</th>
                                            <th>Created</th>
                                            <th>Offer End Date</th>
                                            <th>Filter Customer</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td><button class="btn btn-info btn-icon-fixed"><span class="icon-eye"></span> VIEW</button> <button class="btn btn-danger btn-icon-fixed"><span class="icon-trash"></span> DELETE</button></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td><button class="btn btn-info btn-icon-fixed"><span class="icon-eye"></span> VIEW</button> <button class="btn btn-danger btn-icon-fixed"><span class="icon-trash"></span> DELETE</button></td>
                                        </tr>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td><button class="btn btn-info btn-icon-fixed"><span class="icon-eye"></span> VIEW</button> <button class="btn btn-danger btn-icon-fixed"><span class="icon-trash"></span> DELETE</button></td>
                                        </tr>
                                        
                                                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                
        </div>
    </div>
</div>