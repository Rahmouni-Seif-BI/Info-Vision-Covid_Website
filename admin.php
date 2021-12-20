<!DOCTYPE HTML>

<html>
	<head>
	<style>
			table,th,td{
				border:1px solid black;
				 
			}
			table{
				border-collapse:collapse;
			}
		</style>
		<title>Inscrit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
						<header id="header" class="alt">
						<h1><a href="index.html">Info-Vision</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Accueil</a></li>
											<li><a href="admin.html">Admin</a></li>
											<li><a href="inscrit.html">Inscrivez-Vous</a></li>
											<li><a href="identifiez.html">Identifiez-Vous</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						
						<section class="wrapper style5">
							<div class="inner">
		 <!-- Partie PHP --> 
	<?php
	
	/*-- Declaration & Initialisation --*/


		$admin=$_POST["T1"];
		$mdp=$_POST["T2"];

	/*---Conexion & Selection de Base (WAMP-SERVER)---*/
	
		$con=mysqli_connect("localhost","root","","covid") or  die ("erruer de  connexion"); 

	
		/*---Requette SQL permet  d'identifier  l'existance de l'admin dans le tab (admin) ---*/
			$res=mysqli_query($con,"SELECT * FROM admin  where admin='$admin' and mdp='$mdp'") or die ("selct admin ou mdp invalide !!"); 
	

			$rows=mysqli_num_rows($res);
		
			if ($rows==0)
			
				echo  ("<header><h2> non admin !!!  enregistrer avec ce nom !!!!</br> ou mdp incorrect !!  </h2></header>") ; 
			 
			
			
			else 
			{
				while ($t = mysqli_fetch_array($res))
				{			
					echo "Bienvenue  <b>".$t['admin']." </b><ul></br> <h3>Vous pouvez :</h3> </br><li>  <a href='etudiants.php'>Lister tous les données d'étudiants  </a></li>  " ; 
				
					echo " </b></br><li> <a href='ajout.html'>Ajouter un Nouveau Admin </a>  </li> " ; 
			
					echo " </b></br><li> <a href='supprimer.html'>Supprimer étudiant </a> </li></ul> " ; 
				}

			}		
	

?>
<!-- FIN Partie PHP --> 
	
	
	
								</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://www.instagram.com/seif_rahmounii/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://www.facebook.com/seif.rahmouni.7" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="mailto:seif2000rahmouni@gmail.tn"" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; 2020/2021</li><li>Design: Rahmouni Seif</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>