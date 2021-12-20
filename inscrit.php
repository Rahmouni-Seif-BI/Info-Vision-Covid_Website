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



			$nom=$_POST["T1"];

			$prenom=$_POST["T2"];

			$cin=$_POST["T3"];

			$ville=$_POST["ville"];

			$fac=$_POST["fac"];

			$mdp=$_POST["T4"];



		/*---Conexion & Selection de Base (WAMP-SERVER)---*/
		
			$con=mysqli_connect("localhost","root","","covid") or  die ("erruer de  connexion");
			
		/*---Requette SQL permet de verifier l'existance de l'etudiant dans le tab (inscritvous) ---*/
		
			$res=mysqli_query($con,"SELECT * FROM inscritvous  where cin='$cin' ") or die ("selct mahabech"); 
	

			$rows=mysqli_num_rows($res);
		
				if ($rows!=0)
				{
					echo  ("<header><h2>vous etes deja inscrit</h2></header>") ;
					echo  ("<header><h4><a href='identifiez.html'>Identifiez-Vous</a></h4></header>") ;
				}
				else 	
				{
					/*---Requette SQL permet de faire l'insertion d'un etudiant dans le tab (inscritvous) ---*/	
					
						$req2="INSERT INTO  inscritvous VALUES  ('$nom','$prenom','$cin','$ville','$fac','$mdp','non','')";
				
						$res1=mysqli_query($con,$req2)  ; 
			
						if ($res1)
		
							echo "<header><h2> Inscription Terminée avec SUCES</h2></header>  ";
				}
?>
	<!--FIN Partie PHP -->
	
	
	
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