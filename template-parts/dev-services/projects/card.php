<?php
    $args = wp_parse_args(
        $args,
        array(
            "title" => "",
            "desc" => "",
            "github" => null,
            "techs" => array(),
            "url" => null
        )
    );

    $title = $args["title"];
    $desc = $args["desc"];
    $techs = $args["techs"];
    $github = $args["github"] ?? null;
    $url = $args["url"] ?? null;
?>

<div class="card project-card col-lg-3">
    <div class="card-body">
        <div class="card-icon-div text-left">
            <i class="fa-solid fa-laptop-code card-icon"></i>
        </div>

        <h3 class="card-title text-left mb-3">
            <?php echo $title; ?>
        </h3>
        <p
            class="card-text text-left desc mb-2"
        >
            <?php echo $desc ?>
        </p>

        <div class="tech-list">

            <?php
                foreach($techs as $tech){
                    echo "
                        <span class='tech'>${tech}</span>
                    ";
                }
            ?>
        </div>

        
    </div>

    <div class="links">

            <div class="l-side side">

                <?php 
                    if ($github)
                        echo "
                            <div class='project-link gh-link'>

                                <a href={$github} target='_blank'> 
                                    <span> Ver no github</span>
                                    <i class=\"fa-brands fa-github project-gh-logo\"></i>
                                </a>
                            </div>
                        ";
                ?>
            </div>

            <div class="r-side side">

                <?php 
                    if ($url)
                        echo "
                            <div class='project-link url-link'>
                                
                                <a href={$url} target='_blank'> 
                                    <span>Visite</span>
                                    <i class='fa-solid fa-up-right-from-square project-url-logo'></i>
                                </a>
                            </div>
                        ";
                ?>
            </div>
        </div>
</div>
