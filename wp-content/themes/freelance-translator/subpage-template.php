<?php
/*
* Template Name: Subpage template
*/
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';

$id = get_the_ID();
$fields = get_fields($id);
print_r($fields);
?>
<?php get_header(); ?>

<script>
    let ajax_url = "<?= admin_url('admin-ajax.php'); ?>";
</script>

<section class="main-section main-section--sub-page">
    <div class="container container--big container--nopaddings">
        <div class="main-section__wrapper main-section__wrapper--sub-page">
            <div class="main-section__left main-section__left--sub-page">
                <h2 class="main-section__title">
                    Wanna learn more <br />
                    About Us huh?
                </h2>
                <p class="main-section__description main-section__description--sub-page">
                    We have an average rating of 9.3 out of 10 based on over 600 ratings.
                    We will gladly help you reach more people by making your message
                    legible to them.
                </p>
                <div class="main-section__contact">
                    <button class="btn btn--black">GET QUOATION</button>
                    <span>Or</span>
                    <p>
                        Call us:
                        <a class="main-section__call" href="tel:+01234567890">+0 (123) 456 78 90</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="app">
    <section class="sub-info">
        <div class="sub-info__wrapper">
            <div class="sub-info__left full-person">
                <p class="full-person__photo">
                    <img src="<?= $assets_url ?>/img/meet-team-1.jpg" alt="" />
                </p>
                <p class="full-person__text">
                    I specialised in translating English-language advertising and marketing
                    texts.
                </p>
                <p class="full-person__name">Melissa Becker</p>
                <p class="full-person__position">Co-founder</p>
            </div>
            <div class="sub-info__right">
                <div class="breadcrumbs">
                    <span>Home
                        <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4.5 4.5L1 8" stroke="black" stroke-linecap="round" />
                        </svg>
                    </span>
                    <span>Section 2
                        <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4.5 4.5L1 8" stroke="black" stroke-linecap="round" />
                        </svg></span>
                    <span>Section 3</span>
                </div>
                <h2 class="sub-info__title sub-info__title--main">
                    A convincing marketing translation
                </h2>
                <p class="sub-info__text">
                    A translation of a marketing or commercial text by one of our
                    translators does exactly what it's supposed to do: win over your
                    readers. We don't just translate a text word for word. Marketing
                    translations require a fair amount of liberties to be taken in order to
                    meet the needs and desires of your target audience abroad. While
                    translating marketing texts, our translators may consult you about any
                    cultural differences that need to be taken into account. As far as
                    content goes, your translation will of course be identical to the source
                    text, unless the briefing states otherwise. We are also experienced in
                    providing SEO translations.
                </p>
                <h3 class="sub-info__title">A convincing marketing translation</h3>
                <p class="sub-info__text">
                    A translation of a marketing or commercial text by one of our
                    translators does exactly what it's supposed to do: win over your
                    readers.
                    <span class="sub-info__text--red">We don't just translate</span> a text
                    word for word. Marketing translations require a fair amount of liberties
                    to be taken in order to meet the needs and desires of your target
                    audience abroad. While translating marketing texts, our translators may
                    consult you about any cultural differences that need to be taken into
                    account. As far as content goes, your translation will of course be
                    identical to the source text, unless the briefing states otherwise. We
                    are also experienced in providing SEO translations.
                </p>
                <h3 class="sub-info__title">A convincing marketing translation</h3>
                <p class="sub-info__text">
                    Brochures, websites, catalogues, surveys, film material, presentations,
                    marketing plans, newsletters, research papers, training materials, press
                    releases and advertisements.
                </p>
            </div>
        </div>
    </section>

    <getquote></getquote>
</div>

<section class="our-clients">
    <div class="container container--big">
        <h2 class="our-clients__title">Our Clients</h2>
        <div class="swiper our-clients__slider running-line">
            <div class="swiper-wrapper">
                <div class="swiper-slide our-clients__slide">
                    <img src="<?= $assets_url ?>/img/clients-1.png" alt="" />
                    <h3>German UNESCO Commission/kulturweit</h3>
                </div>
                <div class="swiper-slide our-clients__slide">
                    <img src="<?= $assets_url ?>/img/clients-2.png" alt="" />
                    <h3>Berlin Heart AG</h3>
                </div>
                <div class="swiper-slide our-clients__slide">
                    <img src="<?= $assets_url ?>/img/clients-3.png" alt="" />
                    <h3>Prisma Diagnostik GmbH</h3>
                </div>
                <div class="swiper-slide our-clients__slide">
                    <img src="<?= $assets_url ?>/img/clients-4.png" alt="" />
                    <h3>BMZ</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>