<?php $x = 0; if (have_posts()): while (have_posts()) : the_post(); $x++ ?>

	<article class="">
		<?php if ( has_post_thumbnail()) :  ?>
		<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">


			<?php if (is_home()) {  ?>
				<?php the_post_thumbnail('home-paveikslelis');  ?>

		<?php } else { ?>
			<?php the_post_thumbnail('didelis-paveikslelis');  ?>
		<?php } ?>

		</a>
	<?php endif; ?>


		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

		<?php html5wp_excerpt('html5wp_index');  ?>

	</article>

	<?php if (is_home() && $x == 2) { $x = 0;?>
		<div class="clear">

		</div>
	<?php }; ?>
	<?php endwhile; ?>

	<?php else: ?>

<h2><?php _e( 'Sorry, nieko neturiu.', 'mano tema' ); ?></h2>

<?php endif; ?>
