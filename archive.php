<?php get_header(); ?>

<section class= "article-list">
	<h1><?php _e( 'Archyvas', 'mano tema' ); ?></h1>


	<?php get_template_part('loop'); ?>

</section>


<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>
