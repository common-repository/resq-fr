<?php

/**
 * @package ResQ
 */
class Content_Messenger {
/**
 * @access private
 * @var    Deserializer
 */

private $deserializer;

public $country;

public function __construct( $deserializer ) {
    $this->deserializer = $deserializer;
}

public function init() {
    add_filter( 'the_content', array( $this, 'display' ) );
}

/***************************Display depends of tutsplus-custom-data*******************/

public function display($content) {
	
		if($this->deserializer->get_value( 'tutsplus-custom-data' )=="Select Your Country"){
		
		include("version/ResQ_Fr.php");
	}

	if($this->deserializer->get_value( 'tutsplus-custom-data' )=="France"){
		
		include("version/ResQ_Fr.php");
	}
	if($this->deserializer->get_value( 'tutsplus-custom-data' )=="Italy"){

		include("version/ResQ_IT.php");
	}
	if($this->deserializer->get_value( 'tutsplus-custom-data' )=="Netherlands"){

		include("version/ResQ_NL.php");
	}


return $content;
}
}


