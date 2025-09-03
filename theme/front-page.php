<?php get_header(); ?>
<main>
  <div class="top_mv">
    <div class="container">
      <h2>YU YOGA <span>on-line.</span></h2>
      <div class="top_mv--slider">
        <div class="top_mv--slider_inner">
          <div class="top_mv--slider_item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/slider03.jpg" alt="" width="166" height="864" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/slider02.jpg" alt="" width="304" height="864" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/slider01.jpg" alt="" width="583" height="864" />
          </div>
          <div class="top_mv--slider_item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/slider03.jpg" alt="" width="166" height="864" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/slider02.jpg" alt="" width="304" height="864" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/slider01.jpg" alt="" width="583" height="864" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="top_info">
    <div class="top_info--inner">
      <div class="top_info--ttl">
        <h2>NEWS</h2>
        <?php
        $args = array(
          'posts_per_page' => 3,
          'post_type' => 'post', //postは通常の投稿機能
          'post_status' => 'publish'
        );
        $my_posts = get_posts($args);
        ?>
        <dl class="top_info--list">
          <?php foreach ($my_posts as $post): setup_postdata($post); ?>
            <dt class="top_info--term">
              <span class="top_info--time"><?php the_time('m月d日'); ?></span>
            </dt>
            <dd class="top_info--detail">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </dd>
          <?php endforeach; ?>
        </dl>
        <?php wp_reset_postdata(); ?>
      </div>
      <a href="<?php echo esc_url(home_url('news')); ?>" class="top_info--link">お知らせ</a>
    </div>
  </section>

  <section class="top_about">
    <div class="container -md">
      <div class="top_about--lead">
        <h2>
          Gentle yoga for daily life.<br>
          A space to restore your energy.<br>
          A path to a lighter you.<br>
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/about.jpg" alt="" width="373" height="559" />
      </div>
      <div class="top_about--txt">
        <div class="top_about--paragraph">
          <p>ヨガは、心と体をゆるめて、毎日をより快適に過ごすための大切な時間です。</p>
          <p>
            当教室では、理学療法の知見を取り入れながら、無理なく体を整え、<br class="is-hidden_sp">機能的に動けるようサポートしています。<br>
            無理にポーズを追いかけるのではなく、<br class="is-hidden_sp">ゆったりとした動きのなかで筋肉や呼吸の緊張を解きほぐしていきます。<br>
            大切にしているのは、心と体にそっと耳を傾ける時間を持つことです。<br>
            呼吸を深めるたびに、肩の力がふっと抜けていくのを感じられるでしょう。<br>
            心地よいヨガの時間をご一緒できることを楽しみにしております。<br>
          </p>
        </div>
        <a href="<?php echo esc_url(home_url('about')); ?>">YUについて</a>
      </div>
    </div>
  </section>

  <section class="top_enjoy">
    <div class="container">
      <h2>オンラインで、気軽にヨガを楽しみましょう。</h2>
      <div class="top_enjoy--inner">
        <div class="accordion--wrap">
          <div class="accordion js_accordion">
            <div class="accordion--inner js_accordion_list">
              <p class="accordion--title">日常に寄り添うやさしいヨガ</p>
              <span class="accordion--icon"></span>
            </div>
            <div class="accordion--content">
              <p>忙しい毎日の中で無理なく続けられる、やさしいヨガです。呼吸を整え、心と体の緊張をほどいていくことで、自然と穏やかな自分に戻ることができます。</p>
            </div>
          </div>
          <div class="accordion js_accordion">
            <div class="accordion--inner js_accordion_list">
              <p class="accordion--title">エネルギーを取り戻す空間</p>
              <span class="accordion--icon"></span>
            </div>
            <div class="accordion--content">
              <p>忙しい毎日の中で無理なく続けられる、やさしいヨガです。呼吸を整え、心と体の緊張をほどいていくことで、自然と穏やかな自分に戻ることができます。</p>
            </div>
          </div>
          <div class="accordion js_accordion">
            <div class="accordion--inner js_accordion_list">
              <p class="accordion--title">軽やかな自分への道しるべ</p>
              <span class="accordion--icon"></span>
            </div>
            <div class="accordion--content">
              <p>忙しい毎日の中で無理なく続けられる、やさしいヨガです。呼吸を整え、心と体の緊張をほどいていくことで、自然と穏やかな自分に戻ることができます。</p>
            </div>
          </div>
        </div>
        <div class="top_enjoy--img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/enjoy.png" alt="" width="879" height="360" />
        </div>
      </div>

      <a href="<?php echo esc_url(home_url('service')); ?>">サービス</a>
    </div>
  </section>

  <section class="top_instagram">
    <div class="container">
      <h2>忙しい毎日だからこそ、心と体をリセットする時間を。</h2>
      <p>
        理学療法の知識を取り入れた、やさしく無理のないヨガで、<br class="is-hidden_sp">呼吸と姿勢を整えていきましょう。<br>
        スキマ時間でできる1分ヨガ。 <br>続けるうちに、心も体も軽やかさを取り戻せます。
      </p>
      <a href="#" class="top_instagram--link">INSTAGRAM</a>
    </div>
  </section>


</main>
<?php get_footer(); ?>