<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>I'MPHOTOGRAPHY</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/video.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<style>
		img {
		max-width: 100%;
		height: auto;
}

	</style>
</head>
<body>
		<div class="header-area">
			<!-- <?php 	echo $content; ?> -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img class="navbar-brand" href="#" src="<?php echo base_url(); ?>assets/images/LOGO.png" style="position: absolute;">
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">Home</a></li>
        <li><a href="#price">Price List</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/artikel">Artikel</a></li>
        <li><a href="#gallery">Galery</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
		<div class="slider-area" id="home">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				    <img class="slider-bg slide1" src="<?php echo base_url('upload/carousel/'.$carousel[0]->image) ?>" >
				       <div class="carousel-caption">
				        <div class="row">
				        	<div class="col-md-6">
				        		<div class="slide-text">
				        			<h2><?php echo $carousel[0]->title ?></h2>
								        <p><?php echo $carousel[0]->text ?></p>
								        
				        	</div>
				        </div>
				      </div>
				    </div>
				    </div>
				    <div class="item">
				    <img class="slider-bg slide2" src="<?php echo base_url('upload/carousel/'.$carousel[1]->image) ?>">
				      <div class="carousel-caption">
				        <div class="row">
				        	<div class="col-md-6">
				        		<div class="slide-text">
				        			<h2><?php echo $carousel[1]->title ?></h2>
								        <p><?php echo $carousel[1]->text ?></p>
				        		</div>
				        	</div>
				        </div>
				      </div>
				    </div>
		
				    <div class="item">
				      <img class="slider-bg slide3" src="<?php echo base_url('upload/carousel/'.$carousel[2]->image) ?>">
				      <div class="carousel-caption">
				        <div class="row">
				        	<div class="col-md-6">
				        		<div class="slide-text">
				        			<h2><?php echo $carousel[2]->title ?></h2>
								        <p><?php echo $carousel[2]->text ?></p>
				      		</div>
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>


	<div class="template-area selection-padding" id="price">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="single-template">
						<img src="<?php echo base_url(); ?>assets/images/price.jpg" alt="">
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="single-template">
						<h3>Ie Price di ubah ku sia prim</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="video-section" id="gallery">
    <video autoplay="" muted="" loop="" id="bg-video" __idm_id__="1003148289">
        <source src="<?php echo base_url(); ?>assets/video/video1.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="vid-overlay"></div>
    <div class="vid-content">
        <div class="container">
            <h2>Galeri Video</h2>
            <p>
                            </p>
            <div>
                <a href="<?php echo base_url(); ?>gallery" class="btn btn-outline-light">LIHAT GALERI</a>
            </div>
        </div>
    </div>
</div>
	<div class="image-area selection-padding text-center">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 com-sm-offset-2 col-xs-12">
					<div class="section-header">
						<h2>Image Gallery</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 exp">
					<img src="<?php echo base_url(); ?>assets/images/b.jpg">
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 exp">
					<img src="<?php echo base_url(); ?>assets/images/image_3.jpg">
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 exp">
					<img src="<?php echo base_url(); ?>assets/images/a.jpg">
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 exp">
					<img src="<?php echo base_url(); ?>assets/images/image_3.jpg">
				</div>
			</div>
		</div>
	</div>
	<div class="follow-area selection-padding">
		<div class="container">
			<div class="col-md-4">
				<div class="follow-text">
					<h2>Follow Us</h2>
				</div>
			</div>
			<div class="col-md-8">
				<div class="follow-icons">
					<a href="https://www.facebook.com/indriyanus.manalor.92"><i class="fab fa-facebook-square" style="color: #3b5998"></i></a>
					<a href="https://instagram.com/indriyanusmanalor"><i class="fab fa-instagram" style="color: #e95950"></i></a>
					<a href="https://www.twitter.com/abhaktiprima"><i class="fab fa-twitter" style="color: #1da1f2"></i></a>
					<a href=""><i class="fab fa-google-plus-square" style="color: #d34836"></i></a>
					<a href=""><i class="fab fa-youtube" style="color: #ff0000"></i></a>
					<a href=""><i class="fab fa-linkedin" style="color: #0e76a8"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-area selection-padding text-center" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 com-sm-offset-2 col-xs-12">
					<div class="section-header">
						<h2>contact form</h2>
					</div>
				</div>
		</div>
		<div>
					<div  style="color: blue">
							<h3 style="color: blue">Adress</h3>
							<p>1234 Street Name</p>
							<p>Citt, bb, 14255</p>
						</div>
						<div >
							<h3>Email : &nbsp; support@imphoto.com</h3>
							<h3>Phone : &nbsp; <p>+(62) 000 0000 0000</p></h3>
							<h3>Fax   : &nbsp; <p>+(62) 000 0000 0000</p></h3>
						</div>
					</div>
	<!-- <div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="form-text">
				<form action="">
					<input type="text" class="form-control" placeholder="Text input">
					<input type="text" class="form-control" placeholder="Text input">
					<textarea class="form-control" rows="3"></textarea>
					<button type="submit" class="btn btn-default" id="tem-btn">Sign in</button>
				</form>
			</div>
		</div>
	</div>
  </div>
</div> -->
	<div class="footer-top-area selection-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="map-area">
						<div id="map"></div>
					</div>
				</div>
					
					<div class="col-md-3">
						<div class="fot-right">
							<h3>Links</h3>
							<a href="#">I'm Photography One Page Templates</a>
							<a href="#">I'm Photography Basic Templates</a>
							<a href="#">I'm Photography gallery Templates</a>
							<a href="#">I'm Photography Responsive Templates</a>
						</div>
					</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-area">
		<div class="container">
			<div class="row">
				<div class="foot-bot-text">
					<p>Copyright &copy; 2019 company licence, licence</p>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>		
<script type="text/javascript">
    $(document).ready(function(){ 
    $('a[href*=#]').click(function() { 
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) { 
        var $target = $(this.hash); 
        $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']'); 
        if ($target.length) { 
            var targetOffset = $target.offset().top;
            $('html,body') 
            .animate({scrollTop: targetOffset}, 1000); 
           return false; 
          } 
        } 
    }); 
});
</script>   
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 500) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });
});
	</script>
<script src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/gmaps.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        lat: -6.168329,
        lng: 106.758849
      });
      
      map.addMarker({
        lat: -6.168329,
        lng: 106.758849,
        title: 'Marker with InfoWindow',
        infoWindow: {
          content: '<p>HTML Content</p>'
        }
      });
    });
  </script>
</body>
</html>