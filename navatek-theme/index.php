<?php
get_header();
?>
<main class="sdi-main-content" style="padding: 4rem 1rem; max-width: 1200px; margin: 0 auto;">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <article style="margin-bottom: 3rem;">
                <h2 style="font-size: 1.8rem; margin-bottom: 1rem;"><a href="<?php the_permalink(); ?>" style="color: var(--sdi-navy-primary); text-decoration: none;"><?php the_title(); ?></a></h2>
                <div style="color: #64748B; font-size: 0.95rem; line-height: 1.6;"><?php the_excerpt(); ?></div>
            </article>
            <?php
        endwhile;
    else :
        echo '<p>Không tìm thấy nội dung phù hợp.</p>';
    endif;
    ?>
</main>
<?php
get_footer();
