<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php
        require_once("zimowy.php");
        $wyjazd_zimowy = new pojedynczy_zimowy(get_field('tytul'), get_field('termin'), get_field('opis'), get_field('opis_extra'), get_field('zdj')) ?>

        <p><?php echo $wyjazd_zimowy->title ?></p>
        <img className='zdjecieWyrozniajace' alt={product.acf.zdj.id} src=<?php echo $wyjazd_zimowy->photo ?> width="500" height="300" />
        <p><?php echo $wyjazd_zimowy->date ?></p>
        <p><?php echo $wyjazd_zimowy->description ?></p>
        <p><?php echo $wyjazd_zimowy->description_extra ?></p>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>