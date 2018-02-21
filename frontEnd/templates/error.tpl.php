<?php

    $bodyClass = 'error';
	ob_start();
	?>
	<p>Error: The page you requested could not be found.</p>
	<?php 
    $body = ob_get_clean();

    require_once('template.inc.php');
