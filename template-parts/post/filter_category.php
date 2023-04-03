<?php 
    $posts = get_posts($category = "portifolio_servicos");
?>

<?php foreach($posts as $post): ?>

<?php if(get_the_category()[0]->name == "portifolio_servicos"): ?>

    <div class="col-md-6 col-lg-4 mb-5">
        <div class="card" style="width: 18rem;">

            <?php 
                echo get_the_post_thumbnail(
                    $post->id,
                    'large',
                    [
                        'class' => 'img-fluid single-image',
                        'alt' => 'manutencao de computadores'
                    ]
                ); 
            ?>

            <div class="card-body">
                <h5 class="card-title text-center">
                    <?php echo $post->post_title ?>
                </h5>
               
                <a href="#" class="btn btn-primary">Leia mais</a>
                <a hered="#" class="btn btn-secondary">Entre em contato!</a>
            </div>
        </div>
    </div>


<?php endif; endforeach;?>
