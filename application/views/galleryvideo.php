<!DOCTYPE html>
<html lang="en">
<?php include 'navbar.php'; ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/artikel.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/video.css">
</head>
<body style="background-color: #353b48">
	<br>
	<br>
	<br>
<div class="container">
	<div class="row mtb-60">
		<div class="heading">
			<h1>GALLERY</h1>
		</div>
		<div class="row">
			<?php foreach ($videos as $video){ ?>
			<div class="col-md-4">
				<div class="well">
					<video width="320" controls>
 						 <source src="<?php echo base_url('upload/video/'.$video->video) ?>" type="video/mp4">
					</video>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</body>
</html>