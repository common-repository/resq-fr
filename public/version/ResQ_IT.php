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

                $(".UX1").css("top", "200px");
                $(".UX2").css("top", "250px");
                $(".UX3").css("top", "350px");
                  
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

                      <!-- <a class="title" style="text-decoration: none;" href="https://www.gouvernement.fr/info-coronavirus" target=_blank > -->
                      <h2 class="title">Covid-19</h2>

                      <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>"
                           onmouseout="this.src='<?php echo plugin_dir_url( __FILE__ ) . 'images/Close_Button.svg'; ?>'" class="B1">

                  </div>

                  <div class="UX1_content">

                      <a href="https://covid19italia.help/segnala/chiedi-aiuto/" target=_blank class="button-1" style="color: #343435;">Ho bisogno <strong>di aiuto</strong></a>
                      <a class="button-red" style="color: #343435;">Voglio <strong>aiutare</strong></a>
                      <a class="en_savoir_plus" target=_blank href="http://Resq-plugin.com" style="color: #777575; font-style: italic;">Per saperne di più su questo plugin</a>

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

                      <a class="button-2" style="color: #343435;" href="https://covid19italia.help/segnala/dona-beni-servizi/"  target=_blank>Voglio donare il mio <strong>tempo</strong></a>
                      <a class="button-2" style="color: #343435;" href="https://www.avis.it/donazione/la-donazione/"  target=_blank>Voglio donare il <strong>sangue</strong></a>
                      <a class="button-red2" style="color: #343435;">Vorrei donare del <strong>denaro</strong></a>
                      <a class="button-2" style="color: #343435;" href="https://covid19italia.help/segnala/dona-beni-servizi/" target=_blank>Vorrei donare del <strong>materiale</strong></a>

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

                      <a class="button-2" style="color: #343435;" href="https://www.medicisenzafrontiere.it/sostienici/fai-una-donazione/"  target=_blank>Medici Senza Frontiere</a>
                      <a class="button-2" style="color: #343435;" href="https://covid19responsefund.org/"  target=_blank>OMS</a>
                      <a class="button-2" style="color: #343435;" href="https://donazioni.cri.it/donazioni/dona-per-emergenza-coronavirus" target=_blank>Crosse Rossa Italiana</a>
                      <a class="button-2" style="color: #343435;" href="https://www.icrc.org/en/donate"  target=_blank>Crosse Rossa Internazionale (ICRC)</a>
                      <a class="button-2" style="color: #343435;" href="https://italianonprofit.it/donazioni-coronavirus/"  target=_blank>Ospedali Italiani</a>
                      <a class="button-2" style="color: #343435;" href="https://covid19italia.help/raccolte-fondi/"  target=_blank>Racolte fondi a livello locale</a>
                      <a class="button-2" style="color: #343435;" href="http://www.protezionecivile.gov.it/attivita-rischi/rischio-sanitario/emergenze/coronavirus/come-donare" target=_blank>Protezione Civile Nazionale</a>
                      <a class="button-2" style="color: #343435;" href="https://www.cisom.org/emergenza-covid-19/" target=_blank>CISOM</a>

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

