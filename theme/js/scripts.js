function add_script(url) {
  let script = document.createElement("script");
  script.src = url;
  document.body.appendChild(script);
}
// 追加でjsファイルを読み込む場合は、ファイルパスを記述
// add_script("./js/animation.min.js");　// アニメーション用js

// ヘッダーのスクロール位置を取得 /////////////////////////////////////////////
// headerの高さ分スクロールしたら、-fixedクラスをつける。
const Header = document.getElementById("js-header");
if (Header) {
  const options = {
    root: null,
    rootMargin: `${Header.offsetHeight}px 0px ${document.body.clientHeight}px 0px`,
    threshold: 1,
  };

  const observer = new IntersectionObserver(change_header, options);
  observer.observe(document.body);
  function change_header(entries) {
    if (!entries[0].isIntersecting) {
      Header.classList.add("-fixed");
    } else {
      Header.classList.remove("-fixed");
    }
  }
}

// グローバルナビゲーション //////////////////////////////////////////////////////
const Gnav_btn = document.getElementById("js-gnav_btn");
const Gnav = document.getElementById("js-gnav");
if (Gnav_btn) {
  Gnav_btn.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle("is-open");
    Gnav.classList.toggle("is-open");
  });

  // メニューのどこかが押されたら閉じる
  Gnav.addEventListener("click", (e) => {
    Gnav_btn.classList.remove("is-open");
    Gnav.classList.remove("is-open");
  });
}

// ページトップへ移動するボタン(クリックでページトップへスクロール) ///////////////////////////
const Totop = document.getElementById("js-totop");
if (Totop) {
  Totop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

// アンカーリンクのスムーススクロール //////////////////////////////////////////////
// iOSでスムーススクロールをするためには「<script src=" https://polyfill.io/v3/polyfill.min.js?features=smoothscroll"></script>」を読み込む必要がある。
const headerHeight = ((load) => {
  return load ? document.getElementsByClassName("header")[0].offsetHeight : 0;
})(true); // ※ヘッダー高さをロード時にはかりたいときは、ここをtrueにする

const anchor = document.querySelectorAll("a[href*='#']:not(.is-noscroll)"); // 発火しない場合は「.is-noscroll」
[...anchor].forEach((element) => {
  const target = ((hash) => {
    return hash
      ? document.querySelector(element.hash)
      : console.error(`リンクが空です。 ${element.outerHTML}`);
  })(element.hash);

  if (target) {
    element.addEventListener("click", (e) => {
      e.preventDefault();
      window.scrollTo({
        top: target.offsetTop - headerHeight,
        behavior: "smooth",
      });
    });
  }
});

//別URLからやってきたときに発火
window.addEventListener("load", () => {
  const url = window.location.href;
  if (url.indexOf("#") !== -1) {
    const id = url.split("#");
    const target = document.getElementById(id[id.length - 1]);
    if (target) {
      window.scroll({ top: 0 });
      window.scroll({ top: target.offsetTop - headerHeight, behavior: "smooth" });
    }
  }
});


/*=========================================
#アコーディオンメニュー
=========================================*/
const accordions = document.querySelectorAll('.js_accordion');

accordions.forEach(accordion => {
  const accordionHeader = accordion.querySelector('.js_accordion_list');
  const accordionContent = accordion.querySelector('.accordion--content');

  accordionHeader.addEventListener('click', () => {
    // アコーディオンの開閉状態を切り替え
    accordion.classList.toggle('is-active');

    // コンテンツの高さを設定
    if (accordion.classList.contains('is-active')) {
      accordionContent.style.height = accordionContent.children[0].clientHeight + 'px';
    } else {
      accordionContent.style.height = '0';
    }
  });
});

// (function ($, root, undefined) {
//   // ------------------------------
//   // jqueryはここに記載
//   // ------------------------------
// })(jQuery, this);
