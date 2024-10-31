<?php if(get_option('ResQ-custom-Position','')== "" or get_option('ResQ-custom-Position','')== "Select position on screen") {?>
     
      <div class="sticky1">                        
    
<?php }else if( get_option('ResQ-custom-Position','')== "Bottom Right"){?>
      
      <div class="sticky1">    

<?php }else if( get_option('ResQ-custom-Position','')== "Middle Right"){?>
      
      <div class="sticky2">                        

<?php }else if( get_option('ResQ-custom-Position','')== "Top Right"){ ?>
      
      <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>      
      <script type="text/javascript">
      jQuery(document).ready(function(){
      jQuery( ".UX" ).click(function() {
          
                $(".UX1").css("right", "50px");
                $(".UX2").css("right", "50px");
                $(".UX3").css("right", "50px");

                $(".UX1").css("top", "100px");
                $(".UX2").css("top", "150px");
                $(".UX3").css("top", "250px");
            });
      });
      </script>     
      <div class="sticky3">                        

<?php }else if( get_option('ResQ-custom-Position','')== "Bottom Left"){?>
     
      <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>      
      <script type="text/javascript"> 
      jQuery(document).ready(function(){
      jQuery( ".UX" ).click(function() {
          
                $(".UX1").css("left", "50px");
                $(".UX2").css("left", "50px");
                $(".UX3").css("left", "50px");
                  
            });
      });
      </script>     
      <div class="sticky4">                        
      
<?php }else if( get_option('ResQ-custom-Position','')== "Middle Left"){?>

      <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>      
      <script type="text/javascript">
      jQuery(document).ready(function(){
      jQuery( ".UX" ).click(function() {
          
                $(".UX1").css("left", "50px");
                $(".UX2").css("left", "50px");
                $(".UX3").css("left", "50px");
                
            });
      });

      </script>     
      <div class="sticky5">    
                   
<?php }else if( get_option('ResQ-custom-Position','')== "Top Left"){?>

      <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>      
      <script type="text/javascript">
      jQuery(document).ready(function(){
      jQuery( ".UX" ).click(function() {
          
                $(".UX1").css("left", "50px");
                $(".UX2").css("left", "50px");
                $(".UX3").css("left", "50px");

                $(".UX1").css("top", "100px");
                $(".UX2").css("top", "100px");
                $(".UX3").css("top", "100px");
            });
    });
      </script>                  
      <div class="sticky6">    
   
<?php }else { ?>
      
      <div class="sticky1">                        

<?php } ?>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

          <div class="UX">
              <div class="bubble_landing">
                  <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/ResQ_Logo.png'; ?>">
              </div>
          </div>


<!-- ------------------------------------------------------------------------------------------------------------------------------>

          <div class="UX1">

              <div class="bubble">

                  <div class="UX1_title">

                      <div class="title_styling"></div>

                      <!-- <a class="title" style="text-decoration: none;"href="https://www.gouvernement.fr/info-coronavirus" target=_blank > -->
                      <h2 class="title">Covid-19</h2>

                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>"
                           onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>'" class="B1">

                  </div>

                  <div class="UX1_content">

                      <a href="https://enpremiereligne.fr/" target=_blank class="button-1" style="color: #343435;">J'ai besoin <strong>d'aide</strong></a>
                      <a class="button-red" style="color: #343435;">Je veux <strong>aider</strong></a>
                      <a class="en_savoir_plus" style="color: #777575; font-style: italic;" target=_blank href="http://Resq-plugin.com">En savoir plus sur ce plugin</a>

                  </div>

              </div>

          </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

          <div class="UX2">

              <div class="bubble">

                  <div class="UX_title">

                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Back_Button.svg'; ?>"
                           onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Back_Button.svg'; ?>'" class="B2UX2">

                      <h2 class="title">Covid-19</h2>


                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>"
                           onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>'" class="B1">

                  </div>

                  <div class="UX_content">

                      <a href="https://enpremiereligne.fr/process/je-peux-aider"  target=_blank class="button-2" style="color: #343435;">Je donne mon <strong>temps</strong></a>
                      <a href="https://dondesang.efs.sante.fr/trouver-une-collecte"  target=_blank class="button-2" style="color: #343435;">Je donne mon <strong>sang</strong></a>
                      <a class="button-red2" style="color: #343435;">Je donne de <strong>l'argent</strong></a>
                      <a href="https://freerider-factory.fr/" target=_blank class="button-2" style="color: #343435;">J'ai une <strong>imprimante 3D</strong></a>

                  </div>

              </div>

          </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

          <div class="UX3">

              <div class="bubble">

                  <div class="UX_title">

                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Back_Button.svg'; ?>"
                           onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Back_Button.svg'; ?>'" class="B2UX3">

                      <h2 class="title">Covid-19</h2>


                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>"
                         onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>'" class="B1">

                  </div>

                  <div class="UX_content">

                      <a href="https://www.croix-rouge.fr/Je-donne"  target=_blank class="button-2" style="color: #343435;">Croix-rouge</a>
                      <a href="https://dons.fondationdefrance.org/solidarite-avec-les-soignants-et-les-plus-fragiles/~mon-don?_cv=1"  target=_blank class="button-2" style="color: #343435;">Hôpitaux de Paris</a>
                      <a href="https://dons.restosducoeur.org/particulier/~mon-don?_cv=1" target=_blank class="button-2" style="color: #343435;">Les Restos du Cœur</a>
                      <a href="https://don.pasteur.fr/"  target=_blank class="button-2" style="color: #343435;">Institut Pasteur</a>
                      <a href="https://don.frm.org/donner-b"  target=_blank class="button-2" style="color: #343435;">Recherche médicale</a>
                      <a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/donate"  target=_blank class="button-2" style="color: #343435;">OMS</a>

                  </div>

              </div>

          </div>


  <script>

            jQuery(".UX1").hide();
            jQuery(".UX2").hide();
            jQuery(".UX3").hide();

            jQuery(document).ready(function(){

              jQuery(".UX").click(function(){

                jQuery(".UX").hide();
                jQuery(".UX1").fadeIn();
                jQuery(".UX2").hide();
                jQuery(".UX3").hide();


              });

              jQuery(".B2UX3").click(function(){

                jQuery(".UX1").hide();
                jQuery(".UX2").fadeIn();
                jQuery(".UX3").hide();

              });

              jQuery(".B2UX2").click(function(){

                jQuery(".UX1").fadeIn();
                jQuery(".UX2").hide();
                jQuery(".UX3").hide();

              });

              jQuery(".B1").click(function(){

                jQuery(".UX").fadeIn();
                jQuery(".UX1").hide();
                jQuery(".UX2").hide();
                jQuery(".UX3").hide();

              });


              jQuery(".button-2").click(function(){

                jQuery(".UX").fadeIn();
                jQuery(".UX1").hide();
                jQuery(".UX2").hide();
                jQuery(".UX3").hide();

              });


              jQuery(".button-1").click(function(){

                jQuery(".UX").fadeIn();
                jQuery(".UX1").hide();
                jQuery(".UX2").hide();
                jQuery(".UX3").hide();

              });

              jQuery(".titre").click(function(){

                jQuery(".UX").fadeIn();
                jQuery(".UX1").hide();
                jQuery(".UX2").hide();
                jQuery(".UX3").hide();

              });

              jQuery(".button-red").click(function(){

                jQuery(".UX1").hide();
                jQuery(".UX2").fadeIn();

              });

              jQuery(".button-red2").click(function(){

                jQuery(".UX1").hide();
                jQuery(".UX2").hide();
                jQuery(".UX3").fadeIn();


              });

            });

          </script>
<!-- ------------------------------------------------------------------------------------------------------------------------------>

     

</div>

