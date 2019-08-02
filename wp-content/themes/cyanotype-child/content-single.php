<?php
/**
 * @package Cyanotype
 * @since Cyanotype 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-date">
			<?php cyanotype_entry_date(); ?>
		</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<?php if ( in_category('review') || in_category('critica') ) : ?>

			<?php the_Details(); ?>

		<?php endif; ?>
	
	</header>

	<?php cyanotype_post_thumbnail(); ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'cyanotype' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'cyanotype' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->


	<footer class="entry-footer">
		<?php cyanotype_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'cyanotype' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
