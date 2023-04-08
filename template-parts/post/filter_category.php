<?php 
    $posts = get_posts($category = "portifolio_servicos");
?>

<?php foreach($posts as $post): ?>

<?php if(get_the_category()[0]->name == "portifolio_servicos"): ?>

    
    <div class="col-md-6 col-lg-4 mb-5 justify-content-center div-card">
        
        <div class="card card-servicos" style="width: 18rem;">

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
                <div class="card-servicos-vertical-center">

                    <h5 class="card-title text-center card-servicos-title">
                        <?php echo $post->post_title ?>
                    </h5>
                </div>

                <div class="btn-servicos">
                    <a href="#" class="btn btn-primary">
                        Leia mais
                    </a>
                </div>
                
                <div class="btn-servicos">
                    <a 
                        href="https://wa.me/5522999669509/?text=<?= get_post_custom_values("msg", $id)[0] ?>" 
                        class="btn btn-secondary"
                    >
                        Entre em contato!
                    </a>
                </div>
            </div>
        </div>
    </div>


<?php endif; endforeach;?>
