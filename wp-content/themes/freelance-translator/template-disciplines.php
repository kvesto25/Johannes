<?php
/*
* Template Name: Disciplines all template
*/
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
?>
<?php get_header(); ?>

    <script>
        let ajax_url = "<?= admin_url('admin-ajax.php'); ?>";
    </script>

    <section class="main-section main-section--big main-section--disciplines">
        <h2 class="main-section__title main-section__title--big"><?=get_the_title();?></h2>
    </section>

    <div class="description">
        <div class="container">
            <div class="description__wrapper">
                <?= get_the_content() ?>
            </div>
        </div>
    </div>

    <div id="app">
        <div class="information-cards-section">
            <div class="container information-cards-section__wrapper big">
                <?php
                $pages = get_page_children(get_the_ID());
                print_r($pages);
                ?>
                <div class="information-card big">
                    <div class="information-card__header">
                        <div class="information-card__info">
                            <h3 class="information-card__title big">Contract Translation</h3>
                            <a href="http://johannes.taras-lavrin.online/certified/contract-translation/" class="information-card__link">To page</a>
                        </div>
                    </div>
                    <p class="information-card__text">
                        Foreign-language employment contract that you need to sign before starting work? Have a property
                        purchase contract or other documents that have been drawn up by a notary in a written form?
                        Moving into a new apartment and require your tenancy agreement translated so you can better
                        understand your rights and obligations? This is our specialty!
                    </p>
                </div>

            </div>
        </div>
    </div>

    <section class="our-clients">
        <div class="container container--big">
            <h2 class="our-clients__title">Our Clients</h2>
            <div class="swiper our-clients__slider running-line">
                <div class="swiper-wrapper">
                    <div class="swiper-slide our-clients__slide">
                        <img src="<?= $assets_url ?>/img/clients-1.png" alt=""/>
                        <h3>German UNESCO Commission/kulturweit</h3>
                    </div>
                    <div class="swiper-slide our-clients__slide">
                        <img src="<?= $assets_url ?>/img/clients-2.png" alt=""/>
                        <h3>Berlin Heart AG</h3>
                    </div>
                    <div class="swiper-slide our-clients__slide">
                        <img src="<?= $assets_url ?>/img/clients-3.png" alt=""/>
                        <h3>Prisma Diagnostik GmbH</h3>
                    </div>
                    <div class="swiper-slide our-clients__slide">
                        <img src="<?= $assets_url ?>/img/clients-4.png" alt=""/>
                        <h3>BMZ</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>