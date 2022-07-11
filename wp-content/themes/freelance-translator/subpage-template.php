<?php
/*
* Template Name: Subpage template
*/
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';

$id = get_the_ID();
$fields = get_fields($id);
//print_r($fields);
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
                    <?=$fields['header_block']['title']?>
                </h2>
                <p class="main-section__description main-section__description--sub-page">
                    <?=$fields['header_block']['small_description']?>
                </p>
                <div class="main-section__contact">
                    <a href="<?=$fields['header_block']['link']['link_url']?>" class="btn btn--black"><?=$fields['header_block']['link']['link_text']?></a>
                    <span>Or</span>
                    <p>
                        Call us:
                        <a class="main-section__call" href="tel:<?=$fields['header_block']['phone']?>"><?=$fields['header_block']['phone']?></a>
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
                    <img src="<?=$fields['left_block']['image']['url']?>" alt="" />
                </p>
                <p class="full-person__text">
                    <?=$fields['left_block']['small_description']?>
                </p>
                <p class="full-person__name"><?=get_the_title();?></p>
                <p class="full-person__position"><?=$fields['left_block']['sub_title']?></p>
            </div>
            <div class="sub-info__right">
                <div class="breadcrumbs">
                    <a href="<?=get_home_url();?>">Home
                        <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4.5 4.5L1 8" stroke="black" stroke-linecap="round" />
                        </svg>
                    </a>
                    <span><?=get_the_title()?></span>
                </div>
                <?=get_the_content();?>
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