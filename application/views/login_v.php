<!DOCTYPE html>
<html lang="en">
    <head>                        
        <title>Boooya - Login With Background</title>            
        
        <!-- META SECTION -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" href="<?=base_url();?>assets/css/styles.css">
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>        
        
        <!-- APP WRAPPER -->
        <div class="app app-fh">

            <!-- START APP CONTAINER -->
            <div class="app-container" style="background: url(<?=base_url();?>assets/img/login.jpg) center center no-repeat fixed;">
                
                <div class="app-login-box">                                        
                    <div class="app-login-box-user"><img src="<?=base_url();?>assets/img/user/no-image.png"></div>
                    <div class="app-login-box-title">
                        <div class="title">Already a member?</div>
                        <div class="subtitle">Sign in to your account</div>                        
                    </div>
                    <div class="app-login-box-container">
                        <form action="<?=base_url();?>login_c" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">

                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="app-checkbox">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <button class="btn btn-success btn-block">Sign In</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                    
                    <div class="app-login-box-footer">
                        &copy; Boooya 2016. All rights reserved.
                    </div>
                </div>
                                
            </div>
            <!-- END APP CONTAINER -->
           
        </div>        
        <!-- END APP WRAPPER -->                
        
        <!-- IMPORTANT SCRIPTS -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/moment/moment.min.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END IMPORTANT SCRIPTS -->
        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="<?=base_url();?>assets/js/app.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/app_plugins.js"></script>
        <script type="text/javascript" src="<?=base_url();?>assets/js/app_demo.js"></script>
        <!-- END APP SCRIPTS -->
    </body>
</html>