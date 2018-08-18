<head>
  <title>jenis barang</title>
 
 
 </head>
 <body>
 	
 	
 	<table width="100%">
 		<tr>
 			<div class="col-md-12">
                    <h4 class="page-head-line">Master Barang</h4>

                </div>
 		
			<button style="margin-bottom:50px" onclick="add_book()" class="btn btn-success col-md-2"><span class="glyphicon glyphicon-plus"></span>Entry</button>
		</tr>
</table>
<br>
 <table class="table table-stripped"  >
	<tr>
		<td>
					<table  class="table table-hover table-stripped" id="table_id" >
					<tr class="panel panel-info">
						<th>id</th>
						<th>nama pemasok</th>
						<th>jenis barang</th>
						<th>nama barang</th>
						<th>harga</th>
						<th>stok</th>
						
						<th>action</th>
					</tr>
					<?php

						$no=1;
						 foreach ($mm as $pem) {
						 	
						 
					?>
					<tr>
						<td ><?php echo $no++ ;?></td>
						<td ><?php echo $pem->nama;?></td>
						<td ><?php echo $pem->jenis_barang;?></td>
						<td ><?php echo $pem->nama_barang;?></td>
						<td >Rp.<?php echo number_format($pem->harga)?>,-</td>
						<td ><?php echo $pem->stok;?></td>
						
						<td>	
							<button class="btn btn-warning" onclick="edit_book(<?php echo $pem->id; ?>)" value=""><i class="glyphicon glyphicon-edit"></i></button>

				 			  <button class="btn btn-danger " onclick="validate(this)" value="<?php echo $pem->id; ?>">
                                       <span class="glyphicon glyphicon-trash"></span>
                             </button>
               
						</td>
					</tr>
					<?php
					  }
					?>
					</table>
	
		</td>
	</tr>
	</table>
		<!-- modal input -->
 <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Master Barang Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
<input type="hidden" value="" name="id"/>
			<div class="form-body">
				<div class="form-group">
				     <label class="control-label col-md-3">Nama Pemasok</label>
				         <div class="col-md-9">

											
							<select class="form-control" name="id_pemasok">
									<option>pilih</option>
								<?php foreach ($pemasok as $sw) { ?>
								
								<option value='<?php echo $sw->id; ?>'><?php echo $sw->nama;?></option>
								<?php } ?>
							</select>

					</div>
           		</div>

				<div class="form-group">
					<label class="control-label col-md-3">Jenis barang</label>
				    <div class="col-md-9">								
									<select class="form-control" name="id_jbarang">
										<option>pilih</option>
									<?php foreach ($jenis as $sw) { ?>
									
									<option value='<?php echo $sw->id; ?>'><?php echo $sw->jenis_barang;?></option>
									<?php } ?>
						
								</select>
					</div>
				</div>	


				<div class="form-group">
							 <label class="control-label col-md-3">Nama Barang</label>
				    <div class="col-md-9">

							<input name="nama_barang" type="text" class="form-control" placeholder="Masukkan Nama Barang" >
					</div>
				</div>	
						<div class="form-group">
              <label class="control-label col-md-3">Harga</label>
	              <div class="col-md-9">
	                <input name="harga" placeholder="Masukkan Harga" class="form-control" type="text">
	              </div>
     		</div>																			
						<div class="form-group">
              <label class="control-label col-md-3">Stok</label>
	              <div class="col-md-9">
	                <input name="stok" placeholder="Masukkan stok" class="form-control" type="text">
	              </div>
     		</div>					
			</div>																	
 </form>
          </div>
          <div class="modal-footer">
          
            <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
	
	
	<script type="text/javascript">

$(document).ready( function () {
      $('#table_id').DataTable();
  } );
    var save_method; //for save method string
    var table;


    function add_book()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add Master Barang'); // Set Title to Bootstrap modal title
    }

    function edit_book(id)
    {
    	
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url :"<?php echo site_url('index.php/master_barang/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
 
            $('[name="id"]').val(data.id);
            $('[name="id_pemasok"]').val(data.id_pemasok);
            $('[name="id_jbarang"]').val(data.id_jbarang);
 			$('[name="nama_barang"]').val(data.nama_barang);
 			$('[name="harga"]').val(data.harga);
 			$('[name="stok"]').val(data.stok);
 
 
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Master Barang'); // Set title to Bootstrap modal title
 
 		},
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
 
 
 
    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('master_barang/add')?>";

           // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               swal("Done!", "Success Adding Data", "success" );
              setTimeout(function(){
                                $('#modal_form').modal('hide');
                                location.reload();// for reload a page
                            },2000)
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                swal(" Error!","Error Adding Data",'error' );
            }
        });

      }
      else
      {
        url = "<?php echo site_url('master_barang/edit')?>";

         // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               swal("Done!", "Success Edit data", "success" );
              setTimeout(function(){
                                $('#modal_form').modal('hide');
                                location.reload();// for reload a page
                            },2000)
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                swal(" Error!","Error Edit Data",'error' );
            }
        });
         
      }
 
      
    }

function validate(a)
{
    var id= a.value;

    swal({
            title: "Are you sure?",
            text: "You want to delete this Menu Item!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Delete it!",
            closeOnConfirm: false }, 

           function()
                {
                 
                    
          $.ajax({
            url : '<?php echo base_url()?>master_barang/delete?id='+id,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               swal("Done!", "Menu Item has been Deleted", "success" );
              setTimeout(function(){
                              
                                location.reload();// for reload a page
                            },2000)
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                swal(" Error!","Menu Item Can't Delete ",'error' );
            }
        });

                }
    );
}
</script>
 </body>
</html>
