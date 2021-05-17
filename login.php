<?php
	
require_once 'config/connect.php';
require_once 'form/loginform.php';

	?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/connexion.css">
		<title>Portfolio Grp-2 | Login</title>
  </head>
	<body class="bg-dark">
		<header id="header">

      
    
			<nav class="navbar navbar-expand-md navbar-dark bg-dark line-bottom" >
				<div class="div_logo_gp2" >
					<a id="lien_logo" href="index.html"><img id="logo_gp2" src="images/logo_gp2.png" alt="logo_gp"></a>
	
				</div>
				<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class=" div_bar collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
								<li class="nav-item active">
										<a class="nav-link sous_navbar" href="index.html">ACCUEIL <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
										<a class="nav-link sous_navbar" href="#page_present">PROJETS</a>
								</li>
								<li class="nav-item">
										<a class="nav-link sous_navbar" href="about.html">À PROPOS</a>
								</li>
								<li class="nav-item">
										<a class="nav-link sous_navbar" href="#">CONTACT</a>
								</li>
								<li class="nav-item">
										<a class="nav-link sous_navbar" href="#">INSCRIPTION À LA NEWSLETTER</a>
								</li>
						</ul>
				</div>
		</nav>
	
	</header>
		<div class="container-fluid bg-grayish">
			<div class="row justify-content-md-center">
				<div class="col-12 col-md-10 col-lg-8 col-xl-6 mt-2 mb-2">
					
					<div class="mt-4 text-center round-box bg-dark">
						<h1 class="smaller-text text-light p-1">Login</h1>
					</div>
				
					<div class="mb-4 mt-4 mx-xl-5 px-3 pb-3 pt-2 bg-dark round-box text-light">
						<div class="container mb-3">
							<form method="post" class="p-3">
								<div class="form-group">
									<label for="email">Address e-mail</label>
									<input type="email" class="form-control bg-grayish round-box" name ="email" id="email" aria-describedby="emailHelp" required>
									<small id="emailHelp" class="form-text text-white-50">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</small>
								</div>
								<div class="form-group">
									<label for="password">Mot de passe</label>
									<div class="input-group is-invalid">
										<input type="password" class="form-control bg-grayish round-box" name="password" id="password" required>
										<div class="input-group-append">
											<button class="btn bg-grayish round-box" type="button">👁️</button>
										</div>
									</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
								</div>
								<button type="submit" class="btn btn-primary mt-3">Se connecter</button>
								<div>
									<small id="noAccount" class="form-text text-white-50 mt-2">Pas de compte? <a href="register.html">Crée un compte</a></small>
								</div> 
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    <div class="footer-basic bg-dark line-top">
			<footer>
				<div class="social">
					<a href="https://www.instagram.com/" target="_blank"> <img src="images/reseau/instagram.svg" alt="logo instagram"> </a>
					<a href="https://www.youtube.com/" target="_blank"> <img src="images/reseau/youtube.svg" alt="logo youtube"></a>
					<a href="https://twitter.com/" target="_blank"> <img src="images/reseau/twitter.svg" alt="logo twitter"></a>
					<a href="https://www.facebook.com/" target="_blank"> <img src="images/reseau/facebook.svg" alt="logo facebook"></a>
				</div>
				<ul class="list-inline">
					<li class="list-inline-item"><a href="#">Accueil</a></li>
					<li class="list-inline-item"><a href="#">Projets</a></li>
					<li class="list-inline-item"><a href="#">À Propos</a></li>
					<li class="list-inline-item"><a href="#">Contact</a></li>
					<li class="list-inline-item"><a href="#">Newsletter</a></li>
				</ul>
				<p class="copyright">Portfolio Groupe 2 © 2021</p>
			</footer>
		</div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>