<?php
$bodyTitle = 'PhilGale.co.uk - Portfolio';
$bodyClass = 'portfolio';
ob_start();
?>

	
	<div class="content-list-item clear">
		<div class="paddbase">
			<a href="https://github.com/PhilGale92/docx" target="_blank"><h3>DOCX PARSER</h3></a>
			<p>Ok so I wrote the original version in 2012, for a client request of their existing workflow being .docx file based, and wishing each piece of content to only need one copy with no additional work to get them working in a browser format.</p>
			<p>I found some basic tools online for pulling content (plaintext) from word files so realised I could too. Basically each .docx file is a ZIP archive of misc. other data. Inside are numerous XML files, but two relevant ones are "structure.xml", and "document.xml.rels", they both generally following OpenDocument XML format.</p>
			<p>I then wrote a fully featured .docx -> PHP Data set -> Html parser, which at least at that time had no (free) equivalent. A few years later I opensourced what I could. I have been toying with the idea of writing a new iteration with tidier code set, and more error tolerant but prioritising it over my other personal projects is difficult, and to this day its client-variant which shares 90% of the code base has no issues. Current internal stats estimate it to have parsed over 5000 files ranging from 1MB to 30MB, with image, table, and basic text formatting (everything but word-textareas, as aligning them properly in reusable HTML is a fools errand).</p>
			<p><a href="https://github.com/PhilGale92/docx" target="_blank">VIEW SOURCE</a></p>
		</div>
	</div>
	
	<hr/>
	<div class="paddbase">
		<a href="/"><h3>Back</h3></a>
	</div>

<?php
$body = ob_get_clean();

require_once('template.inc.php');
