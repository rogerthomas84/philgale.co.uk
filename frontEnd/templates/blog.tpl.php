<?php
    $bodyTitle = 'PhilGale.co.uk - Blog';
    $bodyClass = 'blog';
    ob_start();
    ?>
	
	
	
	<hr/>
	<div class="paddbase">
		<a href="/"><h3>Back</h3></a>
	</div>
	
    <?php
    $body = ob_get_clean();


    require_once('template.inc.php');
