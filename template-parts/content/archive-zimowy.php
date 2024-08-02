<?php

/**
 * The main archive template file for inner content.
 *
 * @package kadence
 */

/**
 * Hook for Hero Section
 */
do_action('kadence_hero_header');
?>
<div id="primary" class="content-area">
    <div class="content-container site-container">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    require_once("zimowy.php");
                    $wyjazd_zimowy = new pojedynczy_zimowy(get_field('tytul'), get_field('termin'), get_field('opis'), get_field('opis_extra'), get_field('zdj')) ?>

                    <h1><?php echo $wyjazd_zimowy->title ?></h1>
                    <img className='zdjecieWyrozniajace' alt={product.acf.zdj.id} src=<?php echo $wyjazd_zimowy->photo ?> width="500" height="300" />
                    <p><?php echo $wyjazd_zimowy->date ?></p>
                    <p><?php echo $wyjazd_zimowy->description ?></p>
                    <td> <a href="<?php the_permalink(); ?>"> Zobacz</a></td>
                    <!-- <p><?php echo $wyjazd_zimowy->description_extra ?></p> -->
                <?php endwhile; ?>
            <?php endif; ?>
            <?php {
                get_template_part('template-parts/content/error');
            }
            /**
             * Hook for anything after main content
             */
            do_action('kadence_after_main_content');
            ?>
        </main><!-- #main -->
        <?php
        get_sidebar();
        ?>
    </div>
</div><!-- #primary -->

<?php get_footer(); ?>