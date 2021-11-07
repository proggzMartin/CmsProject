<!-- standard page -->

<?php get_header();?>

<!-- standard page -->

<?php get_header();?>

<?php 
  $title = get_field('page_title');
  $description = get_field('page_description');
  $link = get_field('page_link');
  $imageArray = get_field('page_image');
  $image = $imageArray['sizes']['small'];
?>

<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-auto">
      <div class="card mt-3 themeCard">
        <div class="card-header">´
          <img src="<?php the_post_thumbnail_url('xsmall');?>" class="img-fluid">
          <h3>
            <?php the_title();?>
          </h3>
        </div>
        <div class="card-body">
          <?php if(have_posts()) : while(have_posts()) : the_post();?>
            <?php the_content();?>
          <?php endwhile; endif;?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>