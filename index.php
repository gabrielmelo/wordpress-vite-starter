<!DOCTYPE html>
<html lang="en">
	<?php get_template_part( '/inc/partials/head' ); ?>

	<body <?php body_class('flex flex-col h-screen') ?>>

		<?php wp_body_open(); ?>
		<?php get_header() ?>

		<main class="flex items-center justify-center h-screen">
			<h1 class="text-2xl max-w-lg">Wordpress theme with Vitjs and tailwind. This is a Starter project </h1>
		</main>

		<?php get_footer() ?>
	</body>
</html>
