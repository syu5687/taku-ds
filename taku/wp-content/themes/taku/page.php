<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>


<div id="content" class="content-area">

	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>