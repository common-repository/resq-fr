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

                      <a href="https://www.nlvoorelkaar.nl/coronahulp/oproep-plaatsen" target=_blank class="button-1" style="color: #343435;"> Ik vraag <strong>hulp</strong></a>
                      <a class="button-red" style="color: #343435;">Ik wil <strong>helpen</strong></a>
                      <a class="en_savoir_plus" style="color: #777575; font-style: italic;" target=_blank href="http://Resq-plugin.com">Meer over deze plug-in</a>

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

                      <a class="button-red3" style="color: #343435;">Ik geef <strong>tijd</strong></a>
                      <a class="button-2" href="https://www.sanquin.nl/donortest"  target=_blank style="color: #343435;">Ik doneer <strong>bloed</strong></a>
                      <a class="button-red2" style="color: #343435;">Ik geef <strong>geld</strong></a>
                      <a class="button-red4" style="color: #343435;">Ik doneer <strong>materiaal</strong></a>

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

                      <a class="button-2" href="https://doneer.rodekruis.nl/coronavirus"  target=_blank style="color: #343435;">Het Rode Kruis</a>
                      <a class="button-2" href="https://steun.artsenzondergrenzen.nl/doe-een-gift/~mijn-donatie"  target=_blank style="color: #343435;">Artsen Zonder Grenzen</a>
                      <a class="button-2" href="https://www.gofundme.com/f/zorg-voor-de-zorgvrijwilliger"  target=_blank style="color: #343435;">HoodHero</a>
                      <a class="button-2" href="https://formulier.oranjefonds.nl/website-vriend?utm_source=website&utm_medium=corporate&utm_campaign=header&utm_content=knop"  target=_blank style="color: #343435;">Het Oranje Fonds</a>
                      <a class="button-2" href="https://geefvoorzorgverleners.nl/doneer/"  target=_blank style="color: #343435;">Stichting Zorg na Werk in Coronazorg</a>

                  </div>

              </div>

          </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

          <div class="UX4">

              <div class="bubble">

                  <div class="UX_title">

                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Back_Button.svg'; ?>"
                           onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Back_Button.svg'; ?>'" class="B2UX4">

                      <h2 class="title">Covid-19</h2>


                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>"
                         onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>'" class="B1">

                  </div>

                  <div class="UX_content">

                      <a class="button-2" href="https://www.extrahandenvoordezorg.nl/"  target=_blank style="color: #343435;">Ik heb ervaring als zorgverlener</a>
                      <a class="button-2" href="https://www.nlvoorelkaar.nl/hulpvragen/?page=&sectors%5B%5D=2&categories%5B%5D=45&daterange=&q=&sort=date&region%5Blocation%5D=&region%5Blocation_type%5D=&region%5Blocation_id%5D=&region%5Brange%5D=5&submitSearchForm=1"  target=_blank style="color: #343435;">Ik heb geen ervaring als zorgverlener</a>

                  </div>

              </div>

          </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

          <div class="UX5">

              <div class="bubble">

                  <div class="UX_title">

                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Back_Button.svg'; ?>"
                           onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Back_Button.svg'; ?>'" class="B2UX5">

                      <h2 class="title">Covid-19</h2>


                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>"
                         onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>'" class="B1">

                  </div>

                  <div class="UX_content">

                      <a class="button-2" href="https://www.rodekruis.nl/nieuwsbericht/rode-kruis-zamelt-beschermingsmiddelen-coronavirus-in/" target=_blank style="color: #343435;">Rode Kruis Beschermingsmiddelen</a>
                      <a class="button-2" href="https://doneereenmondkapje.nl/" target=_blank style="color: #343435;">Doneer Mondkapjes</a>
                      <a class="button-2" href="https://dutchcoronamask.nl/" target=_blank style="color: #343435;">3D-printen voor Maskers</a>


                  </div>

              </div>

          </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------>

      <script>

          jQuery(".UX1").hide();
          jQuery(".UX2").hide();
          jQuery(".UX3").hide();
          jQuery(".UX4").hide();
          jQuery(".UX5").hide();

          jQuery(document).ready(function(){

            jQuery(".UX").click(function(){

              jQuery(".UX").hide();
              jQuery(".UX1").fadeIn();
              jQuery(".UX2").hide();
              jQuery(".UX3").hide();
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

             jQuery(".titre").click(function(){

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
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

            jQuery(".button-2").click(function(){

              jQuery(".UX").fadeIn();
              jQuery(".UX1").hide();
              jQuery(".UX2").hide();
              jQuery(".UX3").hide();
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

            jQuery(".button-red").click(function(){

              jQuery(".UX1").hide();
              jQuery(".UX2").fadeIn();
              jQuery(".UX3").hide();
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

            jQuery(".button-red2").click(function(){

              jQuery(".UX1").hide();
              jQuery(".UX2").hide();
              jQuery(".UX3").fadeIn();
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

            jQuery(".button-red3").click(function(){

              jQuery(".UX1").hide();
              jQuery(".UX2").hide();
              jQuery(".UX3").hide();
              jQuery(".UX4").fadeIn();
              jQuery(".UX5").hide();

            });

            jQuery(".button-red4").click(function(){

              jQuery(".UX1").hide();
              jQuery(".UX2").hide();
              jQuery(".UX3").hide();
              jQuery(".UX4").hide();
              jQuery(".UX5").fadeIn();

            });

            jQuery(".B1").click(function(){

              jQuery(".UX").fadeIn();
              jQuery(".UX1").hide();
              jQuery(".UX2").hide();
              jQuery(".UX3").hide();
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

            jQuery(".B2UX2").click(function(){

              jQuery(".UX1").fadeIn();
              jQuery(".UX2").hide();
              jQuery(".UX3").hide();
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

            jQuery(".B2UX3").click(function(){

              jQuery(".UX1").hide();
              jQuery(".UX2").fadeIn();
              jQuery(".UX3").hide();
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

            jQuery(".B2UX4").click(function(){

              jQuery(".UX1").hide();
              jQuery(".UX2").fadeIn();
              jQuery(".UX3").hide();
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

            jQuery(".B2UX5").click(function(){

              jQuery(".UX1").hide();
              jQuery(".UX2").fadeIn();
              jQuery(".UX3").hide();
              jQuery(".UX4").hide();
              jQuery(".UX5").hide();

            });

          });

      </script>

</div>
