<?php global $vcat; ?>
<div class="catpromocard">
    <figure class="catpromocard__fig">
        <?php if ($banner = get_field('homebanner', $vcat)) : ?>
            <?php //var_dump($banner); ?>
            <?php echo wp_get_attachment_image($banner['ID'], 'full'); ?>
        <?php else: ?>
            <img src="<?php echo get_stylesheet_directory_uri().'/dist/images/garage.jpg'; ?>" alt="">
        <?php endif;?>
        <div class="drawing <?php the_field('icon', $vcat); ?>" data-grunticon-embed></div>
    </figure>
    <h3><?= $vcat->name; ?></h3>
    <a href="<?= get_term_link( $vcat )?>">
        Click to see category
    </a>
</div>
