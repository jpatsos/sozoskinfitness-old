<?php
/*
Template Name: Men
*/
?>

<?php get_header(); ?>
	
<main class="content wrap">
	<!-- <header class="hero hero--men row"> 
		<div class="cell well well--hero">
			<h1 class="mhc tft tac tsxxl mtf">SKiN<span class="tc-orange">FiTNESS</span></h1>
		</div>
	</header> -->
	<div class="row cover">
        <figure class="cover-media">
            <div class="cover-media-inner man">
                <div class="cover-media-shade cover-media-shade--dark"></div>
            </div>
        </figure>
		<div class="cell well--hero">
			<div class="g-b--center g-b--m--8of12 tac">
				<h1 class="mhc tft tac tsxxl mtf"><span class="db tsxs" style="color: #bdc2c9;margin: auto;width: 30%;border-bottom: 1px solid #bdc2c9;text-align: center;">MENS</span> <span class="tci">SKiN</span><span class="tc-orange">FiTNESS</span></h1>
			</div>
		</div>
	</div>
	<div class="row concerns">
	    <div class="cell well--xl">
	        <div class="g-b--center g-b--m--3of5 tac mbl">
	            <h2 class="mbs tft ttu">Let's see some results</h2>
	            <p>Please click on your concern below</p>
	        </div>
	        <div class="g">
	            <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="maintain">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/square/men-maintain.jpg" alt="">
	                    </div>
	                    <h3 class="tft ttu">Prevent &amp; Maintain</h3>
	                </div>
	            </div>
	            <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="scarring">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/square/men-texture.jpg" alt="">
	                    </div>
	                    <h3 class="tft ttu">Texture &amp; Scarring</h3>
	                </div>
	            </div>
	            <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="wrinkles">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/square/men-wrinkles.jpg" alt="">
	                    </div>
	                    <h3 class="tft ttu">Wrinkles</h3>
	                </div>
	            </div>
	            <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="spots">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/square/men-darkspots.jpg" alt="">
	                    </div>
	                    <h3 class="tft ttu">Dark Spots</h3>
	                </div>
	            </div>
	            <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="other">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/concerns/additionalskinconcerns.jpg" alt="">
	                    </div>
	                    <h3 class="tft ttu">Other</h3>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="concern-content" data-concern="maintain" id="maintain">
		<div class="row row--grey">
			<div class="cell well--xxl">
				<header class="tac g-b--center g-b--m--3of4">
					<h3>Preventive &amp; Maintenance</h3>
					<?php the_field('preventive_&_maintenance_intro'); ?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline men">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Age Well</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Prevent Acne</span></a></li>
								<li><a href="#section-linetriangle-3"><span>Maintain Results</span></a></li>
								<li><a href="#section-linetriangle-4"><span>Men’s Skin Fitness Membership</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('preventive_&_maintenance_1'); ?>
							</section>
						</div><!-- /content -->
						<div class="content-wrap">
							<section id="section-linetriangle-2">
								<?php the_field('preventive_&_maintenance_2'); ?>
							</section>
						</div><!-- /content -->
						<div class="content-wrap">
							<section id="section-linetriangle-3">
								<?php the_field('preventive_&_maintenance_3'); ?>
							</section>
						</div><!-- /content -->
						<div class="content-wrap">
							<section id="section-linetriangle-4">
								<?php the_field('preventive_&_maintenance_4'); ?>
							</section>
						</div><!-- /content -->


						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--deep-orange">Book Your Appointment</a>
							</div>
						</div>
					</div><!-- /tabs -->
				</section>
			</div>
		</div>
		

	</div> <!-- /.concern-content -->

	<div class="concern-content" data-concern="scarring" id="scarring">
		<div class="row row--grey">
			<div class="cell well--xxl">
				<header class="tac g-b--center g-b--m--3of4">
					<h3>Texture &amp; Scarring</h3>
					<?php the_field('texture_&_scaring_intro'); ?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline men">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Rough Texture</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Acne Scars</span></a></li>
								<li><a href="#section-linetriangle-1"><span>Pockmarks</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Post surgery &amp; Injuries</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('texture_&_scaring_1'); ?>
							</section>
							<section id="section-linetriangle-2">
								<?php the_field('texture_&_scaring_2'); ?>
							</section>
							<section id="section-linetriangle-3">
								<?php the_field('texture_&_scaring_3'); ?>
							</section>
							<section id="section-linetriangle-4">
								<?php the_field('texture_&_scaring_4'); ?>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--deep-orange">Book Your Appointment</a>
						</div>
				</div>
					</div><!-- /tabs -->
				</section>
			</div>
		</div>
	</div> <!-- /.concern-content -->

	<div class="concern-content" data-concern="wrinkles" id="wrinkles">
		<div class="row row--grey">
			<div class="cell well--xxl">
				<header class="tac g-b--center g-b--m--3of4">
					<h3>Fine Lines &amp; Wrinkles</h3>
					<?php the_field('fine_lines_&_wrinkles_intro'); ?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline men">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Fine Lines</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Wrinkles</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('fine_lines_&_wrinkles_1'); ?>
							</section>
							<section id="section-linetriangle-2">
								<?php the_field('fine_lines_&_wrinkles_2'); ?>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--deep-orange">Book Your Appointment</a>
							</div>
						</div>
					</div><!-- /tabs -->
				</section>
			</div>
		</div>
	</div> <!-- /.concern-content -->

	<div class="concern-content" data-concern="spots" id="spots">
		<div class="row row--grey">
			<div class="cell well--xxl">
				<header class="tac g-b--center g-b--m--3of4">
					<h3>Dark Spots</h3>
					<?php the_field('dark_spots_intro'); ?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline men">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Post Acne Spots</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Sun Damage</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Blotchy Color</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Bald Head Spots</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('dark_spots_1'); ?>
							</section>
							<section id="section-linetriangle-2">
								<?php the_field('dark_spots_2'); ?>
							</section>
							<section id="section-linetriangle-3">
								<?php the_field('dark_spots_3'); ?>
							</section>
							<section id="section-linetriangle-4">
								<?php the_field('dark_spots_4'); ?>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--deep-orange">Book Your Appointment</a>
							</div>
						</div>
					</div><!-- /tabs -->
				</section>
			</div>
		</div>
	</div> <!-- /.concern-content -->

	<div class="concern-content" data-concern="other" id="other">
		<div class="row row--grey">
			<div class="cell well--xxl">
				<header class="tac g-b--center g-b--m--3of4">
					<h3>Other</h3>
					<?php the_field('other_intro'); ?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline men">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Blackheads</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Ingrown Hairs</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Rosacea</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Sensitive</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Dry/Oily</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('other_1'); ?>
							</section>
							<section id="section-linetriangle-2">
								<?php the_field('other_2'); ?>
							</section>
							<section id="section-linetriangle-3">
								<?php the_field('other_3'); ?>
							</section>
							<section id="section-linetriangle-4">
								<?php the_field('other_4'); ?>
							</section>
							<section id="section-linetriangle-5">
								<?php the_field('other_5'); ?>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--deep-orange">Book Your Appointment</a>
							</div>
						</div>
					</div><!-- /tabs -->
				</section>
			</div>
		</div>
	</div> <!-- /.concern-content -->
	
</main>

<?php get_footer(); ?>