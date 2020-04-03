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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/jabatan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/jabatan/add') ?>" method="post" enctype="multipart/form-data" >
						
							<div class="form-group">
								<label for="kode">Kode*</label>
								<input class="form-control <?php echo form_error('kode') ? 'is-invalid':'' ?>"
								 type="number" name="kode" min="0" placeholder="Kode" />
								<div class="invalid-feedback">
									<?php echo form_error('kode') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Jabatan*</label>
								<input class="form-control <?php echo form_error('jabatan') ? 'is-invalid':'' ?>"
								 type="text" name="jabatan" placeholder="Jabatan" />
								<div class="invalid-feedback">
									<?php echo form_error('jabatan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="standar_gaji">Standar Gaji*</label>
								<input class="form-control <?php echo form_error('standar_gaji') ? 'is-invalid':'' ?>"
								 type="number" name="standar_gaji" min="0" placeholder="Standar Gaji" />
								<div class="invalid-feedback">
									<?php echo form_error('standar_gaji') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="keterangan">Keterangan</label>
								<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								 name="keterangan" placeholder="Keterangan..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>