<?php get_header(); ?>

<h1 class="page_ttl">
  <span><?php the_title(); ?></span>
  <p>
    <?php if (is_page('about')): ?>about YU<?php endif; ?>
    <?php if (is_page('service')): ?>yoga lessons<?php endif; ?>
    <?php if (is_page('infomation')): ?>yoga class<?php endif; ?>
  </p>
</h1>

<div class="eyecatch">
  <?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail(); ?>
  <?php else: ?>
  <?php endif; ?>
</div>

<?php get_template_part('include/common', 'breadcrumb'); ?>

<?php $slug_name = $post->post_name; ?>
<main class="<?php echo $slug_name; ?>_page">
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?><?php endif; ?>
</main>

<?php get_footer(); ?>