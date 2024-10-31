<?php
/**
 * @package ResQ
 */

/***********************Class submenu in tools***************************/

class Submenu {
 
  
    private $submenu_page;
 
    public function __construct( $submenu_page ) {
        $this->submenu_page = $submenu_page;
    }
    
 
    public function init() {
         add_action( 'admin_menu', array( $this, 'add_options_page' ) );
    }
 
    public function add_options_page() {
 

        add_options_page(
            'ResQ',
            'ResQ',
            'manage_options',
            'custom-admin-page',
            array( $this->submenu_page, 'render' )
        );
    }
}