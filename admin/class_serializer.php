<?php
/**
 * @package ResQ
 */
 

class Serializer {
 
    public function init() {
        add_action( 'admin_post', array( $this, 'save' ) );
    }
 

    public function save() {

        if ( ! ( $this->has_valid_nonce() && current_user_can( 'manage_options' ) ) ) {
        }
 
      
        if ( null !== wp_unslash( $_POST['acme-message'] ) ) {
 
            $value = sanitize_text_field( $_POST['acme-message'] );
            update_option( 'tutsplus-custom-data', $value );
 
        }

        if ( null !== wp_unslash( $_POST['ResQ-Position'] ) ) {
 
            $value = sanitize_text_field( $_POST['ResQ-Position'] );
            update_option( 'ResQ-custom-Position', $value );
 
        }

 
        $this->redirect();
 
    }
 

    private function has_valid_nonce() {
 
        if ( ! isset( $_POST['acme-custom-message'] ) ) { 
            return false;
        }
 
        $field  = wp_unslash( $_POST['acme-custom-message'] );
        $action = 'acme-settings-save';
 
        return wp_verify_nonce( $field, $action );
 
    }
 
   
    private function redirect() {
 
        if ( ! isset( $_POST['_wp_http_referer'] ) ) { 
            $_POST['_wp_http_referer'] = wp_login_url();
        }
 
        $url = sanitize_text_field(
                wp_unslash( $_POST['_wp_http_referer'] ) 
        );
 
        wp_safe_redirect( urldecode( $url ) );
        exit;
 
    }
}