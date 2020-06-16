<?php

get_header();

?>
<h1>page d'accueil</h1>
<h2>liste des posts</h2>
<?php

if ( have_posts() ):
    while (have_posts()):
        the_post();
?>
    <article>
        <h3><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h3>
    </article>
<?php
    endwhile;
endif;

get_footer();