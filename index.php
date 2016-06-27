<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0">
	<title>Site CV - Nolan Crochot</title>
    <link rel="stylesheet" href="./styles/reset.css">
	<link rel="stylesheet" href="./styles/grid-format.css">
	<link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/lightbox.css">
</head>
<body>

	<?php
		// Reception des variables pour l'email
		$nom 			= isset($_POST['nom']) ? $_POST['nom'] : NULL ;
		$expediteur 	= isset($_POST['expediteur']) ? $_POST['expediteur'] : NULL ;
		$objet 			= isset($_POST['objet']) ? $_POST['objet'] : 'Sans Objet' ;
		$message 		= isset($_POST['message']) ? $_POST['message'] : NULL ;
		$to				= 'crochot.nolan@gmail.com';

		// Traitement 
		if ($nom && $objet && $expediteur && $message){
			$nom = addslashes($nom);
			$objet = addslashes($objet);
			$message = addslashes($message);
			$message.=' - De '.$nom.' - Email : '.$expediteur;
			mail($to, $objet, $message);
		}
		else {
			$email_error = '<br />Merci de remplir tous les champs.';
		}
	?>

	<!----------------------------->
	<!--       NAVIGATION        -->
	<!----------------------------->
	
	<!-- Navigation PC et tablette -->
	<nav class="navbar nav-top fixed-navbar">
    <div class="wrapper wrapper-navbar">
        <div class="row">
            <div class="navbar-logo">
                <img/><span class=""></span>
            </div>
            <ul>
                <li><a href="#identite" class="nav-identite actual-section">Identité</a></li>
                <li><a href="#competences" class="nav-competences">Compétences</a></li>
                <li><a href="#experiences" class="nav-experiences">Expériences</a></li>
                <li><a href="#realisations" class="nav-realisations">Réalisations</a></li>
                <li><a href="#contact" class="nav-contact">Contact</a></li>
            </ul>
        </div>
    </div>
	</nav>
	<!-- Navigation smartphone -->
	<nav class="s-navbar" id="snavbar">
        <div class="row">
            <div class="s-unfold" id="unfold">
                <div class="unfold-line"></div>
                <div class="unfold-line"></div>
                <div class="unfold-line"></div>
            </div>
        </div>
        <div class="s-menu" id="smenu">
            <ul>
                <li><a href="#identite" class="nav-identite actual-section">Identité</a></li>
                <li><a href="#competences" class="nav-competences">Compétences</a></li>
                <li><a href="#experiences" class="nav-experiences">Expériences</a></li>
                <li><a href="#realisations" class="nav-realisations">Réalisations</a></li>
                <li><a href="#contact" class="nav-contact">Contact</a></li>
            </ul>
        </div>
	</nav>
	<!-- Bouton "Back to the top" smartphone -->
	<div class="backtotop backtotop-already-top">
	    <a href="#snavbar">^</a>
	</div>
	
	<!----------------------------->
	<!--         HEADER          -->
	<!----------------------------->
	
	<header class="header" id="header">
    <div class="wrapper wrapper-header">
        <div class="row">
           <div class="center-vertical">
                <div class="col3 cols6 description">
                    <h1>Nolan Crochot</h1>
                    <div class="localisation">
                        <img src="images/icon_localisation.png">
                        <h2 class="city">Haguenau - <span class="region">Alsace</span></h2>
                    </div>
                    <div class="transition-ligne">
                        <hr />
                        <hr />
                    </div>
                    <div class="situation">
                        <span>EN STAGE (Juillet)</span>
                    </div>
                    <div class="situation-details">
                        <h2>1ère année de DUT MMI</h2>
                        <span class="institution">Institut universitaire d'Haguenau</span>
                    </div>
                </div>
            </div>
            <div class="col3 cols6 photo">
                <img src="./images/silouhette_moi.png" />
            </div>
        </div>
    </div>  		
	</header>
	
	<!----------------------------->
	<!--         CONTENU         -->
	<!----------------------------->	
	
	<main>

    <!----------------------------->
    <!--        Identité         -->
    <!----------------------------->
    <div class="section identite">
        <div class="wrapper wrapper-identite">
            <div class="row section-title" id="identite">
                <h2>Identité</h2>
                <hr />
                <h3>Informations personnelles</h3>
            </div>
            <div class="row section-content">
                <div class="col2 sm-screen-hidden photo">
                    <img src="./images/silouhette_small.png"/>
                </div>
                <div class="col4 cols6 details">
                    <h3>Quelle personnalité ?</h3>
                    <p>Passionné par le domaine Web, je m'applique dans l'intégration, le développement, et même le design qui comble notre matière ergonomique. Toujours curieux d'apprendre et de pratiquer, j'aime fournir un grand investissement dans les projets qui sauraient m'ouvrir à de nouvelles techniques du Web.</p>
                   <ul class="characteristics">
                       <li>Dynamique</li>
                       <li>Entreprenant</li>
                       <li>Perfectionniste</li>
                   </ul>
                    <p>Aussi détenteur du permis B.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!----------------------------->
    <!--       Compétences       -->
    <!----------------------------->
    <div class="section competences">
        <div class="wrapper wrapper-competences">
            <div class="row section-title" id="competences">
                <h2>Compétences</h2>
                <hr />
                <h3>Qualifications dans les domaines du web</h3>
            </div>
            <!-- Compétences intégration --> 
            <div class="row section-content comp-integration">
                <div class="comp-progressbar col1-5 cols6">
                    <canvas class="progressbar animate sm-screen-hidden" id="progressbar-int" width="190" height="190"></canvas>
                </div>
                <div class="col4-5 cols6">
                    <div class="comp-container">
                        <h4 class="s-details-title">Intégration web (HTML / CSS / JS)</h4>
                        <div class="logiciels">
                        <img src="images/icones/icon_html.png" />
                        <img src="images/icones/icon_css.png" />
                        <img src="images/icones/icon_js.png" />
                        </div>
                        <div class="details">
                            <h4 class="sm-screen-hidden">Intégration web (HTML / CSS / JS)</h4>
                            <ul>
                                <li>Intégration complète de site ou pages web de A à Z (HTML).</li>
                                <li>Création des styles et colorisation (CSS).</li>
                                <li>Transitions animées, menus dynamiques (JS/CSS).</li>
                                <li>Remodulation du style ou des contenus sur les CMS. </li>
                            </ul>
                            <p class="quote">"Internet, c’est avoir toute la sagesse et la bassesse du monde au bout des doigts" - B. Gagnon</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Compétences developpement --> 
            <div class="row section-content comp-developpement">
                <div class="comp-progressbar col1-5 cols6">
                    <canvas class="progressbar animate sm-screen-hidden" id="progressbar-dev" width="190" height="190"></canvas>
                </div>
                <div class="col4-5 cols6">
                    <div class="comp-container">
                        <h4 class="s-details-title">Développement web (PHP / SQL)</h4>
                        <div class="logiciels">
                            <img src="images/icones/icon_php.png" />
                        </div>
                        <div class="details">
                            <h4 class="sm-screen-hidden">Développement web et gestion de bases  (PHP / SQL)</h4>
                            <ul>
                                <li>Développement de quelques interfaces pour les utilisateurs (PHP/SQL).</li>
                                <li>Création de bases de données (mySQLi).</li>
                                <li>Divers programmes permettant un conditionnement ou une meilleure organisation des contenus du sites.</li>
                                
                            </ul>
                            <p class="quote">"Si debugger, c’est supprimer des bugs, alors programmer ne peut être qu'en ajouter" - E. Dijkstra</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Compétences developpement --> 
            <div class="row section-content comp-graphisme">
                <div class="comp-progressbar col1-5 cols6">
                    <canvas class="progressbar animate sm-screen-hidden" id="progressbar-gra" width="190" height="190"></canvas>
                </div>
                <div class="col4-5 cols6">
                    <div class="comp-container">
                        <h4 class="s-details-title">Infographisme (Ps / Ai / CSS)</h4>
                        <div class="logiciels">
                            <img src="images/icones/icon_ps.png" />
                            <img src="images/icones/icon_ai.png" />
                        </div>
                        <div class="details">
                            <h4 class="sm-screen-hidden">Infographisme et design (Photoshop / Illustrator / CSS)</h4>

                            <ul>
                                <li>Création d'affiches ou de flyers.</li>
                                <li>Recompositions ou modification d'images et de photographies, corrections photographiques.</li>
                                <li>Création de pictogrammes, de logos, ou de dessins divers.</li>
                                <li>Styles et chartes graphiques pour sites Web.</li>
                                
                            </ul>
                            <p class="quote">“Soyez simple avec art.” - N. Boileau</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!----------------------------->
    <!--       Expériences       -->
    <!----------------------------->
    <div class="section experiences">
        <div class="wrapper wrapper-experiences">
            <div class="row section-title" id="experiences">
                <h2>Expériences & Formations</h2>
                <hr />
                <h3>Parcours scolaire et expériences professionnelles</h3>
            </div> 
            <div class="row section-content scolarite">
                <div class="group-box">
                    <div class="special-row">
                         <div class="line"></div>
                    </div>  
                    <div class="special-row">
                        <div class="scolarite-box">
                            <h3>BAC STI2D</h3>
                            <h4>Option SIN</h4>
                            <p class="institut">Lycée la briquerie</p>
                            <p class="ville">Thionville</p>
                        </div>
                        <div class="scolarite-box">
                            <h3>1e année DUT Informatique</h3>
                            <p class="institut">IUT Charlemagne</p>
                            <p class="ville">Nancy</p>
                        </div>
                        <div class="scolarite-box">
                            <h3>1e année DUT MMI</h3>
                            <p class="institut">IUT d'Haguenau</p>
                            <p class="ville">Haguenau</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-content professions">
               <div class="special-row">
                    <ul>
                        <li>
                            <span class="date">Juillet 2016</span>
                            <span class="designation"> : Stage dans le domaine web et graphique à Arcelor Mital</span>
                            <span class="lieu"> - LUXEMBOURG, Luxembourg.</span><br />
                            <span class="enrichissement">Début de stage le 3 Juillet.</span>
                        </li>
                        <li>
                            <span class="date">Mai-Juillet 2015</span>
                            <span class="designation"> : Assistant conception web pour l’entreprise Teguluxe</span>
                            <span class="lieu"> - JOEUF, France.</span><br />
                            <span class="enrichissement">Expériences d’intégration et d’utilisation de CMS (Joomla). </span>
                        </li>
                        <li>
                            <span class="date">Mars 2009</span>
                            <span class="designation"> : Stage découverte chez Celimage (entreprise multimédia)</span>
                            <span class="lieu"> - LUXEMBOURG, Luxembourg.</span><br />
                            <span class="enrichissement">Découverte du monde professionnel, intérêt pour le multimédia. </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!----------------------------->
    <!--       Réalisation       -->
    <!----------------------------->
    <div class="section realisations">
        <div class="wrapper wrapper-realisations">
            <div class="row section-title" id="realisations">
                <h2>Réalisations</h2>
                <hr />
                <h3>Mes projets et de travaux réalisés</h3>
            </div>
			<div class="row section-content section-row-realisations">
				<div class="portfolio">
				    <div class="portfolio-row categories-portfolio-row">
                            <ul class="category-list">
                                <li class="cat-all cat-selected">Tout</li>
                                <li class="cat-web">Intégration</li>
                                <li class="cat-gra">Graphisme</li>
                                <li class="cat-dev">Développement</li>
                            </ul> 
                    </div>
					<div class="portfolio-row items-portfolio-row">
					   
						<div class="item-align port-item itemweb" id="portitem1">
							<div>
								 <div class="description">
									<h3>Il Cortile (fictif)</h3>
									<span>Un site conçu depuis le CMS Wordpress dans le cadre d'un projet scolaire. Ce site n'est pas le site officiel du restaurant et ne fait l'objet d'aucun acte commercial.</span><br />
									<span class="info">cliquez pour voir plus</span>
									<a class="button-readmore" href="https://tp.iha.unistra.fr/projets/mmi1/ptcomg25/PTcom/wordpress/fr/"></a>
								 </div>
							</div>
						</div>
						<div class="item-align port-item itemweb" id="portitem2">
							<div>
								 <div class="description">
									<h3>Mon CV interactif</h3>
									<span>C'est le site sur lequel vous vous trouvez actuellement ! Entièrement codé main, mettant en oeuvre de l'HTML, du CSS et du Javascript.</span>
									<span class="info">cliquez pour voir plus</span>
									<a class="button-readmore" href="index.php"></a>
								 </div>
							</div>
						</div>
						<div class="item-align port-item itemdev" id="portitem3">
							<div>
								 <div class="description">
									<h3>Interface d'une bibliothèque</h3>
									<span>Une interface conçue pour différents groupes d'utilisateurs, avec différentes permissions, dans le cadre d'un projet scolaire.</span>
									<span class="info">cliquez pour voir plus</span>
									<a class="button-readmore" href="https://tp.iha.unistra.fr/~crochot/info/fetsch/TP3/index.php"></a>
								 </div>
							</div>
						</div>
						<div class="item-align port-item itemgra" id="portitem4">
							<div>
								 <div class="description">
									<h3>Contenu graphique Stellios - YT</h3>
									<span>La création d'un logo, de nombreuses miniatures et de quelques bannières pour la chaine Youtube d'un vidéaste.</span>
									<span class="info">cliquez pour voir plus</span>
									<a class="button-readmore" href="https://www.youtube.com/user/stribiliounou"></a>
								 </div>
							</div>
						</div>
						<div class="item-align port-item itemgra" id="portitem6">
							<div>
								 <div class="description">
									<h3>Charte et Maquette Etchever</h3>
									<span>Charte Graphique et Maquette fictivement destiné à la société Etchever, dans le cadre d'un projet scolaire.</span>
									<span class="info">cliquez pour voir plus</span>
									<div class="button-readmore" id="item6"></div>
								 </div>
							</div>
						</div>
						<div class="item-align port-item itemgra" id="portitem7">
							<div>
								 <div class="description">
									<h3>Style Graphique : Apocalyptø</h3>
									<span>Tout un ensemble graphique destiné à une histoire interactive en ligne, dans le cadre d'un projet scolaire. Le projet sera probablement remis à neuf.</span>
									<span class="info">cliquez pour voir plus</span>
									<a class="button-readmore" href=""></a>
								 </div>
							</div>
						</div>
						<div class="item-align port-item itemweb" id="portitem8">
							<div>
								 <div class="description">
									<h3>Site Teguluxe V.2.0</h3>
									<span>Un site pour l'entreprise Teguluxe - FRANCE. Actuellement une nouvelle version est en cours de réalisation.</span>
									<span class="info">Le lien n'est pas encore disponible</span>
								 </div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
    
    <!-- Lightboxes -->
   <!-- Etchever --> 
    <div class="lightbox" id="lbitem6">
        <div class="lightbox-content">
            <div class="close-box-btn"></div>
            <div class="previous end-item-get"></div>
            <div class="next"></div>
            <div class="content">
                <img class="item-visible" id="img1" src="./images/projects/itemref6/cg1.png" />
                <img class="item-hidden" id="img2" src="./images/projects/itemref6/cg2.png" />
                <img class="item-hidden" id="img3" src="./images/projects/itemref6/ma1.png" />
                <img class="item-hidden" id="img4" src="./images/projects/itemref6/ma2.png" />
            </div>
        </div>
    </div>
    

    <!----------------------------->
    <!--         Contact         -->
    <!----------------------------->
    
    <div class="section contact">
        <div class="wrapper wrapper-contact">
            <div class="row section-title" id="contact">
                <h2>Contact</h2>
                <hr />
                <h3>Me contacter par message</h3>
            </div>
            <div class="row section-content section-row-contact">
                <form class="contact-form" id='contactform' action="index.php#contact" method="post">  
                    <div class="col2-5 cols6 form-identification">
                        <input type="text" name="nom" placeholder="Votre nom"/>
                        <input type="email" name="expediteur" placeholder="Votre adresse de messagerie"/> 
                        <input type="text" name="objet" placeholder="Objet"/> 
                    </div>
                    <div class="col3-5 cols6 form-message">
                        <textarea name="message" placeholder="Votre message"></textarea>
                    </div> 
                    <div class="col6 form-send">
                        <input class="btn-submit" type="submit" value="Envoyer"/>
                    </div>
					<?php/*
						if (isset($email_error) && $email_error)
							echo '<div class="col6" style="text-align: center;"><p>'.$email_error.'</p></div>';
					*/?>
                </form>    
            </div>
        </div>
    </div>
	
	</main>
	
	<!----------------------------->
	<!--         FOOTER          -->
	<!----------------------------->
	
	<footer>
	    <div class="copyright">
            <p>Nolan Crochot © copyright 2016</p><span class="line-transition"> - </span><a href="./pages/mentions_legales.html">mentions légales</a>
		</div>
	</footer>

	<!----------------------------->
	<!--         SCRIPTS         -->
	<!----------------------------->
    
    <!-- Librairie Jquery et plugins -->
	<script src="./js/jquery-3.0.0.min.js"></script>
    <script src="./js/jquery.waypoints.min.js"></script>
    <!-- Script du portfolio -->
	<script src="./js/portfolio.js"></script>
    <!-- Barre de navigation, navigation smartphone, et leur transition fluide -->
    <script src="./js/navbar.js"></script>
    <script src="./js/snavbar.js"></script>
    <script src="./js/smooth_scroll_anchor.js"></script>
    <script src="./js/back_to_the_top.js"></script>
    <!-- Barres de progression circulaires (section compétences) -->
    <script src="./js/circular_progress_bar_int.js"></script>
    <script src="./js/circular_progress_bar_dev.js"></script>	
    <script src="./js/circular_progress_bar_gra.js"></script>
    <!-- lightbox -->
    <script src="./js/lightbox.js"></script>
	
</body>
</html>