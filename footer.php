<?php do_action('streamwind_content_end'); ?>

</main>

<?php do_action('streamwind_content_after'); ?>

<footer class="py-4 site-footer bg-primary-50 dark:bg-primary-900" role="contentinfo">
	<?php do_action('streamwind_footer'); ?>

	<div class="container mx-auto text-center">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>