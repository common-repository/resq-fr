<!-- Content tools sections -->

<div class="wrap">

    <h1>ResQ</h1>

    <form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">

            <h2>Country</h2>

                    <label>Select your country from the following list to install an appropriate version</label>
                    <br><br>


                    <select type="text" name="acme-message"
    value="<?php echo esc_attr( $this->deserializer->get_value( 'tutsplus-custom-data' ) ); ?>">
                  
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
                        
                        <option value=" Select position on screen"><?php echo esc_attr( get_option('ResQ-custom-Position','' ) ); ?></option>     
                        <option value = "Right">Right</option>
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


</div>
