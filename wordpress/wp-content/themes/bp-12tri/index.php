<?php get_header(); ?>
	<? //TODO: (x) close this description and save it in cookies ?>
	<header>
		<p><strong>12tri.pl</strong> to klub biegowo-triathlonowy organizujący obozy biegowe i darmowe treningi po okiem trenerów w Warszawie i Olsztynie.</p>
		<a href="#more" class="more">dowiedz się więcej</a>
	</header>

	<section class="posts list">
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>
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
					</header><div class="content">
						<?php the_content(__( 'Read more', '12tri' )) ?>
					</div>
					<footer>
						<abbr class="published" title="2012-10-10T14:07:00-07:00"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->10 październik 2012</abbr> <address class="vcard author">przez <a class="url fn" href="#">Michał Rachwał</a></address>
					</footer>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h2 class="center"><?php _e( 'Not Found', 'buddypress' ); ?></h2>
			<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'buddypress' ); ?></p>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>