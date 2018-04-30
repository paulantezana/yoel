<?php get_header(); ?>
    <div class="site-margin">
        <div class="sn-container">
            <article class="sn-item l-75 post">
                <?php 
                    if(have_posts()): 
                        while(have_posts()): 
                            the_post();?>
                            <div class="post-single">
                                <div class="post-single__thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                    <h1 class="post-single__title"><?php the_title()?></h1>
                                </div>
                                <div class="content"><?php the_content()?></div>
                            </div>

                            <div class="post__author">
                                <div class="post__author__profile">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
                                </div>
                                <div class="post__author__user"><?php the_tags(''); ?></div>
                            </div>



                <?php 
                			the_post_navigation( array(
                                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Siguiente', 'yoel' ) . '</span> ' .
                                    '<span class="screen-reader-text">' . __( 'Next post:', 'yoel' ) . '</span> ' .
                                    '<span class="post-title">%title</span>',
                                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Anterior', 'yoel' ) . '</span> ' .
                                    '<span class="screen-reader-text">' . __( 'Previous post:', 'yoel' ) . '</span> ' .
                                    '<span class="post-title">%title</span>',
                            ) );
                        endwhile;
                        rewind_posts();
                    endif;?>
            </article>
            <div class="sn-item l-25">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>