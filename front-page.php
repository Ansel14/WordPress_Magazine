<?php get_header() ?>

    <section class="mb-10 hero">
        <div class="container">
          <div class="title-wrapper">
            <h1 class="">art & life</h1>
          </div>
          <div
            class="p-1 overflow-hidden md:pl-0 md:p-3 bg-dark text-light marquee-home"
          >
            <p
              class="relative mb-0 uppercase font-generalSemiBold whitespace-nowrap"
            >
              <small class="absolute left-0 z-40 px-5 bg-dark"
                >News Ticker ++</small
              >
              <span class="inline-block marquee">
                <span class="inline-block ml-5 font-generalRegular">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                  +++</span
                >
                <span class="inline-block ml-5 font-generalRegular">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                  +++</span
                >
                <span class="inline-block ml-5 font-generalRegular">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                  +++</span
                >

                <span class="inline-block ml-5 font-generalRegular">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                  +++</span
                >

                <span class="inline-block ml-5 font-generalRegular">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit
                  +++</span
                >
              </span>
            </p>
          </div>
        </div>
    </section>

    <section class="mb-10 feature-story">
        <div class="container">
          <article class="grid gap-4 py-5 md:grid-cols-2">
            <h2 class="uppercase" id="feature-header">Don't close your eyes</h2>
            <div class="flex flex-col">
              <p class="mb-5 grow" id="feature-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                nobis distinctio fuga minima dolore dolores vitae itaque
                deserunt ab eius autem reiciendis placeat similique illum
                repudiandae ea, fugiat quae! A quam qui velit magnam
                voluptatibus eos molestias tempore, quidem libero nam fuga
                dolorum delectus. Consequatur sint voluptatem possimus eius
                quis.
              </p>

              <div class="details" id="feature-details">
                <ul class="">
                  <li><span>Author:</span> Jakob Gronberg</li>
                  <li><span>Date:</span> 16, March 2022</li>
                  <li><span>Duration:</span> 1min</li>
                </ul>
                <a href="#" class="category" id="feature-category">Label</a>
              </div>
            </div>
          </article>
          <div class="img-wrap">
            <img
              src="./img/feature.jpg"
              alt=""
              class="w-full"
              id="feature-img"
            />
          </div>
        </div>
    </section>

    <section class="py-10 mb-10 articles">
        <div class="container">
          <div class="grid md:grid-cols-[1fr_300px] md:gap-20">
            <div class="article-wrapper">
              <div>

                <?php
                    
                    $magazines = new WP_Query(array(
                        'post_type' => 'magazines',
                        'posts_per_page' => -1
                    ))
                ?>
                <?php if($magazines->have_posts()) : while($magazines->have_posts()) : $magazines->the_post() ?>
                <article
                  class="grid md:grid-cols-[240px_1fr] gap-12 pb-10 mb-10 border-b border-dark">
                  <div class="img-wrap">
                    <img
                      src="<?php the_field('thumbnail') ?>"
                      alt=""
                      class="w-full h-[240px] object-cover"
                    />
                  </div>
                  <div class="flex flex-col article-content">
                    <div class="grow">
                      <a href="<?php the_permalink() ?>" class="nav-linkitem">
                        <h3 class="article-header"><?php the_title() ?></h3>
                      </a>
                      <p class="mb-5">
                        <?php echo wp_trim_words(get_field('excerpt'),20) ?>
                      </p>
                    </div>
                    <div class="details">
                      <ul>
                        <li><span>Duration:</span> <?php echo get_post_field('duration', get_the_ID(), true) ?> min</li>
                        <li><span>Author:</span> <?php echo get_field('author') ?></li>
                        <li><span>Date:</span> <?php echo get_the_date('d, F Y') ?></li>
                      </ul>
                      <a href="#" class="category"><?php echo get_categories()[0]->name ?></a>
                    </div>
                  </div>
                </article>
                <?php
                endwhile;
                else :
                    echo "No more articles";
                endif;
                    wp_reset_postdata();
                ?>
              </div>
              <a href="#" class="link-arrow"
                >All Articles
                <svg class="icon-sm" role="image">
                  <use xlink:href="./img/sprite.svg#icon-arrow-right"></use>
                </svg>
              </a>
            </div>
            <aside class="sticky top-0 self-start">
              <h4 class="mb-5">Most Popular</h4>
              <div class="popular-wrapper">
                <div class="flex gap-5 pb-5 mb-5 border-b border-dark">
                  <p class="text-lg font-generalSemiBold">01</p>
                  <div>
                    <h5 class="text-lg font-generalSemiBold">
                      Street art festival
                    </h5>
                    <small
                      ><span class="pr-3 font-generalMedium">Author:</span>
                      Cristofer Vaccaro</small
                    >
                  </div>
                </div>

                <div class="flex gap-5 pb-5 mb-5 border-b border-dark">
                  <p class="text-lg font-generalSemiBold">01</p>
                  <div>
                    <h5 class="text-lg font-generalSemiBold">
                      Street art festival
                    </h5>
                    <small
                      ><span class="pr-3 font-generalMedium">Author:</span>
                      Cristofer Vaccaro</small
                    >
                  </div>
                </div>

                <div class="flex gap-5 pb-5 mb-5 border-b border-dark">
                  <p class="text-lg font-generalSemiBold">01</p>
                  <div>
                    <h5 class="text-lg font-generalSemiBold">
                      Street art festival
                    </h5>
                    <small
                      ><span class="pr-3 font-generalMedium">Author:</span>
                      Cristofer Vaccaro</small
                    >
                  </div>
                </div>

                <div class="flex gap-5 pb-5 mb-5 border-b border-dark">
                  <p class="text-lg font-generalSemiBold">01</p>
                  <div>
                    <h5 class="text-lg font-generalSemiBold">
                      Street art festival
                    </h5>
                    <small
                      ><span class="pr-3 font-generalMedium">Author:</span>
                      Cristofer Vaccaro</small
                    >
                  </div>
                </div>
              </div>

              <div class="p-4 newsletter">
                <h5 class="uppercase font-generalSemiBold">newsletter</h5>
                <h4>Design News to your inbox</h4>
                <form action="" class="mt-5">
                  <input
                    type="text"
                    placeholder="Email"
                    class="mb-3 text-red-300 border border-gray-100"
                  />
                  <button
                    class="px-4 py-2 text-xs uppercase text-light bg-dark"
                  >
                    Sign Up
                  </button>
                </form>
              </div>
            </aside>
          </div>
        </div>
    </section>

    <section class="mb-40 podcast">
        <div class="container">
          <div
            class="flex items-center justify-between py-10 pb-20 border-t border-dark"
          >
            <h2 class="uppercase">Podcast</h2>
            <a href="#" class="link-arrow right" id="podcast-link"
              >All Episodes
              <svg class="icon-sm" role="image">
                <use xlink:href="./img/sprite.svg#icon-arrow-right"></use>
              </svg>
            </a>
          </div>

          <div
            class="grid overflow-hidden border lg:grid-cols-3 border-dark podcast-grid"
          >
            <div class="p-5 md:p-10 grid-item">
              <span class="after"></span>
              <span class="before"></span>
              <div class="relative mb-5">
                <img
                  src="./img/img-podcast-1.jpg"
                  alt=""
                  class="object-cover w-full h-full"
                />
                <h3 class="absolute text-4xl text-white uppercase top-5 left-5">
                  Fyrre <span class="block text-lg">podcast</span>
                </h3>
                <p
                  class="absolute bottom-0 text-2xl text-white left-5 font-generalSemiBold"
                >
                  EP 05
                </p>
                <a href="#" class="absolute right-5 bottom-5">
                  <svg class="icon-lg" role="image">
                    <use xlink:href="./img/sprite.svg#icon-podcast-arrow"></use>
                  </svg>
                </a>
              </div>

              <h3 class="article-header">
                The Problem of today’s cultural developmentxxxx
              </h3>

              <div class="items-center justify-between md:flex">
                <ul class="items-center gap-8 mb-5 md:mb-0 md:flex">
                  <li>
                    <span class="font-generalSemiBold">Date:</span> 16, March
                    2022
                  </li>
                  <li>
                    <span class="font-generalSemiBold">Duration:</span> 1min
                  </li>
                </ul>
              </div>
            </div>

            <div class="p-5 md:p-10 grid-item">
              <span class="after"></span>
              <span class="before"></span>
              <div class="relative mb-5">
                <img
                  src="./img/img-podcast-1.jpg"
                  alt=""
                  class="object-cover w-full h-full"
                />
                <h3 class="absolute text-4xl text-white uppercase top-5 left-5">
                  Fyrre <span class="block text-lg">podcast</span>
                </h3>
                <p
                  class="absolute bottom-0 text-2xl text-white left-5 font-generalSemiBold"
                >
                  EP 05
                </p>
                <a href="#" class="absolute right-5 bottom-5">
                  <svg class="icon-lg" role="image">
                    <use xlink:href="./img/sprite.svg#icon-podcast-arrow"></use>
                  </svg>
                </a>
              </div>

              <h3 class="article-header">
                The Problem of today’s cultural developmentxxxx
              </h3>

              <div class="items-center justify-between md:flex">
                <ul class="items-center gap-8 mb-5 md:mb-0 md:flex">
                  <li>
                    <span class="font-generalSemiBold">Date:</span> 16, March
                    2022
                  </li>
                  <li>
                    <span class="font-generalSemiBold">Duration:</span> 1min
                  </li>
                </ul>
              </div>
            </div>

            <div class="p-5 md:p-10 grid-item">
              <span class="after"></span>
              <span class="before"></span>
              <div class="relative mb-5">
                <img
                  src="./img/img-podcast-1.jpg"
                  alt=""
                  class="object-cover w-full h-full"
                />
                <h3 class="absolute text-4xl text-white uppercase top-5 left-5">
                  Fyrre <span class="block text-lg">podcast</span>
                </h3>
                <p
                  class="absolute bottom-0 text-2xl text-white left-5 font-generalSemiBold"
                >
                  EP 05
                </p>
                <a href="#" class="absolute right-5 bottom-5">
                  <svg class="icon-lg" role="image">
                    <use xlink:href="./img/sprite.svg#icon-podcast-arrow"></use>
                  </svg>
                </a>
              </div>

              <h3 class="article-header">
                The Problem of today’s cultural developmentxxxx
              </h3>

              <div class="items-center justify-between md:flex">
                <ul class="items-center gap-8 mb-5 md:mb-0 md:flex">
                  <li>
                    <span class="font-generalSemiBold">Date:</span> 16, March
                    2022
                  </li>
                  <li>
                    <span class="font-generalSemiBold">Duration:</span> 1min
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="mb-40 author">
        <div class="container">
          <div
            class="flex items-center justify-between py-10 pb-20 border-t border-dark"
          >
            <h2 class="uppercase">Author</h2>
            <a href="#" class="link-arrow right" id="author-link"
              >All Authors
              <svg class="icon-sm" role="image">
                <use xlink:href="./img/sprite.svg#icon-arrow-right"></use>
              </svg>
            </a>
          </div>

          <div
            class="grid overflow-hidden border md:grid-cols-2 border-dark author-grid"
          >
            <div
              class="flex flex-col items-center gap-5 p-10 grid-item md:flex-row"
            >
              <span class="after"></span>
              <span class="before"></span>
              <div class="overflow-hidden rounded-full">
                <img src="./img/author-1.jpg" alt="" />
              </div>
              <div>
                <h3 class="article-header">Jakob Gronberg</h3>
                <div class="items-center justify-between -mt-4 md:flex">
                  <ul class="items-center gap-8 mb-5 md:mb-0 md:flex">
                    <li>
                      <span class="font-generalSemiBold">Job:</span> Artist
                    </li>
                    <li>
                      <span class="font-generalSemiBold">City:</span> Berlin
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col items-center gap-5 p-10 grid-item md:flex-row"
            >
              <span class="after"></span>
              <span class="before"></span>
              <div class="overflow-hidden rounded-full">
                <img src="./img/author-1.jpg" alt="" />
              </div>
              <div>
                <h3 class="article-header">Jakob Gronberg</h3>
                <div class="items-center justify-between -mt-4 md:flex">
                  <ul class="items-center gap-8 mb-5 md:mb-0 md:flex">
                    <li>
                      <span class="font-generalSemiBold">Job:</span> Artist
                    </li>
                    <li>
                      <span class="font-generalSemiBold">City:</span> Berlin
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col items-center gap-5 p-10 grid-item md:flex-row"
            >
              <span class="after"></span>
              <span class="before"></span>
              <div class="overflow-hidden rounded-full">
                <img src="./img/author-1.jpg" alt="" />
              </div>
              <div>
                <h3 class="article-header">Jakob Gronberg</h3>
                <div class="items-center justify-between -mt-4 md:flex">
                  <ul class="items-center gap-8 mb-5 md:mb-0 md:flex">
                    <li>
                      <span class="font-generalSemiBold">Job:</span> Artist
                    </li>
                    <li>
                      <span class="font-generalSemiBold">City:</span> Berlin
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col items-center gap-5 p-10 grid-item md:flex-row"
            >
              <span class="after"></span>
              <span class="before"></span>
              <div class="overflow-hidden rounded-full">
                <img src="./img/author-1.jpg" alt="" />
              </div>
              <div>
                <h3 class="article-header">Jakob Gronberg</h3>
                <div class="items-center justify-between -mt-4 md:flex">
                  <ul class="items-center gap-8 mb-5 md:mb-0 md:flex">
                    <li>
                      <span class="font-generalSemiBold">Job:</span> Artist
                    </li>
                    <li>
                      <span class="font-generalSemiBold">City:</span> Berlin
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

<?php get_footer() ?>