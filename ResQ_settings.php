<?php
/**
 * @since             2.0.0
 * @package           ResQ
 */

/*
Plugin Name:       ResQ
Plugin URI:        https://resq-plugin.com/
Description:       A Plugin that will allow your users and yourself to engage in causes that match your values and ambitions.
Version:           2.0.0
Author:            Sándor Lázár
Author URI:        https://www.linkedin.com/in/sandor-lazar/
License:
License URI:
 */

/*
We redirect users to associations or self-help networks that match their needs. Our goal is to make help more accessible.
The project is not-for-profit, managed by voluntary civic hackers.

The association Seeds of Tomorrow holds the exploitation rights of ResQ Plugin.
*/

if ( ! defined( 'WPINC' ) ) {
     die;
}

/***********************************Using external classes************************************/

include_once( plugin_dir_path( __FILE__ ) . 'shared/class-deserializer.php' );
include_once( plugin_dir_path( __FILE__ ) . 'public/class-content-messenger.php' );
foreach ( glob( plugin_dir_path( __FILE__ ) . 'admin/*.php' ) as $file ) {
    include_once $file;
}


/**********************************Istantiate classes*******************************************/

add_action( 'plugins_loaded', 'tutsplus_custom_admin_settings' );

function tutsplus_custom_admin_settings() {

   $serializer = new Serializer();
    $serializer->init();

    $deserializer = new Deserializer();

    $plugin = new Submenu( new Submenu_Page( $deserializer ) );
    $plugin->init();

	  $public = new Content_Messenger( $deserializer );
	  $public->init();

}

/************************************At the begining load Js(Jquery)***************************/

add_action('wp_body_open', 'test');

function test() {
 ?>
    <script>

          jQuery(".UX1").hide();
          jQuery(".UX2").hide();
          jQuery(".UX3").hide();
          jQuery(".UX4").hide();
          jQuery(".UX5").hide();

        </script>
<?php


}

/********************************************Load CSS and Js*************************************************/

function libload()
{
    wp_enqueue_style('style_file' , plugin_dir_url(__FILE__).'css/style_ResQ.css');
    wp_enqueue_script('js_file',  plugin_dir_url(__FILE__).'js/jquery-3.5.0.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts','libload');


/********************************************Delete after use CSS**********************************************/

add_action('wp_print_styles', 'ResQfr_deregister_styles', 100);

function ResQfr_deregister_styles() {
  wp_deregister_style('style_ResQ.css');

}

/*********************************************Create admin page***********************************************/

function my_admin_menu() {

add_menu_page(

'ResQ',

'ResQ',

'manage_options',

'ResQ-page',

'my_admin_page_contents',

'dashicons-groups',

110

);

}

add_action( 'admin_menu', 'my_admin_menu' );

/*********************************************Content admin page************************************************/

function my_admin_page_contents() {

?>
    <h1>ResQ</h1>

    <form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">

            <h2>Country</h2>

                    <label>Select your country from the following list to install an appropriate version</label>
                    <br><br>


                    <select type="text" name="acme-message">
                       
                        <option value="Select Your Country"><?php echo esc_attr( get_option('tutsplus-custom-data','' ) ); ?></option>                   
                        <option value = "France">France</option>
                        <option value = "Italy">Italy</option>
                        <option value = "Netherlands">The Netherlands</option>

                    </select>
                    <br>
                    <p> The version of ResQ you have selected is now active on your website.</p>
                        
        <?php
            wp_nonce_field( 'acme-settings-save', 'acme-custom-message' );
            submit_button();
        ?>

    </form>

    <form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">
    <h2>Placement</h2>

                    <label>Select the position of the plugin in your site</label>
                    <br><br>


                    <select type="text" name="ResQ-Position">
                        <option value=" Select position on screen "> <?php echo esc_attr( get_option('ResQ-custom-Position','' ) ); ?></option> 
                        <option value = "Bottom Right">Bottom Right</option>
                        <option value = "Middle Right">Middle Right</option>
                        <option value = "Top Right">Top Right</option>
                        <option value = "Bottom Left">Bottom Left</option>
                        <option value = "Middle Left">Middle Left</option>
                        <option value = "Top Left">Top Left</option>

                    </select>
                    <br>
                    <p> The screen position you have selected is now active on your website.</p>
                        
        <?php
            wp_nonce_field( 'acme-settings-save', 'acme-custom-message' );
            submit_button();
        ?>

    </form>

    <p> The updates should take 2 minutes</p>



 <?php


}

/************************************************Load scripts**********************************/

function load_my_plugin_scripts( $hook ) {

if( $hook != 'toplevel_page_sample-page' ) {

return;

}

wp_enqueue_style( 'my-plugin' );

wp_enqueue_script( 'my-plugin' );

}

add_action( 'admin_enqueue_scripts', 'load_my_plugin_scripts' );

?>
