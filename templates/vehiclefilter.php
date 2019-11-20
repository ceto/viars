<div class="grid-container has-overflowelement">
    <?php
    $vcats = get_terms( array(
        'taxonomy' => 'vehicle-categories',
        'hide_empty' => false,
    ));
    ?>
    <ul class="vcatfilter">
        <?php foreach( $vcats as $vcat ) : ?>
        <li>
            <a class="vcatfilter__item" href="<?= get_term_link( $vcat )?> ">
                <div class="drawing <?php the_field('icon'); ?>" data-grunticon-embed></div>
                <span><?= $vcat->name; ?></span>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
