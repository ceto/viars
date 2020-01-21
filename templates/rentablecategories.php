<?php global $vcat; ?>
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
                    'key'       => 'featathome',
                    'value'     => '1',
                    'compare'   => '='
                ),
            ),
            'relation' => 'AND',
        ),
        'orderby' => 'position_clause',
        'order' =>  'ASC'
    ));
?>

<ul class="catpromolist">
    <li>
        <div class="catpromotecard">
            <h3>BOLJE JE IZNAJMITI!</h3>
            <p>Svet se menja tako brzo da je svima potrebno više fleksibilnosti. Iznajmljivanje posredstvom Viarent
                pruža rešenje za to.</p>
        </div>
    </li>

    <?php foreach ($vcats as $vcat) : ?>
    <?php get_template_part('templates/catpromocard'); ?>
    <?php endforeach; ?>

    <li>
        <div class="catpromotecard">
            <h3>Naše usluge su usmerene na Vaše potrebe!</h3>
        </div>
    </li>
</ul>
