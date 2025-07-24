<?php
/* 
*	Template Name: Content Theme Template
*/
?>

<?php get_header(); ?>
	<div id="content">
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
				<?php
					global $post;
					// CHECK PASSWORD
					if( post_password_required() ) {
						the_content();
					} else {
						$pageName = $post->post_name;
						$post_parent = ($post->post_parent > 0) ? get_post($post->post_parent) : null;
						if( $post_parent ){
							$pageName = $post_parent->post_name . '-' . $pageName;
						}
						get_template_part( 'pages/'.$pageName );
					}
				?>
		<?php endwhile; ?>
	<!-- #mainContent -->
    </div>
    <!-- #content -->
<?php get_footer(); ?>
