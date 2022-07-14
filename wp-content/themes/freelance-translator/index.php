<?php get_header(); ?>
<?php
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
$id = get_the_ID();
$fields = get_fields($id);
$slider = $fields['slider'];
$statistic = $fields['statistic'];
$block_1 = $fields['block_1'];
$block_2 = $fields['block_2'];
$block_3 = $fields['block_3'];
$block_4 = $fields['block_4'];

?>
<section class="main-section">
    <div class="container container--big container--nopaddings">
        <div class="main-section__wrapper">
            <div class="main-section__left">
                <h2 class="main-section__title"><?= $slider['title'] ?></h2>
                <p class="main-section__description"><?= $slider['description'] ?></p>
                <div class="main-section__contact">
                    <button class="btn btn--white">GET QUOATION</button>
                    <span>Or</span>
                    <p>
                        Call us:
                        <a class="main-section__call" href="tel:<?= $slider['phone'] ?>"><?= $slider['phone'] ?></a>
                    </p>
                </div>
            </div>
            <!-- <div class="main-section__right"> -->
            <div class="swiper main-section__slider">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($slider['images'] as $img) {
                        echo '<div class="swiper-slide"><img src="' . $img['image']['url'] . '" alt="' . $img['image']['id'] . '" /></div>';
                    }
                    ?>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</section>
<section class="statistic">
    <div class="container">
        <div class="statistic__wrapper">
            <ul class="statistic__list">
                <?php
                foreach ($statistic as $stat) {
                    echo '<li class="statistic__elem"><p class="statistic__stat">' . $stat['count'] . '</p><p class="statistic__stat-title">' . $stat['title'] . '</p></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</section>

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

<section class="translation-agency">
    <div class="translation-agency__wrapper">
        <p class="translation-agency__img">
            <img src="<?= $block_1['image']['url'] ?>" alt="<?= $block_1['image']['alt'] ?>" />
        </p>
        <div class="translation-agency__content">
            <h2 class="translation-agency__title"><?= $block_1['title'] ?>"</h2>
            <p class="translation-agency__descr"><?= $block_1['description'] ?></p>
            <button class="btn btn--tomato">Learn More About Us</button>
        </div>
    </div>
</section>
<section class="benefits">
    <div class="container">
        <h2 class="benefits__title">
            <?= $block_2['title'] ?>
        </h2>
        <ul class="benefits__list">
            <?php
            foreach ($block_2['elements'] as $elem) {
                echo '<li class="benefits__item">' . $elem['element'] . '</li>';
            }
            ?>
        </ul>
    </div>
</section>
<section class="how-work">
    <div class="how-work__left">
        <div class="how-work__img">
            <img src="<?= $block_3['image']['url'] ?>" alt="<?= $block_3['image']['alt'] ?>" />
        </div>
        <div class="swiper how-work__slider">
            <div class="how-work__btns">
                <?php
                $count = count($block_3['step']);
                $active = 'active';
                for ($i = 0; $i < $count; $i++) {
                    echo '<button class="btn btn--outline ' . $active . '">Step ' . $i + 1 . '</button>';
                }
                ?>
            </div>
            <div class="swiper-wrapper how-work__slider-wrapper">
                <?php
                foreach ($block_3['step'] as $step) {
                ?>
                    <div class="swiper-slide how-work__slide">
                        <h3 class="how-work__title"><?= $step['title'] ?></h3>
                        <p class="how-work__descr"><?= $step['description'] ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="how-work__right">
        <ul class="how-work__list">
            <?php
            foreach ($block_3['elements'] as $element) {
                echo '<li class="how-work__item">' . $element['element'] . '</li>';
            }
            ?>
        </ul>
        <button class="btn btn--extra btn--blue how-work__btn">
            <?= $block_3['button']['name'] ?>
            <svg width="124" height="16" viewBox="0 0 124 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M123.707 8.70711C124.098 8.31658 124.098 7.68342 123.707 7.29289L117.343 0.928932C116.953 0.538408 116.319 0.538408 115.929 0.928932C115.538 1.31946 115.538 1.95262 115.929 2.34315L121.586 8L115.929 13.6569C115.538 14.0474 115.538 14.6805 115.929 15.0711C116.319 15.4616 116.953 15.4616 117.343 15.0711L123.707 8.70711ZM0 9H123V7H0V9Z" fill="#F24C4C" />
            </svg>
        </button>
    </div>
</section>
<section class="speciality">
    <div class="speciality__left">
        <h3 class="speciality__title"><?= $block_4['title'] ?></h3>
        <ul class="speciality__list">
            <?php
            foreach ($block_4['elements'] as $element) {
                echo '<li class="speciality__item">' . $element['text'] . '</li>';
            }
            ?>
        </ul>
    </div>
    <div class="speciality__right">
        <img src="<?= $block_4['image']['url'] ?>" alt="<?= $block_4['image']['alt'] ?>" class="speciality__img" />
    </div>
</section>
<section class="reviews">
    <div class="swiper reviews__slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="reviews__slide">
                    <p class="reviews__img">
                        <img src="<?= $assets_url ?>/img/client.png" alt="Feedback Writer" />
                    </p>
                    <p class="reviews__awesom">Awesome Client</p>
                    <p class="reviews__text">
                        This company is the best i’ve ever cooperate with! This
                        company is the best i’ve ever cooperate with! This company is
                        the best i’ve ever cooperate with! This company is the best
                        i’ve ever cooperate with!
                    </p>
                    <p class="reviews__name">Richard</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="reviews__slide">
                    <p class="reviews__img">
                        <img src="<?= $assets_url ?>/img/client.png" alt="Feedback Writer" />
                    </p>
                    <p class="reviews__awesom">Awesome Client</p>
                    <p class="reviews__text">
                        This company is the best i’ve ever cooperate with! This
                        company is the best i’ve ever cooperate with! This company is
                        the best i’ve ever cooperate with! This company is the best
                        i’ve ever cooperate with!
                    </p>
                    <p class="reviews__name">Richard</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="reviews__slide">
                    <p class="reviews__img">
                        <img src="<?= $assets_url ?>/img/client.png" alt="Feedback Writer" />
                    </p>
                    <p class="reviews__awesom">Awesome Client</p>
                    <p class="reviews__text">
                        This company is the best i’ve ever cooperate with! This
                        company is the best i’ve ever cooperate with! This company is
                        the best i’ve ever cooperate with! This company is the best
                        i’ve ever cooperate with!
                    </p>
                    <p class="reviews__name">Richard</p>
                </div>
            </div>
        </div>
        <div class="reviews-pagination"></div>
    </div>
</section>

<?php get_footer(); ?>