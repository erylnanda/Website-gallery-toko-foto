<!DOCTYPE html>
<html lang="en">
<?php include 'navbar.php'; ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-413.css">
	
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <style type="text/css">
    img {
    vertical-align: middle;
    border-style: none;
	}
	.card-img-top {
    width: 100%;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px);
	}
    </style>
</head>
<body style="background-color: #353b48">
	<section class="gallery-block cards-gallery">
	<br>
	<br>
	<br>
	<br>
	<br>
		<hr>
<div class="container">
	<div class="row mtb-60">
		<div class="heading">
			<br>
			<h1>GALLERY</h1>
		<hr>
		</div>
		<div class="row">
			<?php foreach ($galerys as $galery){ ?>
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="<?php echo base_url('upload/gallery/'.$galery->photo) ?>"><img src="<?php echo base_url('upload/gallery/'.$galery->photo) ?>" class="card-img-top"></a>
   					<div class="card-body">	
   					</div>
   				</div>
   			</div>
   			<?php }?>
	</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
	      baguetteBox.run('.cards-gallery', {animation: 'slideIn'});
	  </script>
</body>
</html>