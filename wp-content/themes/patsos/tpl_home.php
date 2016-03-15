<?php 
/*
Template Name: Home
*/ 
?>
<?php get_header(); ?>
	
	<main class="content wrap">
		<div class="row cover">
            <figure class="cover-media">
                <div class="cover-media-inner couple">
                    <div class="cover-media-shade"></div>
                </div>
            </figure>
			<div class="cell well--hero">
				<div class="tac">
					<!-- <h2 class="mbs hero-title tci mbf">A <i class="twb">New Year</i> and a <i class="twb">New You</i></h2> -->
                    <?php //get_template_part( 'content', 'page' ); ?>
                    <!-- <h2 class="mbs hero-title tci mbf">The <i class="twb">Gym</i> for your <i class="twb">Skin</i></h2> -->
                    <div class="hero-title tci mbf">
                        <?php the_field('hero'); ?>
                    </div>
                    
					<a href="/appointment/" class="btn btn--indigo">Book Your Appointment</a>
				</div>
			</div>
		</div>

        <div class="row row--a">
            <div class="well well--xl">
                <h2 class="h1 mbm mtm tac">How Skin Fitness Works</h2>
                <div class="timeline">

                    <div class="cell cell--m timeline-section js-scrollTrigger">
                        <div class="g g--l--reverse">
                            <div class="g-b g-b--m--1of2 timeline-img">
                                <figure>
                                    <img src="/wp-content/themes/patsos/img/square/reception.jpg" alt="">
                                </figure>
                            </div>
                            <div class="g-b g-b--m--1of2 pll prl ptm ptf--m">
                                <h2 class="timeline-waypoint timeline-waypoint--first">Initial Consultation</h2>
                                <?php the_field('initial_consultation'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="cell cell--m well well--l timeline-section js-scrollTrigger">
                        <div class="g">
                            <div class="g-b g-b--m--1of2 timeline-img">
                                <figure>
                                    <img src="/wp-content/themes/patsos/img/square/treatment.jpg" alt="">
                                </figure>
                            </div>
                            <div class="g-b g-b--m--1of2 pll prl">
                                <h2 class="timeline-waypoint">The Treatment</h2>
                                <?php the_field('the_treatment'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="cell cell--m timeline-section js-scrollTrigger">
                        <div class="g g--l--reverse">
                            <div class="g-b g-b--m--1of2 timeline-img">
                                <figure>
                                    <img src="/wp-content/themes/patsos/img/square/clarisonic.jpg" alt="">
                                </figure>
                            </div>
                            <div class="g-b g-b--m--1of2 pll prl ptm ptf--m">
                                <h2 class="timeline-waypoint timeline-waypoint--last">Maintain Results</h2>
                                <?php the_field('maintain_results'); ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <?php /* <div class="row row--cyan cover cover--side right">
            <figure class="cover-media mobile-hide">
                <div class="cover-media-inner two">
                    <div class="cover-media-shade cover-media-shade--a"></div>
                </div>
            </figure>
            <div class="cell well--xl">
                <div class="g">
                    <div class="g-b g-b--m--1of2 mbl tci prlm">
                        <h2 class="mbs">We Put <i>You</i> First</h2>
                        <p>Whether you have specific concerns with <a class="tcs" href="/acne/">acne</a>, scarring, sun damage, melasma, wrinkles, rosacea or just want to age gracefully -- it's our passion and promise to get your skin in the best shape of it's life! We focus on education and provide highly customized treatments and skin care using only the most effective cosmedical and natural/organic products in a sterilized environment.</p>
                        <p>Our number one focus is on our clients, and to provide them with extraordinary service in a relaxed, spa-like atmosphere.</p>
                    </div>
                </div>
            </div>
        </div> */  ?>

        <div class="row row--cyan cover cover--side right">
            <figure class="cover-media mobile-hide">
                <div class="cover-media-inner two">
                    <div class="cover-media-shade cover-media-shade--a"></div>
                </div>
            </figure>
            <div class="cell well--xl">
                <div class="g">
                    <div class="g-b g-b--m--1of2 mbl tci prlm">
                        <h2 class="mbs">About Sozo Skin Fitness</h2>
                        <?php the_field('about'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row theme--a" id="about"> 
            <div class="cell well--xl">
                <div class="g">
                    <div class="g-b g-b--m--1of2">
                        <img class="g-b--3of6 tac db mhc mbmmax" src="/wp-content/themes/patsos/img/sheri.png" alt="">
                    </div>
                    <div class="g-b g-b--m--1of2">
                        <h2 class="mbs">Meet Your <i>Skin Fitness</i> Expert</h2>
                        <div class="tci">
                            <?php the_field('meet_the_expert'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
	</main>
			
		
				
				
	

	<?php
	// Start the loop.
	/*while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content', 'page' );

	// End the loop.
	endwhile;*/
	?>

<?php get_footer(); ?>
