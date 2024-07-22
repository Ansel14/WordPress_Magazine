<?php wp_footer() ?>

<footer class="bg-dark text-light footer">
        <div class="overflow-hidden">
          <p
            class="flex gap-5 py-5 text-2xl whitespace-nowrap footer-marquee marquee"
          >
            <span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span
            ><span>Newletter+++</span><span>Newletter+++</span>
          </p>
        </div>
        <div class="container">
          <div class="grid items-center py-40 md:grid-cols-2">
            <h2 class="footer-header">Design News to your inbox</h2>
            <form
              id="form"
              action=""
              class="mt-5 max-w-[460px] w-full flex flex-col md:flex-row items-center gap-2 justify-self-end"
            >
              <input
                type="text"
                placeholder="Email"
                class="w-full px-2 py-2 text-xs border border-gray-100 placeholder:opacity-40 text-dark"
              />
              <button
                class="w-full px-4 py-2 text-xs uppercase bg-light text-dark whitespace-nowrap md:w-auto"
              >
                Sign Up
              </button>
            </form>
          </div>

          <div
            class="grid md:grid-cols-[1.3fr_1fr_1fr_1fr] mb-20 gap-5 footer-links"
          >
            <a href="<?php echo site_url('/') ?>" class="uppercase logo font-generalSemiBold"
              >Fyrre Magazine</a
            >
            <ul>
              <li><a href="#">Art</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Architecture</a></li>
            </ul>
            <ul>
              <li><a href="#">Magazine</a></li>
              <li><a href="#">Podcast</a></li>
              <li><a href="#">Authors</a></li>
            </ul>
            <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">X</a></li>
              <li><a href="#">Instagram</a></li>
            </ul>
          </div>

          <p class="p-2 mb-0 text-center copyright">
            &copy; <?php the_date('Y') ?> All Right Reserved
          </p>
        </div>
      </footer>
    </main>

  </body>
</html>