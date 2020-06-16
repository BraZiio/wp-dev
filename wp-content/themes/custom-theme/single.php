<?php

get_header();

?>
<?php

if ( have_posts() ):
        the_post();
?>
    <article>
        
    </article>
<?php
endif;

get_footer();