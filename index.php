<?php get_header(); ?>
<body>
  <h1 class="page-heading max-width"><?php bloginfo(name); ?></h1>
  <div class="grid max-width">
    <div class="block grid--item-9">
      <div class="block__title">
        Últimos Trabajos
      </div>
      <div class="block__body grid">
          <?php
          $args = array('author' => "vuducito");
          $filter_posts = new WP_Query($args);

          if ($filter_posts->have_posts()) :
            while ($filter_posts->have_posts()) :
              $filter_posts->the_post();
           ?>
              <article class="block grid--item-4">
              <h2 class="block__title"><?php the_title(); ?></h2>
              <div class="block__body">
              <p><?php the_excerpt(); ?></p>
              <footer>
                <div class="">
                  <small><?php the_tags(); ?></small>
                </div>
                <div class="">
                  <strong><?php the_author(); ?></strong>
                </div>
                <a href="<?php the_permalink(); ?>">Leer más</a>
              </footer>
              </article>
            <?php
              endwhile;
              else :
            ?>
              <h4>No encontramos entradas</h4>
            <?php
          endif;
            ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>
