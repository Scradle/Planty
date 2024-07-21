<?php /* Template Name: Page Nous rencontrer */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> 
<?php the_content(); ?>
<?php endwhile; endif; ?>
<div id="canettes2"></div>
<?php get_footer(); ?>