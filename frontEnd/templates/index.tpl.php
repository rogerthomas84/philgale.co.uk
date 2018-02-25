<?php 
    $bodyTitle = 'PhilGale.co.uk - PHP Developer';
$bUseNav = false;

	$block1 = 	'<a href="/portfolio"><h3>Portfolio</h3></a>
                <p>
                    Docx word parser, numerous Payment gateway API\'s, crazy requests but hopefully elegant workarounds 
                    (as I remember them).    
                </p>
                <a href="/portfolio"><p>VIEW PORTFOLIO</p></a>';
	$block2 = 	'<a href="/blog"><h3>Blog</h3></a>
                <p>
                    Coding quirks, and random rants (I won\'t pretend to say I\'ll update this often, blogs are like that).
                </p>
                <a href="/blog"><p>VIEW BLOG</p></a>';


    # Figure out how good i am, because people love seeing 'X years of using LANG'
    # Start the counter from during my apprenticeship, rather than my self-taught years
    $yearsExperience =  date('Y', time()) - 2011 ;

	ob_start();?><h2>Skills</h2>
    <p>I am best at working with PHP & Javascript ( jQuery ), in which I have approx. <?= $yearsExperience ?> years experience. I've written about some of my more interesting projects / findings in my portfolio.</p>
    <p>Below is a skill short-list just for brevity.</p>
    <ul>
        <li>PHP</li>
        <li>JavaScript - jQuery</li>
        <li>MySQL</li>
        <li>SASS</li>
        <li>Drupal (6, 7, 8)</li>
        <li>LAMP maintenance</li>
    </ul>
    
    <hr /> 
    
    <h2>Work Experience</h2>
    <ul>
        <li>
            <b class="lislice lism">2012 - Current</b>
            <span class="lislice">PHP Developer</span>
            <a href="http://www.red-wing.com"  target="_blank"  class="lislice">Redwing Interactive</a>
        </li>
        <li>
            <b class="lislice lism">2011 - 2012</b>
            <span class="lislice">Apprentice Drupal developer</span>
            <a class="lislice" target="_blank" href="http://www.proctors.co.uk">Proctor + Stevenson</a>
        </li>
    </ul>
    <hr />
    
    <h2>About</h2>
    <p>I moved to Bristol for a year-long apprenticeship during August 2011, working with Drupal 6 &amp; 7 ( with some bespoke PHP apps).</p>
    <p>After that I started working at Redwing Interactive, where I was given the task of building a new bespoke CMS to replace the original Classic ASP product, which we are still maintaining, and is running several high-traffic websites.</p>
    <p>This is at the same time as managing a (albiet basic) LAMP stack, and standard client feature requests / new site builds etc.</p>

    <p>My hobbies involve swimming, going to the gym, running, playing computer games &amp; the odd bit of drawing stuff.</p>
<?php
    $body = ob_get_clean();
    require_once('template.inc.php');

