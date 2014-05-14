<?php get_header(); ?>
    
    <div class="wrapper <?php if(is_page('sobre')): echo 'about'; elseif(is_page('nossos-produtos')): echo 'products'; elseif(is_page('contato')): echo 'products'; endif; ?>">
      <section class="row">

      <?php get_template_part('main','menu'); ?>
        
      <?php if(is_page('sobre')): ?>
        
        <section class="wrap-content small-5 columns abs">
          <div class="bg-black small-12">

            <nav class="about-slide">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/about-1.jpg" alt="">
              </figure>
            </nav>

            <article class="about-content the-content small-12 columns">
              <header class="small-12 left">
                <h3 class="font-pacifico green">O que é Delícias do Campo?</h3>
              </header>
              <?php $page = get_page_by_title('Sobre'); echo returnContent($page->ID); ?>
            </article>

          </div>
        </section>
      
      <?php elseif(is_page('nossos-produtos')): ?>

        <section class="wrap-content small-5 columns abs">
          <div class="bg-black small-12">
            <nav class="products-slide small-12 columns">
              <?php 
                $page = get_page_by_title('Nossos Produtos');
                $products = get_field('products', $page->ID); 
                foreach($products as $product):
              ?>

              <figure class="small-12 left">
                <header class="small-12 left">
                  <h3 class="green font-pacifico"><?php echo $product['p_name']; ?></h3>
                </header>
                <p class="white small-12 left"><?php echo $product['p_description']; ?></p>

                <div class="thumb small-12 text-center">
                  <img src="<?php echo $product['p_image']; ?>" alt="">
                </div>
              </figure>

              <?php
                endforeach;  
              ?> 
            </nav>

            <a href="#" class="display-block icon-arrow-left abs"></a>
            <a href="#" class="display-block icon-arrow-right abs"></a>
            <div id="nav" class="products abs"></div>
          </div>
        </section>

      <?php elseif(is_page('contato')): ?>

        <section class="wrap-content small-5 columns abs">
          <div class="bg-black small-12 columns">
             <header class="small-12 left">
                <h3 class="font-pacifico green">Deixe uma mensagem para nós</h3>
              </header>
             <?php echo do_shortcode('[contact-form-7 id="10" title="Formulário de contato 1"]'); ?>
          </div>
        </section>
        
      <?php endif; ?>

      </section><!-- //row -->
    </div><!-- //wrapper -->

<?php get_footer(); ?>
