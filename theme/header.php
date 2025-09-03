<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">
	<!-- FuturaPT -->
	<link rel="stylesheet" href="https://use.typekit.net/xyx3nnn.css">
	<meta name="description" content="<?php if (wp_title('', false)): ?><?php bloginfo('name'); ?>の<?php echo trim(wp_title('', false)); ?>のページです。<?php endif; ?><?php bloginfo('description'); ?>">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
	<!-- りょうゴシックPlusN -->
	<script>
		(function(d) {
			var config = {
					kitId: 'zeu0qys',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrap">
		<header class="header">
			<div class="container">
				<div class="header--inner">
					<h1 class="header--logo">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="YU YOGA" width="231" height="65" />
						</a>
					</h1>
					<button id="js-gnav_btn" class="gnav_btn">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<nav id="js-gnav" class="gnav">
						<ul>
							<li>
								<a href="<?php echo esc_url(home_url('/')); ?>" <?php if (is_front_page() || is_home()) : ?> class="is_current" <?php endif; ?>>ホーム</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('about')); ?>" <?php if (is_page('about')): ?> class="is_current" <?php endif; ?>>YUについて</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('service')); ?>" <?php if (is_page('service')): ?> class="is_current" <?php endif; ?>>サービス</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('infomation')); ?>" <?php if (is_page('infomation')): ?> class="is_current" <?php endif; ?>>教室情報</a>
							</li>
							<li>
								<a href="<?php echo esc_url(home_url('news')); ?>" <?php if (is_archive()): ?> class="is_current" <?php endif; ?>>お知らせ</a>
							</li>
							<li><a href="https://mosh.jp/yoga_kirei/home">ご予約</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>