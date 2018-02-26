<?php
/**
 * Created by PhpStorm.
 * User: Phil
 * Date: 07/01/2017
 * Time: 15:11
 */

$bHasBlocks = false ;
if (!isset($block1)) $block1 = '';
if (!isset($block2)) $block2 = '';
if (!isset($bUseNav)) $bUseNav  = true ;

if (!isset($body)) $body = '';
if (!isset($bodyClass)) $bodyClass = '';
if ($block1 != '' || $block2 != '' ) $bHasBlocks = true;
if (!isset($pageTitle)) $pageTitle = 'Phil Gale - Portfolio';
if (!isset($bodyTitle)) $bodyTitle = $pageTitle ;

$blockHtml = '';
if ($bHasBlocks){
    ob_start();
    
	if ($block1 != '') { 
	?>
		<div class="overlay col">
			<div class="paddbase">
				<?= $block1 ?>
			</div>
		</div>
	<?php 
	}
	if ($block2 != '') { 
		?>
		<div class="overlay col last">
			<div class="paddbase">
				<?= $block2 ?>
			</div>
		</div>
		<?php
	}
    $blockHtml = ob_get_clean();
}

$navHtml = '';
$googleTrack = <<<JS
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38211399-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-38211399-1');
</script>

JS;

if ( $bUseNav  ) {
    $navHtml = $this->getNavHtml();
}

echo '<!DOCTYPE html>
<html class="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
	<!-- <link rel="icon" type="image/x-icon" href="/favicon.ico" /> -->
    <link rel="stylesheet" type="text/css" href="/frontEnd/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/frontEnd/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/frontEnd/css/styles.css" />
	<title>' . $pageTitle . '</title>
</head>
<body class="' . $bodyClass . '">
	<div class="container">
		<div class="paddbase">
			<a href="/"><h1>' . $bodyTitle . '</h1></a>
			' . $navHtml . '
			' . $blockHtml . '
            <div class="clear"></div>
            <hr />
            <div class="basic_styles">
            ' . $body . '
            </div>
        </div>
    </div>
<!-- 	<i class="fa fa-linkedin" aria-hidden="true"></i> -->
	' . $googleTrack . ' 
</body>
</html>';