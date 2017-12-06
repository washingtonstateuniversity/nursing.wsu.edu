<?php if ( is_active_sidebar( 'fat-footer' ) ) : ?>
<footer class="single row fat-footer-menu">
	<div class="column one">
		<?php dynamic_sidebar( 'fat-footer' ); ?>
	</div>
</footer>
<?php endif; ?>

<?php if ( is_front_page() ) { ?>
<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/coe-badge.png' ); ?>" alt="NLN Center of Excellence in Nursing Education logo" class="excellence-badge" width="396" height="329" />
<?php }
