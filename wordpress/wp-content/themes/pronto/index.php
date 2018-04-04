<h1> Heelo, Under</h1>
<?php
    // global $wp_query;

    // echo 'is_singular';
    // var_dump($wp_query->is_singular);
    // var_dump( is_singular() );

    // echo 'is_page';
    // var_dump($wp_query->is_page);

    // echo 'is_single';
    // var_dump($wp_query->is_single);

    // echo 'is_home';
    // var_dump($wp_query->is_home);
?>
<div>
    <?php
        if ( have_posts() ):
            while( have_posts() ): the_post(); //we can use this because we already define global variable
                echo '<h2>' . the_title() .'</h2>';
                echo the_title($before='<h1>', $after='</h1>');
                echo the_content($before='<h2>', $after='</h2>');
                //echo '<h2>' . the_content() . '</h2>';
            endwhile;
        endif;
    ?>
</div>
