<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Cyanotype
 * @since Cyanotype 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : 

			$location = get_field( 'location' );
			$dates = get_field( 'dates' );
			$curator = get_field ( 'curator' );
			$funding = get_field ( 'funding' );
			$image = get_field ( 'cover_image' );
			$size = "full";

		?>
			<div class="entry-date">
				<?php cyanotype_entry_date(); ?>
			</div><!-- .entry-date -->
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	
			<ul class="details">
				<li><?php echo $location ?></li>
				<li><?php echo $dates ?></li>
				<li><?php echo $curator ?></li>
				<li><?php echo $funding ?></li>
			</ul>	

	</header>
	<?php
		if ( is_sticky() ) :
			cyanotype_post_thumbnail();
		endif;
	?>
</article><!-- #post-## -->
