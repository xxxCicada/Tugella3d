<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="libs/3d/Brazzers-Carousel/jQuery.Brazzers-Carousel.min.css">
</head>
<body>


	<div class="thumb-item" width="200px">
		<?php
		for ($i=1; $i < 25; $i++) { 
			if ($i<10) {
				echo '<img src="img/'.htmlspecialchars($_GET["color"]).'/0'.$i.'.png" alt="">';
			}
			else{
				echo '<img src="img/'.htmlspecialchars($_GET["color"]).'/'.$i.'.png" alt="">';
			}
		}
		echo '<img src="img/'.htmlspecialchars($_GET["color"]).'/01.png" alt="">';
		?>
	</div>
<article id="colorPick">
	<a href="?color=red">Красный</a>
	<a href="?color=white">Белый</a>
	<a href="?color=orange">Оранжевый</a>
	<a href="?color=silver">Серебрястый</a>
	<a href="?color=blue">Синий</a>
</article>
	<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

  <script src="libs/3d/Brazzers-Carousel/jQuery.Brazzers-Carousel.min.js"></script>

  <script>
  	$(".thumb-item").brazzersCarousel();

  	
  </script>
</body>
</html>