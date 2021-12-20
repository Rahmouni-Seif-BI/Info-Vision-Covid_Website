<!DOCTYPE HTML>

<html>
	<head>
	<style>
			table,th,td{
				border:1px solid black;
				align:center; 
			}
			table{
				border-collapse:collapse;
			}
		</style>
		<title>Generic - Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<form   nae="f" method="POST"  action="filtre.php">
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
							<h2>liste d'inscrit</h2>
							
						</header>
						<section class="wrapper style5">
							<div class="inner">
		<!-- Partie PHP --> 
	<?php 
	
		/*---Conexion & Selection de Base (WAMP-SERVER)---*/
	
		 $con= mysqli_connect("localhost","root","","covid") or  die ("erruer de  connexion"); 


		/*---Requette SQL selectionner tout les lignes de tab (inscritvous) ---*/
		
		
		 $req="SELECT * FROM inscritvous ";
				$res=mysqli_query($con,$req) or die ("selct mahabech"); 
				
			

				echo " <table> <tr> " ;
				echo " <td><h2>Lister tous les  etudiants par : </h2><td>	"; ?>
			<td>
			 <SELECT name="filtre" size="1">
					
								<OPTION value="normal">Etat : Normal</OPTION> 
								<OPTION value="grave">Etat : Grave</OPTION>
								<OPTION value="oui">Passé un Test</OPTION> 	
								<OPTION value="non">Pas de Test</OPTION>
			</select>
			</td><td><input type="submit" value="Chercher"></td></tr>			
			</table>
			<?php 
			//Afficher le résultat dans un tableau
			echo "<table>";
			echo "<tr>";
			echo "<th>nom</th>";
			echo "<th>Prenom</th>";
			echo "<th>cin</th>";
			echo "<th>ville</th>";
			echo "<th>Etablisement</th>";
			echo "<th>Mot de passe </th>";
			echo "</tr>";

			while ($t = mysqli_fetch_array($res)) 
			{
			echo "<tr>" ; 
				echo "<td>".$t[0]."</td>";
				echo "<td>".$t[1]."</td>";
				echo "<td>".$t[2]."</td>";
				echo "<td>".$t[3]."</td>";
				echo "<td>".$t[4]."</td>";
				echo "<td>".$t[5]."</td>";
			echo "</tr>" ;
			
			}

			echo "</table>";

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
		</form>
	</body>
</html>