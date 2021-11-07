<!-- For Custom-Post_Types, oils -->
<?php get_header();?>

<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <h1>
        <?php single_cat_title();?>
      </h1>
      <?php if(have_posts()) : while(have_posts()) : the_post();?>
      <div class="card mt-3 oilCard">
        <div class="card-header">
          <h3>
            <?php the_title();?>
          </h3>
        </div>
        <div class="card-body">
          <?php if(has_post_thumbnail()):?>
            <!-- 'small' is the size set in functions.php -->
            <img style="width:200px; height: 200px;" src="<?php the_post_thumbnail_url('small');?>" class="img-fluid">
          <?php endif;?>

          <?php the_content();?>
        </div>
      </div>
      <?php endwhile; endif;?>
    </div>
  </div>
</div>

<?php get_footer();?>