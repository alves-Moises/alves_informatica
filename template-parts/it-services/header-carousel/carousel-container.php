<?php 
    $services = array(
        array(
            "title" => "Suporte técnico",
            "image" => "notebook",
            "id_reference" => "#",
            "active" => true
        ),
        array(
            "title" => "Suporte",
            "image" => "notebook",
            "id_reference" => "#",
            "active" => false

        ),
        array(
            "title" => "técnico",
            "image" => "notebook",
            "id_reference" => "#",
            "active" => false
        ),

    ); 
?>

<div 
    id="carousel-container" 
    class="carousel slide" 
    data-ride="carousel"
>
    <ol class="carousel-indicators">
        <?php 
            foreach($services as $index => $service){
                $title = $service["title"];
                $image = $service["image"];
                $active = $service["active"];
        ?>

        <li 
            class="
                <?= $active ? "active" : "" ?>
            "
            data-target="#carousel-container"
            data-slide-to="<?= $index ?>"
        >

        </li>
        <?php
            }
        ?>
    </ol>

    <div class="carousel-inner">
        <?php
            foreach($services as $index => $service){
                get_template_part(
                    "template-parts/it-services/header-carousel/carousel-item",
                    null,
                    $service
                );
            }
        ?>
    </div>
</div>