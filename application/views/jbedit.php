<?php echo form_open('jenis_barang/edit/'.$jenis_barang['id'],array("class"=>"form-horizontal")); ?>
<div class="table-heading">
					<h2>Edit jenisbarang</h2>
				</div>
	
	<div class="form-group">
		<label for="beban" class="col-md-3 control-label">jenis barang</label>
		<div class="col-md-8">
			<input type="text" name="jenis_barang" value="<?php echo ($this->input->post('jenis_barang') ? $this->input->post('beban') : $jenis_barang['jenis_barang']); ?>" class="form-control" id="jenis_barang" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-success ">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
