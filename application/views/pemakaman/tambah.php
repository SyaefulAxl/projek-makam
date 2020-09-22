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
									<small class="form-text text-danger"><?php echo form_error('id_makam'); ?></small>-->

								<div class="form-group">
									<label for="no-register">No_register</label>
									<input type="text" name="no_register" class="form-control" id="no_register">
									<small class="form-text text-danger"><?php echo form_error('no_register'); ?></small>

								</div>

								<div class="form-group">
									<label for="nama_mendiang">Nama Mendiang</label>
									<input type="text" name="nama_mendiang" class="form-control" id="nama_mendiang">
									<small class="form-text text-danger"><?php echo form_error('nama_mendiang'); ?></small>

								</div>

								<div class="form-group">
									<label for="tgl_pemakaman">Tanggal Pemakaman</label>
									<input type="text" name="tgl_pemakaman" class="form-control" id="tgl_pemakaman">
									<small class="form-text text-danger"><?php echo form_error('tgl_pemakaman'); ?></small>

								</div>
								<div class="form-group">
									<label for="biaya_pemakaman">Biaya Pemakaman</label>
									<input type="text" name="biaya_pemakaman" class="form-control" id="biaya_pemakaman">
									<small class="form-text text-danger"><?php echo form_error('biaya_pemakaman'); ?></small>

								</div>
								<div class="form-group">
									<label for="status">Status</label>
									<input type="text" name="status" class="form-control" id="status">
									<small class="form-text text-danger"><?php echo form_error('status'); ?></small>

								</div>
								<div class="form-group">
									<label for="no_makam">No Makam</label>
									<input type="text" name="no_makam" class="form-control" id="no_makam">
									<small class="form-text text-danger"><?php echo form_error('no_makam'); ?></small>

								</div>
								<div class="form-group">
									<label for="jatuh_tempo">Jatuh Tempo</label>
									<input type="text" name="jatuh_tempo" class="form-control" id="jatuh_tempo">
									<small class="form-text text-danger"><?php echo form_error('jatuh_tempo'); ?></small>

								</div>
								<div class="form-group">
									<label for="nik_mendiang">nik Mendiang</label>
									<input type="text" name="nik_mendiang" class="form-control" id="nik_mendiang">
									<small class="form-text text-danger"><?php echo form_error('nik_mendiang'); ?></small>

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