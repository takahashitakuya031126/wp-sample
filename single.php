<?php get_header(); ?>
<div class="container">
    <div class="contents">
        <?php if(have_posts()): the_post(); ?>
            <article <?php post_class( 'article-content' ); ?>>
                <div class="article-info">
                    <!--カテゴリ-->
                    <?php if(has_category() ): ?>
                        <span class="cat-data">
                            <?php echo get_the_category_list( ' ' ); ?>
                        </span>
                    <?php endif; ?>
                    <!--投稿日-->
                    <span class="article-date">
                        <i class="far fa-clock"></i>
                        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                            <?php echo get_the_date(); ?>
                        </time>
                    </span>
                    <!--筆者-->
                    <span class="article-author">
                        <i class="fas fa-user"></i><?php the_author(); ?>
                    </span>
                </div>
                <!--タイトル-->
                <h1><?php the_title(); ?></h1>
                <!--アイキャッチ-->
                <div class="article-img">
                    <?php if( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>
                </div>
                <!--本文-->
                <?php the_content(); ?>
                <!--タグ-->
                <div class="article-tag">
                    <?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'); ?>
                </div>
            </article>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>