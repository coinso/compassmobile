<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package compassmobile
 */
$h1 = get_post_meta($post->ID, 'h1', true) ? get_post_meta($post->ID, 'h1', true) : get_the_title();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( MAIN_CONTENT_AREA_CLASS); ?>>
	<?php  ?>
    <header class="entry-header">
		<?php
		if ( is_singular() ) :
			get_template_part(GLOBALS_PARTS_FOLDER, 'top-page');
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			compassmobile_post_thumbnail();
		endif;
            
		?>
	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php
        if ( is_singular() ) :
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'compassmobile' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'compassmobile' ),
				'after'  => '</div>',
			) );
			else:
                the_excerpt();

			endif;
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
