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
						<a href="<?php echo site_url('admin/aturan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/aturan/add') ?>" method="post" enctype="multipart/form-data" >
						
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
								<label for="masa_kerja">Masa Kerja*</label>
								<input class="form-control <?php echo form_error('masa_kerja') ? 'is-invalid':'' ?>"
								 type="number" name="masa_kerja" min="0" placeholder="Masa Kerja" />
								<div class="invalid-feedback">
									<?php echo form_error('masa_kerja') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="insentif">Insentif</label>
								<input class="form-control <?php echo form_error('insentif') ? 'is-invalid':'' ?>"
								 type="number" name="insentif" min="0" placeholder="Insentif" />
								<div class="invalid-feedback">
									<?php echo form_error('insentif') ?>
								</div>
                            </div>
                            
                            <div class="form-group">
								<label for="bonus">Bonus</label>
								<input class="form-control <?php echo form_error('bonus') ? 'is-invalid':'' ?>"
								 type="number" name="bonus" min="0" placeholder="Bonus" />
								<div class="invalid-feedback">
									<?php echo form_error('bonus') ?>
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