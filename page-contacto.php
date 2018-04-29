<?php
    get_header();

    printf('<div class="sn-container"> <div class="sn-item">');
        include_once  get_template_directory() . "/templates/content.php";
    printf('</div></div>');

    get_footer();
