<?php get_header(); ?>
<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
  <div class="p-sub-mv__title">
    <div class="c-section-header--white">
      <h1 class="c-section-header__engtitle">news</h1>
      <p class="c-section-header__jatitle">お知らせ</p>
    </div>
  </div>
</div>

<!-- パンくず -->
<div class="c-breadcrumb">
  <div class="l-inner">
    <div>HOME > NEWS</div>
  </div>
</div>

<div class="l-archive-home p-archive-home">
  <div class="p-archive-home__inner l-inner">
    <!-- ループ処理開始 -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="p-archive-home__item p-news-content">
          <div class="p-news-content__meta">
            <time datetime="<?php the_time('Y-m-d'); ?>" class="p-news-content__date"><?php the_time('Y.m.d'); ?></time>
            <?php
            // カテゴリーのデータを取得
            $cat = get_the_category();
            $cat = $cat[0];
            ?>
            <p class="p-news-content__category">
              <?php echo $cat->cat_name; ?>
            </p>
          </div>
          <div class="p-news-content__link">
            <a href="<?php the_permalink(); ?>" class="p-news-content__text"><?php echo get_the_title(); ?></a>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
    <!-- ループ終了 -->
  </div>
</div>

<div class="l-paginavi">
  <div class="wp-pagenavi">
    <span class="current">1</span>
    <a class="page smaller" href="#">2</a>
    <a class="page smaller" href="#">3</a>
  </div>
</div>

<?php get_footer(); ?>