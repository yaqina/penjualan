﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>sembako</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?=base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
    <link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/js/jquery-ui/jquery-ui.css">
    <script type="text/javascript" src="<?=base_url();?>assets/js/js/jquery.js"></script>
    
    
    <script type="text/javascript" src="<?=base_url();?>assets/js/js/jquery-ui/jquery-ui.js"></script>  
    <!-- CUSTOM STYLE  -->
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    .s
    {
        color:white;

    }

</style>
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
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="<?=base_url();?>assets/img/gallery_06.png" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $this->session->userdata('username');?></h4>
                                        <h5><?php echo $this->session->userdata('role');?></h5>

                                    </div>
                                </div>
                                <br>
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; 
                                <a href="<?=base_url();?>login/logout" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-s12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            
                            <li><a class="menu-top-active" href="<?=base_url('home/index');?>">Dashboard</a></li>
                     
                            <li><a class="menu-top-active" href="<?=base_url('pemasok/index');?>">pemasok</a></li>
                            <li><a class="menu-top-active" href="<?=base_url('jenis_barang/index');?>">jenis barang</a></li>
                            
                            <li><a class="menu-top-active" href="<?=base_url('master_barang/index');?>">master barang</a></li>
                            <li><a class="menu-top-active" href="<?=base_url('transaksi/index');?>">penjualan</a></li>
                       
                            
                            

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MENU SECTION END-->
   
        <div class="container">
            <br>
              <br>  
            
                    <?php $this->load->view($main_view); ?>
              
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
                    &copy; 2017 somsoft | By : <a href="http://www.designbootstrap.com/" target="_blank">aku</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?=base_url();?>assets/js/jquery-1.11.1.js"></script>
   <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?=base_url();?>assets/js/bootstrap.js"></script>
   
    
</body>
</html>