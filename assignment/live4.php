<?php
function longestWord( $str ) {
    $words = explode( ' ', $str );
    $longestWord = '';

    // Loop through each word and check its length
    foreach ( $words as $word ) {
        if ( strlen( $word ) > strlen( $longestWord ) ) {
            $longestWord = $word;
        }
    }
    return $longestWord;
}
$str = 'The quick brown fox jumped over the lazy dog';
echo longestWord( $str );