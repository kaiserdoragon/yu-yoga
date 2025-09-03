<footer class="footer">
  <div class="container">
    <ul>
      <li>
        <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('about')); ?>">YUについて</a>
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('service')); ?>">サービス</a>
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('infomation')); ?>">教室情報</a>
      </li>
      <li>
        <a href="<?php echo esc_url(home_url('news')); ?>">お知らせ</a>
      </li>
    </ul>
    <div class="footer--link">
      <a href="https://mosh.jp/yoga_kirei/home">ご予約</a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/common/instagram.svg" alt="" width="55" height="55" /></a>
    </div>
    <p class="footer--copy">
      <small>© 2025 YUヨガ教室 All Rights Reserved.</small>
    </p>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>