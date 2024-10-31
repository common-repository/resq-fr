<?php


/**
* @package  ResQ France
* @version 1.0.3
*/

/*
Plugin Name: ResQ France
Plugin URI: https://resq-plugin.com/
Description: A Plugin that will allow your users to find or provide help for those in need during the Lockdown.
Author: Sándor Lázár
Version: 1.0.3
Author URI: https://www.linkedin.com/in/sandor-lazar/
*/

/*
We collect, verify and disseminate useful information on the epidemic and the coronavirus emergency in 2020: news, solidarity initiatives, home shopping deliveries, fundraisers, psychological support and much more.
The project is non-profit, managed by voluntary civic hackers.
Content released under license CC-BY 4.0.

CC-BY 4.0 = https://creativecommons.org/licenses/by/4.0/
*/



add_action('wp_body_open', 'ResQfr');

function ResQfr() {

	?>
				<div id="sticky1">


<!-- ------------------------------------------------------------------------------------------------------------------------------>
					<div id="UX">

							<img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/LOGO_BULLE2.png'; ?>">

					</div>


<!-- ------------------------------------------------------------------------------------------------------------------------------>

					<div id="UX1">

              <img class="bubble" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/bubble.png'; ?>" >

              <div class="UX_title" id="UX1_title">

    							<img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/logo4.png'; ?>" id="logo">

    							<!-- <a id="titre" style="text-decoration: none;" href="https://www.gouvernement.fr/info-coronavirus" target=_blank > -->
    							<h2 id="titre" style="color:black;">Covid-19</h2>

    							<img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/B12.png'; ?>"
    									 onmouseover="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/CROIX_HOVER.png'; ?>'"
    									 onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/B12.png'; ?>'" class="B1">

              </div>

              <div class="sep_line"></div>

              <div class="UX_content" id="UX1_content">

    							<a href="https://enpremiereligne.fr/" target=_blank class="button-1"> J'ai besoin d'aide</a>
    							<a class="button-red">Je veux aider</a>
    							<a id="en_savoir_plus" style="color:black" target=_blank href="http://Resq-plugin.com">En savoir plus sur ce plugin</a>

              </div>

					</div>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

					<div id="UX2">

              <img class="bubble" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/bubble.png'; ?>" >

              <div class="UX_title">

    							<img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/B22.png'; ?>"
    									 onmouseover="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/FLECHE_HOVER.png'; ?>'"
    									 onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/B22.png'; ?>'" id="B2UX2">

    							<img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/logo4.png'; ?>" id="logo2">


    							<img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/B12.png'; ?>"
    									 onmouseover="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/CROIX_HOVER.png'; ?>'"
    									 onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/B12.png'; ?>'" class="B1">

              </div>

              <div class="UX_content">

    							<a class="button-2" href="https://enpremiereligne.fr/process/je-peux-aider"  target=_blank>Je donne mon temps</a>
    							<a class="button-2" href="https://dondesang.efs.sante.fr/trouver-une-collecte"  target=_blank>Je donne mon sang</a>
    							<a class="button-red2">Je donne de l'argent</a>
    							<a class="button-2" href="https://3d.freerider-factory.fr/" target=_blank>J'ai une imprimante 3D</a>

              </div>


					</div>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

					<div id="UX3">

              <img class="bubble" src="<?php echo plugin_dir_url( __FILE__ ) . 'images/bubble.png'; ?>" >

              <div class="UX_title">

    							<img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/B22.png'; ?>"
    									 onmouseover="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/FLECHE_HOVER.png'; ?>'"
    									 onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/B22.png'; ?>'" id="B2UX3">

    							<img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/logo4.png'; ?>" id="logo3">


    							<img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/B12.png'; ?>"
    								 onmouseover="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/CROIX_HOVER.png'; ?>'"
    								 onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/B12.png'; ?>'" class="B1">

              </div>

              <div class="UX_content">

    							<a class="button-2" href="https://www.croix-rouge.fr/Je-donne"  target=_blank>Croix-Rouge</a>
    							<a class="button-2" href="https://dons.fondationdefrance.org/solidarite-avec-les-soignants-et-les-plus-fragiles/~mon-don?_cv=1"  target=_blank>Hôpitaux de Paris</a>
    							<a class="button-2" href="https://don.pasteur.fr/"  target=_blank>Institut Pasteur</a>
    							<a class="button-2" href="https://don.frm.org/donner-b"  target=_blank>Recherche médicale</a>
    							<a class="button-2" href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/donate"  target=_blank>OMS</a>

              </div>

					</div>
				</div>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

				<script>

					jQuery("#UX1").hide();
					jQuery("#UX2").hide();
					jQuery("#UX3").hide();

					jQuery(document).ready(function(){

						jQuery("#UX").click(function(){

							jQuery("#UX").hide();
							jQuery("#UX1").fadeIn();
							jQuery("#UX2").hide();
							jQuery("#UX3").hide();


						});

						jQuery("#B2UX3").click(function(){

							jQuery("#UX1").hide();
							jQuery("#UX2").fadeIn();
							jQuery("#UX3").hide();

						});

						jQuery("#B2UX2").click(function(){

							jQuery("#UX1").fadeIn();
							jQuery("#UX2").hide();
							jQuery("#UX3").hide();

						});

						jQuery(".B1").click(function(){

							jQuery("#UX").fadeIn();
							jQuery("#UX1").hide();
							jQuery("#UX2").hide();
							jQuery("#UX3").hide();

						});


						jQuery(".button-2").click(function(){

							jQuery("#UX").fadeIn();
							jQuery("#UX1").hide();
							jQuery("#UX2").hide();
							jQuery("#UX3").hide();

						});


						jQuery(".button-1").click(function(){

							jQuery("#UX").fadeIn();
							jQuery("#UX1").hide();
							jQuery("#UX2").hide();
							jQuery("#UX3").hide();

						});

						jQuery(".button-red").click(function(){

							jQuery("#UX1").hide();
							jQuery("#UX2").fadeIn();

						});

						jQuery(".button-red2").click(function(){

							jQuery("#UX1").hide();
							jQuery("#UX2").hide();
							jQuery("#UX3").fadeIn();


						});

					});

				</script>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

	<?php

}



function ResQfrLoad()
{
    wp_enqueue_style('style_file' , plugin_dir_url(__FILE__).'css/style_ResQ.css');
}

add_action('wp_enqueue_scripts','ResQfrLoad');


add_action('wp_print_styles', 'ResQfr_deregister_styles', 100);

function ResQfr_deregister_styles() {
  wp_deregister_style('style_ResQ.css');

}

?>
