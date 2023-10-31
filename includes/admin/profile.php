<?php

function nymul_author_bio( $methods ) {
    $methods['twitter'] = __( 'Twitter', 'nymul_author_bio' );
    $methods['facebook'] = __( 'Facebook', 'nymul_author_bio' );
    $methods['linkdin'] = __( 'Linkdin', 'nymul_author_bio' );
    return $methods;
}

add_action( 'user_contactmethods', 'nymul_author_bio' );