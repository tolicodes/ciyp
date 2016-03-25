<?php
/**
 * @package semplicemente
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<?php
		if ( '' != get_the_post_thumbnail() ) {
			echo '<div class="entry-featuredImg">';
			the_post_thumbnail('normal-post');
			echo '</div>';
		}
	?>-->
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
		 

		 
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'semplicemente' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	 
	 
</article><!-- #post-## -->
