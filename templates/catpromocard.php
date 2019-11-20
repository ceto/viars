<?php global $vcat; ?>
<div class="catpromocard">
    <figure>
        <img src="<?= get_stylesheet_directory_uri().'/dist/images/garage.jpg'; ?>" alt="">
        <div class="draw"></div>
    </figure>
    <h3><?= $vcat->name; ?></h3>
    <a href="<?= get_term_link( $vcat )?>">
        Click to see category
    </a>
</div>
