<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Meus Serviços</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            <div>
                <?php 
                   
                    
                    get_template_part('template-parts/post/filter_category'); 
                
                    $category = get_category(get_the_title());
                    echo $category;
                    if(get_the_category(the_post()) == "portifolio_servicos"): the_content();
                ?>

                <?php endif; ?>
            </div>
            
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>