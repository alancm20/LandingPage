<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Economia Digital</title>
		<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="Estilos.css">
		<script src="librerias/bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
		<section class="home">
		<?php
			$url='https://newsapi.org/v2/top-headlines?sources=google-news&apiKey=c8dfaeec23fe4a7083280715add92f88';
			$response = file_get_contents($url);
			$NewsData = json_decode($response);
		?>
		<div class="jumbotron">
			<h1>Economia Digital</h1>
		</div>
		<div class="container-fluid">
			<?php
				foreach ($NewsData ->articles as $News) {
			?>
			<div class="row NewsGrid">
				<div class="col-md-4">
					<img src="<?php echo $News ->urlToImage ?>" alt="News thumbnail">
				</div>
				<div class="col-md-8">
					<h2><?php echo $News->title ?></h2>
					<h5><?php echo $News->description ?></h5>
					<p><?php echo $News->content ?></p>
					<h6>Autor: <?php echo $News->author ?></h6>
					<h6>Published: <?php echo $News->publishedAt ?></h6>
				</div>

			</div>
			<?php
				}
			?>
		</div>
		<div style="width: 100%">
			<input type="button" name="Actualizar" value="Actualizar" class="btn btn-info btn-lg" onclick="location.reload()">
		</div>
	</section>
	</body>
</html>