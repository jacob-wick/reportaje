<?php
/**
 * @package Cyanotype
 * @since Cyanotype 1.0
 */
	
	// Get Variables

	$location = get_field( 'location' );
	$dates = get_field( 'dates' );
	$curator = get_field ( 'curator' );
	$funding = get_field ( 'funding' );
	$additional_link_1 = ( 'additional_link_1' );
	$additional_link_2 = ( 'additional_link_2' );
	$additional_link_3 = ( 'additional_link_3' ); 

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-date">
			<?php cyanotype_entry_date(); ?>
		</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<ul class="details">
			<li><?php echo $location ?></li>
			<li><?php echo $dates ?></li>
			<li><?php echo $curator ?></li>
			<li><?php echo $funding ?></li>
		</ul>	
	
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

	<ul class="additional-links">
		<li><?php echo 

	<footer class="entry-footer">
		<?php
			if ( '' != get_the_author_meta( 'description' ) ) :
				get_template_part( 'author-bio' );
			endif;
		?>
		<?php cyanotype_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'cyanotype' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
