<?php
    $bodyTitle = 'PhilGale.co.uk - Blog';
    $bodyClass = 'blog';
    ob_start();
    ?>



    <div class="content-list-item clear">
        <div class="paddbase-y">
            <h3>PHP byref foreach</h3>
            <p>This bug caught me out for a few hours once.</p>
            <p>I had some code in the following sort of format.</p>
            <pre>
                $basicArray = [ [..],[..]];
                // Preprocess the basic array (Pollyfill for client requests)
                foreach ($basicArray as &$arrayItem){
                    // Still fine
                }
                // Now we have done the client request based preprocessing, do some random stuff involving another byref
                // notice the reference is the same name as the loop above ( due to it being the same thing...)
                foreach ($basicArray as &$arrayItem){
                    // Aaand array is corrupted !
                }
            </pre>
            <p>
                So whats wrong with the above code? The problem was in my naiveity I never realised the value item `arrayItem`, was self-corrupting.
                This is because each iteration of the foreach modifies the item reference, which is normally fine, but if theres two foreaches in the same scope, acting on the same reference, the second loop corrupts the results of the first.

            </p><p>So lesson learnt, always make sure byref names are unique in foreach loops...</p>

        </div>
    </div>


    <hr/>


    <div class="content-list-item clear">
        <div class="paddbase-y">
            <h3>What is this website made in?</h3>
            <p>A super basic url->template router I had sitting in my documents for basic sites. This is not CMS'd as this site is too basic.
            If I do well with coming up with additional content I could set up a little sqllite structure, but for now I just
                edit .tpl.php files.</p>
            <p>Oh the source is on github, for the curiously bored.</p>
            <p><a href="https://github.com/PhilGale92/philgale.co.uk" target="_blank">VIEW SOURCE</a></p>
        </div>
    </div>

    <hr/>


    <div class="content-list-item clear">
        <div class="paddbase-y">
            <h3>Running</h3>
            <p>This is the mandatory post runners are meant to make saying they run.</p>
            <p>Race times: 1:45:45 for Bristol half 2017, 46:12 for Bristol 10k 2017, 2:00:25 Bristol half 2016.</p>
            <p>I won't mention it again, honest ;)</p>
        </div>
    </div>


    <hr/>

	<div class="paddbase-y">
		<a href="/"><h3>Back</h3></a>
	</div>
	
    <?php
    $body = ob_get_clean();


    require_once('template.inc.php');
