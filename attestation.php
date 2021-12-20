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
		<style >
			@media print {
				
				body * { 
				visibility: visible ;
					
				
			}
			.print-container * { visibility: hidden ; }
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
	
		/*---Conexion & Selection de Base (WAMP-SERVER)---*/
		
			$con=mysqli_connect("localhost","root","","covid") or  die ("erruer de  connexion"); 

	
	/*-- Declaration & Initialisation --*/
	
		$cin=$_POST["T1"];
		
	/*---Requette SQL permet de verifier l'existance de l'etudiant dans le tab (inscritvous) ---*/
	
	
		$res=mysqli_query($con,"SELECT * FROM inscritvous  where cin='$cin' and test='oui' ") or die ("selct mahabech"); 
	
		$rows=mysqli_num_rows($res);
		
			if ($rows==0)
			{
				echo  ("<header><h2>aucune test trouve avec cette CIN !!!</h2></header>") ;
				echo  ("<header><h4><a href='formulaire.html'>Passer-test</a></h4></header>") ;
			}
			else 	
			{
			
			/*-- Affichage de resultat --*/
			
			
				while($donnees = mysqli_fetch_array($res))
				{
					?>
				
					<b> Date :</b>
			<!--importation de date & temps de system-->
					<?php 
					echo strftime('%Y-%m-%d <br/><b> Heure : </b>%H:%M:%S');
					?>
			<!-- Affichage de resultat -->		
					<h1>Resultat Test covid-19 </h1>
					<h3>-- Attestation du Test covid-19 En ligne -- </h3>
					<p>	</br>Le directeur régional de la santé de : <b>  <?php echo $donnees['ville'];?> </b>        
					</br> atteste Que l'étudiant:<b> <?php echo $donnees['nom'];?>
                    <?php echo $donnees['prenom'];?></b>
                    </br>le titulaire de la carte d'identité N° <b> <?php echo $donnees['cin'];?></b>
                   
                    </br>l'établissement d'enseignement:<b> <?php echo $donnees['etablissement'];?></b>
                    </br></br><b>==> une analyse en ligne de covid-19 a été menée pour prouver que son résultat est :</b><b> <h3><?php echo $donnees['resultat'];?> </h3></b>
                    </p>
           <!-- telechargement imprimer-->    
				<div class="row print-container">
						<button onclick="window.print();">Imprimer votre attestation</button>
				</div>
				
					
<?php
	}
	}
	?>
	
<!-- FIN Partie PHP  -->


	
	
	
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