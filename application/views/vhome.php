 
   <head>
       <title>Dashboard</title>
   </head>
   <style>
       .d
       {
        color: white;
        font-size:12px; 
       }
       .dd
       {
        color: white;
        font-size:17px; 
       }
   </style>
   <body>
   

          
            <div class="row">
               <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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

        
 
   <div class="col-lg-3 col-md-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x dashboard-div-icon"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="">Jumlah Pemasok</div>
                                    <div class="huge dd">
                                        <?php echo $obtCount ?> 
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
  </div>
</div>
                        <a href="<?php echo base_url('Pemasok/index')?>">
                            <div class="">
                                <span class="pull-left dd">Lihat Detail</span>
                                <span class="pull-right dd"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
        <div class="col-lg-3 col-md-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-archive fa-5x dashboard-div-icon"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                     <div class="d">Jumlah Jenis Barang</div>
                                    <div class="huge dd">
                                        <?php echo $psnCount ?> 
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
  </div>
                           
</div>
                        <a href="<?php echo base_url('jenis_barang/index')?>">
                            <div class="">
                                <span class="pull-left dd">Lihat Detail</span>
                                <span class="pull-right dd"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

          <div class="col-lg-3 col-md-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-briefcase fa-5x dashboard-div-icon"></i>
                                </div>
                                <div class="col-xs-9 text-right ">
                                     <div class="d">Jumlah Master Barang</div>
                                    <div class="huge dd">
                                        <?php echo $akunCount ?> 
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  </div>
                           
</div>
                        <a href="<?php echo base_url('master_barang/index')?>">
                            <div class="">
                                <span class="pull-left dd">Lihat Detail</span>
                                <span class="pull-right dd"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                  
                </div>
                 
                 <div class="col-lg-3 col-md-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x dashboard-div-icon"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="">Jumlah Transaksi</div>
                                    <div class="huge dd">
                                        <?php echo $trCount ?> 
                                    </div>
                                    
                                </div>
                                
                            </div>       
                        </div>
<div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
  </div>
                           
</div>  
                        <a href="<?php echo base_url('transaksi/index')?>">
                            <div class=" ">
                                <span class="pull-left dd">Lihat Detail</span>
                                <span class="pull-right dd"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                
                </div>


            
            </body>
     

<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/highcharts.js"></script>

<br><br><br><br><br><br><br>

