<?php get_header(); ?>

<h1 class="page_ttl">
  <p>NEWS</p>
</h1>

<?php get_template_part('include/common', 'breadcrumb'); ?>

<div class="news_page_archive">
  <main>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="post_excerpt">
          <div class="container">
            <div>
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
    <?php endif; ?>
    <div class="pagination"><?php wp_pagination(); ?></div>
  </main>
</div>
<?php get_footer(); ?>