<?php global $Wcms ?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">


		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />




		<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
		
		<link href='https://fonts.googleapis.com/css?family=Hind:400,500,600,700|Poppins:400,500,600,700|Acumin:300,400,600,700|Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/css/font-awesome.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/et-line-icons.css">
		<link rel="stylesheet" href="assets/css/linea.css">
		<link rel="stylesheet" href="assets/css/style.css">


		<link rel="stylesheet" rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">

		<?= $Wcms->css() ?>


	</head>
	<body>

		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>



		<header>
			<div class="logo">
				<!--<h3><a href="index-main.html">Krzysztof Lechowicz</a></h3>-->
				<img style="width:80%" src="images/logo.png" />

				<a class="navbar-brand" href="<?= $Wcms->url() ?>">
					<?= $Wcms->siteTitle() ?>
				</a>


			</div>
			<div id="menu" class="menu">
				
				

				<ul>
					<!--<li><a href="index-start.html" class="active">Start</a></li>-->
					<!--
					<li class="menu-item-has-children">
					   <a href="#">O mnie</a>
						<ul>
							<li><a href="about.html">About Me</a></li>
							<li><a href="team.html">Team</a></li>
						</ul>
					</li>
					-->
					<li><a href="about.html">o mnie</a></li>
					<li><a href="index.html">Portfolio</a></li>
					



					<!-- old portoflio w children

					<li class="menu-item-has-children">
						<a href="#">Portfolio</a>
						<ul>
							<li class="menu-item-has-children">
							<a href="#">Default</a>
							   <ul>
							   	 <li><a href="index-2col.html">2 Columns</a></li>
							   	 <li><a href="index.html">3 Columns</a></li>
							   	 <li><a href="index-4col.html">4 Columns</a></li>
							   </ul>
							</li>
							<li class="menu-item-has-children">
							<a href="#">Alternative</a>
								<ul>
									 <li><a href="index-portfolio-alternative2col.html">2 Columns</a></li>
								   	 <li><a href="index-portfolio-alternative.html">3 Columns</a></li>
								   	 <li><a href="index-portfolio-alternative4col.html">4 Columns</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
							<a href="#">Filters</a>
								<ul>
									 <li><a href="index-filters2col.html">2 Columns</a></li>
								   	 <li><a href="index-filters.html">3 Columns</a></li>
								   	 <li><a href="index-filters4col.html">4 Columns</a></li>
								</ul>
							</li>
						</ul>
					</li>

					-->

					<!-- pages  
					<li class="menu-item-has-children">
						<a href="#">Pages</a>
						<ul>
							<li class="menu-item-has-children">
							<a href="#">Blog</a>
							   <ul>
							   	 <li><a href="blog2-columns.html">2 Columns</a></li>
							   	 <li><a href="blog.html">3 Columns</a></li>
							   	 <li><a href="blog4-columns.html">4 Columns</a></li>
							   </ul>
							</li>
							<li><a href="services.html">Services</a></li>
						</ul>
					</li>

					-->					
					<li><a href="contact.html">Kontakt</a></li>
					<li><a href="efrrow.html">EFRROW</a></li>
				</ul>



				<ul class="nav navbar-nav navbar-right ml-auto">
						<?= $Wcms->menu() ?>
				</ul>


			</div>
			<div class="social-icons">
				<ul>
					<li><a target="_BLANK" href="http://facebook.com"><i class="fa fa-facebook"></i> </a></li>
					<li><a target="_BLANK" href="http://pinterest.com"><i class="fa fa-pinterest"></i> </a></li>
					<li><a target="_BLANK" href="http://twitter.com"><i class="fa fa-twitter"></i> </a></li>
					<li><a target="_BLANK" href="http://behance.com"><i class="fa fa-behance"></i> </a></li>
					<li><a target="_BLANK" href="http://dribbble.com"><i class="fa fa-dribbble"></i> </a></li>
				</ul>
				<p>© Krzysztof Lechowicz 2019 <br> </p>
			</div>
		</header>





		<div class="wrapper">


			<?= $Wcms->page('content') ?>
			
			<div class="portfolio gallery">
				<div class="row masonry">

					


					<!-- old mode, w/ subpages

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<img src="images/portfolio/hotel1.jpg">
							<div class="overlay">
								<div class="overlay-inner">
									<h3><a href="single-one.html">Motivation</a></h3>
									<h6><a href="single-three.html">Photography</a></h6>
								</div>
							</div>
						</div>
					</div>
					-->


					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/hotel1.jpg"><img class="prod-thumb" src="images/portfolio/hotel1.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/hotel2.jpg"><img class="prod-thumb" src="images/portfolio/hotel2.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/hotel3.jpg"><img class="prod-thumb" src="images/portfolio/hotel3.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/hotel4.jpg"><img class="prod-thumb" src="images/portfolio/hotel4.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/hotel5.jpg"><img class="prod-thumb" src="images/portfolio/hotel5.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/hotelb1.jpg"><img class="prod-thumb" src="images/portfolio/hotelb1.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/hotelb2.jpg"><img class="prod-thumb" src="images/portfolio/hotelb2.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/dom1.jpg"><img class="prod-thumb" src="images/portfolio/dom1.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/dom2.jpg"><img class="prod-thumb" src="images/portfolio/dom2.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/apartament.jpg"><img class="prod-thumb" src="images/portfolio/apartament.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/osiedle1.jpg"><img class="prod-thumb" src="images/portfolio/osiedle1.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/osiedle2.jpg"><img class="prod-thumb" src="images/portfolio/osiedle2.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/portfolioa1.jpg"><img class="prod-thumb" src="images/portfolio/portfolioa1.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/portfolioa2.jpg"><img class="prod-thumb" src="images/portfolio/portfolioa2.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/portfolioa3.jpg"><img class="prod-thumb" src="images/portfolio/portfolioa3.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/portfolioa4.jpg"><img class="prod-thumb" src="images/portfolio/portfolioa4.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/ug1.jpg"><img class="prod-thumb" src="images/portfolio/ug1.jpg" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/planetarium1.jpg"><img class="prod-thumb" src="images/portfolio/planetarium1" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/planetarium2.jpg"><img class="prod-thumb" src="images/portfolio/planetarium2" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/planetarium3.jpg"><img class="prod-thumb" src="images/portfolio/planetarium3" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/planetarium4.jpg"><img class="prod-thumb" src="images/portfolio/planetarium4" alt=""/></a>
            	            </div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 section">
						<div class="item">
							<div>
            					<a href="images/portfolio/planetarium5.jpg"><img class="prod-thumb" src="images/portfolio/planetarium5" alt=""/></a>
            	            </div>
						</div>
					</div>




				</div>
			</div>



		</div>
		<script src="assets/js/jquery-2.1.4.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/SmoothScroll.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/theia-sticky-sidebar.js"></script>
		<script src="assets/js/jquery.slicknav.js"></script>
		<script src="assets/js/owl.carousel.js"></script>
		<script src="assets/js/main.js"></script>

		<script type="text/javascript" src="assets/js/jquery-3.1.0.slim.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-1.3.1.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/prototype.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/sss/sss.min.js"></script>
        <link href='assets/js/simplelightbox.css' rel='stylesheet' type='text/css'>
        <link href='assets/js/demo.css' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="assets/js/sss/sss.css" type="text/css" media="all" />
        <script type="text/javascript">
            jQuery(function($) {
                $('.slider').sss({
                    slideShow : true, // Set to false to prevent SSS from automatically animating.
                    startOn : 0, // Slide to display first. Uses array notation (0 = first slide).
                    transition :1500, // Length (in milliseconds) of the fade transition.
                    speed : 5000, // Slideshow speed in milliseconds.
                    showNav : false // Set to false to hide navigation arrows.
                });
            });
        </script>
        <script type="text/javascript" src="assets/js/simple-lightbox.js"></script>
        <script>
         $(function(){
            var $gallery = $('.gallery a').simpleLightbox();

            $gallery.on('show.simplelightbox', function(){
                console.log('Requested for showing');
            })
            .on('shown.simplelightbox', function(){
                console.log('Shown');
            })
            .on('close.simplelightbox', function(){
                console.log('Requested for closing');
            })
            .on('closed.simplelightbox', function(){
                console.log('Closed');
            })
            .on('change.simplelightbox', function(){
                console.log('Requested for change');
            })
            .on('next.simplelightbox', function(){
                console.log('Requested for next');
            })
            .on('prev.simplelightbox', function(){
                console.log('Requested for prev');
            })
            .on('nextImageLoaded.simplelightbox', function(){
                console.log('Next image loaded');
            })
            .on('prevImageLoaded.simplelightbox', function(){
                console.log('Prev image loaded');
            })
            .on('changed.simplelightbox', function(){
                console.log('Image changed');
            })
            .on('nextDone.simplelightbox', function(){
                console.log('Image changed to next');
            })
            .on('prevDone.simplelightbox', function(){
                console.log('Image changed to prev');
            })
            .on('error.simplelightbox', function(e){
                console.log('No image found, go to the next/prev');
                console.log(e);
            });
        });
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
		<?= $Wcms->js() ?>
	</body>
</html>