<?php
include_once('functions.php');
include_once('header.php');
?>

<body class="overcast">
	<div id="site-navigation">
		<span id="theme-button">
			<svg version="1.1" id="sunset-button" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="25px" height="25px" viewBox="-656 -15.4 365.4 365.4" enable-background="new -656 -15.4 365.4 365.4" xml:space="preserve"><path fill="#8e8e8e" d="M-372.9 136.7l26.8-26.8c3.8-3.8 3.8-9.6 0-13.4s-9.6-3.8-13.4 0l-26.8 26.8c-3.8 3.8-3.8 9.6 0 13.4C-382.4 140.5-374.8 140.5-372.9 136.7zM-577.5 234.2h19.1c0-3.8 0-5.7 0-9.6 0-47.8 38.2-86.1 86.1-86.1s86.1 38.2 86.1 86.1c0 3.8 0 5.7 0 9.6h19.1c0-3.8 0-5.7 0-9.6 0-57.4-47.8-105.2-105.2-105.2 -57.4 0-105.2 47.8-105.2 105.2C-577.5 234.2-577.5 234.2-577.5 234.2zM-348 224.6c0 5.7 3.8 9.6 9.6 9.6h38.2c5.7 0 9.6-3.8 9.6-9.6 0-5.8-3.8-9.6-9.6-9.6h-38.2C-344.2 215.1-348 220.8-348 224.6zM-474.2 100.3c5.7 0 9.6-3.8 9.6-9.6V52.5c0-5.7-3.8-9.6-9.6-9.6 -5.8 0-9.6 3.8-9.6 9.6v38.2C-483.8 96.5-478.1 100.3-474.2 100.3zM-575.6 136.7c3.8 3.8 9.6 3.8 13.4 0s3.8-9.6 0-13.4L-589 96.5c-3.8-3.8-9.6-3.8-13.4 0 -3.8 3.8-3.8 9.6 0 13.4L-575.6 136.7zM-302.1 272.5h-344.3c-3.8 0-9.6 3.8-9.6 9.6 0 5.8 5.7 9.6 9.6 9.6h344.2c5.7 0 9.6-3.8 9.6-9.6C-292.6 276.3-296.4 272.5-302.1 272.5zM-646.4 234.2h38.2c5.7 0 9.6-3.8 9.6-9.6 0-5.8-3.8-9.6-9.6-9.6h-38.2c-5.7 0-9.6 5.7-9.6 9.6C-655.9 230.4-652.1 234.2-646.4 234.2z"/></svg>
			<svg version="1.1" id="overcast-button" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="25px" height="25px" viewBox="-532 -140.7 614.7 614.7" enable-background="new -532 -140.7 614.7 614.7" xml:space="preserve"><path fill="#8e8e8e" d="M-129.4 11.1L-78.3-40c6-6 6.3-16.2-0.6-23.1 -6-6-17-6.5-23.4 0l-50.5 51.1c-6.4 6.5-6.9 16.2 0 23.1C-145.9 18-136.3 18-129.4 11.1zM-266.1-35.5c9.3 0 16.8-7.6 16.8-16.9v-71.8c0-9.4-7.5-16.5-16.8-16.5s-16.5 7.2-16.5 16.5v71.8C-282.7-43.1-275.4-35.5-266.1-35.5zM-402 11.1c7 6.9 16.8 7.1 23.4 0 6.3-6.7 6-17.1 0-23.1l-51.1-51.1c-6-6-16.5-6-23.4 0 -6.9 7.2-6.8 17.1 0 23.8L-402 11.1zM-514.1 141.2l72.1-0.9c9.3-0.1 16.5-7.2 16.5-16.5 0-9.3-7.2-16.5-16.5-16.5h-72.1c-9.3 0.9-16.5 7.8-16.5 17.1C-530.6 133.1-523.4 141.4-514.1 141.2zM62.7 253c-12.3-22.5-28.9-40.5-49.9-54.1 -5.1-38.2-20.5-70.5-46-97.4 -29.9-31.5-70.3-49-113.3-49h-12.3c-11.7-17.4-27.4-31.3-46.3-41.5 -18.9-10.2-39.1-15.3-61-15.3 -35.5 0-65.9 12.6-91.1 37.6 -25 24.9-37.6 55-37.6 90.5 0 13.5 6 34 18 61.6 -17.1 14.1-29.5 32.4-36.4 54.7h-6.9c-30.4 0-56.5 11.4-78.2 34.2 -21.6 22.9-32.5 50.5-32.5 82.7 0 28.9 8.9 54 26.5 75.8 17.9 22.1 40.3 35.5 67.6 40 6.3 1 11.4 1.2 14.7 1.2h288.3 17.1 61c8.1 0 14.7-0.6 19.5-1.8 33.7-4.8 61.8-21.5 84.5-50 21.8-27.4 32.8-59.5 32.8-95.9C81.4 300.2 75 275.6 62.7 253zM-333.2 56.8c18.6-18.5 40.9-27.7 67-27.7 28 0 51.7 10.3 70.9 30.7 -47.2 16-85.1 54.1-102.2 103.4 -6.3-0.9-11.4-1.2-14.7-1.2 -12.9 0-25.3 2.4-37.6 7.5 -7.5-13.5-11.1-28.5-11.1-45.7C-360.8 97.6-351.6 75-333.2 56.8zM22.4 401.9C5.3 423.2-16 435.8-41.9 439.7c-2.4 0.9-6.9 1.2-13.5 1.2h-61 -17.1 -288.3c-2.4 0-6.9-0.6-9-0.6 -18.9-3-34.6-12.3-47.5-28.3 -12.9-15.9-19.2-34.2-19.2-55 0-23.1 7.4-43 22.5-59.2 15.2-16.3 33.7-24.4 55-24.4 12.9 0 25 3 36.4 9.4 -0.3-2.1-0.6-5.1-0.6-9.4 0-21.4 6.9-39.7 21-55 14.1-15.3 31-23.1 51.1-23.1 13.8 0 26.5 3.9 38.2 11.7 3.9-34.2 17.8-63 42.1-86.3 24.4-23.3 52.6-35.1 85.4-35.1 34.6 0 64.3 13.2 89 39.4 24.6 26.1 37.6 57.7 38.5 95 20.1 8.4 36.1 22.3 48.4 41.5S48 302.3 48 326.4C48 355.6 39.6 380.5 22.4 401.9z"/></svg>
		</span>
		<span id="menu-button">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="25" height="25" viewBox="-610 -62 459 459" enable-background="new -610 -62 459 459" xml:space="preserve"><path fill="#8e8e8e" d="M-610 320.5h459v-51h-459V320.5zM-610 193h459v-51h-459V193zM-610 14.5v51h459v-51H-610z"/></svg>
		</span>
		
		<?php if(isset($navbar)): ?><?= get_navbar($navbar, true) ?><?php endif; ?>

	</div>
	<div id="skrollr-body">
		<div id="splash">
			<div id="logo" data-start="top: 30%;" data-100-top-bottom="top: 100%;" data-anchor-target="#splash">
				<!-- <h1 class="logo-font">Arthcy</h1> -->
				<span class="preloader"></span>
			</div>
		</div>
		<div id="main">
			<header>
				<div id="outlook" class="divider">
					<div id="outlook-anchor" class="pl-anchor">
						<div id="pl-cloud-dark" class="plzi-bg-second pl" data-bottom-top="bottom: 90%;" data-top-bottom="bottom: 10%;" data-anchor-target="#outlook-anchor"></div>
						<div id="pl-cloud-light" class="plzi-bg-third pl" data-bottom-top="bottom: 60%;" data-top-bottom="bottom: -20%;" data-anchor-target="#outlook-anchor"></div>

					    <?= parallax_builder('outlook', 7, 10, 1, 0, 1); ?>

					</div>
				    <div id="frame">
				    	<div id="pl-right-tree" class="frame-tree plzi-content pl side-tree"></div>
				    	<div id="pl-left-tree" class="frame-tree plzi-content pl side-tree"></div>
				    	<div id="pl-ground" class="plzi-content pl svg-container"></div>
				    </div>
				</div>
			</header>

		    <section id="about" class="clearfix">
		    	<div class="container">
					
					<?php if(isset($navbar)): ?><?=get_navbar($navbar)?><?php endif; ?>

		    		<div class="resume clearfix">
	    				<h1 class="heading on-light">
	    					<span>About Me</span>
	    					<span class="subtitle">Soul of code and a heart for graphics</span>
	    					<hr>
	    				</h1>
		    			<div class="eleven columns offset-by-one">	
							<p>My name is Robin Hansson, I'm a web developer. When I'm not developing I enjoy creating graphics, static as well as motion.</p>

							<p>After two years education in Computer Networks my creative needs made me change direction. From bits to pixels. 
							I finished a customised two year program in web development and design. With this in mind, I have great knowledge of how the web works.</p>

							<p>Im currently looking for projects to be involved in and know I will be a great asset to your team.</p>

							<p>If you feel the same just <a href="#contact">contact</a> me.</p>
		    			</div>
		    			<div class="socials on-light four columns">
	  						<a href="https://github.com/arthcy">
	  							<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="48px" width="48px" x="0" y="0" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
									<path fill="#7aa4a2" d="M48 25.3c-0.3 5.4-2 10.6-5.4 14.8 -1.6 1.9-3.4 3.7-5.4 5 -1.4 0.9-4.8 3.4-6.5 2.7 -0.4-0.2-0.7-0.6-0.7-1.1 0-4.1 0.9-7.9-1.6-11.4 3.1-0.4 6.4-1.3 8.5-3.9 2.5-3.1 3.2-8.4 1.7-12.1 -0.6-1.5-1.8-2.3-1.6-4 0.3-1.9 0.4-3.3-0.3-5.3 0-0.1-0.1-0.1-0.2-0.1 -2.6-0.4-3.9 1.7-6.1 2.3 -0.9 0.3-2-0.2-3-0.3 -1.3-0.2-2.7-0.3-4-0.2 -1.9 0.1-4.7 1.3-6.3 0.3 -0.6-0.3-5.2-3.2-5.7-1.9 -0.5 1.3-0.7 2.7-0.7 4.1 0 0.8 0.2 1.5 0.4 2.3 0.1 0.4-0.8 1.3-1 1.6 -0.5 0.8-0.9 1.7-1.1 2.6 -0.6 2.3-0.5 4.8 0.2 7 1.4 5 5.6 7.1 10.4 7.7 -0.2 0.4-1.3 3.2-1.6 3.3 -0.9 0.4-1.8 0.6-2.8 0.6 -1.4 0-2.5-0.6-3.4-1.6 -1.3-1.5-2.3-3.7-4.6-3.6 -0.2 0-0.4 0.1-0.6 0.1 -0.3 0.1-0.3 0.3-0.2 0.6 0.5 0.8 1.5 1.2 2.1 1.9 0.7 0.8 1 1.7 1.5 2.6 1 1.8 2.4 2.8 4.5 3 1.2 0.1 2.4 0 3.5-0.3 0.1 1.2 0.6 4.6-0.3 5.5 -0.3 0.2-0.6 0.3-0.9 0.3 -1.9 0-4-1.5-5.5-2.5 -1.9-1.2-3.7-2.8-5.2-4.5 -2.8-3.3-4.8-7.3-5.6-11.6 -1.7-8.9 1.6-18.2 8.4-23.9C21.4-5.2 41 0.6 46.5 16.1 47.6 19 48 22.2 48 25.3 48 25 48 25 48 25.3 47.7 30.1 48 24.8 48 25.3z"/>
								</svg>
								<h4>Github</h4>
							</a>
	  						<a href="https://www.behance.net/arthcy">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" height="48px" width="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
									<path fill="#7aa4a2" d="M0 24C0 10.7 10.8 0 24 0c13.2 0 24 10.8 24 24 0 13.3-10.8 24-24 24C10.7 48 0 37.2 0 24zM21.4 22.7c0.3-0.1 0.4-0.2 0.6-0.3 0.8-0.3 1.4-0.9 1.7-1.6 1.1-2.3 0-5.5-2.3-6.6 -1-0.5-2-0.6-3.1-0.6 -3.2 0-6.5 0-9.7 0 -0.2 0-0.3 0-0.5 0 0 6.7 0 13.3 0 20 0.2 0 0.3 0 0.4 0 3.3 0 6.7 0 10 0 0.5 0 1 0 1.4-0.1 2.3-0.5 4.1-1.7 4.6-4.1 0.3-1.4 0.3-2.7-0.2-4C24.1 23.8 23.1 22.9 21.4 22.7zM40.2 28.7c-1.2 0-2.3 0-3.5 0 -0.1 1.1-0.9 1.8-1.9 2 -0.6 0.1-1.1 0.2-1.7 0.1 -2-0.1-3.3-1.6-3.1-3.5 0.2 0 0.4 0 0.6 0 3.1 0 6.1 0 9.2 0 0.4 0 0.6 0 0.6-0.5 0-0.9 0.1-1.8-0.1-2.7 -0.5-2.6-2-4.5-4.7-5.2 -0.9-0.2-1.9-0.3-2.8-0.2 -2.6 0.1-4.6 1.1-5.9 3.4 -1.2 2.2-1.5 4.6-0.8 7.1 0.6 2.1 2 3.6 4.1 4.3 1.5 0.5 3.1 0.6 4.7 0.4 1.1-0.1 2.2-0.4 3.1-1C39.5 32 40.2 30.5 40.2 28.7zM37.3 14.8c-2.7 0-5.5 0-8.2 0 0 0.8 0 1.6 0 2.4 2.7 0 5.4 0 8.2 0C37.3 16.4 37.3 15.6 37.3 14.8zM12.7 24.7c2 0 4 0 6 0 0.8 0 1.4 0.6 1.7 1.4 0.3 0.8 0.3 1.6 0.1 2.4 -0.2 0.8-0.8 1.4-1.7 1.5 -2 0.1-4 0-6.1 0C12.7 28.2 12.7 26.5 12.7 24.7zM12.7 21.6c0-1.5 0-2.9 0-4.4 0.5 0 0.9 0 1.4 0 1.4 0 2.7 0 4.1 0 0.9 0 1.5 0.4 1.6 1.4 0.1 0.7 0 1.4-0.1 2 -0.1 0.6-0.5 1-1.2 1C16.6 21.6 14.7 21.6 12.7 21.6zM36.5 24.7c-2.2 0-4.3 0-6.5 0 0-1.6 1.6-3.1 3.4-3.1C35.2 21.6 36.4 22.7 36.5 24.7z"/>
								</svg>
								<h4>Behance</h4>
	  						</a>
		    			</div>
					</div>
				</div> 
			</section>

	    	<div id="clearing" class="divider">
		    	<div id="clearing-anchor" class="pl-anchor">
		    		<div id="pl-1" class="plzi-top pl"></div>

					<?= parallax_builder('clearing', 6, 15, 1, 5, 1); ?>
				
				</div>
			</div>
		    
		    <section id="projects">
		    	<div class="container">

					<?php if(isset($navbar)): ?><?=get_navbar($navbar)?><?php endif; ?>

					<h1 class="heading on-dark">
						<span>Projects</span>
						<span class="subtitle">My work so far</span>
						<hr>
					</h1>

		    		<div class="projects row">
						<!-- <div class=""> -->
							<figure class="project-item clearfix">
								<svg class="browser-top" height="40" width="70">
									<circle cx="20" cy="18" r="7" fill="#7aa4a2" />
									<circle cx="40" cy="18" r="7" fill="#7aa4a2" />
									<circle cx="60" cy="18" r="7" fill="#7aa4a2" />
								</svg>
			    				<div class="content">
			    					<img src="img/proj_lujuriavegana.png">
			    				</div>
			    				<figcaption class="row">
					    			<h4 class="heading on-light">
						    			<span>Lujuria Vegana</span>
					    				<span class="subtitle">Site Fresh Up</span>
						   				<hr>
					   				</h4>
				    				<div class="description offset-by-one ten columns">
				  						<p>Lujuria Vegana wanted to update their current site with the possibility to
				  						upload new products and services. The site is build on Wordpress with custom plugins.</p>
									</div>
									<ul class="tags four columns">
										<li><span>Wordpress</span></li>
										<li><span>PHP</span></li>
										<li><span>Front-End Development</span></li>
										<li><span>Responsive</span></li>
									</ul>
									<!-- <div class="socials on-light sixteen columns">
				  						<a href="#">
				  							<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="48px" width="48px" x="0" y="0" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
												<path fill="#7aa4a2" d="M48 25.3c-0.3 5.4-2 10.6-5.4 14.8 -1.6 1.9-3.4 3.7-5.4 5 -1.4 0.9-4.8 3.4-6.5 2.7 -0.4-0.2-0.7-0.6-0.7-1.1 0-4.1 0.9-7.9-1.6-11.4 3.1-0.4 6.4-1.3 8.5-3.9 2.5-3.1 3.2-8.4 1.7-12.1 -0.6-1.5-1.8-2.3-1.6-4 0.3-1.9 0.4-3.3-0.3-5.3 0-0.1-0.1-0.1-0.2-0.1 -2.6-0.4-3.9 1.7-6.1 2.3 -0.9 0.3-2-0.2-3-0.3 -1.3-0.2-2.7-0.3-4-0.2 -1.9 0.1-4.7 1.3-6.3 0.3 -0.6-0.3-5.2-3.2-5.7-1.9 -0.5 1.3-0.7 2.7-0.7 4.1 0 0.8 0.2 1.5 0.4 2.3 0.1 0.4-0.8 1.3-1 1.6 -0.5 0.8-0.9 1.7-1.1 2.6 -0.6 2.3-0.5 4.8 0.2 7 1.4 5 5.6 7.1 10.4 7.7 -0.2 0.4-1.3 3.2-1.6 3.3 -0.9 0.4-1.8 0.6-2.8 0.6 -1.4 0-2.5-0.6-3.4-1.6 -1.3-1.5-2.3-3.7-4.6-3.6 -0.2 0-0.4 0.1-0.6 0.1 -0.3 0.1-0.3 0.3-0.2 0.6 0.5 0.8 1.5 1.2 2.1 1.9 0.7 0.8 1 1.7 1.5 2.6 1 1.8 2.4 2.8 4.5 3 1.2 0.1 2.4 0 3.5-0.3 0.1 1.2 0.6 4.6-0.3 5.5 -0.3 0.2-0.6 0.3-0.9 0.3 -1.9 0-4-1.5-5.5-2.5 -1.9-1.2-3.7-2.8-5.2-4.5 -2.8-3.3-4.8-7.3-5.6-11.6 -1.7-8.9 1.6-18.2 8.4-23.9C21.4-5.2 41 0.6 46.5 16.1 47.6 19 48 22.2 48 25.3 48 25 48 25 48 25.3 47.7 30.1 48 24.8 48 25.3z"/>
											</svg>
											<h4>Github</h4>
										</a>
				  						<a href="#">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" height="48px" width="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
												<path fill="#7aa4a2" d="M0 24C0 10.7 10.8 0 24 0c13.2 0 24 10.8 24 24 0 13.3-10.8 24-24 24C10.7 48 0 37.2 0 24zM21.4 22.7c0.3-0.1 0.4-0.2 0.6-0.3 0.8-0.3 1.4-0.9 1.7-1.6 1.1-2.3 0-5.5-2.3-6.6 -1-0.5-2-0.6-3.1-0.6 -3.2 0-6.5 0-9.7 0 -0.2 0-0.3 0-0.5 0 0 6.7 0 13.3 0 20 0.2 0 0.3 0 0.4 0 3.3 0 6.7 0 10 0 0.5 0 1 0 1.4-0.1 2.3-0.5 4.1-1.7 4.6-4.1 0.3-1.4 0.3-2.7-0.2-4C24.1 23.8 23.1 22.9 21.4 22.7zM40.2 28.7c-1.2 0-2.3 0-3.5 0 -0.1 1.1-0.9 1.8-1.9 2 -0.6 0.1-1.1 0.2-1.7 0.1 -2-0.1-3.3-1.6-3.1-3.5 0.2 0 0.4 0 0.6 0 3.1 0 6.1 0 9.2 0 0.4 0 0.6 0 0.6-0.5 0-0.9 0.1-1.8-0.1-2.7 -0.5-2.6-2-4.5-4.7-5.2 -0.9-0.2-1.9-0.3-2.8-0.2 -2.6 0.1-4.6 1.1-5.9 3.4 -1.2 2.2-1.5 4.6-0.8 7.1 0.6 2.1 2 3.6 4.1 4.3 1.5 0.5 3.1 0.6 4.7 0.4 1.1-0.1 2.2-0.4 3.1-1C39.5 32 40.2 30.5 40.2 28.7zM37.3 14.8c-2.7 0-5.5 0-8.2 0 0 0.8 0 1.6 0 2.4 2.7 0 5.4 0 8.2 0C37.3 16.4 37.3 15.6 37.3 14.8zM12.7 24.7c2 0 4 0 6 0 0.8 0 1.4 0.6 1.7 1.4 0.3 0.8 0.3 1.6 0.1 2.4 -0.2 0.8-0.8 1.4-1.7 1.5 -2 0.1-4 0-6.1 0C12.7 28.2 12.7 26.5 12.7 24.7zM12.7 21.6c0-1.5 0-2.9 0-4.4 0.5 0 0.9 0 1.4 0 1.4 0 2.7 0 4.1 0 0.9 0 1.5 0.4 1.6 1.4 0.1 0.7 0 1.4-0.1 2 -0.1 0.6-0.5 1-1.2 1C16.6 21.6 14.7 21.6 12.7 21.6zM36.5 24.7c-2.2 0-4.3 0-6.5 0 0-1.6 1.6-3.1 3.4-3.1C35.2 21.6 36.4 22.7 36.5 24.7z"/>
											</svg>
											<h4>Behance</h4>
				  						</a>
									</div> -->
								</figcaption>
							</figure>
						<!-- </div> -->
					</div>
				</div>
		    </section>

			<div id="brook" class="divider">
				<div id="brook-anchor" class="pl-anchor">
		    		<div id="pl-1" class="plzi-content pl">
		    			<!-- <img src="img/brook/brook_forest-l-01.png"> -->
		    		</div>

		    		<?= parallax_builder('brook', 5, 15, 1, 10, 0); ?>

	    		</div>
	    	</div>
		    

		    <section id="contact">		        
		        <div id="pl-1" class="plzi-content"></div>
		    	<div class="wrapper">
			    	<div class="container">

						<?php if(isset($navbar)): ?><?=get_navbar($navbar)?><?php endif; ?>

						<h1 class="heading on-dark">
							<span>Get in Touch</span>
							<span class="subtitle">Im currently looking for projects to be involved in. <br>If you are intrested, let me know.</span>
							<hr>
						</h1>

						<h4 class="heading on-dark">
			    			<span>Robin Hansson</span>
							<span class="subtitle">Växjö, Sweden</span>
							<span class="mail"><a href="mailto:robin@arthcy.net">robin@arthcy.net</a></span>
							<span class="subtitle">
								<a href="https://www.linkedin.com/in/arthcy">Linkedin</a>
								|
								<a href="https://github.com/Arthcy">Github</a>
								|
								<a href="https://www.behance.net/arthcy">Behance</a>
							</span>
			   				<hr>
						</h4>
	    			</div>
	    		</div>
		    </section>

		    <footer>
	   			<div class="socials on-dark">
					<a href="https://github.com/Arthcy/dfosl" title="Get the site source at Github">
							<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="48px" width="48px" x="0" y="0" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
							<path fill="#7aa4a2" d="M48 25.3c-0.3 5.4-2 10.6-5.4 14.8 -1.6 1.9-3.4 3.7-5.4 5 -1.4 0.9-4.8 3.4-6.5 2.7 -0.4-0.2-0.7-0.6-0.7-1.1 0-4.1 0.9-7.9-1.6-11.4 3.1-0.4 6.4-1.3 8.5-3.9 2.5-3.1 3.2-8.4 1.7-12.1 -0.6-1.5-1.8-2.3-1.6-4 0.3-1.9 0.4-3.3-0.3-5.3 0-0.1-0.1-0.1-0.2-0.1 -2.6-0.4-3.9 1.7-6.1 2.3 -0.9 0.3-2-0.2-3-0.3 -1.3-0.2-2.7-0.3-4-0.2 -1.9 0.1-4.7 1.3-6.3 0.3 -0.6-0.3-5.2-3.2-5.7-1.9 -0.5 1.3-0.7 2.7-0.7 4.1 0 0.8 0.2 1.5 0.4 2.3 0.1 0.4-0.8 1.3-1 1.6 -0.5 0.8-0.9 1.7-1.1 2.6 -0.6 2.3-0.5 4.8 0.2 7 1.4 5 5.6 7.1 10.4 7.7 -0.2 0.4-1.3 3.2-1.6 3.3 -0.9 0.4-1.8 0.6-2.8 0.6 -1.4 0-2.5-0.6-3.4-1.6 -1.3-1.5-2.3-3.7-4.6-3.6 -0.2 0-0.4 0.1-0.6 0.1 -0.3 0.1-0.3 0.3-0.2 0.6 0.5 0.8 1.5 1.2 2.1 1.9 0.7 0.8 1 1.7 1.5 2.6 1 1.8 2.4 2.8 4.5 3 1.2 0.1 2.4 0 3.5-0.3 0.1 1.2 0.6 4.6-0.3 5.5 -0.3 0.2-0.6 0.3-0.9 0.3 -1.9 0-4-1.5-5.5-2.5 -1.9-1.2-3.7-2.8-5.2-4.5 -2.8-3.3-4.8-7.3-5.6-11.6 -1.7-8.9 1.6-18.2 8.4-23.9C21.4-5.2 41 0.6 46.5 16.1 47.6 19 48 22.2 48 25.3 48 25 48 25 48 25.3 47.7 30.1 48 24.8 48 25.3z"/>
						</svg>
						<h4>Github</h4>
					</a>

					<a href="https://www.behance.net/gallery/28394233/Deep-Forest-of-Small-Land" title="Site demonstration at Behance">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" height="48px" width="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
							<path fill="#7aa4a2" d="M0 24C0 10.7 10.8 0 24 0c13.2 0 24 10.8 24 24 0 13.3-10.8 24-24 24C10.7 48 0 37.2 0 24zM21.4 22.7c0.3-0.1 0.4-0.2 0.6-0.3 0.8-0.3 1.4-0.9 1.7-1.6 1.1-2.3 0-5.5-2.3-6.6 -1-0.5-2-0.6-3.1-0.6 -3.2 0-6.5 0-9.7 0 -0.2 0-0.3 0-0.5 0 0 6.7 0 13.3 0 20 0.2 0 0.3 0 0.4 0 3.3 0 6.7 0 10 0 0.5 0 1 0 1.4-0.1 2.3-0.5 4.1-1.7 4.6-4.1 0.3-1.4 0.3-2.7-0.2-4C24.1 23.8 23.1 22.9 21.4 22.7zM40.2 28.7c-1.2 0-2.3 0-3.5 0 -0.1 1.1-0.9 1.8-1.9 2 -0.6 0.1-1.1 0.2-1.7 0.1 -2-0.1-3.3-1.6-3.1-3.5 0.2 0 0.4 0 0.6 0 3.1 0 6.1 0 9.2 0 0.4 0 0.6 0 0.6-0.5 0-0.9 0.1-1.8-0.1-2.7 -0.5-2.6-2-4.5-4.7-5.2 -0.9-0.2-1.9-0.3-2.8-0.2 -2.6 0.1-4.6 1.1-5.9 3.4 -1.2 2.2-1.5 4.6-0.8 7.1 0.6 2.1 2 3.6 4.1 4.3 1.5 0.5 3.1 0.6 4.7 0.4 1.1-0.1 2.2-0.4 3.1-1C39.5 32 40.2 30.5 40.2 28.7zM37.3 14.8c-2.7 0-5.5 0-8.2 0 0 0.8 0 1.6 0 2.4 2.7 0 5.4 0 8.2 0C37.3 16.4 37.3 15.6 37.3 14.8zM12.7 24.7c2 0 4 0 6 0 0.8 0 1.4 0.6 1.7 1.4 0.3 0.8 0.3 1.6 0.1 2.4 -0.2 0.8-0.8 1.4-1.7 1.5 -2 0.1-4 0-6.1 0C12.7 28.2 12.7 26.5 12.7 24.7zM12.7 21.6c0-1.5 0-2.9 0-4.4 0.5 0 0.9 0 1.4 0 1.4 0 2.7 0 4.1 0 0.9 0 1.5 0.4 1.6 1.4 0.1 0.7 0 1.4-0.1 2 -0.1 0.6-0.5 1-1.2 1C16.6 21.6 14.7 21.6 12.7 21.6zM36.5 24.7c-2.2 0-4.3 0-6.5 0 0-1.6 1.6-3.1 3.4-3.1C35.2 21.6 36.4 22.7 36.5 24.7z"/>
						</svg>
						<h4>Behance</h4>
					</a>
				</div>	    	
		    </footer>
		</div> <!-- END #main -->   
	</div>
</body>
</html>