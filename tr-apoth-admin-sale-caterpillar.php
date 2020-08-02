<?php
/*
  @package tapRoot_apothecary
  ========================================
    ADMIN SALE CATERPILLAR PAGE TEMPLATE
  ========================================
*/?>

<h1>Customize your Sale Caterpillar</h1>
<?php settings_errors(); ?>
<form class="tr-apoth-admin-form" action="options.php" method="post">
  <?php settings_fields('tr-apoth-sale-caterpillar-option-group'); ?>
  <?php do_settings_sections( 'xochis_sale_caterpillar' ); ?>
  <?php submit_button(); ?>
</form>
