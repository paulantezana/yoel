<?php get_header(); ?>
<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));?>
<div class="site-margin">
    <section class="sn-container">
        <div class="sn-item">
            <header class="site-header">
                <h1 class="site-title"> <?php echo $curauth->nickname; ?></h1>
            </header>
            <p><?php echo $curauth->user_description ?></p>
        </div>
    </section>

    <article class="site-header">
        <h2 class="site-title">Publicaciones por <?php echo $curauth->nickname; ?> </h2>
    </article>

    <div class="sn-container">
        <div class="sn-item l-75">
            <div class="post-container">
                <?php 
                    if(have_posts()): 
                    while (have_posts()):
                    the_post();?>
                    <article class="post">
                        <a class="post__poster" href="<?php the_permalink(); ?>">
                            <div class="post__poster__date icon-globe"> <?php the_time('m - F - Y')?></div>
                            <div class="post__poster__thumbnail"><?php the_post_thumbnail(); ?></div>
                        </a>
                        <header class="post__content">
                            <h2 class="post__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post__author">
                                <div class="post__author__profile">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
                                </div>
                                <div class="post__author__user"><?php the_tags(''); ?></div>
                            </div>
                        </header>
                    </article>
                <?php
                    endwhile;
                    rewind_posts();
                    else:?>
                    <p><?php _e('No posts by this author.'); ?></p>
                <?php endif;?>
            </div>
        </div>
        <div class="sn-item l-25">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>