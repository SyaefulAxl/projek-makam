<?php
$this->load->view('share/header');
$this->load->view('share/sidebar');

?>
<div class="content-wrapper">
	<div class="container">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xxl-8 col-12">
					<div class="box">
						<div class="box-header with-border bg-primary">
							<h3 class="box-title">Tambah </h3>
						</div>
						<!-- /.box-header -->
						<div class="card-body">

							<form action="" method="post">
								<!--<div class="form-group">
									<label for="id_makam">Id Makam</label>
									<input type="text" name="id_makam" class="form-control" id="id_makam">
									<small class="form-text text-danger"><?php echo form_error('id_ahliwaris'); ?></small>-->

								<div class="form-group">
									<label for="id_makam">id_makam</label>
									<input type="text" name="id_makam" class="form-control" id="id_makam">
									<small class="form-text text-danger"><?php echo form_error('id_makam'); ?></small>

								</div>

								<div class="form-group">
									<label for="alamat_ahliwaris">Alamat Ahliwaris</label>
									<input type="text" name="alamat_ahliwaris" class="form-control" id="alamat_ahliwaris">
									<small class="form-text text-danger"><?php echo form_error('alamat_ahliwaris'); ?></small>

								</div>

								<div class="form-group">
									<label for="nik_ahliwaris">NIK Ahliwaris</label>
									<input type="text" name="nik_ahliwaris" class="form-control" id="nik_ahliwaris">
									<small class="form-text text-danger"><?php echo form_error('nik_ahliwaris'); ?></small>

								</div>

								<button type="submit" name="Tambah" class="btn btn-primary float-right"> Simpan Data</button>
							</form>

						</div>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
	</div>
	</section>
	<!-- /.content -->
</div>
</div>

<?php $this->load->view('share/footer'); ?>