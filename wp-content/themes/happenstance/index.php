<?php
/**
 * The main template file.
 * @package HappenStance
 * @since HappenStance 1.0.0
*/
get_header(); ?> 
<h1 class="entry-headline"><span class="entry-headline-text"><?php if(get_theme_mod('happenstance_latest_posts_headline', $happenstance_defaults['happenstance_latest_posts_headline']) == '') { ?><?php _e( 'Latest Posts' , 'happenstance' ); ?><?php } else { echo esc_html(get_theme_mod('happenstance_latest_posts_headline', $happenstance_defaults['happenstance_latest_posts_headline'])); } ?></span></h1> 
    <section class="home-latest-posts<?php if (get_theme_mod('happenstance_post_entry_format', $happenstance_defaults['happenstance_post_entry_format']) == 'Grid - Masonry') { ?> js-masonry<?php } ?>">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if (get_theme_mod('happenstance_post_entry_format', $happenstance_defaults['happenstance_post_entry_format']) == 'Grid - Masonry') {
get_template_part( 'content', 'grid' ); } else {
get_template_part( 'content', 'archives' ); } ?>
<?php endwhile; endif; ?>
   </section>   
<?php happenstance_content_nav( 'nav-below' ); ?>
  </div> <!-- end of content -->
<?php if (get_theme_mod('happenstance_display_sidebar_archives', $happenstance_defaults['happenstance_display_sidebar_archives']) != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php } ?>
<?php get_footer(); ?>