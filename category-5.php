<?php get_header(); ?>
<body>
  <h1 class="page-heading max-width">Categoría Especial: Ilustraciones ID5</h1>
  <div class="grid max-width">
    <div class="block grid--item-9">
      <div class="block__body grid">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
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
