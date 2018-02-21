<?php 
    $bodyTitle = 'PhilGale.co.uk - PHP Developer';
	$block1 = 	'<a href="/portfolio"><h3>Portfolio</h3></a>
					<p>Docx word parser, numerous Payment gateway API\'s, crazy requests but hopefully elegant workarounds (as I remember them).</p>';
					
			
/*			TODO - might write a blog one day 
	$block2 = 	'<a href="/blog"><h3>Blog</h3></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>';
*/				
	$block2 = '';
	
    $bUseNav = false;
	ob_start();?><h2>Skills</h2>
    <p>I have worked with various tools over the years, I have shortlisted a few of them below but to see some of what I can do, check out my portfolio.</p>
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
            <b class="lislice lism">2011 - 2012</b>
            <span class="lislice">Apprentice Drupal developer</span>
            <a class="lislice" target="_blank" href="http://www.proctors.co.uk">Proctor + Stevenson</a>
        </li>
        <li>
            <b class="lislice lism">2012 - Current</b>
            <span class="lislice">PHP Developer</span>
            <a href="http://www.red-wing.com"  target="_blank"  class="lislice">Red-Wing Interactive</a>
        </li>
    </ul>
    <hr />
    
    <h2>About</h2>
    <p>I moved to Bristol for a year-long apprenticeship during August 2011, in which I learnt how to perform effectively within as a junior in an large team and became proficent at developing websites in general.</p>
    
    <p>After my apprenticeship came to an end I started working at Red-Wing interactive, where I developed a bespoke CMS solution, running on PHP, which powers several large-traffic websites. As well as assisting in scoping out briefs on new projects to give accurate timings and possible problems ahead of time.</p>

    <p>My hobbies involve swimming, going to the gym, running, playing computer games &amp; the odd bit of drawing stuff.</p>
<?php
    $body = ob_get_clean();
    require_once('template.inc.php');

