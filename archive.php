<?php
get_header();

if( have_posts() ) :
    // The Loop
    while (have_posts() ) : the_post(); 
        the_title('<h2>','</h2>');
        the_post_thumbnail();
        the_excerpt(); 
        ?>
<a href="<?php echo the_permalink();?>">Länk till posten</a>
<?php 
    endwhile;
else:
    _e('Ledsen men det fanns inga inlägg som matchade ditt critera', 'textdomain');  
endif;
get_footer();