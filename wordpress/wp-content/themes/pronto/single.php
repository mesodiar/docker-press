<h1> THis is single.php </h1>
<?php
    //global $wp_query;

    // echo 'is_singular';
    // var_dump($wp_query->is_singular);
    // var_dump( is_singular() );

    // echo 'is_page';
    // var_dump($wp_query->is_page);
    // var_dump( is_page() );

    // echo 'is_single';
    // var_dump($wp_query->is_single);

    // echo 'is_home';
    // var_dump($wp_query->is_home);

    // if ( have_posts() ):
    //     while( have_posts() ): the_post();
    //         echo the_title( $before='<h1>', $after='</h1>' );
    //         echo '<p>' . the_content() . '</p>';
    // endwhile;
    // endif;
    function uppercase( $content ) {
        return strtoupper( $content);
    }
    add_filter('the_content', 'uppercase');
    //echo uppercase('kan')

    function concat( $x, $y, $z ) {
        return $x . $y . $z;
    }

    add_filter('pronto', 'concat', 10, 3);


    $name= 'Under';
    $position = 'Apple';
    $result = apply_filters( 'pronto', $result, $name, $position );
    var_dump( $result );


    the_post();
        echo the_title( $before='<h1>', $after='</h1>' );
        echo '<p>' . the_content() . '</p>';
