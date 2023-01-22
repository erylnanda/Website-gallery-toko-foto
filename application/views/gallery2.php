<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/galeriku.css">

    <title>gallery</title>
  </head>
  <body style="background-color: #353b48">

  	<br>
	<br>
	
	<div class="container">
	<a href="<?php echo base_url(); ?>index.php" class="btn btn-primary">Go to home</a>
		<center><h2>Gallery</h2></center>
		<hr>
  <div class="row">
    <?php foreach ($kategorys as $kategory){ ?>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url('upload/kategory/'.$kategory->image) ?>" alt="Card image cap">
        <div class="card-body">
          <a href="<?php echo site_url('gallery/photo/'.$kategory->slug_kat) ?>"> <h5 class="card-title"><?php echo $kategory->nama_kat ?></h5></a>
          
          <a href="<?php echo site_url('gallery/photo/'.$kategory->slug_kat) ?>" class="btn btn-primary">See More</a>
        </div>
      </div>
    </div>
  <?php } ?>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <!-- <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/a.jpg" alt="Card image cap"> -->
        <video  class="card-img-top" id="" preload="auto" autoplay="true" loop="loop" muted="muted">
			<source src="<?php echo base_url('upload/video/'.$videos[0]->video) ?>" type="video/mp4">
		</video>
        <div class="card-body">
          <a href="<?php echo base_url(); ?>index.php/gallery/video"><h5 class="card-title">Video</h5>
          
          <a href="<?php echo base_url(); ?>index.php/gallery/video" class="btn btn-primary">See More</a>
        </div>
      </div>
    </div>
    <!-- ini batas row -->
   </div>
  </div>
  </body>
</html>










