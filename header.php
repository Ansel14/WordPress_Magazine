<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php blogInfo('description') ?>" />
    <title><?php is_front_page() ? blogInfo('title') : wp_title() ?></title>
    <?php wp_head() ?>
  </head>
  <body data-barba="wrapper">
    <div
      class="fixed top-0 left-0 z-50 w-full h-screen scale-y-0 bg-dark"
      id="page-transition"
    ></div>
    <header class="">
      <div class="container">
        <div
          class="relative flex items-center justify-between pt-8 pb-2 border-b border-dark"
        >
          <a href="index.html" class="uppercase font-generalSemiBold">
            fyrre magazine</a
          >

          <div
            class="absolute right-0 z-50 cursor-pointer main-menu-toggle top-13"
            id="main-menu-toggle"
          >
            <span class="block w-[40px] h-[2px] bg-dark"></span>
            <span class="block w-[40px] h-[2px] bg-dark"></span>
          </div>

          <nav
            class="fixed top-0 left-0 z-30 w-full h-screen bg-light main-overlay"
            id="main-overlay"
          >
            <a
              href="index.html"
              class="absolute uppercase top-8 left-4 font-generalSemiBold"
              nav-linkitem
              id="menu-logo"
            >
              fyrre magazine</a
            >

            <ul
              class="absolute space-y-10 lg:space-y-20 text-right top-[8rem] right-5 lg:right-10"
              id="menu-nav"
            >
              <li>
                <a
                  class="font-generalSemiBold nav-linkitem uppercase text-[clamp(2rem,_10vw,_8rem)]"
                  href="articles.html"
                  >Articles</a
                >
              </li>
              <li>
                <a
                  class="font-generalSemiBold nav-linkitem uppercase text-[clamp(2rem,_10vw,_8rem)]"
                  href="podcast.html"
                  >Podcasts</a
                >
              </li>
              <li>
                <a
                  class="font-generalSemiBold nav-linkitem uppercase text-[clamp(2rem,_10vw,_8rem)]"
                  href="authors.html"
                  >Authors</a
                >
              </li>
              <li>
                <a
                  class="font-generalSemiBold nav-linkitem uppercase text-[clamp(2rem,_10vw,_8rem)]"
                  href="authors.html"
                  >About</a
                >
              </li>

              <li>
                <a
                  class="font-generalSemiBold nav-linkitem uppercase text-[clamp(2rem,_10vw,_8rem)]"
                  href="authors.html"
                  >Contact</a
                >
              </li>
            </ul>

            <div
              class="absolute bottom-14 lg:bottom-10 right-5 lg:left-10 max-w-[300px]"
              id="menu-excerpt"
            >
              <p class="text-sm text-right lg:text-left">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Delectus dignissimos quos sapiente laborum architecto quibusdam
                nobis alias consequuntur pariatur distinctio!
              </p>
            </div>

            <ul
              id="menu-icons"
              class="absolute space-y-5 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-8"
            >
              <li>
                <a href="#">
                  <svg class="size-6" role="image">
                    <use xlink:href="./img/sprite.svg#icon-instagram"></use>
                  </svg>
                </a>
              </li>

              <li>
                <a href="#">
                  <svg class="size-6" role="image">
                    <use xlink:href="./img/sprite.svg#icon-youtube"></use>
                  </svg>
                </a>
              </li>

              <li>
                <a href="#">
                  <svg class="size-6" role="image">
                    <use xlink:href="./img/sprite.svg#icon-twitter"></use>
                  </svg>
                </a>
              </li>
            </ul>

            <ul
              class="absolute flex gap-5 right-5 lg:right-10 bottom-10"
              id="menu-links"
            >
              <li><a href="#">Terms and Condition</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>