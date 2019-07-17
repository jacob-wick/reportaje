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

<article id="post-<?php the_ID(); ?>" <?php post_class( 'front'); ?>>
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
			<span class="posted-on"><?php cyanotype_entry_date(); ?></span>
		</div><!-- .entry-date -->

		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<ul class="details">

				<?php if ( $location ) : ?>
					<li><?php echo $location ?></li>
				<?php endif; ?>
				
				<?php if ( $dates ) : ?> 
					<li><?php echo $dates ?></li>
				<?php endif; ?>

				<?php if ( $curator ) : ?>
					<li><?php echo $curator ?></li>
				<?php endif; ?>

				<?php if ( $funding ) : ?>
					<li><?php echo $funding ?></li>
				<?php endif; ?>

			</ul>

			<p class="the-excerpt"><?php the_excerpt(); ?></p>

		<div class="the-category">
			<h4><?php the_category(); ?></h4>
		</div>	
	
	</header>
	<?php
		if ( is_sticky() ) :
			cyanotype_post_thumbnail();
		endif;
	?>
</article><!-- #post-## -->
