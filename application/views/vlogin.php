<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>login</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?=base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>inulyaqin10@gmail.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
   
    <div class="navbar navbar-inverse set-radius-zero">
      
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               

            </div>
   
            <div class="left-div">
              <a href="<?=base_url('login/register');?>">
                <div id="logo" class="fa fa-user-plus login-icon" >
                        </div>
            </a>
        </div>

            </div>
        </div>
    <!-- LOGO HEADER END-->
    <section class="login_content">
            <form method="post" action="<?php echo base_url() ?>login/dologin">
             
              <?php
                $announce = $this->session->flashdata('announce');
                if(!empty($announce)){
                  echo '
                    <div class="alert alert-danger">
                    '.$announce.' 
                    </div>
                  ';
                }
              ?>
    <!-- MENU SECTION END--><br>
   
        <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="page-head-line">Please Login To Enter </h4>

                        </div>

                    </div>
            <div class="row">
                <div class="col-md-6">
                    <br />
                     <label>username </label>
                        <input type="text" class="form-control" name="username" placeholder=" Masukkan Username"/>
                        <label>Password  </label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" />
                        <input type="hidden" class="form-control" value="active" name="status" placeholder="Password" />
                        <hr />
                        
              <div>
                <i class=""></i>
                <input  type="submit" name="login" class="btn btn-success submit pull-right" value="Log Me In" />
              </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info">
                       This is a free bootstrap admin template with basic pages you need to craft your project. 
                        Use this template for free to use for personal and commercial use.
                        <br />
                         <strong> Some of its features are given below :</strong>
                        <ul>
                            <li>
                                Responsive Design Framework Used
                            </li>
                            <li>
                                Easy to use and customize
                            </li>
                            <li>
                                Font awesome icons included
                            </li>
                            <li>
                                Clean and light code used.
                            </li>
                        </ul>
                       
                    </div>
                    
                </div>
                </div>

            
    </div>

 
                    <div class="text-center alert alert-warning">
                        <a <a href="http://www.facebook.com/" target="_blank" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a <a href="http://www.gmail.com/" target="_blank" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus" ></i>&nbsp; Google</a>
                        <a <a href="http://www.twitter.com/" target="_blank" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a <a href="http://www.linkedin.com/" target="_blank" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>
        



    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 PetShop | By : <a href="http://www.designbootstrap.com/" target="_blank">aku</a>
                </div>

            </div>
        </div>
    </footer>
  </form>
</section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?=base_url();?>assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?=base_url();?>assets/js/bootstrap.js"></script>
</body>
</html>
