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
    <div>HOME > NEWS > Webデザインニュースサイト「ウェブマガジン」に取材いただきました</div>
  </div>
</div>

<?php if (have_posts()) : ?><!-- 記事が存在したら、メインループで回すイメージ -->
  <?php while (have_posts()) : the_post(); ?>

    <section class="l-single-body p-single-body">
      <div class="p-single-body__inner l-inner">
        <div class="p-single-body__title">
          <h1> <?php the_title(); ?></h1>
        </div>
        <div class="p-single-body__meta">
          <div class="p-news-content">
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
          </div>
        </div>
        <div class="p-single-body__image">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
          <?php else : ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-img.jpg" alt="noimage">
          <?php endif; ?>
        </div>
        <div class="p-single-body__content">
          <?php the_content(); ?>
        </div>

        <div class="c-page-link">
          <div class="c-page-link__inner">
            <div class="c-page-link__flex">
              <div class="c-page-link__prev">
                <a href="">前の記事</a>
              </div>
              <div class="c-page-link__next">
                <a href="">次の記事</a>
              </div>
            </div>
          </div>
          <div class="c-page-link__archive">
            <a href="<?php echo esc_url(home_url('news/')) ?>">NEWS一覧</a>
          </div>
        </div>
      </div>
      </div>
    </section>

  <?php endwhile; ?>
<?php else : ?>
  <!-- 投稿が無い場合の処理 -->
<?php endif; ?>

<?php get_footer(); ?>