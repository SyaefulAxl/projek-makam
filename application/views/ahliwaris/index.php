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
					<?php if ($this->session->flashdata()) : ?>
						<div class="alert alert-warning alert-dismissible fade show " role="alert"> Data Ahliwaris
							<strong>berhasil </strong><?= $this->session->flashdata('flash'); ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif; ?>
					<form action="" method="post">
					</form>

					<div class="row mt-3">
						<div class="col-md-6 mb-3">
							<form action="" method="post">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Cari data ahliwaris..." name="keyword">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit">Cari</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="box">
						<div class="box-header with-border bg-primary">
							<h3 class="box-title">Tabel Ahliwaris</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Mendiang</th>
											<th>Alamat Ahliwaris</th>
											<th>NIK Ahliwaris</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

										<?php
										$no = 1;
										foreach ($ahliwaris as $ahliwaris) : ?>
											<tr>
												<td><?php echo ($no); ?></td>
												<td><?php echo ($ahliwaris->id_makam); ?></td>
												<td><?php echo ($ahliwaris->alamat_ahliwaris); ?></td>
												<td><?php echo ($ahliwaris->nik_ahliwaris); ?></td>
												<td>
													<div class="btn-group">
														<a href="<?php echo site_url('Ahliwaris/hapus/' . $ahliwaris->id_ahliwaris) ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>
														<a href="<?php echo site_url('Ahliwaris/detail/' . $ahliwaris->id_ahliwaris) ?>"><button type="button" class="btn btn-primary btn-sm ml-3 mr-3"><i class="fa fa-eye"></i></button></a>
														<a href="<?php echo site_url('Ahliwaris/edit/' . $ahliwaris->id_ahliwaris) ?>"><button type="button" class="btn btn-warning btn-sm mr-3"><i class="fa fa-edit (alias)"></i></button></a>
													</div>
												</td>
											</tr>
										<?php
											$no++;
										endforeach; ?>
									</tbody>
								</table>
								<a href="<?php echo base_url(); ?>Ahliwaris/tambah" class="btn btn-primary"> Tambah
									Data </a>
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