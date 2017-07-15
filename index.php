<?php
function dbg_ob_gzhandler($buffer, $mode) {
  error_log('dbg_ob_gzhandler invoked');
  $rv = ob_gzhandler($buffer, $mode);
  if ( false===$rv ) {
    error_log('client does not support compressed content');
  }
  return $rv;
}
ob_start('dbg_ob_gzhandler');
 ?>

<?php
$pageTitle = 'Florist Wirral, Flower Arrangements, Wedding Flowers';
$pageDescription ='Wirral florist with same day flower delivery across the Wirral. Weddings, sympathy, birthdays and all other occasions.';
$keywords = 'Wirral Florist, Wedding Flowers, Flower Arrangements, Centrepieces, Mothers Day Flowers, Mothers Day Gift, Happy Birthday Flowers, Wedding Bouquet, Valentines Day Flowers, Valentines Day Gift, Funeral Flowers, Sympathy Flowers';
include 'header.php';
include 'main.php';
include_once 'analyticstracking.php';
?>