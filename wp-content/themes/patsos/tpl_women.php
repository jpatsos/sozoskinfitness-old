<?php
/*
Template Name: Women
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
            <div class="cover-media-inner women">
                <div class="cover-media-shade cover-media-shade--indigo"></div>
            </div>
        </figure>
		<div class="cell well--hero">
			<div class="g-b--center g-b--m--8of12 tac">
				<h1 class="mhc tac tss mtf mbxs ttu tci">Womens Skin Fitness</h1> 
				<span class="mhc tac tsxl twb ttu db tci"><?php the_field('hero');?></span>
			</div>
		</div>
	</div>

	<div class="row concerns">
	    <div class="cell well--xl">
	        <div class="g-b--center g-b--m--3of5 tac mbl">
	            <h2 class="well--l">What is your concern?</h2>
	        </div>
	        <div class="g">
		        <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="wrinkles">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/square/women-wrinkles.jpg" alt="">
	                    </div>
	                    <h3>Wrinkles</h3>
	                </div>
	            </div>
	            <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="scaring">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/square/women-acnescar.jpg" alt="">
	                    </div>
	                    <h3>Scaring</h3>
	                </div>
	            </div>
	            <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="dark-spots">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/square/women-darkspots.jpg" alt="">
	                    </div>
	                    <h3>Dark Spots</h3>
	                </div>
	            </div>
	            
	            <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="other">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/concerns/additionalskinconcerns.jpg" alt="">
	                    </div>
	                    <h3>Other</h3>
	                </div>
	            </div>

	            <div class="g-b g-b--1of2 g-b--m--1of5">
	                <div class="concern" data-concern="maintain">
	                    <div class="concern-media">
	                        <img src="/wp-content/themes/patsos/img/square/women-maintain.jpg" alt="">
	                    </div>
	                    <h3>Prevent &amp; Maintain</h3>
	                </div>
	            </div>


	        </div>
	    </div>
	</div>
	<div class="concern-content" data-concern="scaring" id="scaring">
		<div class="row row--grey">
			<div class="cell well--xxl">
				<header class="tac g-b--center g-b--m--3of4">
					<h3>Skin Texture &amp; Scarring</h3>
					<?php the_field('texture_scaring_intro');?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline women">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Rough Texture</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Acne Scars</span></a></li>
								<li><a href="#section-linetriangle-3"><span>Pockmarks</span></a></li>
								<li><a href="#section-linetriangle-4"><span>Post surgery &amp; Stretchmarks</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('texture_scaring_1');?>
							</section>
							<section id="section-linetriangle-2">
								<?php the_field('texture_scaring_2');?>
							</section>
							<section id="section-linetriangle-3">
								<?php the_field('texture_scaring_3');?>
							</section>
							<section id="section-linetriangle-4">
								<?php the_field('texture_scaring_4');?>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--indigo">Book Your Appointment</a>
						</div>
				</div>
					</div><!-- /tabs -->
				</section>
			</div>
		</div>
		

	</div> <!-- /.concern-content -->

	<div class="concern-content" data-concern="dark-spots" id="dark-spots">
		<div class="row row--grey">
			<div class="cell well--xxl">
				<header class="tac g-b--center g-b--m--3of4">
					<h3>Dark Spots</h3>
					<?php the_field('dark_spots_intro');?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline women">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Sun Damage / Age Spots</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Post Acne Spots</span></a></li>
								<li><a href="#section-linetriangle-1"><span>Melasma</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('dark_spots_1');?>
							</section>
							<section id="section-linetriangle-2">
								<?php the_field('dark_spots_2');?>
							</section>
							<section id="section-linetriangle-3">
								<?php the_field('dark_spots_3');?>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--indigo">Book Your Appointment</a>
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
					<h3>Wrinkles</h3>
					<?php the_field('wrinkles_intro');?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline women">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Fine Lines</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Wrinkles</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<p><?php the_field('wrinkles_1');?></p>
								<?php /* ?><div class="pam row--grey tss">
									<div class="g">
										<div class="g-b g-b--m--4of12">
											<img class="g-b--3of6 tac db mhc mbmmax" src="/wp-content/themes/patsos/img/sheri.png" alt="">
										</div>
										<div class="g-b g-b--m--8of12 tal">
											<p>“By age 19 I had fine lines and wrinkles on my forehead from worshiping the sun and over dying my skin with the wrong skin care products that I thought was the answer for my acne.  I desire to educate every woman, no matter the age, on things they can do now, even at home to get the glowing skin you can have!”</p>
										</div>
									</div>
								</div>
								<?php */ ?>
							</section>
							<section id="section-linetriangle-2">
								<p><?php the_field('wrinkles_2');?></p>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--indigo">Book Your Appointment</a>
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
					<?php the_field('other_intro');?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline women">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Rosacea</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Sensative Skin</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Dry Skin</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Oily Skin</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('other_1');?>
							</section>
							<section id="section-linetriangle-2">
								<?php the_field('other_2');?>
							</section>
							<section id="section-linetriangle-3">
								<?php the_field('other_3');?>
							</section>
							<section id="section-linetriangle-4">
								<?php the_field('other_4');?>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--indigo">Book Your Appointment</a>
						</div>
				</div>
					</div><!-- /tabs -->
				</section>
			</div>
		</div>
	</div> <!-- /.concern-content -->

	<div class="concern-content" data-concern="maintain" id="maintain">
		<div class="row row--grey">
			<div class="cell well--xxl">
				<header class="tac g-b--center g-b--m--3of4">
					<h3>Preventive &amp; Maintenance</h3>
					<?php the_field('prevent_&_maintain_intro');?>
				</header>
			</div>
		</div>
		
		<div class="row">
			<div class="cell well--xl">
				<section>
					<div class="tabs tabs-style-topline women">

						<nav>
							<ul>
								<li><a href="#section-linetriangle-1"><span>Age Gracefully</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Prevent Acne</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Maintain Results</span></a></li>
								<li><a href="#section-linetriangle-2"><span>Women’s Skin Fitness Membership</span></a></li>
							</ul>
						</nav>

						<div class="content-wrap">
							<section id="section-linetriangle-1">
								<?php the_field('prevent_&_maintain_1'); ?>
							</section>
							<section id="section-linetriangle-2">
								<?php the_field('prevent_&_maintain_2');?>
							</section>
							<section id="section-linetriangle-3">
								<?php the_field('prevent_&_maintain_3');?>
							</section>
							<section id="section-linetriangle-4">
								<?php the_field('prevent_&_maintain_4');?>
							</section>
						</div><!-- /content -->

						<div class="g">
							<div class="g-b--center g-b--m--3of4 tac">
								<a href="/appointment/" class="btn btn--indigo">Book Your Appointment</a>
						</div>
				</div>
					</div><!-- /tabs -->
				</section>
			</div>
		</div>
	</div> <!-- /.concern-content -->
	
</main>

<?php get_footer(); ?>