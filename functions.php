<?php


if (!function_exists('generate_add_footer_info')) {
    add_action('generate_credits', 'generate_add_footer_info');
    /**
     * Change the copyright on the footer to page name
     *
     * @since 0.1
     */
    function generate_add_footer_info()
    {
        $copyright = sprintf(
            '<span class="copyright">&copy; %1$s %2$s</span>',
            date('Y'), // phpcs:ignore
            get_bloginfo('name'),
        );

        echo apply_filters('generate_copyright', $copyright); // phpcs:ignore
    }
}
