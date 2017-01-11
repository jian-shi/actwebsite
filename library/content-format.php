<?php
/**
 * Created by PhpStorm.
 * User: jshi
 * Date: 29/07/16
 * Time: 11:46 AM
 */

function custom_excerpt($text) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        //Retrieve the post content.
        $text = get_the_content('');

        //Delete all shortcode tags from the content.
        $text = strip_shortcodes( $text );

        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);

        $allowed_tags = '<p>,<a>'; /*** MODIFY THIS. Add the allowed HTML tags separated by a comma.***/
        $text = strip_tags($text, $allowed_tags);

        $excerpt_word_count = 75; /*** MODIFY THIS. change the excerpt word count to any integer you like.***/
        $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);

        $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
        if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = $text;
        } else {
            $text = implode(' ', $words);
        }
    }
    return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_excerpt');
?>