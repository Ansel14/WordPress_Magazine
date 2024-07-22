<?php get_header() ?>

    <section class="mb-20">
        <div class="container overflow-x-visible">
          <div class="title-wrapper">
            <h1 class="">Magazine</h1>
          </div>

          <div
            class="flex flex-col justify-between md:mt-[1rem] item-center md:flex-row"
          >
            <a
              href="#"
              class="flex items-center gap-2 mb-5 uppercase hover:underline group md:mb-0 font-generalSemiBold article-link"
              >Categories
            </a>

            <ul class="flex gap-2 md:gap-5 article-category">
            <?php 
                $categories = get_categories();

                foreach($categories as $category) {
                    echo '<li><a href="#" class="category">' . $category->name  . '</a></li>';
                }
             ?>
            </ul>
          </div>
        </div>
      </section>

      <section class="article-list">
        <div class="container">
          <div class="grid overflow-hidden md:grid-cols-3 article-grid">
            <?php
                    
                    $magazines = new WP_Query(array(
                        'post_type' => 'magazines',
                        'posts_per_page' => 2,
                        'paged' =>  ( get_query_var('paged') ? get_query_var('paged') : 1)

                    ))
                ?>
                <?php if($magazines->have_posts()) : while($magazines->have_posts()) : $magazines->the_post() ?>
            <div class="p-10 grid-item">
              <span class="after"></span>
              <span class="before"></span>
              <div class="flex items-center justify-between mb-10">
                <p><?php echo get_the_date('d, F Y') ?></p>
                <a href="#" class="category"><?php echo get_categories()[0]->name ?></a>
              </div>

              <div class="mb-10 img-wrap">
                <img
                  src="<?php the_field('thumbnail') ?>"
                  alt=""
                  class="object-cover w-full h-full"
                />
              </div>
              <a href="<?php the_permalink() ?>" class="nav-linkitem">
                <h3 class="article-header"><?php the_title() ?></h3></a
              >
              <p class="mb-10 line-clamp-4">
                <?php the_field('excerpt') ?>
              </p>
              <div class="details">
                <ul>
                  <li><span>Date:</span><?php echo get_the_date('d, F Y') ?></li>
                  <li><span>Duration:</span> <?php echo get_post_field('duration', get_the_ID(), true) ?>min</li>
                </ul>
              </div>
            </div>
            <?php
                endwhile;
                else :
                    echo "No more articles";
                endif;
                    wp_reset_postdata();
                ?>

          </div>

          <div class="mb-20 pagination">
          <?php
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                        'format' => '?paged=%#%',
                        'prev_text' => __('Prev'),
                        'next_text' => __('Next '),
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $magazines->max_num_pages
                        ));
                
                ?>
          
            <!-- <ul class="">
              <li>
                <a href="#">
                  <svg class="icon-sm" role="image">
                    <use xlink:href="./img/sprite.svg#icon-chevron-left"></use>
                  </svg>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li>
                <a href="#">
                  <svg class="icon-sm" role="image">
                    <use xlink:href="./img/sprite.svg#icon-chevron-right"></use>
                  </svg>
                </a>
              </li>
            </ul> -->
          </div>
        </div>
      </section>

<?php get_footer() ?>