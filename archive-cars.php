<!-- Copied from page.php with a few changes. -->
<?php get_header();?>

<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <h1>
        <?php single_cat_title();?>
      </h1>
      <?php if(have_posts()) : while(have_posts()) : the_post();?>
      <div class="card mt-3 themeCard">
        <div class="card-header">
          <h3>
            <?php the_title();?>
          </h3>
        </div>
        <div class="card-body">
          <img src="<?php the_post_thumbnail_url('xsmall');?>" class="img-fluid">
          <?php the_excerpt();?>
          <a href="<?php the_permalink();?>" 
            class="btn btn-secondary mb-3"
          >
            Läs mer
          </a>
        </div>
      </div>
        
      <?php endwhile; endif;?>
    </div>
  </div>
</div>

<?php get_footer();?>