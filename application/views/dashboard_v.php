<!DOCTYPE html>
<html lang="en">
    <head>                        
        <title><?=$title;?></title>            
        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="<?=base_url();?>assets/salon-512.png" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" href="<?=base_url();?>assets/css/styles.css">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>        
        
        <!-- APP WRAPPER -->
        <div class="app">           

            <!-- START APP CONTAINER -->
            <div class="app-container">
                <!-- START SIDEBAR -->
                <div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
                    <a href="index.html" class="app-navigation-logo">
                        Boooya - Revolution Admin Template
                        <button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel"><span class="icon-alarm"></span> <span class="app-navigation-logo-button-alert">7</span></button>
                    </a>
                    <nav>
                        <ul>
                            <li class="title">MENU UTAMA</li>
                            <li><a href="<?=base_url();?>dashboard_c"><span class="icon-home text-bloody-100"></span> Dashboard</a></li>
                            <li><a href="<?=base_url();?>quick_sale_c"><span class="icon-cart text-orange-100"></span> Quick Sale </a></li>                
                            <li><a href="<?=base_url();?>appointment_c"><span class="icon-pushpin text-yellow-100"></span> Appointment</a></li>
                                          
                            <li>
                                <a href="#"><span class="icon-users text-lime-200"></span>Customers</a>
                                <ul>
                                    <li><a href="<?=base_url();?>customer_segment_c"><span class="nav-icon-hexa">Cs</span> Customer Segment</a></li>
                                    <li><a href="<?=base_url();?>service_segment_c"><span class="nav-icon-hexa">Ss</span> Service Segment</a></li>
                                    <li><a href="<?=base_url();?>upcoming_wishes_c"><span class="nav-icon-hexa">Uw</span> Upcoming Wishes</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?=base_url();?>campaign_c"><span class="icon-gift text-blue-200"></span>Campaign</a>
                                <ul>
                                    <li><a href="<?=base_url();?>promotional_offer_c"><span class="nav-icon-hexa">Po</span> Promotional Offer</a></li>
                                    <li><a href="<?=base_url();?>discount_coupon_c"><span class="nav-icon-hexa">Dc</span> Discount Coupon</a></li>
                                    <li><a href="<?=base_url();?>greeting_c"><span class="nav-icon-hexa">Gr</span> Greeting</a></li>
                                    <li><a href="<?=base_url();?>reminder_c"><span class="nav-icon-hexa">Rm</span> Reminder</a></li>
                                    <li><a href="<?=base_url();?>reward_point_c"><span class="nav-icon-hexa">Rw</span> Reward Point</a></li>
                                </ul>
                            </li>
                          
                            <li><a href="<?=base_url();?>appointment_c"><span class="icon-license text-pink-100"></span> Feedback</a></li>
                            
                            <li>
                                <a href=""><span class="icon-earth text-sea-100"></span>Online Booking</a>
                                <ul>
                                    <li><a href="<?=base_url();?>booking_setting_c"><span class="nav-icon-hexa">Bs</span>Booking Setting</a></li>
                                    <li><a href="<?=base_url();?>data_booking_c"><span class="nav-icon-hexa">Db</span> Data Booking</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?=base_url();?>campaign_c"><span class="icon-book text-orange-200"></span>Wallet</a>
                                <ul>
                                    <li><a href="<?=base_url();?>user_wallet_c"><span class="nav-icon-hexa">Uw</span> User Wallet </a></li>
                                    <li><a href="<?=base_url();?>user_wallet_c/detail_wallet"><span class="nav-icon-hexa">Wt</span> Wallet Transaction </a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?=base_url();?>campaign_c"><span class="icon-chart-bars text-green-200"></span>Reports</a>
                                <ul>
                                    <li><a href="<?=base_url();?>booking_setting_c"><span class="nav-icon-hexa">As</span>Appointment & Sales</a></li>
                                    <li><a href="<?=base_url();?>facebook_c"><span class="nav-icon-hexa">Ms</span>Membership</a></li>
                                    <li><a href="<?=base_url();?>campaign_performance_c"><span class="nav-icon-hexa">Cp</span>Campaign Performance</a></li>
                                    <li><a href="<?=base_url();?>feedback_c"><span class="nav-icon-hexa">Fb</span>Feedback</a></li>
                                    <li><a href="<?=base_url();?>wa_usage_c"><span class="nav-icon-hexa">Wa</span>wa_usage</a></li>
                                    <li><a href="<?=base_url();?>reward_point_c"><span class="nav-icon-hexa">Rp</span>Reward Point</a></li>
                                    <li><a href="<?=base_url();?>prepaid_balance_c"><span class="nav-icon-hexa">Pb</span>Prepaid Balance</a></li>
                                    <li><a href="<?=base_url();?>expense_c"><span class="nav-icon-hexa">Ex</span>Expense</a></li>
                                    <li><a href="<?=base_url();?>gift_voucher_c"><span class="nav-icon-hexa">Gv</span>Gift Voucher</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?=base_url();?>campaign_c"><span class="icon-cog text-navyblue-200"></span>Setting</a>
                                <ul>
                                    <li>
                                        <a href="<?=base_url();?>general_setting_c"><span class="nav-icon-hexa">Gs</span>General Setting</a>
                                            <ul>
                                                <li><a href="<?=base_url();?>business_setting_c"><span class="nav-icon-hexa">Bs</span>Business Setting</a></li>
                                                <li><a href="<?=base_url();?>calendar_setting_c"><span class="nav-icon-hexa">Cs</span>Calendar Setting</a></li>
                                                <li><a href="<?=base_url();?>point_of_sale_c"><span class="nav-icon-hexa">Pos</span>Point Of Sale</a></li>
                                                <li><a href="<?=base_url();?>notification_c"><span class="nav-icon-hexa">Nf</span>Notification</a></li>
                                                <li><a href="<?=base_url();?>service_c"><span class="nav-icon-hexa">Sc</span>Service</a></li>
                                                <li><a href="<?=base_url();?>staff_c"><span class="nav-icon-hexa">St</span>Staff</a></li>
                                                <li><a href="<?=base_url();?>resource_c"><span class="nav-icon-hexa">Rs</span>Resource</a></li>
                                                <li><a href="<?=base_url();?>customer_setting_c"><span class="nav-icon-hexa">Cs</span>Customer Setting</a></li>
                                                <li><a href="<?=base_url();?>expense_set_c"><span class="nav-icon-hexa">Ex</span>Expense</a></li>
                                            </ul>

                                    </li>
                                    <li>
                                        <a href="<?=base_url();?>sales_setting_c"><span class="nav-icon-hexa">Ss</span> Sales Setting</a>
                                            <ul>
                                                <li><a href="<?=base_url();?>product_setting_c"><span class="nav-icon-hexa">Nf</span>Product</a></li>
                                                <li><a href="<?=base_url();?>prepaid_setting_c"><span class="nav-icon-hexa">Sc</span>Prepaid</a></li>
                                                <li><a href="<?=base_url();?>package_setting_c"><span class="nav-icon-hexa">St</span>Package</a></li>
                                                <li><a href="<?=base_url();?>membership_setting_c"><span class="nav-icon-hexa">Rs</span>Membership</a></li>
                                                <li><a href="<?=base_url();?>gift_voucher_setting_c"><span class="nav-icon-hexa">Cs</span>Gift Voucher</a></li>
                                            </ul>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- END SIDEBAR -->
                
                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <div class="app-header">
                        <ul class="app-header-buttons">
                            <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                            <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                        </ul>
                        <form class="app-header-search" action="" method="post">        
                            <input type="text" name="keyword" placeholder="Search">
                        </form>    
                    
                        <ul class="app-header-buttons pull-right">
                            <li>
                                <div class="contact contact-rounded contact-bordered contact-lg contact-ps-controls">
                                    <img src="<?=base_url();?>assets/assets/images/users/user_1.jpg" alt="John Doe">
                                    <div class="contact-container">
                                        <a href="#">John Doe</a>
                                        <span>Administrator</span>
                                    </div>
                                    <div class="contact-controls">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-default btn-icon" data-toggle="dropdown"><span class="icon-cog"></span></button>                        
                                            <ul class="dropdown-menu dropdown-left">
                                                <li><a href="#"><span class="icon-cog"></span> Settings</a></li> 
                                                <li><a href="#"><span class="icon-envelope"></span> Messages <span class="label label-danger pull-right">+24</span></a></li>
                                                <li><a href="#"><span class="icon-users"></span> Contacts <span class="label label-default pull-right">76</span></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><span class="icon-exit"></span> Log Out</a></li> 
                                            </ul>
                                        </div>                    
                                    </div>
                                </div>
                            </li>        
                        </ul>
                    </div>
                    <!-- END APP HEADER  -->
                    
                    <!-- START PAGE HEADING -->
                    <div class="app-heading app-heading-bordered app-heading-page">
                        
                                  
                        <!--<div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                            <a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
                        </div>-->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">Application</a></li>                                                     
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADING -->
                    
                    <!-- START PAGE CONTAINER -->
                    <div class="container">
                                                
                      <?php 
                        if($page != ''){
                            $this->load->view($page);
                        }
                    ?>  
                            
                        
                    </div>
                    <!-- END PAGE CONTAINER -->
                    
                </div>
                <!-- END APP CONTENT -->
                                
            </div>
            <!-- END APP CONTAINER -->
                        
            <!-- START APP FOOTER -->
            
            <!-- END APP FOOTER -->

            <!-- START APP SIDEPANEL -->
            <div class="app-sidepanel scroll" data-overlay="show">                
                <div class="container">
                    
                    <div class="app-heading app-heading-condensed app-heading-small">
                        <div class="icon icon-lg">
                            <span class="icon-alarm"></span>
                        </div>
                        <div class="title">
                            <h2>Notifications</h2>              
                            <p><strong>7 new</strong>, latest: July 19, 2016 at 10:14:32.</p>
                        </div>                                
                    </div>        
            
                    <div class="listing margin-bottom-10">                                                                                
                        <div class="listing-item margin-bottom-10">
                            <strong>Product Delivered</strong> <span class="label label-success pull-right">delivered</span>
                            <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 19/07/2016 10:14:32 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Successful Payment</strong> <span class="label label-success pull-right">success</span>
                            <p class="margin-0 margin-top-5">Payment for order #SPW-955-17: <strong>$145.44</strong>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:55:12 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>New Order #SPW-955-17</strong> <span class="label label-warning pull-right">waiting</span>
                            <p class="margin-0 margin-top-5">Added new order, waiting for payment. <a href="#">Order details</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:51:55 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Money Back Request</strong> <span class="label label-primary pull-right">return</span>
                            <p class="margin-0 margin-top-5">#SPW-955-17 return requested. <a href="#">Request details</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 08:44:51 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>The critical amount of product</strong> <span class="label label-danger pull-right">important</span>
                            <p class="margin-0 margin-top-5">Product: <a href="#">Extra Awesome Product</a> (amount: <span class="text-danger">2</span>). <a href="#">Storehouse</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-cube margin-right-5"></span> 19/07/2016 08:30:00 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Product Delivery Start</strong> <span class="label label-warning pull-right">delivering</span>
                            <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Critical Server Load</strong> <span class="label label-danger pull-right">server</span>
                            <p class="margin-0 margin-top-5">Disk space: 248.1Gb/250Gb. <a href="#">Control panel</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                            </p>
                        </div>
                    </div>
                    <div class="row margin-bottom-30">
                        <div class="col-xs-6 col-xs-offset-3">
                            <button class="btn btn-default btn-block">All Notification</button>
                        </div>            
                    </div>
                    
                    <div class="app-heading app-heading-condensed app-heading-small margin-bottom-20">
                        <div class="icon icon-lg">
                            <span class="icon-cog"></span>
                        </div>
                        <div class="title">
                            <h2>Settings</h2>              
                            <p>Notification Settings</p>
                        </div>                                
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_1" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Delivery Information</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_2" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Product Amount Information</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_3" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Order Information</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_4" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Server Load</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_5" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>User Registrations</label>
                            </div>
                        </div>            
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_6" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Purchase Information</label>
                            </div>
                        </div>            
                    </div>
                    
                </div>
            </div>
            <!-- END APP SIDEPANEL -->
            
            <!-- APP OVERLAY -->
            <div class="app-overlay"></div>
            <!-- END APP OVERLAY -->
        </div>        
        <!-- END APP WRAPPER -->                
        
        <!-- IMPORTANT SCRIPTS -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END IMPORTANT SCRIPTS -->
        <!-- THIS PAGE SCRIPTS -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/select2/select2.full.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/bootstrap-daterange/daterangepicker.js"></script>

        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/datatables/dataTables.bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/rickshaw/rickshaw.min.js"></script>
        
        <!-- END THIS PAGE SCRIPTS -->
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/js-form.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/app.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/app_plugins.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/app_demo.js"></script>
        <!-- END APP SCRIPTS -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/app_demo_dashboard.js"></script>
    </body>
</html>