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
							<h4 class="box-title">Detail Data ahliwaris</h4>
						</div>
						<div class="box-body">
							<div class="form-group row">
								<label class="col-form-label col-md-2">Id Makam</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $ahliwaris->id_makam ?></label>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-form-label col-md-2">No Register</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $ahliwaris->no_register ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Nama Mendiang</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $ahliwaris->nama_mendiang ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Tanggal ahliwaris</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $ahliwaris->tgl_ahliwaris ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Biaya ahliwaris</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $ahliwaris->biaya_ahliwaris ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Status</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $ahliwaris->status ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">No Makam</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $ahliwaris->no_makam ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">Jatuh Tempo</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $ahliwaris->jatuh_tempo ?></label>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-form-label col-md-2">NIK Mendiang</label>
								<div class="col-md-10">
									<label class="col-form-label col-md-2"><?php echo $ahliwaris->nik_mendiang ?></label>
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