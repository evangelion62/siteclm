<?php
	require_once '../include/conect.bdd.php';
	require_once '../include/functions.php';
	
	if (session_id() == ""){
		session_name('newSiteClm'); 
		session_start();
	}

	$reqOtherSite = $bdd->prepare('SELECT * FROM user WHERE nom_utilisateur = :nom_utilisateur');
	$reqOtherSite->execute(array('nom_utilisateur' => $_SESSION["login"]));

	foreach ($reqOtherSite as $key) {
		if (!empty($key["cahierDeText"])){
			$cahier = explode(";", $key["cahierDeText"]);
		}
		else $cahier = null;

		if (!empty($key["GRR"])){
			$grr = explode(";", $key["GRR"]);
		}
		else $grr = null;

		if (!empty($key["pKwartz"])){
			$pKwartz = explode(";", $key["pKwartz"]);
		}
		else $pKwartz = null;
		if (!empty($key["webClasseur"])){
			$webclasseur = explode(";", $key["webClasseur"]);
		}
		else $pKwartz = null;
	}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Collège Louise Michel</title>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="le site du collège Louise Michel de lille">
	<meta name="author" content="Fréalle Pierre et Ronger Sébastien">
	
	<link href="../include/css/bootstrap.css" rel="stylesheet">
	<link href="../include/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="../include/css/mycss.css" rel="stylesheet">

	<script src="../include/js/jquery.js"></script>
	<script src="../include/js/bootstrap.js"></script>
	<script src="../include/js/MyJS.js"></script>
	<script src="../include/js/clgEnImage.js"></script>
	<script src="../include/js/loginChocolat.js"></script>
	
	
</head>

<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<a class="brand" href="../index.php" style="margin-left:5px;">Collège Louise Michel</a>		
			<div class="nav-collapse">
				<ul class="nav link">				
					<li><a href="../index.php"><i class="icon-home icon-white"></i> Accueil</a></li>										
					<li><a href="../rubrique/agenda.php"><i class="icon-calendar icon-white"></i> Agenda</a></li>										
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-heart icon-white"></i> Vie du collège<b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="../rubrique/actu.php"><i class="icon-globe icon-black"></i> Actualité</a></li>
							<li class="divider"></li>							
							<li><a href="../rubrique/clgEnImages.php"><i class="icon-film icon-black"></i> Le Collège en images</a></li>
							<li class="divider"></li>							
							<li><a href="../rubrique/revueDePresse.php"><i class="icon-comment icon-black"></i> Revue de presse</a></li>							
						</ul>
					</li>				
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-globe icon-white"></i> Accès à<b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="http://84.14.30.198" target=_blank><img src="../include/image/icone-pronote-2012.png"/> Notes et absences</a></li>
							<li class="divider"></li>







							<li><a>
								<form action="http://195.146.240.74/cahier/cahiertexte/authentification/auth.php" method="post" onsubmit:"javascript:submit_pass_new();" id="cdtForm"> 
									<img src="../include/image/CahierDeTexteEnLigne.ico.png"/>
									<input type='hidden' name='md5' />
									<input type="hidden" name="nom_prof" value= <?php echo json_encode($cahier[0]); ?>/> 
									<input type="hidden" name="passe" value= <?php echo json_encode($cahier[1]); ?>/> 
									<input type="submit" value="Cahier de texte" /> 
								</form></a>
							 </li>
							









							<li class="divider"></li>	
							<li><a href="http://obii.ac-lille.fr" target=_blank><img src="../include/image/b2i.ico.gif"/> B2i - élèves</a></li>
							<li class="divider"></li>	







							<li><a>
								<form action="https://webclasseur.ac-lille.fr/servlet/com.jsbsoft.jtf.core.SG" method="post" id="grrForm"> 
									<img src="../include/image/favicon.ico"/>
									<input type="hidden" name="PROC" value="IDENTIFICATION_FRONT" />
									<input type="hidden" name="#ECRAN_LOGIQUE#" value="CONNEXION" />
									<input type="hidden" name="#ETAT#" value="null" />
									<input type="hidden" name="LOCALE" value="0" />


									
									<input type="hidden" name="#FORMAT_LOGIN" value="1;0;0;64;LIB=Identifiant;0" />
									<input type="hidden" name="#FORMAT_PASSWORD" value="1;0;0;64;PASSWORD=YES,LIB=Mot de passe;1" />
									<input type="hidden" name="LOGIN" value= <?php echo json_encode($webclasseur[0]); ?>/> 
									<input type="hidden" name="PASSWORD" value= <?php echo json_encode($webclasseur[1]); ?>/> 
									<input type="submit" value="Webclasseur" /> 
								</form></a>
							</li>



							<li class="divider"></li>




							<li><a>
								<form action="http://195.146.240.74/grr/login.php" method="post" id="grrForm"> 
									<img src="../include/image/totem_grr.png"/>
									<input type="hidden" name="login" value= <?php echo json_encode($grr[0]); ?>/> 
									<input type="hidden" name="password" value= <?php echo json_encode($grr[1]); ?>/> 
									<input type="submit" value="GRR" /> 
								</form></a>
							</li>






							<li class="divider"></li>


							<li><a>
								<form action="http://195.146.240.74:8080/horde3/login.php" method="post" id="grrForm"> 
									<img src="../include/image/Ksphere.ico.gif"/>
									<input type="hidden" name="url" value="">
									<input type="hidden" name="anchor_string" id="anchor_string" value="">
									<input type="hidden" name="horde_user" value= <?php echo json_encode($pKwartz[0]); ?>/> 
									<input type="hidden" name="horde_pass" value= <?php echo json_encode($pKwartz[1]); ?>/> 
									<input type="submit" value="Portail Kwartz" /> 
								</form></a>
							</li>





							<li class="divider"></li>							
							<li><a href="https://webmail.ac-lille.fr/horde/login.php" target=_blank><img src="../include/image/445px-Horde-logo_svg.png"/> Webmail académique</a></li>
							<li class="divider"></li>							
							<li><a href="https://bv.ac-lille.fr/portail/" target=_blank><img src="../include/image/favicon.ico"/> Applications académiques</a></li>
							<li class="divider"></li>							
							<li><a href="http://195.146.240.74/meteo/" target=_blank><img src="../include/image/m.png"/> Météo</a></li>
						</ul>
					</li>
					
				 <?php
					// if ( $_SESSION["adminlvl"] == 3 || $_SESSION["adminlvl"] == 5){				
					// $req = $bdd->prepare('SELECT password, adminLevel FROM user WHERE nom_utilisateur = :id');
					// $req->execute(array('id' => $_SESSION["login"]));
						// if ($donnée = $req->fetch() ){
							// if ($_SESSION["passEncrypt"]== myencrypt($donnée['password'])){
				// ?>
				 <li><a href="../rubrique/espaceprof.php"><i class="icon-star icon-white"></i> Espace professeurs</a></li>					
				 <?php		
							// }
						// }
					// }
				// ?>
				</ul>
				<ul class="nav pull-right">
					<li><a href="ftp://195.146.240.74">Accès documents</a></li>
					<li><a href="http://clg.lm.free.fr">La mémoire du collège</a></li>
					<li class="divider-vertical"></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $contentConnexion = (isset($_SESSION['login'])) ?  $_SESSION['login'] : 'connexion'?><b class="caret"></b></a>
						<ul class="dropdown-menu" style="padding: 10px; background-color: #EEEEEE;">
							<?php 
						if (!isset($_SESSION["login"])){
							echo'<form method="post" action="../include/login.php">
							<label>identifiant</label>';
							if (isset($_SESSION['idErreur'])){
								echo '<p style="color:red"><i class="icon-exclamation-sign"></i> '.$_SESSION['idErreur'].'</p>';
							}
							echo'<input type="text" name="id">
							<label>mot de passe</label>';
							if (isset($_SESSION['passErreur'])){
								echo '<p style="color:red"> <i class="icon-exclamation-sign"></i> '.$_SESSION['passErreur'].'</p>';
							}
							echo'<input type="password" name="pass">
							<input type="submit" value="connexion">
							</form>';
						}else{
							echo'<form method="post" action="../include/logout.php" style="marging:0px; padding:0px;">
							<br/><input type="submit" value="déconnexion">
							</form>';
							echo'<form method="post" action="../rubrique/manageCompte.php" style="marging:0px; padding:0px;">
									<button>Mes identifiants</button>
								</form>';

							if ($_SESSION["adminlvl"] == 5){				
								$req = $bdd->prepare('SELECT password, adminLevel FROM user WHERE nom_utilisateur = :id');
								$req->execute(array('id' => $_SESSION["login"]));
								if ($donnée = $req->fetch() ){
									if ($_SESSION["passEncrypt"]== myencrypt($donnée['password'])){
										echo'<form method="post" action="../rubrique/manageUsers.php" style="marging:0px; padding:0px;">
												<button>Gestion des comptes</button>
											</form>';
									}
								}
							}
						}
							?>
						</ul>

					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>