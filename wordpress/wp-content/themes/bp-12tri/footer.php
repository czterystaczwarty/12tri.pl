		</div>
		<footer>
			sponsorzy
			partnerzy
			<?php do_action( 'bp_footer' ); ?>
		</footer>
	</div>
	<div id="fb-root"></div>
	<?php // TODO: mobe to separete *.js ?>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1&appId=323717090981482";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php do_action( 'bp_after_footer' ); ?>
	<? //TODO: customize wp_footer ?>
	<?php wp_footer(); ?>
</body>
</html>