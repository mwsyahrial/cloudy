<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/gaji/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NIP</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>Telepon</th>
										<th>Jabatan</th>
										<th>Masa Kerja</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($karyawan as $karyawn): ?>
									<tr>
										<td>
											<?php echo $karyawn->nip ?>
										</td>
										<td width="150">
											<?php echo $karyawn->nama ?>
										</td>
										<td>
											<?php echo $karyawn->jenis_kelamin ?>
										</td>
										<td>
											<?php echo $karyawn->alamat ?>
										</td>
										<td>
											<?php echo $karyawn->telp ?>
										</td>
										<td>
											<?php echo $karyawn->jabatan ?>
										</td>
										<td>
											<?php echo $karyawn->masa_kerja ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/gaji/gaji/'.$karyawn->nip) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Penggajian</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	
</body>

</html>