<?php
/*
 * other code
 */

/* ------------------------------------------------------------------------ */
/* Custom Excerpts
/* ------------------------------------------------------------------------ */
// Set new Default Excerpt Length
function minti_new_excerpt_length($length) {
    return 200;
}
add_filter('excerpt_length', 'minti_new_excerpt_length');

// Custom Excerpt Length
function minti_custom_excerpt($limit=50) {
    global $minti_data;
    if($minti_data['switch_readmore'] != 0) {
        return strip_shortcodes(get_the_content('read more →'));
    } else {
        return strip_shortcodes(wp_trim_words(get_the_content(), $limit));
    }
}

/*
 * other code
 */