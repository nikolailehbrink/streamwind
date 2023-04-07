<?php do_action('streamwind_content_end'); ?>

</main>

<?php do_action('streamwind_content_after'); ?>

<footer class="py-6 site-footer bg-gray-50" role="contentinfo">
	<?php do_action('streamwind_footer'); ?>

	<div class="container mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>