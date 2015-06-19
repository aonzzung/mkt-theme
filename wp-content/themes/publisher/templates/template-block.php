<?php

/**
 * Template for individual blocks.
 *
 * Each individual 'block', or post summary, is displayed in a grid on the home and archive pages
 *
 * @package Publisher
 * @since Publisher 1.0
 */

$classes = array(
	'post',
	'block',
	'animated',
	'fadeIn'
);
?>

<div <?php post_class( $classes ); ?> data-postid="<?php the_ID(); ?>">
	<?php if( is_sticky() ) { ?>
		<div class="ribbon-wrap"><div class="ribbon"><i class="fa fa-thumb-tack"></i></div></div>
	<?php } ?>

	<!-- uses the post format -->
	<?php
  		$format = get_post_format();

		if( 'image' == $format || 'quote' == $format ) {
			get_template_part( 'post-formats/format', get_post_format() );
		} else {
			get_template_part( 'post-formats/format', 'standard' );
		};
	?>

	<div class="block-meta">

		<span class="block-author-link">
                    By: 
                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> &nbsp;|&nbsp;
		</span>
                <span class="block-post-date">
                    Posted: 
                    <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'publisher' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_time('d M Y'); ?></a>
                </span>
	</div><!-- .block-meta -->
</div><!-- .block -->