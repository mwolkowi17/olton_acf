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
<!-- <div class="test_x">Test</div> -->
<div id="primary" class="content-area">
    <div class="content-container site-container">
        <main id="main" class="site-main" role="main">
            <div class="main_cont">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php
                        require_once("zimowy.php");
                        $wyjazd_zimowy = new pojedynczy_zimowy(get_field('tytul'), get_field('termin'), get_field('opis'), get_field('opis_extra'), get_field('zdj')) ?>
                        <!-- WPIS -->
                        <div>
                            <div class=" item_single">
                                <div class="row">
                                    <h1><?php echo $wyjazd_zimowy->title ?></h1>
                                    <p><?php echo $wyjazd_zimowy->date ?></p>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <img alt='zdjecie wyrozniajace' src=<?php echo $wyjazd_zimowy->photo ?> width="300" height="150" />

                                    </div>
                                    <div class="col">

                                        <p><?php echo $wyjazd_zimowy->description ?></p>
                                        <!-- <td> <a href="<?php the_permalink(); ?>"> Zobacz</a></td> -->
                                        <a type="button" class="btn btn-outline-secondary" href="<?php the_permalink(); ?>">Zobacz więcej</a>
                                        <!-- <p><?php echo $wyjazd_zimowy->description_extra ?></p> -->
                                    </div>
                                </div>
                            </div>
                            <!-- KONIEC WPISU -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php
                    // {
                    //     get_template_part('template-parts/content/error');
                    // }
                    /**
                     * Hook for anything after main content
                     */
                    do_action('kadence_after_main_content');
                    ?>
                        </div>
        </main><!-- #main -->
        <?php
        get_sidebar();
        ?>
    </div>
</div><!-- #primary -->

<?php get_footer(); ?>