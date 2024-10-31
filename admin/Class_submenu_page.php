<?php
/**
 * @package ResQ
 */

/*****************Submenu tools************************/

class Submenu_Page {
 
 	public function __construct( $deserializer ) {
    $this->deserializer = $deserializer;
}
    public function render() {

   		include_once( 'Views/settings.php' );

    }
}