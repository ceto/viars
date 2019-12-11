<div class="ps--light">
<div class="grid-container has-overflowelement">
    <?php
    $vcats = get_terms( array(
        'taxonomy' => 'vehicle-categories',
        'hide_empty' => false,
        'meta_query' => array(
            'position_clause' => array(
                'key' => 'order',
                'value' => 0,
                'compare' => '>='
            ),
            'filter_clause' => array(
                array(
                    'key'       => 'showinfilter',
                    'value'     => '1',
                    'compare'   => '='
                ),
            ),
            'relation' => 'OR',
        ),
        'orderby' => 'position_clause',
        'order' =>  'DESC',
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
</div>
