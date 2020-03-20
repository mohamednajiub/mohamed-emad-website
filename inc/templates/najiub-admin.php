<h3>Najiub Theme Options</h3>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php
        settings_fields( 'najiub-contact-info-group' );
        do_settings_sections( 'najiub' );
        submit_button();
    ?>
</form>