<?php
/*
* Template Name: Contact-page template
*/
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
$id = get_the_ID();
$fields = get_fields($id);
$user_id = $fields['user']['ID'];
$user_fields = get_fields('user_' . $user_id);
print_r($user_fields);
?>
<?php get_header(); ?>
<script>
    let ajax_url = "<?= admin_url('admin-ajax.php'); ?>";
</script>
<section class="main-section main-section--contact" style="background: url(<?=$fields['header_block']['image']['url']?>)">
    <div class="container container--big container--nopaddings">
        <div class="main-section__wrapper main-section__wrapper--contact">
            <div class="main-section__left main-section__left--contact">
                <h2 class="main-section__title">
                    <?=$fields['header_block']['title']?>
                </h2>
                <p class="main-section__description main-section__description--sub-page">
                    <?=$fields['header_block']['small_description']?>
                </p>
            </div>
        </div>
    </div>
</section>

<div id="app">
    <section class="contact-section">
        <div class="contact-section__wrapper">
            <div class="full-person">
                <p class="full-person__photo">
                    <img src="<?=$user_fields['image']['url']?>" alt="" />
                </p>
                <p class="full-person__text">
                    <?=$user_fields['sub_title']?>
                </p>
                <p class="full-person__name"><?=$fields['user']['display_name']?></p>
                <p class="full-person__position"><?=$user_fields['position']?></p>
            </div>
            <div class="contact-section__content">
                <div class="breadcrumbs">
                    <span>Home
                        <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4.5 4.5L1 8" stroke="black" stroke-linecap="round" />
                        </svg> </span><span>Contact</span>
                </div>
                <h2 class="contact-section__title sub-team__title sub-team__title--main">
                    Our locations and contact details
                </h2>
                <p class="contact-section__subtitle">
                    Headquarters Translation Agency Perfect Address
                </p>
                <p class="contact-section__address">
                    Piet Heinstraat 17511, JE Enschede, The Netherlands
                </p>
                <div class="contact-section__grup">
                    <p class="contact-section__subtitle">Phone:</p>
                    <a href="tel:+01234567890" class="contact-section__phone">+ (000) 123 -456 -78 - 90</a>
                </div>
                <div class="contact-section__grup">
                    <p class="contact-section__subtitle">Email:</p>
                    <a href="mailto:info@example.com" class="contact-section__email">Info@example.com</a>
                </div>
                <a class="btn btn--tomato contact-section__btn">Button</a>
            </div>
        </div>
    </section>
    <section class="contact-city">
        <div class="container">
            <ul class="contact-city__list">
                <?php
                foreach ($fields['city_contact'] as $city){
                    print_r($city);
                ?>
                <li class="contact-city__elem">
                    <p class="contact-city__photo">
                        <img src="<?=$city['image']['url']?>" alt="" />
                    </p>
                    <div class="contact-city__content">
                        <p class="contact-city__name"><?=$city['city']?></p>
                        <div class="contact-city__grup">
                            <p class="contact-city__subtitle">Address</p>
                            <p class="contact-city__adress">
                                <?=$city['location']?>
                            </p>
                        </div>
                        <div class="contact-city__grup">
                            <p class="contact-city__subtitle">Phone:</p>
                            <a href="tel:<?=$city['phone']?>" class="contact-city__phone"><?=$city['phone']?></a>
                        </div>
                        <div class="contact-city__grup">
                            <p class="contact-city__subtitle">Email:</p>
                            <a href="mailto:<?=$city['email']?>" class="contact-city__email"><?=$city['email']?></a>
                        </div>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </section>
    <section class="contact-us">
        <h2 class="contact-us__title">Contact us</h2>
        <form action="" class="contact-us__form" @submit.prevent>
            <label class="contact-us__label">Name
                <input type="text" name="" id="" class="contact-us__input" v-model="contact.data.name" :class="getIsValid('name')" /></label><label class="contact-us__label">Phone Number
                <input type="tel" name="" id="" class="contact-us__input" v-model="contact.data.phone" :class="getIsValid('phone')" /></label><label class="contact-us__label">Email <input type="email" name="" id="" class="contact-us__input" v-model="contact.data.email" :class="getIsValid('email')" /></label>
            <label class="contact-us__label">Message:
                <textarea name="" id="" class="contact-us__textarea" v-model="contact.data.message" :class="getIsValid('message')"></textarea>
            </label>
            <button type="submit" class="btn btn--tomato contact-us__btn" @click="submiteContact()">
                Submit
            </button>
        </form>
    </section>
</div>


<?php get_footer(); ?>