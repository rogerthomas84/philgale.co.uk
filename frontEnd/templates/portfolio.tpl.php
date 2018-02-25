<?php
$bodyTitle = 'PhilGale.co.uk - Portfolio';
$bodyClass = 'portfolio';
ob_start();
?>

    <p>Note: I will not be releasing any commercial code here.</p>

	<div class="content-list-item clear">
		<div class="paddbase-y">
			<a href="https://github.com/PhilGale92/docx" target="_blank"><h3>DOCX PARSER</h3></a>
			<p>Ok so I wrote the original version in 2012, for a client request of their existing workflow being .docx file based, and wishing each piece of content to only need one copy with no additional work to get them working in a browser format.</p>
			<p>I found some basic tools online for pulling content (plaintext) from word files so realised I could too. Basically each .docx file is a ZIP archive of misc. other data. Inside are numerous XML files, but two relevant ones are "structure.xml", and "document.xml.rels", they both generally following OpenDocument XML format.</p>
			<p>I then wrote a fully featured .docx -> PHP Data set -> Html parser, which at least at that time had no (free) equivalent. A few years later I opensourced what I could. I have been toying with the idea of writing a new iteration with tidier code set, and more error tolerant but prioritising it over my other personal projects is difficult, and to this day its client-variant which shares 90% of the code base has no issues. Current internal stats estimate it to have parsed over 5000 files ranging from 1MB to 30MB, with image, table, and basic text formatting (everything but word-textareas, as aligning them properly in reusable HTML is a fools errand).</p>
			<p><a href="https://github.com/PhilGale92/docx" target="_blank">VIEW SOURCE</a></p>
		</div>
	</div>
	
	<hr/>


    <div class="content-list-item clear">
        <div class="paddbase-y">
            <h3>System: Automatic database upgrades</h3>
            <p>One of the most annoying parts of managing a CMS, although it doesn't happen much now days, is having an SQL schema change.
            This used to need a developer to perform the update on every database in turn.</p>
            <p>I had over xmas of 2016->2017, build an API, so the CMS could perform self diagnostics have other cool functionality from having an internal API.</p>
            <p>I performed the following: </p>
            <ul>
                <li>Added a new class for tracking installed DB upgrades, and DB upgrades pending installation ( for individual sites)</li>
                <li>Added functionality in the API CMS for creating a `db upgrade`, which takes your inserted SQL, and runs all the last set of unit tests, using the last dev- code base known to have passed.</li>
                <li>If the code passes, the SQL is provided in a secondary payload to all API requests, where the pending install version is lower</li>
                <li>The individual websites install said upgrades at their next background task slot.</li>
            </ul>
            <p>This was a fun system as I piggybacked of both the internal API, and the Automatic testing systems which I developed several months before, and everything just worked! Ideal!</p>
        </div>
    </div>

    <hr/>

	<div class="paddbase-y">
		<a href="/"><h3>Back</h3></a>
	</div>

<?php
$body = ob_get_clean();

require_once('template.inc.php');
