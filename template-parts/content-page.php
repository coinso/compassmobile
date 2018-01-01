<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package compassmobile
 */
$h1 = get_post_meta($post->ID, 'h1', true) ? get_post_meta($post->ID, 'h1', true) : get_the_title();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(MAIN_CONTENT_AREA_CLASS); ?>>
    <?php if ( has_post_thumbnail() ) :?>
    <div class="img-wrap">
        <?php the_post_thumbnail( 'full',['class' => 'img-responsive page-img']);?>
    </div>
    <?php endif; ?>
    <h1 class="page-title entry-title">
       <?php echo $h1;?>
    </h1>
	<div class="entry-content">
		<?php
			the_content();


		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'compassmobile' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
