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
						<a href="<?php echo site_url('admin/karyawan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/karyawan/add') ?>" method="post" enctype="multipart/form-data" >
						
							<div class="form-group">
								<label for="nip">NIP*</label>
								<input class="form-control <?php echo form_error('nip') ? 'is-invalid':'' ?>"
								 type="number" name="nip" min="0" placeholder="NIP" />
								<div class="invalid-feedback">
									<?php echo form_error('nip') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="nama" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin*</label>
								<select id='kelamin' name="jenis_kelamin" class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>">
								 <option value="L">L</option>
								 <option value="W">W</option></select>
								 <div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tgl_lahir">Tanggal Lahir</label>
								<input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir" placeholder="Tanggal Lahir"/>
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="telp">Telepon</label>
								<input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>"
								 type="number" name="telp" placeholder="Telepon" />
								<div class="invalid-feedback">
									<?php echo form_error('telp') ?>
								</div>
							</div>
						
							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="email" name="email" placeholder="Email"/>
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 name="alamat" placeholder="Alamat"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jabatan">Jabatan</label>
								<input class="form-control <?php echo form_error('jabatan') ? 'is-invalid':'' ?>"
								 name="jabatan" placeholder="Jabatan"/>
								<div class="invalid-feedback">
									<?php echo form_error('jabatan') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="masa_kerja">Masa Kerja</label>
								<input class="form-control <?php echo form_error('masa_kerja') ? 'is-invalid':'' ?>"
								 name="masa_kerja" placeholder="Masa Kerja"/>
								<div class="invalid-feedback">
									<?php echo form_error('masa_kerja') ?>
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