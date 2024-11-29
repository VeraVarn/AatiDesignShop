<?php 
/**
 * The Header File
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Aati Design Shop
 * @since Aatin Design Shop Webpage 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8" />
    <title>Aati Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>

    <svg width="0" height="0" class="hidden">
      <symbol id="instagram_icon_framed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <path d="m36.5,17.7c-3.5.2-5.8.7-7.9,1.5-2.1.8-3.9,2-5.7,3.8-1.8,1.8-2.9,3.6-3.7,5.8-.8,2.1-1.3,4.4-1.5,7.9-.2,3.5-.2,4.6-.2,13.4,0,8.8,0,9.9.2,13.4.2,3.5.7,5.8,1.5,7.9.8,2.1,2,3.9,3.8,5.7,1.8,1.8,3.6,2.9,5.8,3.7,2.1.8,4.4,1.3,7.9,1.5,3.5.2,4.6.2,13.4.2,8.8,0,9.9,0,13.4-.2s5.8-.7,7.9-1.5c2.1-.8,3.9-2,5.7-3.8s2.9-3.6,3.7-5.8c.8-2.1,1.3-4.4,1.5-7.9.2-3.5.2-4.6.2-13.4,0-8.8,0-9.9-.2-13.4s-.7-5.8-1.5-7.9c-.8-2.1-2-3.9-3.8-5.7-1.8-1.8-3.6-2.9-5.8-3.7-2.1-.8-4.4-1.3-7.9-1.5s-4.6-.2-13.4-.2c-8.8,0-9.9,0-13.4.2m.4,58.8c-3.2-.1-4.9-.7-6-1.1-1.5-.6-2.6-1.3-3.7-2.4s-1.8-2.2-2.4-3.7c-.4-1.1-1-2.9-1.1-6-.2-3.4-.2-4.5-.2-13.1,0-8.7,0-9.7.2-13.1.1-3.2.7-4.9,1.1-6,.6-1.5,1.3-2.6,2.4-3.7s2.2-1.8,3.7-2.4c1.1-.4,2.9-1,6-1.1,3.4-.2,4.5-.2,13.1-.2,8.7,0,9.7,0,13.1.2,3.2.1,4.9.7,6,1.1,1.5.6,2.6,1.3,3.7,2.4s1.8,2.2,2.4,3.7c.4,1.1,1,2.9,1.1,6,.2,3.4.2,4.5.2,13.1,0,8.7,0,9.7-.2,13.1-.1,3.2-.7,4.9-1.1,6-.6,1.5-1.3,2.6-2.4,3.7s-2.2,1.8-3.7,2.4c-1.1.4-2.9,1-6,1.1-3.4.2-4.5.2-13.1.2s-9.7,0-13.1-.2m26.5-43.8c0,2.2,1.8,3.9,3.9,3.9s3.9-1.8,3.9-3.9c0-2.2-1.8-3.9-3.9-3.9,0,0,0,0,0,0-2.2,0-3.9,1.8-3.9,3.9m-30.1,17.4c0,9.2,7.5,16.7,16.7,16.7,9.2,0,16.7-7.5,16.7-16.7,0-9.2-7.5-16.7-16.7-16.7s-16.7,7.5-16.7,16.7m5.9,0c0-6,4.8-10.8,10.8-10.9,6,0,10.8,4.8,10.9,10.8,0,6-4.8,10.8-10.8,10.9-6,0-10.8-4.8-10.9-10.8h0"></path>
        <path d="m95,95H5V5h90.1v90.1Zm-85.1-5h80.1V10H10v80.1Z"></path>
      </symbol>
      <symbol id="menu_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <path d="m50,25c-10.9,0-21.7.5-32.5,1.7v4.4c10.8,1.3,21.6,1.7,32.5,1.7,10.9,0,21.7-.4,32.5-1.7v-4.4c-10.8-1.3-21.6-1.7-32.5-1.7Z"></path>
        <path d="m17.5,68.9v4.4c10.8,1.3,21.6,1.7,32.5,1.7,10.9,0,21.7-.4,32.5-1.7v-4.4c-10.8-1.3-21.6-1.7-32.5-1.7-10.9,0-21.7.5-32.5,1.7Z"></path>
        <path d="m17.5,47.8v4.4c10.8,1.3,21.6,1.7,32.5,1.7,10.9,0,21.7-.4,32.5-1.7v-4.4c-10.8-1.3-21.6-1.7-32.5-1.7-10.9,0-21.7.5-32.5,1.7Z"></path>
      </symbol>
      <symbol id="menu_icon_close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <path d="m79.6,26l-3.5-3.5c-8.4,6.6-16.3,13.8-24,21.2-7.7-7.5-15.6-14.7-24-21.2l-3.5,3.5c6.6,8.4,13.8,16.3,21.3,24-7.5,7.7-14.7,15.6-21.3,24l3.5,3.5c8.4-6.6,16.3-13.8,24-21.2,7.7,7.5,15.5,14.7,24,21.2l3.5-3.5c-6.6-8.4-13.8-16.3-21.2-24,7.5-7.7,14.7-15.5,21.2-24Z"></path>
      </symbol>
      <symbol id="arrow_down_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <polygon points="60.7 77.4 52.4 85.6 52.4 8.5 47.6 8.5 47.6 85.5 39.3 77.3 35.7 80.8 50.1 95 64.3 81 60.7 77.4"></polygon>
      </symbol>
      <symbol id="contact_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <path d="m79,21.8h-5s0,0,0,0H26s0,0,0,0h-5c-1.5,9.3-1.9,18.7-2,28.2,0,9.4.5,18.8,2,28.2h5s0,0,0,0h47.9s0,0,0,0h5c1.5-9.3,1.9-18.7,2-28.2,0-9.4-.5-18.8-2-28.2Zm-7,51.9l-44-.2c0-8,0-15.7,0-23.6,0-5.5-.2-10.9-.6-16.3,5.2,5.7,10.7,11.2,16.4,16.5,0,0,0,0,0,0h0c1,1,2,1.9,3.1,2.9,1,1,2.1,1.9,3.2,2.8h0c1.1-.9,2.1-1.9,3.2-2.8,1-1,2.1-1.9,3.1-2.9h0s0,0,0,0c5.7-5.3,11.2-10.8,16.4-16.5-.4,5.4-.6,10.8-.6,16.3,0,7.9,0,15.9,0,23.8Zm-22-29.3c-7.1-6.3-14.3-12.4-22-18h44c-7.7,5.6-14.9,11.7-22,18Z"></path>
      </symbol>
      <symbol id="email_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <path d="m17.5,51c0-21,16.8-34.8,36.4-34.8s28.6,11.3,28.6,25.6-9.6,24.4-19.8,24.4-7.6-3.1-7.6-8.3c-2.5,4-5.7,7.9-11.9,7.9s-9.5-4.5-9.5-10.7c0-9.4,7.8-21.3,18.7-21.3s8.3,2.9,8.9,6.3c1.1-1.3,2.1-2.2,3.3-2.9l3.3,2.1c-4.6,9-7.4,14.4-7.4,17.2s1.3,3.1,3.4,3.1c6.5,0,11.6-6.4,11.6-13.8,0-13.1-10.7-20.6-25.1-20.6s-27,11-27,24.9,13.7,23.1,29.3,23.1,18.4-2.7,23.3-7.2l1.8,2.6c-5.6,10.2-15.3,15.1-27.1,15.1-20.5,0-33.6-14.6-33.6-32.8Zm28,5.7c6.7,0,10.7-5.8,12.2-11.5-1.5-1.9-3.8-3.2-7.1-3.2-6.6,0-11.2,5.1-11.2,10s2.7,4.6,6,4.6Z"></path>
      </symbol>
      <symbol id="email_icon_framed" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <path d="m17.5,51c0-21,16.8-34.8,36.4-34.8s28.6,11.3,28.6,25.6-9.6,24.4-19.8,24.4-7.6-3.1-7.6-8.3c-2.5,4-5.7,7.9-11.9,7.9s-9.5-4.5-9.5-10.7c0-9.4,7.8-21.3,18.7-21.3s8.3,2.9,8.9,6.3c1.1-1.3,2.1-2.2,3.3-2.9l3.3,2.1c-4.6,9-7.4,14.4-7.4,17.2s1.3,3.1,3.4,3.1c6.5,0,11.6-6.4,11.6-13.8,0-13.1-10.7-20.6-25.1-20.6s-27,11-27,24.9,13.7,23.1,29.3,23.1,18.4-2.7,23.3-7.2l1.8,2.6c-5.6,10.2-15.3,15.1-27.1,15.1-20.5,0-33.6-14.6-33.6-32.8Zm28,5.7c6.7,0,10.7-5.8,12.2-11.5-1.5-1.9-3.8-3.2-7.1-3.2-6.6,0-11.2,5.1-11.2,10s2.7,4.6,6,4.6Z"></path>
        <path d="m95,95H5V5h90.1v90.1Zm-85.1-5h80.1V10H10v80.1Z"></path>
      </symbol>
      <symbol id="instagram_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <path d="m36.5,17.7c-3.5.2-5.8.7-7.9,1.5-2.1.8-3.9,2-5.7,3.8-1.8,1.8-2.9,3.6-3.7,5.8-.8,2.1-1.3,4.4-1.5,7.9-.2,3.5-.2,4.6-.2,13.4,0,8.8,0,9.9.2,13.4.2,3.5.7,5.8,1.5,7.9.8,2.1,2,3.9,3.8,5.7,1.8,1.8,3.6,2.9,5.8,3.7,2.1.8,4.4,1.3,7.9,1.5,3.5.2,4.6.2,13.4.2,8.8,0,9.9,0,13.4-.2s5.8-.7,7.9-1.5c2.1-.8,3.9-2,5.7-3.8s2.9-3.6,3.7-5.8c.8-2.1,1.3-4.4,1.5-7.9.2-3.5.2-4.6.2-13.4,0-8.8,0-9.9-.2-13.4s-.7-5.8-1.5-7.9c-.8-2.1-2-3.9-3.8-5.7-1.8-1.8-3.6-2.9-5.8-3.7-2.1-.8-4.4-1.3-7.9-1.5s-4.6-.2-13.4-.2c-8.8,0-9.9,0-13.4.2m.4,58.8c-3.2-.1-4.9-.7-6-1.1-1.5-.6-2.6-1.3-3.7-2.4s-1.8-2.2-2.4-3.7c-.4-1.1-1-2.9-1.1-6-.2-3.4-.2-4.5-.2-13.1,0-8.7,0-9.7.2-13.1.1-3.2.7-4.9,1.1-6,.6-1.5,1.3-2.6,2.4-3.7s2.2-1.8,3.7-2.4c1.1-.4,2.9-1,6-1.1,3.4-.2,4.5-.2,13.1-.2,8.7,0,9.7,0,13.1.2,3.2.1,4.9.7,6,1.1,1.5.6,2.6,1.3,3.7,2.4s1.8,2.2,2.4,3.7c.4,1.1,1,2.9,1.1,6,.2,3.4.2,4.5.2,13.1,0,8.7,0,9.7-.2,13.1-.1,3.2-.7,4.9-1.1,6-.6,1.5-1.3,2.6-2.4,3.7s-2.2,1.8-3.7,2.4c-1.1.4-2.9,1-6,1.1-3.4.2-4.5.2-13.1.2s-9.7,0-13.1-.2m26.5-43.8c0,2.2,1.8,3.9,3.9,3.9s3.9-1.8,3.9-3.9c0-2.2-1.8-3.9-3.9-3.9,0,0,0,0,0,0-2.2,0-3.9,1.8-3.9,3.9m-30.1,17.4c0,9.2,7.5,16.7,16.7,16.7,9.2,0,16.7-7.5,16.7-16.7,0-9.2-7.5-16.7-16.7-16.7s-16.7,7.5-16.7,16.7m5.9,0c0-6,4.8-10.8,10.8-10.9,6,0,10.8,4.8,10.9,10.8,0,6-4.8,10.8-10.8,10.9-6,0-10.8-4.8-10.9-10.8h0"></path>
      </symbol>
    </svg>
  </head>

  <body>
    <header class="header"  id="top-of-the-page">
      <nav class="main-menu">
        <a href="#top-of-the-page"
          ><img
            class="logo"
            alt="Aati Design logo purple"
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Aati_Design_logo_purple.svg"
        /></a>
        <a href="#contact-info" class="btn btn-nav">Contact</a>
        <!-- <ul class="top-nav">
          <li class="PROJECTS"><a href=""></a></li>
          <li class="PRODUCTS"><a href=""></a></li>
          <li class="ABOUT"><a href=""></a></li>
        </ul> -->
        <div class="mobile-menu">
          <div class="close-btn"><i class="mobile-menu-toggler icon"></i></div>
            <ul class="mobile-menu-nav"></ul>
        </div>
        <button class="mobile-menu-btn">
          <i class="mobile-menu-toggler" id="mobile-nav-open"><a href="#contact-info"><svg class="icon-header">
            <use href="#contact_icon"></use>
          </svg></a></i>
        </button>
        <!-- <button class="mobile-menu-btn">
          <i class="mobile-menu-toggler" id="mobile-nav-close">&#9744;</i>
        </button> -->
      </nav>
    </header>