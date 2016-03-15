<?php
/*
Template Name: Acne
*/
?>

<?php get_header(); ?>
	
<main class="content wrap">
	<!-- <header class="hero hero--women row"> 
		<div class="cell well well--hero"> 
			<h1 class="mhc tac tss mtf mbxs ttu">Womens Skin Fitness</h1>
			<span class="mhc tac tsxl twb ttu db">When you feel the glow, it shows!</span>
		</div>
	</header> -->
	<div class="row cover">
        <figure class="cover-media">
            <div class="cover-media-inner girl">
                <div class="cover-media-shade cover-media-shade--cyan"></div>
            </div>
        </figure>
		<div class="cell well--hero">
			<div class="g-b--center g-b--m--8of12 tac">
				<h1 class="mhc tac tss mtf mbxs ttu tci">Acne Skin Fitness</h1>
				<span class="mhc tac tsxl twb ttu db tci">Say goodbye to pimples!</span>
			</div>
		</div>
	</div>

	<div class="concern-contents">
		<div class="row row--grey">
			<div class="cell well--xxl">
				<header class="tac g-b--center g-b--m--3of4">
					<h3>Acne</h3>
					<?php the_field('acne_intro'); ?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Consult &amp; Coach</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Acne Treatment</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Acne Scars</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Maintain</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('acne_1'); ?>
							</section>
							<section id="section-linetriangle-2">
								<?php the_field('acne_2'); ?>
							</section>
							<section id="section-linetriangle-3">
								<?php the_field('acne_3'); ?>
							</section>
							<section id="section-linetriangle-4">
								<?php the_field('acne_4'); ?>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--cyan">Book Your Appointment</a>
							</div>
						</div>
					</div><!-- /tabs -->
				</section>
			</div>
		</div>
	</div> <!-- /.concern-content -->
	
</main>

<?php get_footer(); ?>