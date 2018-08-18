 <body>
  
    <div class="col-md-12">
                    <h4 class="page-head-line">Edit Transaksi</h4>

                </div>
            <?php
                $announce = $this->session->flashdata('announce');
                if(!empty($announce)){
                  echo '
                    <div class="alert alert-danger">
                    '.$announce.' 
                    </div>
                  ';
                }
               foreach($user as $u){ 
                ?>
           
	<form action="<?php echo base_url(). 'transaksi/update'; ?>"  method="post">
              
				
				
					<div class="form-group">		         
                    <label">Nama Barang</label>
                    
                    	<input type="hidden" name="id" value="<?php echo $u->id ?>">
                      <select   name="id_barang" class="form-control">
								<option>pilih</option>
							<?php foreach ($pemasok as $sw) { ?>
							
							<option value='<?php echo $sw->id; ?>'
								
									
									<?php
							if ($sw->id==$u->id_barang)
							{
								echo "selected";
							}
						?>>
						<?php echo $sw->nama_barang;?>
						<?php
							}
						?>


								</option>
							
				
						</select>
                   
               </div>
                           
				  <div class="form-group">
              <label >Jumlah</label>
	             
                    <input type='number' class="form-control" name='jumlah' value='<?php echo $u->jumlah;?>'>
             
           </div>
		<div class="form-group">
             <label >tanggal</label>
             

                    <input id="tgl" name='tanggal' value='<?php echo $u->tanggal;?>' class="form-control">
          </div>
                
                 </div>
   
             <div class="form-group" align="center">
             	
                                        <input type='submit' name='edit' value='Edit' class="btn btn-success btn-md">
                                        
				
                    </div>
        
      </form>
        <?php
            }
            ?>
        </table>
    </body>
    

    <script type="text/javascript">
    	$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});    

    </script>