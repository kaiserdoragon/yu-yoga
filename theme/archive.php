<?php get_header(); ?>

<h1 class="page_ttl">
  <p>NEWS</p>
</h1>

<?php get_template_part('include/common', 'breadcrumb'); ?>

<div class="has_sidebar news_page">
  <main>
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
    <section class="post_excerpt">
      <div class="container">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post_excerpt--img">
          <?php if (has_post_thumbnail()): // サムネイルを持っているとき 
          ?>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
            <?php else: // サムネイルを持っていない 
            ?><?php endif; ?>
        </div>
        <div class="post_excerpt--txt">
          <div class="post_meta">
            <time class="post_meta--date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; ?><?php endif; ?>
    <div class="pagination"><?php wp_pagination(); ?></div>
  </main>
</div>
<?php get_footer(); ?>