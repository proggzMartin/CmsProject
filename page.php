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
    <div class="col-auto text-end">
      <?php if(!is_null($image)):?>
        <img class="img" style="height: 200px; width: 200px;" src="<?php echo $image;?>">
      <?php endif;?>
    </div>
    <div class="col-auto">
      <!-- Dynamic display of title set in WP -->
      <h1><?php the_title();?></h1>

      <?php if(have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
      <?php endwhile; endif;?>

      <?php if($link['url']) : ?>
        <div>
          <a class="btn btn-primary" href="<?php echo $link['url']?>"> 
            <?php echo $link['title'];?>
          </a>
        </div>
      <?php endif;?>
    </div>
  </div>
</div>

<?php get_footer();?>