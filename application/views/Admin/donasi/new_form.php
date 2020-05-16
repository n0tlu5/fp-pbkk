<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
	<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">
				<?php $this->load->view("admin/_partials/navbar.php") ?>
				<!-- Begin Page Content -->
				<div class="container-fluid">
					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h3 mb-0 text-gray-800">Add product</h1>
					</div>

					<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php endif; ?>

					<div class="card mb-3">
						<div class="card-header">
							<a href="<?php echo site_url('dashboard/donasi/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
						</div>
						<div class="card-body">

							<form action="<?php base_url('dashboard/donasi/add') ?>" method="post" enctype="multipart/form-data" >
								<div class="form-group">
								</div>

								<div class="form-group">
									<label for="nama">Nama Donatur*</label>
									<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
									type="text" name="nama" placeholder="Budi Santoso" />
									<div class="invalid-feedback">
										<?php echo form_error('nama') ?>
									</div>
								</div>
								
								<div class="form-group">
									<label for="email">Alamat Email Donatur*</label>
									<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
									type="email" name="email" min="0" placeholder="budi21@domain.com" />
									<div class="invalid-feedback">
										<?php echo form_error('email') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="no_hp">Nomor HP Donatur*</label>
									<input class="form-control <?php echo form_error('no_hp') ? 'is-invalid':'' ?>"
									type="text" name="no_hp" min="0" placeholder="08xxxxxxxxxx" />
									<div class="invalid-feedback">
										<?php echo form_error('no_hp') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="jenis">Jenis Donasi*</label>
									<select class="form-control <?php echo form_error('jenis') ? 'is-invalid':'' ?>" name="jenis" id="jenis">
										<option value="sembako">Sembako</option>
										<option value="tunai">Tunai</option>
										<option value="apd">APD</option>
										<option value="obat">Obat</option>
										<option value="lain-lain">Lainnya</option>
									</select>
									<div class="invalid-feedback">
										<?php echo form_error('jenis') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="kuantitas">Kuantitas*</label>
									<input class="form-control <?php echo form_error('kuantitas') ? 'is-invalid':'' ?>"
									type="number" name="kuantitas" min="0" placeholder="0" />
									<div class="invalid-feedback">
										<?php echo form_error('kuantitas') ?>
									</div>
								</div>

								<div class="form-group">
									<label for="keterangan">Keterangan*</label>
									<input class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
									type="text" name="keterangan" min="0" placeholder="satuan dsb" />
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

				</div>
			</div>
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
	
</body>
