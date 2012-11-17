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
				<?php tri_get_box ($boxes, $wp_query->current_post) ?>
				<article id="entry-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<a href="<?php the_permalink(); ?>" class="picture" style="background-image: url(images/zdjecie10.jpg);">
							<img src="images/zdjecie10.jpg" alt="">
						</a>
						<span class="category"><span><?php the_first_category() ?></span></span>
						<h1 class="title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>
					</header>
					<div class="content">
						<?php the_content(__( 'Read more', '12tri' )) ?>
					</div>
					<footer>
						<time datetime="<?php tri_the_date() ?>" pubdate><?php the_date() ?></time>
						<address class="vcard author"><?php _e('by', 'tri') ?> <a class="url fn" href="<?php echo bp_core_get_user_domain($post->post_author) ?>"><?php echo bp_core_get_user_displayname($post->post_author) ?></a></address>
					</footer>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h2 class="center"><?php _e( 'Not Found', 'buddypress' ); ?></h2>
			<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'buddypress' ); ?></p>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>