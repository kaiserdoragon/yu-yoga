<?php get_header(); ?>
<h1 class="page_ttl">
  <p>NEWS</p>
</h1>

<?php get_template_part('include/common', 'breadcrumb'); ?>

<div class="news_page_single">
  <main>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="container">
          <article class="post_single">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <h2><?php the_title(); ?></h2>

            <div class="post_content">
              <?php the_content(); ?>
            </div>
          </article>
          <ul class="paging">
            <li class="paging--item paging--item-prev">
              <?php if (get_previous_post()) :
                previous_post_link('%link', '前の記事へ'); // ここを固定文言に
              endif; ?>
            </li>

            <li class="paging--item paging--item-gotolist">
              <a href="<?php echo esc_url(home_url('/news/')); ?>">一覧へ戻る</a>
            </li>

            <li class="paging--item paging--item-next">
              <?php if (get_next_post()) :
                next_post_link('%link', '次の記事へ'); // ここを固定文言に
              endif; ?>
            </li>
          </ul>

        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </main>
</div>
<?php get_footer(); ?>