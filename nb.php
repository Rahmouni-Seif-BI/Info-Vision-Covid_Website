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
						<header>
							<h2>Statistique</h2>
						
						</header>
						<section class="wrapper style5">
							<div class="inner">
	<!-- Partie PHP -->
	<?php
			/*---Conexion & Selection de Base (WAMP-SERVER)---*/
				$con=mysqli_connect("localhost","root","","covid") or  die ("erruer de  connexion"); 


			/*---Requette SQL permet de Calculer les nombres d'inscrit dans le tab (inscritvous) ---*/
			
				$res=mysqli_query($con,"SELECT * FROM inscritvous  ") ; 
				
			/*---Requette SQL permet de Calculer les nombres d'inscrit tester dans le tab (inscritvous) ---*/
			
				$res1=mysqli_query($con,"SELECT * FROM inscritvous WHERE test='oui' ") ; 

			/*---Requette SQL permet de Calculer les nombres d'inscrit qui sont de resultat GRAVE dans le tab (inscritvous) ---*/
			
				$res2=mysqli_query($con,"SELECT * FROM inscritvous WHERE resultat='grave' ") ;
				
			/*---Requette SQL permet de Calculer les nombres d'inscrit qui sont de resultat NORMAL dans le tab (inscritvous) ---*/
				
				$res3=mysqli_query($con,"SELECT * FROM inscritvous WHERE resultat='normal' ") ;
				
	
				$rows=mysqli_num_rows($res);
					$rows1=mysqli_num_rows($res1);	
						$rows2=mysqli_num_rows($res2);
							$rows3=mysqli_num_rows($res3);
				
			/*--Affichage de resultat des requettes--*/
				echo "<table><tr>";
				echo  "<th>Nombre d'étudiants Inscrits</th><th>Nombre d'étudiants testés</th><th>Nombre d'étudiants leurs résultats est GRAVE</th><th>Nombre d'étudiants leurs résultats est NORMAL</th></tr> " ;
				echo "<tr><th>".$rows." </th><th>".$rows1. "</th><th>".$rows2." </th><th>".$rows3." </th>";
				echo "</table></tr>";
		
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