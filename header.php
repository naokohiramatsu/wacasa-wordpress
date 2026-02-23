<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="l-header-top pc_only">
    <div class="l-header__wrapper">
      <div class="l-header-top__inner--text">
        <p class="company-name">豊中市・箕面市のエクステリア＆外構の専門家</p>
        <p class="company-name--en">ーwaCasa architectー</p>
        <a href="080-3906-2723" class="tel-link"><span class="tel">Tel</span> 080-3906-2723</a>
      </div>
      <div class="l-header-top__inner--img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/waCasa-architect.svg" alt="waCasaロゴ" />
      </div>
    </div>
  </header>

  <!-- 左サイドナビ -->
  <nav class="l-side-nav pc_only">
    <div class="l-side-nav__inner">
      <div class="hum-icon">
        　　<span></span> 　　<span></span> 　　<span></span>
        <p class="hum-icon__text"></p>
      </div>

      <div class="side-nav__wrpper">
        <a href="#" class="icon-contact__link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/header/contact_icon.svg" alt="contact" />
          <p class="hd-icon__text">お問い合わせ</p>
        </a>

        <a href="#" class="icon-contact__link">
          <img src="<?php echo get_template_directory_uri(); ?>/images/header/instagram_icon.svg" alt="instagram" />
          <p class="hd-icon__text">instagram</p>
        </a>
      </div>
    </div>
  </nav>

  <!-- グローバルナビ（開閉） -->
  <nav class="menu pc_only">
    <h2 class="menu__heading">
      <img src="<?php echo get_template_directory_uri(); ?>/images/header/waCasa-architect--menu.svg" />
    </h2>
    <ul class="menu__ul">
      <li class="menu__ul--item">
        <a href="#"><span class="menu__ul--item--en en">CONCEPT</span><span class="menu__ul--item--jp">コンセプト</span></a>
      </li>
      <li class="menu__ul--item">
        <a href="#"><span class="menu__ul--item--en en">FLOW</span><span class="menu__ul--item--jp">外構づくりの流れ</span></a>
      </li>
      <li class="menu__ul--item">
        <a href="#"><span class="menu__ul--item--en en">WORKS</span><span class="menu__ul--item--jp">施工事例</span></a>
      </li>
      <li class="menu__ul--item">
        <a href="#"><span class="menu__ul--item--en en">NEWS</span><span class="menu__ul--item--jp">新着情報</span></a>
      </li>
      <li class="menu__ul--item">
        <a href="#"><span class="menu__ul--item--en en">COMPANY</span><span class="menu__ul--item--jp">会社情報</span></a>
      </li>
    </ul>
    <div class="menu__bottom">
      <a
        href="https://www.instagram.com/"
        target="_blank"
        class="menu__bottom-link">
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/instagram_icon.svg" alt="Instagram" />
        <p class="menu__bottom-text en">instagram</p>
      </a>
    </div>
    <div class="menu__bottom-contactButton">
      <a href="#" class="button contact en">CONTACT FORM</a>
    </div>
  </nav>

  <!-- ヘッダーSP設定 -->

  <header class="l-header-top sp_only">
    <div class="sp-header-inner">
      <!-- ロゴ -->
      <div class="sp-header-logo">
        <h1 class="sp-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/header/waCasa-architect_sp.svg" alt="logo" />
        </h1>
      </div>
      <!-- アイコン（Instagram + ハンバーガー） -->
      <div class="sp-header-icons">
        <div class="hd-icon-instagram">
          <a href="#" class="icon-contact__link">
            <img src="<?php echo get_template_directory_uri(); ?>/images/header/instagram_icon.svg" alt="instagram" />
          </a>
        </div>
        <div class="hum-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- SP用お問い合わせボタン -->
    <div class="sp-header__contact">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/contact_bar.svg" alt="お問い合わせ" />
      </a>
    </div>
    <!-- SP用ナビ -->
    <nav class="menu sp_only">
      <h2 class="menu__heading">
        <img src="<?php echo get_template_directory_uri(); ?>/images/header/waCasa-architect--menu.svg" />
      </h2>
      <ul class="menu__ul">
        <li class="menu__ul--item">
          <a href="#"><span class="menu__ul--item--en en">CONCEPT</span><span class="menu__ul--item--jp">コンセプト</span></a>
        </li>
        <li class="menu__ul--item">
          <a href="#"><span class="menu__ul--item--en en">FLOW</span><span class="menu__ul--item--jp">外構づくりの流れ</span></a>
        </li>
        <li class="menu__ul--item">
          <a href="#"><span class="menu__ul--item--en en">WORKS</span><span class="menu__ul--item--jp">施工事例</span></a>
        </li>
        <li class="menu__ul--item">
          <a href="#"><span class="menu__ul--item--en en">NEWS</span><span class="menu__ul--item--jp">新着情報</span></a>
        </li>
        <li class="menu__ul--item">
          <a href="#"><span class="menu__ul--item--en en">COMPANY</span><span class="menu__ul--item--jp">会社情報</span></a>
        </li>
      </ul>
      <div class="menu__bottom">
        <a
          href="https://www.instagram.com/"
          target="_blank"
          class="menu__bottom-link">
          <img src="<?= get_template_directory_uri(); ?>/images/header/instagram_icon.svg" alt="Instagram" />
          <p class="menu__bottom-text en">instagram</p>
        </a>
      </div>
      <div class="menu__bottom-contactButton en">
        <a href="#" class="button contact">CONTACT FORM</a>
      </div>
    </nav>
  </header>