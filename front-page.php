<!-- Copied from page.php with a few changes. -->
<?php get_header();?>

<?php 
  $title = get_field('page_title');
  $description = get_field('page_description');
  $link = get_field('page_link');
  $imageArray = get_field('page_image');
  $image = $imageArray['sizes']['large']; //var kommer den ifrån?
?>

<div class="container mt-5">
  <div class="row justify-content-center">
      
  </div>
  <div class="row justify-content-start">
    <div class="col-3 text-end">
      <img class="img" style="height: 200px; width: 200px;" src="<?php echo $image;?>">
    </div>
    <div class="col-6">
      <!-- Dynamic display of title set in WP -->
      <h1><?php echo $title?></h1>

      <?php echo $description?>

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