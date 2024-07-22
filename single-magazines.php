<?php get_header() ?>

<?php if(have_posts()) : while(have_posts()) : the_post() ?>
    <section>
      <div class="container">
        <div class="flex items-center justify-between my-5" id="go-back">
          <a
            href="<?php echo site_url('/magazines') ?>"
            class="flex items-center gap-2 mb-5 uppercase hover:underline group md:mb-0 font-generalSemiBold"
          >
            <div
              class="transition-all -translate-x-1 opacity-0 group-hover:opacity-100 group-hover:translate-x-0"
            >
              <svg class="icon-sm" role="image">
                <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow-left"></use>
              </svg>
            </div>

            <span
              class="transition-transform -translate-x-7 group-hover:translate-x-0"
              >Go Back</span
            >
          </a>

          <h4 id="single-title">Magazine</h4>
        </div>

        <div class="grid grid-cols-2 gap-10 my-20">
          <h2 class="max-w-[470px]" id="single-main-title"><?php the_title() ?></h2>
          <p id="single-main-excerpt">
            <?php echo get_field('excerpt') ?>
          </p>
        </div>

        <div class="flex items-center justify-between mb-10 " id="single-article-details">
          <div class="details">
            <ul >
              <li><span>Author:</span><?php the_field('author') ?></li>
              <li><span>Date:</span> <?php echo get_the_date('d, F Y') ?></li>
              <li><span>Duration:</span> <?php the_field('duration') ?>min</li>
            </ul>
          </div>
          <a href="#" class="block category" id="single-article-category"><?php echo get_categories()[0]->name ?></a>
        </div>

        <div class="banner" id="single-article-banner">
          <img src="<?php print_r(get_field('banner')) ?>" alt="" class="object-cover w-full" />
        </div>
      </div>
    </section>

<?php endwhile;
else :
    echo "No more articles";
endif;
?>

    <article class="single-article">
      <div class="single-wrapper max-w-[1000px] mx-auto w-full">
        <div class="grid grid-cols-[300px_1fr] gap-20 my-20">
          <aside class="sticky top-0 self-start">
            <div class="flex gap-5 pb-5 mb-5 border-b border-dark">

            <?php 
                $author = new WP_Query(array(
                    'post_type' => 'authors',
                    'posts_per_page' => 1,
                    'title' => get_field('author')
                ))
            ?>
            <?php if($author->have_posts()) : while($author->have_posts()) : $author->the_post() ?>
              <img
                src="<?php echo get_field('thumbnail') ?>"
                alt=""
                class="rounded-full size-24"
              />

              <p class="text-3xl font-generalSemiBold"><?php the_title() ?></p>
              </div>
              <?php endwhile;
                else:
                    echo "no post";
                endif;
                wp_reset_postdata();
              
              ?>
              
            

            <ul class="flex justify-between mb-2">
              <li class="font-generalSemiBold">Date:</li>
              <li>16, March 2002</li>
            </ul>

            <ul class="flex justify-between mb-2">
              <li class="font-generalSemiBold">Read:</li>
              <li>2mins</li>
            </ul>
          </aside>
          <main id="main-article">
              <?php the_content() ?>
          </main>
        </div>
      </div>
    </article>

    <section class="mb-20 latest">
      <div class="container">
        <div
          class="flex items-center justify-between py-10 pb-20 border-t border-dark"
        >
          <h2 class="uppercase">Latest Post</h2>

          <a href="<?php echo site_url('/magazine') ?>" class="link-arrow right"
            >All Articles
            <svg class="icon-sm" role="image">
              <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow-right"></use>
            </svg>
          </a>
        </div>

        <div class="grid overflow-hidden border md:grid-cols-3 border-dark lastest-grid">
          
            <?php 
                $magazine = new WP_Query(array(
                    'post_type' => 'magazines',
                    'posts_per_page' => 3,
                    'orderby' => 'rand',
                    'post_not_in' => get_the_ID()
                ))
            ?>
            <?php if($magazine->have_posts()) : while($magazine->have_posts()) : $magazine->the_post() ?>

          <div class="p-10 grid-item">
            <span class="after"></span>
            <span class="before"></span>
            <div class="flex items-center justify-between mb-10">
              <p><?php echo get_the_date('d, M Y') ?></p>
              <a href="#" class="category"><?php echo get_categories()[0]->name ?></a>
            </div>

            <div class="mb-10 img-wrap">
              <img
                src="<?php the_field('thumbnail') ?>"
                alt=""
                class="object-cover w-full h-full"
              />
            </div>

            <h3 class="article-header"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
            <p class="mb-10 line-clamp-4">
              <?php the_field('excerpt') ?>
            </p>
            <div class="details">
              <ul>
                <li><span>Date:</span><?php echo get_the_date('d, M Y') ?></li>
                <li><span>Duration:</span> <?php the_field('duration') ?></li>
              </ul>
            </div>
          </div>
          <?php endwhile;
                else:
                    echo "no post";
                endif;
                wp_reset_postdata();
              
              ?>

        </div>
      </div>
    </section>

<?php get_footer() ?>