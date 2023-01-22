<!DOCTYPE html>
<?php include 'navbar.php'; ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/artikel.css">
	<!-- <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/video.css">
</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $article->title ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #353b48">
	<!-- <img src="http://localhost/template/assets/images/a.jpg"> -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">	

		<!-- bagian konten Blog -->
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b><?php echo $article->penerbit ?></b>
				</div>
				<img src="<?php echo base_url('upload/article/'.$article->image) ?>">
				<h1> <?php echo $article->title ?> </h1>
				<hr>
				<p>
					<?php echo $article->text ?>
				</p>				
			</div>
		
		</div>
		<!-- akhir bagian konten Blog -->
	</div>

</body>
</html>
</body>
</html>