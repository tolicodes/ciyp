<?php
/**
 * @package semplicemente
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
	<div id="datewala">
	<p style="font-weight:bolder;font-size:22px;"><?php the_time('j'); ?></p>
	 <p style="font-weight:bolder;font-size:14px;"> <?php the_time('F'); ?></p>
	</div>
		<div class="titleleftg"><?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?></div>
			<div class="titleleftgb"><i class="_mi _before dashicons dashicons-location" style="    font-size: 2.2em;margin-right: .45em;"></i>
<?php
$category = get_the_category(  );
echo $category[0]->cat_name;
?>
</div>
		<?php if ( 'post' == get_post_type() ) : ?>
		<!--<div class="entry-meta">
			<?php semplicemente_posted_on(); ?>
			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link"><i class="fa fa-comment-o spaceRight"></i><?php comments_popup_link( __( 'Leave a comment', 'semplicemente' ), __( '1 Comment', 'semplicemente' ), __( '% Comments', 'semplicemente' ) ); ?></span>
			<?php endif; ?>
		</div>--><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<div id="pmgfft">
	<?php
		if ( '' != get_the_post_thumbnail() ) {
		 
			the_post_thumbnail('normal-post');
		 
		}
	?></div>
		<?php the_excerpt(); ?>
		<div class="readMoreLink">
			<a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'semplicemente') ?><i class="fa spaceLeft fa-angle-double-right"></i></a>
		</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'semplicemente' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<!--
	<footer class="entry-footer">	
		<?php edit_post_link( __( 'Edit', 'semplicemente' ), '<span class="edit-link"><i class="fa fa-pencil-square-o spaceRight"></i>', '</span>' ); ?>
		<div class="readMoreLink">
			<a href="<?php echo esc_url(get_permalink()); ?>"><?php _e('Read More', 'semplicemente') ?><i class="fa spaceLeft fa-angle-double-right"></i></a>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->