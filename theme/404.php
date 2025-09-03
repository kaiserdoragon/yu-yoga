<?php get_header(); ?>
<h1 class="page_ttl">
  <p>404 NOT FOUND</p>
</h1>

<?php get_template_part('include/common', 'breadcrumb'); ?>

<main class="notfound_page">
  <div class="container">
    <h2 class="notfound_page--ttl">お探しのページは見つかりませんでした </h2>
    <p class="notfound_page--paragraph">アクセスしようとしたページが見つかりませんでした。<br>ページが移動または削除されたか、URLの入力間違いの可能性があります。 </p>
    <p class="notfound_page--link">
      <a href="<?php echo home_url(); ?>">≫トップページへ</a>
    </p>
  </div>
</main>
<?php get_footer(); ?>