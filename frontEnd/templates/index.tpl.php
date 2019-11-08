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
        <li>PHPUnit</li>
    </ul>
    
    <hr /> 
    
    <h2>Work Experience</h2>
    <ul>
        <li>
            <b class="lislice lism">2012 - Current</b>
            <span class="lislice">PHP Developer</span>
            <a href="http://www.red-wing.com"  target="_blank"  class="lislice">Redwing Interactive</a>
			<ul>
				<li>
					<span class="line-descriptor">SM4 - CMS &amp; Framework</span>
					<p>Its a Drupal-like platform inspired by (but not utilising) Symfony, build for rapidly prototyping and building websites with high performance.</p>
					<p>APIs: Internal JSON (RWAPI), Worldpay, Paypal (NVP, Express, REST), Sagepay, Google maps, Postcode lookup</p>
				</li>
				<li>
					<span class="line-descriptor">Server maintenance</span>
					<p>Basic patching, optimising for load. Dedicated Ubuntu LTS, running a LAMP stack, looking into building out a load balanced setup.</p>
				</li>
				<li>
					<span class="line-descriptor">Optimising developer workflows</span>
					<p>Moved from FTP into SVN when I started, since then migrated into GIT. Written automated deployment &amp; testing tools for internal and client projects when time allows.</p>
				</li>
				<li>
					<a href="https://pharmacylearningcomplete.com/"  target="_blank"  class="lislice line-descriptor">Pharmacy Learning Complete - Site Build (2019)</a>
					<p>Site build with IP recognition, large content import from various sources, SSO from identity providers.</p>
					<p>APIs: HighWire Identity (openidc based)</p> 
				</li>
				<li>
					<a href="https://www.stpauls.co.uk"  target="_blank"  class="lislice line-descriptor">St Paul's Cathedral - Site Build (2014 est)</a>
					<p>Site build with ticketing, ecommerce and a large number of bespoke templates.</p>
					<p>APIs: Worldpay, YesPay, Internal SOAP.</p>
				</li>
				<li>
					<a href="https://www.gp-update.co.uk"  target="_blank"  class="lislice line-descriptor">GP-Update - Site Build (2015)</a>
					<p>Site build with full ecommerce functionality, running on many years of client data from various legacy systems. Ported from Classic ASP. As well as a full suite of back-end reporting and management.</p>
					<p>APIs: Paypal (Express & NVP), Internal Postcode API, Google Maps.</p>
				</li>
				<li>
					<a href="https://gpcpd.com"  target="_blank"  class="lislice line-descriptor">GPCPD - Site Build (2013)</a>
					<p>First solo site build, very bespoke request of tracking user progress</p>
					<p>APIs: Paypal (NVP), Internal bespoke JSON for easy management of sister-sites, FourteenFish</p>
				</li>
				<li>
					<a href="#"  class="lislice line-descriptor">Contact The Elderly - Site Build</a>
					<p>Site build, created a highly portable News plugin. Front-end build.</p>
					<p>*They have since changed provider, no longer viewable online*</p>
					<p>APIs: N/A</p>
				</li>
				<li>
					<a href="http://edgbastonhigh.co.uk"  target="_blank"  class="lislice line-descriptor">Edgbaston High School - Site Build</a>
					<p>APIs: N/A</p>
				</li>
				<li>
					<a href="http://resirva.com/"  target="_blank"  class="lislice line-descriptor">Resirva - Support Role</a>
				</li>
			</ul>
        </li>
        <li>
            <b class="lislice lism">2011 - 2012</b>
            <span class="lislice">Apprentice Drupal developer</span>
            <a class="lislice" target="_blank" href="http://www.proctors.co.uk">Proctor + Stevenson</a>
			<ul>
				<li>Support role on various sites.</li>
			</ul>
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

