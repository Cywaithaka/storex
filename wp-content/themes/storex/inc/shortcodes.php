<?php
/**
 * All of the theme shortcodes.
 *
 * Created by Eugene
 * Date: 12/25/2015
 * Time: 11:40 AM
 */



/**
 * Link shortcode handler
 * example: [link src="img/footer img/visa-icon.png"].
 *
 * @param $atts src and href.
 * @param null $content.
 * @return string path.
 */
function shortcode_link($atts, $content = null)
{
    $link = '<!-- link -->';
    if(isset($atts['src']))
    {
        $url = get_template_directory_uri() . '/';
        $link = ' src="' . $url . $atts['src'] . '" ';
    }
    if(isset($atts['href']))
    {
        $url = get_template_directory_uri() . '/';
        $link = ' href="' . $url . $atts['href'] . '" ';
    }
    return $link;
}
add_shortcode('link', 'shortcode_link');