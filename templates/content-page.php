<section id="contentstart" class="ps" data-magelllan-target="contentstart">
    <div class="grid-container">
        <div class="bodycopy">
            <?php the_content(); ?>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

        </div>
    </div>
</section>