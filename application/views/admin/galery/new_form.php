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
						<a href="<?php echo site_url('admin/galery/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/galery/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">TItle*</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="Judul Photo" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>
							<div class="form-group">
      						<label for="sel1">Select Kategori:</label>
      						<select class="form-control" id="sel1" name="kategori">
      							<?php foreach ($kategorys as $kategory){ ?>
        						<option value="<?php echo $kategory->id_kategory ?>"><?php echo $kategory->nama_kat ?></option>
        						<?php } ?>
      						</select>
      						</div>
      						<div class="form-group">
								<label for="name">image</label>
								<input name="image" class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file"/>
								<div class="invalid-feedback">
									<?php echo form_error('image')?>
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
