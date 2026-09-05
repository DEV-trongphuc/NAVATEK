<?php
get_header();
?>
<main class="sdi-main-content" style="padding: 4rem 1rem; max-width: 1200px; margin: 0 auto;">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h1 style="font-size: 2.2rem; color: var(--sdi-navy-primary); margin-bottom: 2rem;">', '</h1>');
            the_content();
        endwhile;
    endif;
    ?>
</main>
<?php
get_footer();
