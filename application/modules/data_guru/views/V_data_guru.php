	  <div class="col-sm-12">
	  	<div class="panel">
	  		<div class="panel-heading">
	  			<center>
	  				<h3 class="panel-title">DATA Pembayaran Wi-Fi</h3>
	  			</center>
	  		</div>
	  		<!-- <center><button data-target="#tambah" data-toggle="modal" class="btn btn-success"><span class="fa 	fa-plus"></span>
	  				</button></center> -->


	  		<!--Bordered Table-->
	  		<!--===================================================-->
	  		<div class="panel-body">
	  			<div class="table-responsive">
	  				<table class="table table-bordered" style="text-align: center;">
	  					<thead>
	  						<tr>
	  							<th class="text-center">NO</th>
	  							
	  							<th class="text-center">NAMA</th>
	  						<!-- 	<th class="text-center">ALAMAT</th>
	  							<th>JURUSAN</th> -->
	  							<th class="text-center">ACTION</th>
	  						</tr>
	  					</thead>
	  					<?php
							$no = 1;
							foreach ($tampil as $u) {
								$id = $u->id;
							?>
	  						<tr>
	  							<td><?php echo $no++; ?></td>
	  							
	  							<td><?php echo $u->nama ?></td>
	  							
	  							<td>
	  								<a data-toggle="modal" data-target="#edit<?php echo $u->id ?>" class="btn btn-warning btn-icon"><i class="demo-psi-pen-5 icon-lg">Edit</i></a>

	  								<a data-toggle="modal" data-target="#hapus<?php echo $u->id ?>" class=" btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg">Hapus</i></a>

	  							</td>
	  						</tr>
	  						<div class="modal fade" id="edit<?php echo $u->id ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
	  							<div class="modal-dialog">
	  								<div class="modal-content">

	  									<!--Modal header-->
	  									<div class="modal-header">
	  										<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
	  										<h4 class="modal-title">Edit</h4>
	  									</div>

	  									<?= form_open_multipart('data_guru/edit'); ?>
	  									<div class="modal-body">
	  										<div class="panel-body">
	  											<div class="form-group">
	  												<label class="col-sm-3 control-label" for="demo-hor-inputemail">NIS</label>
	  												<div class="col-sm-9">
	  													<input type="text" name="nis" id="demo-hor-inputemail" class="form-control" value="<?php echo $u->nis ?>">
	  													<input type="hidden" name="id" value="<?php echo $u->id; ?>">
	  												</div>
	  											</div>
	  											<div class="form-group">
	  												<label class="col-sm-3 control-label" for="demo-hor-inputpass">NAMA</label>
	  												<div class="col-sm-9">
	  													<input type="text" name="nama" id="demo-hor-inputpass" class="form-control" value="<?php echo $u->nama ?>">
	  												</div>
	  											</div>
	  											<div class="form-group">
	  												<label class="col-sm-3 control-label" for="demo-hor-inputpass">ALAMAT</label>
	  												<div class="col-sm-9">
	  													<input type="text" name="alamat" id="demo-hor-inputpass" class="form-control" value="<?php echo $u->alamat ?>">
	  												</div>
	  											</div>
	  											<div class="form-group">
	  												<label class="col-sm-3 control-label" for="demo-hor-inputpass">JURUSAN</label>
	  												<div class="col-sm-9">
	  													<input type="text" name="jurusan" id="demo-hor-inputpass" class="form-control" value="<?php echo $u->jurusan ?>">
	  												</div>
	  											</div>
	  											<div class="form-group">
	  											</div>
	  										</div>

	  									</div>
	  									<!--Modal footer-->
	  									<div class="modal-footer">
	  										<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	  										<button class="btn btn-primary">Submit</button>
	  									</div>
	  									<?= form_close(); ?>
	  								</div>
	  							</div>
	  						</div>

	  						<div class="modal fade" id="hapus<?php echo $u->id ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
	  							<div class="modal-dialog">
	  								<div class="modal-content">

	  									<!--Modal header-->
	  									<div class="modal-header">
	  										<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
	  										<h4 class="modal-title">Hapus</h4>
	  									</div>

	  									<!--Modal body-->
	  									<div class="modal-body">
	  										<p class="text-semibold text-main"></p>
	  										<p>Anda Yakin Ingin Meng Kick <b><?php echo $u->nama ?></b> ? </p>
	  										<br>



	  									</div>

	  									<!--Modal footer-->
	  									<div class="modal-footer">
	  										<button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
	  										<a class="btn btn-danger" href="<?php echo base_url('data_guru/hapus/' . $u->id) ?>">Kick Guru</a>

	  									</div>
	  								</div>
	  							</div>
	  						</div>



	  					<?php } ?>
	  				</table>
	  			</div>
	  		</div>
	  	</div>
	  </div>
	  <div class="modal fade" id="tambah" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
	  	<div class="modal-dialog">
	  		<div class="modal-content">

	  			<!--Modal header-->
	  			<div class="modal-header">
	  				<button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
	  				<h4 class="modal-title">Tambah Data</h4>
	  			</div>

	  			<!--Modal body-->
	  			<?= form_open_multipart('data_guru/tambah_data'); ?>
	  			<div class="modal-body">
	  				<div class="panel-body">
	  					<div class="form-group">
	  						<label class="col-sm-3 control-label" for="demo-hor-inputemail">NIS</label>
	  						<div class="col-sm-9">
	  							<input type="text" name="nis" id="demo-hor-inputemail" class="form-control">
	  						</div>
	  					</div>
	  					<div class="form-group">
	  						<label class="col-sm-3 control-label" for="demo-hor-inputpass">NAMA</label>
	  						<div class="col-sm-9">
	  							<input type="text" name="nama" id="demo-hor-inputpass" class="form-control">
	  						</div>
	  					</div>
	  					<div class="form-group">
	  						<label class="col-sm-3 control-label" for="demo-hor-inputpass">ALAMAT</label>
	  						<div class="col-sm-9">
	  							<input type="text" name="alamat" id="demo-hor-inputpass" class="form-control">
	  						</div>
	  					</div>
	  					<div class="form-group">
	  						<label class="col-sm-3 control-label" for="demo-hor-inputpass">JURUSAN</label>
	  						<div class="col-sm-9">
	  							<input type="text" name="jurusan" id="demo-hor-inputpass" class="form-control">
	  						</div>
	  					</div>
	  					<div class="form-group">
	  					</div>
	  				</div>

	  			</div>
	  			<!--Modal footer-->
	  			<div class="modal-footer">
	  				<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	  				<button class="btn btn-primary">Submit</button>
	  			</div>
	  			<?= form_close(); ?>
	  		</div>
	  	</div>
	  </div>
	  <form action="something.php" method="post">

	  	<div>
	  		<label>Pilih provinsi :</label>
	  		<select id="province" name="province">
	  			<option value="DKI Jakarta">DKI Jakarta</option>
	  			<option value="Jawa Barat">Jawa Barat</option>
	  		</select>
	  	</div>

	  	<div>
	  		<label>Pilih kota :</label>
	  		<select id="city" name="city">
	  			<option value="">Pilih ..</option>
	  		</select>
	  	</div>

	  </form>

	  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	  <script>
	  	$(document).ready(function() {
	  		$('#province').change(function() {
	  			let province = $(this).val();

	  			$('#city').html('');

	  			if (province == 'Jawa Barat') {
	  				$('#city').append(`<option value="Bandung">Bandung</option>`);
	  				$('#city').append(`<option value="Garut">Garut</option>`);
	  			} else if (province == 'DKI Jakarta') {
	  				$('#city').append(`<option value="Jakarta Utara">Jakarta Utara</option>`);
	  				$('#city').append(`<option value="Jakarta Barat">Jakarta Barat</option>`);
	  			}
	  		});
	  	});
	  </script>