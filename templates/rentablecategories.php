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
            <p>VIARENT FULL SERVICE iznajmljivanje vozila ima rešenje za sve transportne probleme i nudi jedinstvenu uslugu na tržištu za celokupni komercijalni program.</p>
        </div>
    </li>

    <?php foreach ($vcats as $vcat) : ?>
    <?php get_template_part('templates/catpromocard'); ?>
    <?php endforeach; ?>

    <li>
        <div class="catpromotecard">
            <h3>NAŠE PONUDA JE USMERENA NA VAŠE SPECIFIČNE POTREBE!</h3>
        </div>
    </li>
</ul>
