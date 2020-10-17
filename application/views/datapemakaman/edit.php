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
							<h3 class="box-title">Edit Data </h3>
						</div>
						<!-- /.box-header -->
						<div class="card-body">
							<form action="<?php echo base_url() . 'DataPemakaman/update' ?>" method="post">
								<input type="hidden" name="id_makam" value="<?php echo $pemakaman->id_makam ?>">
								<div class="form-group">
									<label for="no-register">No_register</label>
									<input type="text" name="no_register" value="<?php echo $pemakaman->no_register ?>" class="form-control" id="no_register">
									<small class="form-text text-danger"><?= form_error('register'); ?></small>
								</div>

								<div class="form-group">
									<label for="nama_mendiang">Nama Mendiang</label>
									<input type="text" name="nama_mendiang" value="<?php echo $pemakaman->nama_mendiang ?>" class="form-control" id="nama_mendiang">
									<small class="form-text text-danger"><?= form_error('nama mendiang'); ?></small>
								</div>

								<div class="form-group">
									<label for="tgl_pemakaman">Tanggal Pemakaman</label>
									<input type="text" name="tgl_pemakaman" value="<?php echo $pemakaman->tgl_pemakaman ?>" class="form-control" id="tgl_pemakaman">
									<small class="form-text text-danger"><?= form_error('tanggal '); ?></small>
								</div>
								<div class="form-group">
									<label for="biaya_pemakaman">Biaya Pemakaman</label>
									<input type="text" name="biaya_pemakaman" value="<?php echo $pemakaman->biaya_pemakaman ?>" class="form-control" id="biaya-pemakaman">
									<small class="form-text text-danger"><?= form_error('biaya'); ?></small>
								</div>
								<div class="form-group">
									<label for="status">Status</label>
									<input type="text" name="status" value="<?php echo $pemakaman->status ?>" class="form-control" id="status">
									<small class="form-text text-danger"><?= form_error('status'); ?></small>
								</div>
								<div class="form-group">
									<label for="no_makam">No Makam</label>
									<input type="text" name="no_makam" value="<?php echo $pemakaman->no_makam ?>" class="form-control" id="no_makam">
									<small class="form-text text-danger"><?= form_error('makam'); ?></small>
								</div>
								<div class="form-group">
									<label for="jatuh_tempo">Jatuh Tempo</label>
									<input type="text" name="jatuh_tempo" value="<?php echo $pemakaman->jatuh_tempo ?>" class="form-control" id="jatuh_tempo">
									<small class="form-text text-danger"><?= form_error('jatuh tempo'); ?></small>
								</div>
								<div class="form-group">
									<label for="nik_mendiang">nik Mendiang</label>
									<input type="text" name="nik_mendiang" value="<?php echo $pemakaman->nik_mendiang ?>" class="form-control" id="nik_mendiang">
									<small class="form-text text-danger"><?= form_error('nik mendiang'); ?></small>
								</div>

								<button type="submit" name="update" class="btn btn-primary float-right"> Edit Data </button>
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