<h1> THis is single.php </h1>
<?php
    global $wp_query;

    echo 'is_singular';
    var_dump($wp_query->is_singular);
    var_dump( is_singular() );

    echo 'is_page';
    var_dump($wp_query->is_page);
    var_dump( is_page() );

    echo 'is_single';
    var_dump($wp_query->is_single);

    echo 'is_home';
    var_dump($wp_query->is_home);
