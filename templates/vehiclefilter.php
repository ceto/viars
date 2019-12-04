<div class="grid-container has-overflowelement">
    <?php
    $vcats = get_terms( array(
        'taxonomy' => 'vehicle-categories',
        'hide_empty' => false,
        'meta_query' => array(
            array(
                'key'       => 'showinfilter',
                'value'     => '1',
                'compare'   => '='
            )
        )
    ));
    ?>
    <ul class="vcatfilter">
        <?php foreach( $vcats as $vcat ) : ?>
        <li>
            <a class="vcatfilter__item" href="<?= get_term_link( $vcat )?> ">
                <div class="drawing <?php the_field('icon', $vcat); ?>" data-grunticon-embed></div>
                <span><?= $vcat->name; ?></span>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
