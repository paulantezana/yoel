<?php
    $site_title = '
        <div class="site-header">
            <div class="site-title">%s</div>
            <div class="site-subTitle">%s</div>
        </div>';

    if(have_posts()):
        while (have_posts()):
            the_post();
            printf($site_title, get_the_title(),''); // Page Title
            the_content();
        endwhile;
        rewind_posts();
    else:
        echo 'no hay contenido que mostrar';
    endif;
