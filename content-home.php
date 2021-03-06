<?php
/**
 * The template used for displaying page content in home.php
 * @package WordPress
 * @subpackage CALSv1
 * @since CALS 1.0
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<header class="entry-header">

		<?php 
			$postCats = get_the_category();
			if ($postCats) {
			  foreach($postCats as $cat) {

			    //echo $cat->name . ' ';
			    
			    switch($cat->name){

			    	case "research":
			    	echo "<h1>Research</h1>";
			    	break;

			    	default:
			    	break;

			    }
			  }
			}

		 ?>

		<h2 class="entry-title"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h1>
		<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
		<h3 class="post-author"><?php the_author(); ?></h3>
		<h3 class="post-date"><?php the_time('F j, Y'); ?></h3>
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php 
		if ( has_post_thumbnail() ) { ?>

			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
		
		<?php } 
		the_content(); ?>

	<span> Categories: <?php the_category('</span> <span>'); ?> </span>
	<br>
	<span><?php the_tags(); ?></span>




		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->