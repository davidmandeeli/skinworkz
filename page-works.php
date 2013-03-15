<?php
/*
Template Name: Skinworkz Works
*/
?>

<?php get_header();?>

	<?php @include "_/inc/sub_menu_home.php" ?> 

	<div id="works">
		<div class="works-cont">
		<div class="info-cont">
			<div class="info">
				<h2>Ricky Sta. Ana</h2>
				<p>is one of the most popular and versatile tattoo artists in the Philippines. He started tattooing when he was only 21 years old. He started by only using improvised machines and sign pen inks. His first customers were local gangsters. From there he begin to absorb the influence of some world known artists like Paul Booth, Aaron Cane and Ron Ackers to name a few. </p>
			</div>
		</div>	
		<div class="image-placer">
			<img src="../wp-content/themes/skinworkz/_/images/pips/riky.jpg" alt="fag">
		</div>
		</div>

	</div>

	<div class="work-container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-content">
						
						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
						
						<?php the_tags( 'Tags: ', ', ', ''); ?>

					</div>
					
					<?php edit_post_link('Edit this entry','','.'); ?>
					
				</article>


			<?php endwhile; endif; ?>

		</div>

<?php get_footer();?>