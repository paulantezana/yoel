<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
    <section class="error-404 not-found sn-container">
        <header class="site-header sn-item">
            <h1 class="site-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'yoel' ); ?></h1>
        </header>

        <div class="sn-item">
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'yoel' ); ?></p>

            <?php get_search_form(); ?>
        </div>
    </section>
<?php get_footer(); ?>
