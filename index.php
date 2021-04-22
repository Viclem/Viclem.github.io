<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Nalouette</title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

        <!-- My CSS -->
        <link rel="stylesheet" href="style.css" />

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    </head>

    <body>

<!-- INDISPENSABLE POUR FONCTIONNEMENT DE L'ANIMATION TOGGLE -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- ===== TEST JAVASCRIPT ===== -->
<!-- <script type="text/javascript">
alert("Hello Javapoint");
</script> -->


<!-- ==========================
BANNIERE D'ACCUEIL NALOUETTE
========================== -->
<div class="background-image px-4 py-5 text-center link-active-scroll" style="background-image: url('./images/accueil.jpg');" id="accueil">
	<div class="py-5 mt-3">
		<h1 class="mt-5 display-3">Nalouette</h1>
		<p class="display-6 fs-5 mb-4 text-white">
			création sur mesure
			<br />
			 tenues artistiques, sportives et accessoires
		</p>
		<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
			<a class="btn btn-outline-light btn-lg px-4" href="#contact" role="button">Demander un devis</a>
		</div>
	</div>
</div>


<!-- ==========================
BARRE DE NAVIGATION MENU
========================== -->
<nav class="navbar navbar-expand-sm sticky-top navbar-light bg-light">
	<div class="container">
		<a href="#" class="navbar-brand">
			<!-- logo Nalouette only desktop taille 60px -->
			<img src="./images/Logo/Nalouette_logo.png" class="d-none d-sm-block" width="60">
			<!-- logo Nalouette only mobile taille 40px -->
			<img src="./images/Logo/Nalouette_logo.png" class="d-sm-none d-block" width="40">
		</a>
		<a class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#navbarMenu">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="collapse navbar-collapse" id="navbarMenu">
			<ul class="navbar-nav me-auto text-uppercase text-end pe-2" style="line-height: 14px;  letter-spacing: 0.04rem;">
				<li class="nav-item"><a class="nav-link active" href="#accueil">Accueil</a></i>
				<li class="nav-item"><a class="nav-link" href="#realisations">Réalisations</a></li>
				<li class="nav-item"><a class="nav-link" href="#conseils">Conseils</a></li>
				<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
			</ul>
			<div class="d-none d-sm-block">
				<a href="https://facebook.com/nalouette/" target="_blank"><i class="bi bi-facebook navbar-rs-link"></i></a>
				<a href="https://www.instagram.com/nalouette28/?igshid=xbfoc60naeft" target="_blank"><i class="bi bi-instagram navbar-rs-link"></i></a>
			</div>
		</div>
	</div>
</nav>

<!-- ==========================
GALERIE PHOTOS
========================== -->
<section class="container link-active-scroll" id="realisations">
  <h2 class="display-6">Mes réalisations</h2>
  <div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul>
        <li class="list active" data-filter="all">Tout</li>
        <li class="list" data-filter="2021">2021</li>
        <li class="list" data-filter="2020">2020</li>
      </ul>
    </div>
  </div>
  <div class="row g-3 product">
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2021">
      <a href="#" data-bs-toggle="modal" data-bs-target="#Modal1"><img src="./images/1_indiv_Louane/indiv_louane_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2021">
      <a href="#" data-bs-toggle="modal" data-bs-target="#Modal2"><img src="./images/2_duonatTC_ClioClub/duonat_clioclub_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2021">
      <a href="#"><img src="./images/4_indiv_Lou-Elise/indiv_louelise_2.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2021">
      <a href="#"><img src="./images/3_ens_LesLucioles/ens_leslucioles_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2021">
      <a href="#"><img src="./images/5_indiv_Auréane/indiv_aureane_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2021">
      <a href="#"><img src="./images/6_indiv_Fany/indiv_fany_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2020">
      <a href="#"><img src="./images/7_indiv_Maïly/indiv_maily_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2020">
      <a href="#"><img src="./images/9_indiv_Célia/indiv_celia_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2020">
      <a href="#"><img src="./images/10_indiv_Margaux/indiv_margaux_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2020">
      <a href="#"><img src="./images/11_indiv_Athénaïs/indiv_athenais_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2020">
      <a href="#"><img src="./images/8_indiv_Liza/indiv_liza_1.jpg" alt="" class="img-fluid"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-6 filter 2020">
      <a href="#"><img src="./images/12_indiv_Adeline/indiv_adeline_3.jpg" alt="" class="img-fluid"></a>
    </div>
  </div>
</section>

<!-- ===== MODAL LOUANE ===== -->
<div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="container">
				<div class="modal-header" style="border: 0">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-12">
							<p class="display-6 fs-5 text-uppercase m-0" id="exampleModalLabel">
								<strong>Jupette individuelle</strong>
							</p>
							<p class="display-6 fs-6 text-uppercase">
								Louane - Clio-Club, St-Georges/Eure
							</p>
							<p class="fw-light mb-0" style="font-size: 14px;">
								Voile chair, lycra rouge, dentelle noire
								<br />
								+ de 700 strass
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12 g-3">
							<img src="./images/1_indiv_Louane/indiv_louane_1.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-6 col-sm-12 g-3">
							<img src="./images/1_indiv_Louane/indiv_louane_2.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 g-3">
							<img src="./images/1_indiv_Louane/indiv_louane_3.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-12 col-sm-12 g-3">
							<img src="./images/1_indiv_Louane/indiv_louane_4.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="modal-footer justify-content-center my-2" style="border: 0">
						<button type="button" class="btn btn-sm text-uppercase text-white" style="background-color: #4c6c8c;" data-bs-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ===== MODAL DUO NAT TC ===== -->
<div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="container">
				<div class="modal-header" style="border: 0">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p class="display-6 fs-5 text-uppercase m-0" id="exampleModalLabel">
						<strong>Jupette duo nationale toutes catégories</strong>
					</p>
					<p class="display-6 fs-6 text-uppercase">
						Clio-Club, St-Georges/Eure
					</p>
					<p class="fw-light mb-0" style="font-size: 14px;">
						Voile chair, velours bleu, lycra bleu et blanc, résille bleue
						<br />
						Plumes tons de bleu
						<br />
						+ de 700 strass
						<br />
						Création réalisée en 2 exemplaires
					</p>
					<div class="row">
						<div class="col-md-6 col-sm-12 g-3">
							<img src="./images/2_duonatTC_ClioClub/duonat_clioclub_1.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-6 col-sm-12 g-3">
							<img src="./images/2_duonatTC_ClioClub/duonat_clioclub_2.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 g-3">
							<img src="./images/2_duonatTC_ClioClub/duonat_clioclub_3.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-12 col-sm-12 g-3">
							<img src="./images/2_duonatTC_ClioClub/duonat_clioclub_4.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="modal-footer justify-content-center my-2" style="border: 0">
						<button type="button" class="btn btn-sm text-uppercase text-white" style="background-color: #4c6c8c;" data-bs-dismiss="modal">Fermer</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- ==========================
QUI SUIS-JE ?
========================== -->
<section class="bg-light">
	<div class="container">
		<div class="row align-items-center">		<!-- align-items-center = alignement vertical -->
			<div class="col-md-4 col-5 gx-5">
        <img src="./images/quisuisje.jpg" class="img-fluid" style="border-radius:50%;" alt="quisuisje">
			</div>
			<div class="col-md-8 col-12 gx-5">
				<h2 class="display-6">Qui suis-je ?</h2>
				<p style="text-align: justify;">
					Nalouette est une auto-entreprise créée en août 2012.
					<br />
					Longtemps passionnée de couture et de gymnastique rythmique grâce à mes filles, j’ai eu l’idée de proposer mes services pour réaliser des justaucorps. Avec des modèles très simples au début de mon activité, mon offre s’est étoffée au fil des années avec des jupettes plus complexes, et une diversité des accessoires proposés. Aujourd’hui, Nalouette affiche un beau parcours grâce à votre confiance, et de très belles jupettes mises en lumière lors des compétitions de Gymnastique Rythmique.
				</p>
			</div>
		</div>
	</div>
</section>


<!-- ==========================
 CONSEILS
========================== -->
<section id="conseils">
	<div class="container link-active-scroll">
		<div class="row">
			<!-- Techniques de création -->
			<div class="col-md-6 col-12 gx-5" style="text-align: justify;">
				<div class="text-center">
					<i class="bi bi-cup-straw" style="font-size: 2rem; color: #4c6c8c;"></i>
				</div>
				<h2 class="display-6">Techniques de création</h2>
				<p>Toutes les créations sont réalisées en tissus lycra® élastiques.</p>
				<p>L’assemblage est fait avec une surjeteuse, en point de surjet 4 fils avec point de sécurité intégré.</p>
				<p>Les strass sont collés (technique Hotfix) ou cousus main.</p>
				<p>Les créations nécessitent beaucoup d’attention, elles sont fragiles et demandent à être manipulées avec soin.</p>
			</div>
			<!-- Conseils d'entretien -->
      <div class="col-md-6 col-12 gx-5" style="text-align: justify;">
        <div class="text-center">
          <i class="bi bi-box-seam" style="font-size: 2rem; color: #fa5e74;"></i>
        </div>
        <h2 class="display-6">Conseils d'entretien</h2>
        <p>· Laver le justaucorps à la main et à l’eau froide, avec une lessive liquide douce (lessive pour la laine)
          <br />· Essorer délicatement dans une serviette éponge, puis laisser sécher à l’air libre sur un cintre
          <br />· Ne pas laisser tremper
          <br />· Ne pas frotter
          <br />· Ne pas exposer au soleil
          <br />· Ne pas mettre au sèche-linge
        </p>
          <p>Il est possible d’utiliser une lingette absorbante de couleur, certains tissus de couleur vive pouvant en effet être amenés à dégorger dans l’eau de lavage.</p>
      </div>
    </div>
</section>


<!-- ==========================
CONTACTEZ-MOI
========================== -->
<section class="link-active-scroll bg-light" id="contact">
  <div class="container">
      <div class="row align-items-center text-md-end text-center pb-4">
        <!-- contactez-moi -->
        <div class="col-md-7 col-12">
          <h2 class="display-6 fs-1 text-uppercase px-5">Contactez-moi</h2>
        </div>
        <!-- rs + mail / block on sm -->
        <div class="col-md-5 col-12 skew text-md-start text-center d-md-block d-none">
          <p>
            <a href="https://facebook.com/nalouette/" target="_blank"><i class="bi bi-facebook fs-5"></i></a>
            <a href="https://www.instagram.com/nalouette28/?igshid=xbfoc60naeft" target="_blank"><i class="bi bi-instagram fs-5"></i></a>
          </p>
          <p>
            <a href="mailto:nalouette28@gmail.com" class="mail-link display-6 fs-5">nalouettecreation@gmail.com</a>
          </p>
        </div>
        <!-- rs+ mail / sm only -->
        <div class="col-12 d-block d-md-none">
          <div>
            <a href="https://facebook.com/nalouette/"><i class="bi bi-facebook fs-5"></i></a>
            <a href="https://www.instagram.com/nalouette28/?igshid=xbfoc60naeft"><i class="bi bi-instagram fs-5"></i></a>
          </div>
          <div class="">
            <a href="mailto:nalouette28@gmail.com" class="mail-link display-6 fs-5 ">nalouettecreation@gmail.com</a>
          </div>
        </div>
      </div>
  	<!-- form -->
  	<form class="my-3" action="send_form.php" method="post">
  		<div class="row justify-content-center align-items-center">
        <!-- 1ère colonne "infos" -->
  			<div class="col-lg-4 gx-5">
  				<div class="form-floating mb-2">   <!-- = dans la case -->
  					<input type="text" name="name" class="form-control form-control-sm" id="name">
  					<label for="name">Nom</label>
  				</div>
  				<div class="form-floating mb-2">
  					<input type="email" name="email" class="form-control form-control-sm" id="email">
  					<label for="email">Email</label>
  				</div>
  				<div class="form-floating mb-2">
  					<input type="tel" name="phone" class="form-control form-control-sm" id="phone">
  					<label for="phone">Téléphone</label>
  				</div>
  			</div>
        <!-- 2ème colonne "message" -->
  			<div class="col-lg-5 gx-5">
  				<div class="form-floating">
  					<textarea name="message" class="form-control form-control-sm" id="message" style="height: 150px"></textarea>
  					<label for="message">Message</label>
  				</div>
  				<div>
            <div class="row align-items-center">
              <div class="col-5 mb-2">
                <label for="pj" class="form-label form-control-sm">Ajouter une pièce jointe :</label>
              </div>
              <div class="col-7 mb-2">
                <input class="form-control form-control-sm" type="file" id="pj" multiple>
              </div>
            </div>
  				</div>
  			</div>
  			<div class="text-center my-3">
  				<button type="submit" class="btn text-white text-uppercase px-4" style="background-color: #4c6c8c;">Envoyer</button>
  			</div>
  		</div>
  	</form>
  </div>
</section>

<!-- "placeholder=Leave a comment here" = texte écrit par défaut dans le formulaire et à remplacer par l'utilisateur -->


<!-- ==========================
MERCI LES PHOTOGRAPHES
========================== -->
<section>
	<div class="container text-center gx-5">
		<p>
			Merci aux photographes qui mettent en lumière mes réalisations :
		</p>
		<div class="row fw-light">
			<div class="col-md-2 col-12">
				<a class="photographes-link" href="https://www.facebook.com/AnniePhotographies/" target="_blank">Annie Photographies</a>
			</div>
			<div class="col-md-2 col-12">
				<a class="photographes-link" href="https://www.facebook.com/ngtuan41350/" target="_blank">N’Guyen Photographies</a>
			</div>
			<div class="col-md-2 col-12">
				<a class="photographes-link" href="https://www.facebook.com/profile.php?id=100044212970068" target="_blank">Cybile C. Photography</a>
			</div>
			<div class="col-md-2 col-12">
				<a class="photographes-link" href="https://href.li/?https://facebook.com/HeloGym/" target="_blank">AdlB</a>
			</div>
			<div class="col-md-2 col-12">
				<a class="photographes-link" href="https://fr-fr.facebook.com/michellephotographe2/" target="_blank">Michel Le Photographe</a>
			</div>
			<div class="col-md-2 col-12">
				<a class="photographes-link" href="https://www.facebook.com/" target="_blank">Denis Guillon</a>
			</div>
		</div>
	</div>
</section>


<!-- ==========================
FOOTER
========================== -->
<footer id="footer">
  <div class="container">
    <p class="display-6 text-end" style="font-size: 10px"><strong>
      <?php
      $file = $_SERVER["SCRIPT_NAME"];
      $break = Explode('/', $file);
      $pfile = $break[count($break) - 1];
      //echo $pfile;
      echo "Mise à jour : " .date("d.m.Y",filemtime($pfile));
      ?>
    </strong></p>
  </div>
</footer>

<!-- ===== FLECHE RETOUR HAUT DE PAGE ===== -->
<div class="d-none d-md-block">
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center active">
    <i class="bi bi-arrow-up-short"></i>
  </a>
</div>

<!-- ========================================================================= -->

<!-- Bootstrap JavaScript -->
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Jquery -->
<script src="./bootstrap/js/jquery.min.js"></script>

<!-- CODE TO CLOSE THE TOGGLE ON CLIC -->
    <!-- <script>
        $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
        });
    </script> -->

<!-- CLOSE THE TOGGLE BY CLICKING ANYWHERE ON THE SCREEN -->
    <script>
        $(document).click(function(){
        $(".navbar-collapse").collapse('hide');
        });
    </script>

<!-- ACTIVE LINK -->
    <script>
    	/* Code for changing activelink on clicking */
    	var btns =$("#navbarMenu .navbar-nav .nav-link");
    	for (var i = 0; i < btns.length; i++) {
    		btns[i].addEventListener("click",function () {
    			var current = document.getElementsByClassName("active");
    			current[0].className = current[0].className.replace(" active", "");
    			this.className += " active";
    		});
    	}
    	/* Code for changing activelink on Scrolling */
    	$(window).scroll(function () {
    		var distance = $(window).scrollTop();
    		$('.link-active-scroll').each(function (i) {
    			if ($(this).position().top<= distance + 180) {
    				$('.navbar-nav a.active').removeClass('active');
    				$('.navbar-nav a').eq(i).addClass('active');
    			}
    		});
    	}
    	).scroll();
    </script>

<!-- GALLERY FILTER -->
    <script type="text/javascript">
      $(document).ready(function(){
        $('.list').click(function(){
          const value = $(this).attr('data-filter');
          if (value == 'all'){
            $('.filter').show('1000');
          }
          else{
            $('.filter').not('.'+value).hide('1000');
            $('.filter').filter('.'+value).show('1000');
          }
        })
        // add active class on selected item
        $('.list').click(function(){
          $(this).addClass('active').siblings().removeClass('active');
        })
      })
    </script>

    </body>
</html>