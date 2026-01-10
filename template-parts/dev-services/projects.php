
<section 
    id="projects"
>
    <div class="container">
        <div class="row text-center">
            <h1>Projetos</h1>

            <!-- Icon Divider-->
            <div class="divider-custom mt-2 mb-5">
                <div class="divider-custom-line i-symbols-line"></div>
                <div class="divider-custom-icon">
                    <i 
                        class="fa-solid fa-microchip" 
                        style="color: #ffffff;"
                    >
                    </i>
                </div>
                <div class="divider-custom-line i-symbols-line"></div>
            </div>

            <?php 
                get_template_part(
                    "template-parts/dev-services/projects/project-container",
                ); 
            ?>
            
        </div>
    </div>
</section>