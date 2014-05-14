        <header id="header" class="small-3 columns">
            <figure class="small-12 columns logo">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Página principal" class="display-block centered">
                <div class="icon-logo centered"></div>
              </a>

              <figcaption class="main-menu small-12 text-center">
                <ul class="no-bullet">
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" class="white text-upp font-cursive">Início</a></li>
                  <?php $page = get_page_by_title('Sobre'); ?>
                  <li><a href="<?php echo get_page_link($page->ID); ?>" title="" class="white text-upp font-cursive">Sobre Nós</a></li>
                  <?php $page = get_page_by_title('Nossos Produtos'); ?>
                  <li><a href="<?php echo get_page_link($page->ID); ?>" title="" class="white text-upp font-cursive">Nossos produtos</a></li>
                  <?php $page = get_page_by_title('Contato'); ?>
                  <li><a href="<?php echo get_page_link($page->ID); ?>" title="" class="white text-upp font-cursive">Contato</a></li>
                </ul>
              </figcaption>
            </figure>

            <section class="small-12 columns credits abs">
              <div class="small-6 small-push-3 columns">
                <a href="#" class="display-block" title="Visite nosso Facebook" target="_blank"><div class="icon-facebook left"></div></a>
                <a href="#" class="display-block" title="Visite nosso Instagram" target="_blank"><div class="icon-instagram right"></div></a>
              </div>
              <p class="font-12 text-center small-12 left">&copy; 2014 Coopeaaves Alimentos LTDA</p>
              <p class="font-12 text-center small-12 left">Todos os direitos reservados</p>
            </section>
        </header>