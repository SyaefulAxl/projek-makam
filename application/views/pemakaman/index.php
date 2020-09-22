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
						<div class="alert alert-warning alert-dismissible fade show " role="alert"> Data Pemakaman
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
									<input type="text" class="form-control" placeholder="Cari data pemakaman..." name="keyword">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit">Cari</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="box">
						<div class="box-header with-border bg-primary">
							<h3 class="box-title">Tabel Pemakaman</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>No Register </th>
											<th>Nama Mendiang</th>
											<th>Status</th>
											<th>No Makam</th>
											<th>Jatuh Tempo</th>
											<th>NIK Mendiang</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

										<?php
										$no = 1;
										foreach ($pemakaman as $pemakaman) : ?>
											<tr>
												<td><?php echo ($no); ?></td>
												<td><?php echo ($pemakaman->no_register); ?></td>
												<td><?php echo ($pemakaman->nama_mendiang); ?></td>
												<td><?php echo ($pemakaman->status); ?></td>
												<td><?php echo ($pemakaman->no_makam); ?></td>
												<td><?php echo ($pemakaman->jatuh_tempo); ?></td>
												<td><?php echo ($pemakaman->nik_mendiang); ?></td>
												<td>
													<div class="btn-group">
														<a href="<?php echo site_url('Pemakaman/hapus/' . $pemakaman->id_makam) ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></a>
														<a href="<?php echo site_url('Pemakaman/detail/' . $pemakaman->id_makam) ?>"><button type="button" class="btn btn-primary btn-sm ml-3 mr-3"><i class="fa fa-eye"></i></button></a>
														<a href="<?php echo site_url('Pemakaman/edit/' . $pemakaman->id_makam) ?>"><button type="button" class="btn btn-warning btn-sm mr-3"><i class="fa fa-edit (alias)"></i></button></a>
													</div>
												</td>
											</tr>
										<?php
											$no++;
										endforeach; ?>
									</tbody>
								</table>
								<a href="<?php echo base_url(); ?>Pemakaman/tambah" class="btn btn-primary"> Tambah
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