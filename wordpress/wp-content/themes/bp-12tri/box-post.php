<?php $post_image = tri_has_post_image($post->ID) ? tri_post_image($post->ID) : null ?>
<article id="entry-<?php the_ID(); ?>" <?php post_class( $post_image ? 'post-image' : false ); ?>>
	<header>
		<?php if ($post_image): ?>
			<a href="<?php the_permalink(); ?>" class="picture" style="background-image: url(<?php echo $post_image ?>);">
				<img src="<?php echo $post_image ?>" alt="">
			</a>
		<?php endif; ?>
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