<?php
$bodyTitle = 'PhilGale.co.uk - Portfolio';
$bodyClass = 'portfolio';
ob_start();
?>

<?php
$body = ob_get_clean();

require_once('template.inc.php');
