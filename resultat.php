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
			$cin=$_POST["T1"];

			$q1=$_POST["T2"];

			$q2=$_POST["R1"];

			$q3=$_POST["R2"];

			$q4=$_POST["T3"];

			$q5=$_POST["R3"];

			$q6=$_POST["R4"];

			$q7=$_POST["R5"];

			$q8=$_POST["R6"];


	//calcul  resultat test 
	$s=0 ;
	if  ($q1>37) 
	{
		$s=$s+1;
	}
	if  ($q2==1)
	{		
		$s=$s+1 ;	
	}
	if  ($q3==1) 
	{	
		$s=$s+1 ;
	}
	if  ($q4>20) 
	{
		$s=$s+10 ;
	}
	if  ($q5==1) 
	{
		$s=$s+1 ;
	}
	if  ($q6==1) 
	{
		$s=$s+1 ;
	}
	if  ($q7==1) 
	{	
		$s=$s+1 ;
	}
	if  ($q8==1) 
	{	
		$s=$s+1 ;
	}
	
	//res final 
	if ($s>10 )
	
			$resT ="grave" ;
				
		else  
			$resT ="normal";
	
	/*---Conexion & Selection de Base (WAMP-SERVER)---*/
	
		$con=mysqli_connect("localhost","root","","covid") or  die ("erruer de  connexion"); 

	/*---Requette SQL permet de verifier l'existance de l'etudiant dans le tab (inscritvous) ---*/
	
		$res1=mysqli_query($con,"SELECT * FROM inscritvous  where cin='$cin' ") or die ("selct mahabech"); 
	
	
		$rows=mysqli_num_rows($res1);
		
			if ($rows==0)
			{
				echo  ("<header><h2>Cin Invalide !!!! </h2></header>") ;
				echo  ("<header><h4><a href='formulaire.html'>Retour</a></h4></header>") ;
			}
				
			else  
	
	/*---Requette SQL permet de modifier le champ test dans le tab (inscritvous) ---*/
	
		$res2=mysqli_query($con,"UPDATE inscritvous SET test = 'oui' , resultat = '$resT' WHERE inscritvous.cin = '$cin'")or die ("update   echoue  !!");

	 /*---Affichage de Resultat de test ---*/
		if ($res2)
		{
			if ($resT=="grave")
			{
				echo("<header><h2>Votre situation peut relever d’un covid 19. Vos symptômes nécessitent une prise en charge rapide.<h2></header>"); }
			else
			{
				echo("<header><h3>Votre état ne semble pas préoccupant ou ne relève probablement pas du covid 19.<h3></header>");
			}
	
		}
		else 
			echo ("echoué !!!");
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