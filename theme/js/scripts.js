
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


/*=========================================
#アコーディオンメニュー
-=========================================*/
// ① DOMができてから実行（<script defer>でも可）
document.addEventListener('DOMContentLoaded', () => {
  const accordions = document.querySelectorAll('.js_accordion');

  accordions.forEach((accordion) => {
    const header = accordion.querySelector('.js_accordion_list');
    const content = accordion.querySelector('.accordion--content');
    if (!header || !content) return;

    // ② 初期状態を同期
    const syncInitial = () => {
      if (accordion.classList.contains('is-active')) {
        // いったん固定値にしてから 'auto' にするとレイアウトが安定
        content.style.height = content.scrollHeight + 'px';
        // 次フレームでautoに戻すとレスポンシブでも崩れにくい
        requestAnimationFrame(() => (content.style.height = 'auto'));
      } else {
        content.style.height = '0px';
      }
    };
    syncInitial();

    // ③ クリックでトグル
    header.addEventListener('click', () => {
      const opening = !accordion.classList.contains('is-active');
      accordion.classList.toggle('is-active', opening);

      if (opening) {
        // 0 → 実高さへ（transition）
        content.style.height = content.scrollHeight + 'px';

        // アニメ後は 'auto' に戻して可変コンテンツに対応
        const onEnd = (e) => {
          if (e.propertyName === 'height') {
            content.style.height = 'auto';
            content.removeEventListener('transitionend', onEnd);
          }
        };
        content.addEventListener('transitionend', onEnd);
      } else {
        // auto のままだと 0 にアニメできないので、まず現在の高さを固定してから 0 に
        const current = content.scrollHeight;
        content.style.height = current + 'px';
        requestAnimationFrame(() => {
          content.style.height = '0px';
        });
      }
    });

    // ④ 画像ロードなどで中身の高さが変わったときに追従（任意）
    const ro = new ResizeObserver(() => {
      if (accordion.classList.contains('is-active') && content.style.height === 'auto') {
        // 'auto' 運用時は何もしない（常に中身に追従）
        return;
      }
      if (accordion.classList.contains('is-active')) {
        content.style.height = content.scrollHeight + 'px';
      }
    });
    ro.observe(content);
  });
});
