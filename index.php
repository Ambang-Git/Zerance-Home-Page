<?php include("portfolio.php")?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Studio Zerance</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-responsive.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
</head>
<body>
	<header>
			<div class="logo"><img src="images/logo_studio_zerance.png" alt="Logo Studio Zerance"></div>
			<nav>
				<span class="navMobile">&#x2630;</span>
				<ul>
					<li><a href="#">Nos Clients</a></li>
					<li><a href="#Nos-Clients">Notre Offre</a></li>
					<li><a href="#Le-Studio">Le Studio</a></li>
					<li><a href="#Contact">Contact</a></li>
				</ul>
			</nav>
			<div class="banniere">
				<h1>
					<span class="FontSizeKarla">SINCE 2016</span><br>
					&lt;We create from scratch<br>amazing <span class="underline">Shopify/&gt;</span>
				</h1>
			</div>
	</header>
	<main>
		<section id="Nos-Clients"  class="portfolio">
			<h2>NOS CLIENTS SONT GÉNIAUX !</h2>
			<?php portfolio($image) ?>
		</section>
		<section id="Le-Studio" class="slider">
			<span class="arrow">
				<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 15 27" style="enable-background:new 0 0 15 27;" xml:space="preserve">
				<path d="M1.12,27c-0.29,0-0.57-0.11-0.79-0.32c-0.44-0.43-0.44-1.11,0-1.54L12.3,13.5L0.33,1.86c-0.44-0.42-0.44-1.11,0-1.54
					c0.44-0.43,1.15-0.43,1.58,0l12.76,12.41c0.44,0.42,0.44,1.11,0,1.54L1.91,26.68C1.69,26.89,1.41,27,1.12,27z"/>
				</svg>
			</span>
			<div class="slide1 slide">
				<div class="slideTexte">
					<h3>FROM SCRATCH /</h3>
					<img class="titre" src="images/titre_slide.jpg" alt="">
					<p>Développement site from scratch et d’un quiz personnalisé avec abonnement.<br>
						Développement site from scratch et d’un quiz personnalisé avec abonnement.</p>
					<button class="underline-slider">Voir plus/</button>
				</div>
			</div>
			<div class="slide2 slide">
				<div class="slideTexte">
					<h3>FROM SCRATCH /</h3>
					<img class="titre" src="images/titre_slide.jpg" alt="">
					<p>Développement site from scratch et d’un quiz personnalisé avec abonnement.<br>
						Développement site from scratch et d’un quiz personnalisé avec abonnement.</p>
					<button class="underline-slider">Voir plus/</button>
				</div>
			</div>
		</section>
	</main>
	
	<footer id="Contact">
		<!--<div class="defilementTXT">
			<ul>
				<li>Good cat Bad cat</li>
				<li>Frédéric Diefental</li>
				<li>Quand c’est trop, c’est Tropico</li>
				<li>Qu’est ce qui est jaune et qui attend ?</li>
				<li>Jonathan !!!</li>
			</ul>
		</div>-->
	</footer>
</body>
</html>