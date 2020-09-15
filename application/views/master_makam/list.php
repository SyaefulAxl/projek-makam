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
						<div class="box-header with-border">
							<h3 class="box-title">Data Table With Full Features</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>No Makam</th>
											<th>Kode Blok</th>
                                            <th>Lokasi</th>
                                            <th>Aksi</th>
										</tr>
									</thead>
									<tbody>
                                        
                                        <?php
                                        $no = 1; 
                                        foreach($makam as $makam): ?>
										<tr>
											<td><?php echo($no); ?></td>
											<td><?php echo($makam->no_makam); ?></td>
											<td><?php echo($makam->kode_blok); ?></td>
											<td><?php echo($makam->lokas); ?></td>
											<td>2011/04/25</td>
                                        </tr>
                                        <?php
                                            $no++; 
                                            endforeach;?>
									</tbody>
								</table>
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
