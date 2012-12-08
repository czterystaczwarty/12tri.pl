<?php get_header(); ?>
	<? //TODO: (x) close this description and save it in cookies ?>
	<header>
		<p><strong>12tri.pl</strong> to klub biegowo-triathlonowy organizujący obozy biegowe i darmowe treningi po okiem trenerów w Warszawie i Olsztynie.</p>
		<a href="#more" class="more">dowiedz się więcej</a>
	</header>

	<section class="posts list">
		
		<?php $boxes = tri_random_boxes_positions ($wp_query->post_count) ?>
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php tri_get_box ($boxes, $wp_query->current_post) // fb & comming events box ?>
				<?php get_template_part('box', 'post'); // post box ?>
			<?php endwhile; ?>
		<?php else : ?>
			<h2 class="center"><?php _e( 'Not Found', 'buddypress' ); ?></h2>
			<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'buddypress' ); ?></p>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>