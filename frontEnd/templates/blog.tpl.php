<?php
    $bodyTitle = 'PhilGale.co.uk - Blog';
    $bodyClass = 'blog';
    ob_start();
    ?>
    <?php
    $body = ob_get_clean();


    require_once('template.inc.php');
