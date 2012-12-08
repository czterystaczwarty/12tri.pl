<?php
	$latitude = 53.8287000;
	$longitude = 22.3685000;
	$zoom = 11;
?>
<article id="entry-<?php the_ID(); ?>" <?php post_class('event-map double'); ?>>
	<header>
		<?php if ($latitude && $longitude): ?>
			<div id="map-<?php the_ID(); ?>" class="map"></div>
			<script>
				var map = L.map('map-<?php the_ID(); ?>').setView([<?php echo $latitude ?>, <?php echo $longitude ?>], <?php echo $zoom ?>);
				// L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/{styleId}/256/{z}/{x}/{y}.png', {attribution: 'dupa w kratę', styleId: 997}).addTo(map);
				L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'Open Streat Map', styleId: 997}).addTo(map);
				var marker = L.marker([<?php echo $latitude ?>, <?php echo $longitude ?>]).addTo(map);
				marker.bindPopup("<strong>BEKO Ełk Triathlon</strong><br>21 sierpień 2012 - Plaża Miejsca w Ełku").openPopup();
			</script>
		<?php endif; ?>
		<span class="category"><span>Triathlon</span></span>
		<h1 class="title">
			<a href="#">BEKO Ełk Triathlon</a>
		</h1>
	</header>
	<div class="content">
		Lorem ipsum
	</div>
	<footer>
		<time datetime="<?php tri_the_date() ?>" pubdate><?php the_date() ?></time>
		<address class="vcard author"><?php _e('by', 'tri') ?> <a class="url fn" href="#"><?php echo bp_core_get_user_displayname($post->post_author) ?></a></address>
	</footer>
</article>