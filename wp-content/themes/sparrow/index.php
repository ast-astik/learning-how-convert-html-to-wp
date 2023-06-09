<?php get_header(); ?>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

      <!-- Flexslider Start-->
	   <div id="intro-slider" class="flexslider">

		   <ul class="slides">

			   <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Free amazing site template<span>.</span></h1>
							   <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit.</p>
						   </div>
                     <div class="slider-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/home-slider-image-01.png" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

            <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Responsive + HTML5 + CSS3<span>.</span></h1>
							   <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti eos et accusamus. amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis.
                        Aenean condimentum, lacus sit amet luctus.</p>
						   </div>
                     <div class="slider-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/home-slider-image-02.png" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

		   </ul>

	   </div> <!-- Flexslider End-->

   </section> <!-- Intro Section End-->

   <!-- Info Section
   ================================================== -->
   <section id="info">

      <div class="row">

         <div class="bgrid-quarters s-bgrid-halves">

           <div class="columns">
              <h2>Clean & Modern.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns">
              <h2>Responsive.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns s-first">
              <h2>HTML5 + CSS3.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns">
              <h2>Free of Charge.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           </div>

      </div>

   </section> <!-- Info Section End-->

   <!-- Works Section
   ================================================== -->
   <section id="works">

      <div class="row">

         <div class="twelve columns align-center">
            <h1>Some of our recent works.</h1>
         </div>

         <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">

            <?php  
            $my_posts = get_posts( array(
               'numberposts' => 4,
               'post_type'   => 'portfolio',
               'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
            ?>

    		   <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="<?php the_permalink(); ?>">
                     <?php the_post_thumbnail(); ?>
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                     
                     <!-- Получаем и выводим первый навык -->
                     <p>
                        <?php
                           $terms = get_the_terms( get_the_ID(), 'skills' );

                           if ( $terms && ! is_wp_error( $terms ) ) {
                               $first_term = reset( $terms );
                               echo esc_html( $first_term->name );
                           }
                        ?>
                     </p>
    					</div>
               </div>
    			</div>

            <?php
            }

            wp_reset_postdata(); // сброс
            ?>

         </div>

      </div>

   </section> <!-- Works Section End-->

   <!-- Journal Section
   ================================================== -->
   <section id="journal">

      <div class="row">
         <div class="twelve columns align-center">
            <h1>Our latest posts and rants.</h1>
         </div>
      </div>

      <div class="blog-entries">

         <?php 

         // параметры по умолчанию
         $my_posts = get_posts( array(
            'numberposts' => 3,
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
         ) );

         global $post;

         foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>

               <!-- Entry -->
               <article class="row entry">

                  <div class="entry-header">

                     <div class="permalink">
                        <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                     </div>

                     <div class="ten columns entry-title pull-right">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                     </div>

                     <div class="two columns post-meta end">
                        <p>
                        <time datetime="2014-01-31" class="post-date" pubdate=""><?php the_time('M j, Y'); ?></time>
                        <span class="dauthor">By <?php the_author(); ?></span>
                        </p>
                     </div>

                  </div>

                  <div class="ten columns offset-2 post-content">
                     <!--<?php the_excerpt(); ?>-->
                     
                     <?php
                        $excerpt_length = 55;
                        $excerpt_more = '... <a class="more-link" href="'. get_permalink() . '">' . __('Read More', 'textdomain') . '<i class="fa fa-arrow-circle-o-right"></i></a>';
                        echo wp_trim_words( get_the_excerpt(), $excerpt_length, $excerpt_more );
                     ?>
                  </div>

               </article> <!-- Entry End -->

            <?php
         }

         wp_reset_postdata(); // сброс

         ?>

      </div> <!-- Entries End -->

   </section> <!-- Journal Section End-->

   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="eight columns offset-1">

            <h1><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h1>
            <p>Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
					Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>. 
					<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. --></p>

         </div>

         <div class="three columns action">

            <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>

         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->

<?php get_footer(); ?>