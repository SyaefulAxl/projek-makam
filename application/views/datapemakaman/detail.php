<?php
$this->load->view('share/header');
$this->load->view('share/sidebar');

?>
<div class="content-wrapper">
	<div class="container">
		<!-- Main content -->
		<section class="content">

			<div class="row">

				<div class="col-12">
					<div class="box">

						<div class="box-header bg-primary">
							<h4 class="box-title">Detail Data Pemakaman</h4>
						</div>
						<div class="box-body">
							<div class="form-group row">
								<label class="col-form-label col-md-2">Id Makam</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $pemakaman->id_makam ?></label>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-form-label col-md-2">No Register</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $pemakaman->no_register ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Nama Mendiang</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $pemakaman->nama_mendiang ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Tanggal Pemakaman</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $pemakaman->tgl_pemakaman ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Biaya Pemakaman</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $pemakaman->biaya_pemakaman ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Status</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $pemakaman->status ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">No Makam</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $pemakaman->no_makam ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Jatuh Tempo</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $pemakaman->jatuh_tempo ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">NIK Mendiang</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $pemakaman->nik_mendiang ?></label>
								</div>
							</div>

							<hr>
							<a href="<?php echo base_url(); ?>"><button type="submit" name="update" class="btn btn-primary"> Kembali</button></a>
						</div>

					</div>

				</div>

			</div>

		</section>
	</div>

</div>

<?php $this->load->view('share/footer'); ?>