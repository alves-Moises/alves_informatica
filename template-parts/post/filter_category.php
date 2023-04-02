
<?php
  $category_detail=get_the_category('0');//$post->ID
  foreach($category_detail as $cd): if($cd == "portifolio_servicos"): 
?>
    <!-- echo $cd->cat_name;
    echo get_the_title();
    echo the_content();
    echo "<h1> teste </h1>"; -->

<div>
  <?php echo $cd->cat_name ?>
</div>

<?php endif; endforeach; ?>
