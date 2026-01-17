<?php 
    $args = wp_parse_args(
        $args,
        array(
            "title" => "",
            "image" => "",
            "id_reference" => "",
            "active" => false
        )
    );

    $title = $args["title"];
    $image = $args["image"];
    $id_ref = $args["id_reference"];
    $active = $args["active"];
?>

<div
    class="
        carousel-item 
        <?= $active ? "active" : "" ?>
    "
    data-interval="5000"
>

    <img 
        src="<?= THEMEROOT ?>/assets/img/it-services/<?php echo $image;  ?>.jpg" 
        class="d-block w-100 carousel-image"
        alt="" 
        srcset=""
    />
        
    
    <h4 class="carousel-title">
        <?=  $title ?>
    </h4>
</div>