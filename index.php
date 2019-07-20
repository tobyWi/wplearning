<?php

if (have_posts()):
    while (have_post()):
        the_post();
    endwhile;
endif;
 ?>
