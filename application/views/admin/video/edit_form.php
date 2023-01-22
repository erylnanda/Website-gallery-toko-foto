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
				<!-- <div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div> -->
				<div class="row mt-3">
        		<div class="col-md-12">
            	<div class="alert alert-success alert-dismissible fade show" role="alert">
                	username atau  <strong></strong> <?= $this->session->flashdata('success'); ?>.
                	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                	</button>
           		 </div>
        		</div>
        		</div>
				<?php endif; ?>
				<?php if ($this->session->flashdata('danger')) : ?>
<!-- 				<div ="container"> -->
   			 	<div class="row mt-3">
        		<div class="col-md-12">
            	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                	username atau  <strong></strong> <?= $this->session->flashdata('danger'); ?>.
                	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                	</button>
           		 </div>
        		</div>
        		</div>
        	<?php endif; ?>
				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/video/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/video/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $video->id_video?>" />

							<div class="form-group">
								<label for="name">Title*</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="judul video" value="<?php echo $video->title ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">video</label>
								<input class="form-control-file <?php echo form_error('video') ? 'is-invalid':'' ?>"
								 type="file" name="video" />
								<input type="hidden" name="old_video" value="<?php echo $video->video ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('video') ?>
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
