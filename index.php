<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
		<link rel="preload" href="/fonts/NeoSansPro-Bold.ttf" as="font" crossorigin="anonymous">
		<link rel="preload" href="/fonts/NeoSansPro-Medium.ttf" as="font" crossorigin="anonymous">
		<link rel="preload" href="/fonts/NeoSansPro-Regular.ttf" as="font" crossorigin="anonymous">
		
		
        <link href="/favicon.ico" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <!--<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">-->
       <!-- <link rel="stylesheet" type="text/css" href="/font-awesome-4.7.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" type="text/css" href="/css/slick.css">
        <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
        <!--<link rel="stylesheet" href="/libs/lightbox/css/lightbox.css">-->
         <!--<link rel="stylesheet" href="/css/animista.css">-->
		<link rel="stylesheet" href="/libs/3d/Brazzers-Carousel/jQuery.Brazzers-Carousel.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css?v=1">
    </head>
    <body>
      
		<div class="second">
			<div class="obzor">
				<div class="container">
					<div class="obzor__wrapper">
					
						<div class="obzor__main">
							<div class="obzor__title">Рассмотри<br/> со всех сторон</div>
							<div class="obzor__subtitle">псс...<br/> Он прекрасен...<br/> Не правда ли?</div>
							<div class="obzor__icon360"><img src="/images/360-degrees 1.png" alt=""></div>
							<div class="obzor__slider">
								<div class="obzor__slide">
									<div class="thumb-item" >
										<?php
										for ($i=1; $i < 25; $i++) { 
											if ($i<10) {
												echo '<img data-src="img/blue/0'.$i.'.png" alt="">';
											}
											else{
												echo '<img data-src="img/blue/'.$i.'.png" alt="">';
											}
										}
										echo '<img data-src="img/blue/01.png" alt="">';
										?>
									</div>
								</div>
								<div class="obzor__slide">
									<div class="thumb-item">
										<?php
										for ($i=1; $i < 25; $i++) { 
											if ($i<10) {
												echo '<img data-src="img/grey/0'.$i.'.png" alt="">';
											}
											else{
												echo '<img data-src="img/grey/'.$i.'.png" alt="">';
											}
										}
										echo '<img data-src="img/grey/01.png" alt="">';
										?>
									</div>
								</div>
								<div class="obzor__slide">
									<div class="thumb-item">
										<?php
										for ($i=1; $i < 25; $i++) { 
											if ($i<10) {
												echo '<img data-src="img/red/0'.$i.'.png" alt="">';
											}
											else{
												echo '<img data-src="img/red/'.$i.'.png" alt="">';
											}
										}
										echo '<img data-src="img/red/01.png" alt="">';
										?>
									</div>
								</div>
								<div class="obzor__slide">
									<div class="thumb-item">
										<?php
										for ($i=1; $i < 25; $i++) { 
											if ($i<10) {
												echo '<img data-src="img/black/0'.$i.'.png" alt="">';
											}
											else{
												echo '<img data-src="img/black/'.$i.'.png" alt="">';
											}
										}
										echo '<img data-src="img/black/01.png" alt="">';
										?>
									</div>
								</div>
								<div class="obzor__slide">
									<div class="thumb-item">
										<?php
										for ($i=1; $i < 25; $i++) { 
											if ($i<10) {
												echo '<img data-src="img/white/0'.$i.'.png" alt="">';
											}
											else{
												echo '<img data-src="img/white/'.$i.'.png" alt="">';
											}
										}
										echo '<img data-src="img/white/01.png" alt="">';
										?>
									</div>
								</div>
								
								
							</div>
						</div>
						<div class="obzor__colors">Выбери свой цвет</div>
						<div class="obzor__nav">
							<div class="obzor__navslider">
								<div class="obzor__navslide">
									<div class="obzor__navsl"><div class="obzor__navitem" style="background-color: #0000ff;"></div></div>
								</div>
								<div class="obzor__navslide">
									<div class="obzor__navsl"><div class="obzor__navitem" style="background-color: #808080;"></div></div>
								</div>
								<div class="obzor__navslide">
									<div class="obzor__navsl"><div class="obzor__navitem" style="background-color: #ff0000;"></div></div>
								</div>
								<div class="obzor__navslide">
									<div class="obzor__navsl"><div class="obzor__navitem" style="background-color: #000000;"></div></div>
								</div>
								<div class="obzor__navslide">
									<div class="obzor__navsl"><div class="obzor__navitem" style="background-color: #ffffff;"></div></div>
								</div>
								
								
							</div>
							<div class="obzor__navarrow">
								<div class="obzor__navleft">
									<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.861754 8.43906L8.26222 15.8191C8.50469 16.0607 8.89725 16.0603 9.13931 15.8178C9.38119 15.5753 9.38056 15.1826 9.13806 14.9407L2.17809 7.99997L9.13832 1.05925C9.38078 0.817378 9.38141 0.424849 9.13957 0.182349C9.01822 0.0607872 8.85925 5.68511e-06 8.70029 5.67238e-06C8.54172 5.65969e-06 8.38338 0.0603809 8.26226 0.181099L0.861754 7.56091C0.744974 7.6771 0.679442 7.83522 0.679442 7.99997C0.679442 8.16472 0.745162 8.32266 0.861754 8.43906Z" fill="white"/>
									</svg>


								</div>
								<div class="obzor__navright">
									<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.13825 7.56094L1.73778 0.180933C1.49531 -0.0607219 1.10275 -0.0603156 0.860686 0.182183C0.618812 0.424651 0.619437 0.817431 0.861936 1.05927L7.82191 8.00003L0.861686 14.9407C0.619218 15.1826 0.618593 15.5752 0.860435 15.8177C0.981779 15.9392 1.14075 16 1.29972 16C1.45828 16 1.61662 15.9396 1.73774 15.8189L9.13825 8.43909C9.25503 8.3229 9.32056 8.16478 9.32056 8.00003C9.32056 7.83528 9.25484 7.67734 9.13825 7.56094Z" fill="white"/>
									</svg>

								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
       	
		
		
		
		
        <script type="text/javascript" src="//yastatic.net/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/slick.min.js"></script>


		 <script src="/libs/3d/Brazzers-Carousel/jQuery.Brazzers-Carousel.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
		
		
    </body>
</html>