<?php
/*
* Template Name: Contact-page template
*/
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
?>
<?php get_header(); ?>

<section class="main-section main-section--contact">
    <div class="container container--big container--nopaddings">
        <div class="main-section__wrapper main-section__wrapper--contact">
            <div class="main-section__left main-section__left--contact">
                <h2 class="main-section__title">
                    Wanna learn more<br />About Us huh?
                </h2>
                <p
                        class="main-section__description main-section__description--sub-page"
                >
                    We have an average rating of 9.3 out of 10 based on over 600
                    ratings. We will gladly help you reach more people by making
                    your message legible to them.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="contact-section">
    <div class="contact-section__wrapper">
        <div class="full-person">
            <p class="full-person__photo">
                <img src="<?=$assets_url?>/img/meet-team-2.png" alt="" />
            </p>
            <p class="full-person__text">
                I specialised in translating English-language advertising and
                marketing texts.
            </p>
            <p class="full-person__name">Melissa Becker</p>
            <p class="full-person__position">Co-founder</p>
        </div>
        <div class="contact-section__content">
            <div class="breadcrumbs">
              <span
              >Home
                <svg
                        width="6"
                        height="9"
                        viewBox="0 0 6 9"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                          d="M1 1L4.5 4.5L1 8"
                          stroke="black"
                          stroke-linecap="round"
                  />
                </svg> </span
              ><span>Contact</span>
            </div>
            <h2
                    class="contact-section__title sub-team__title sub-team__title--main"
            >
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
                <a href="tel:+01234567890" class="contact-section__phone"
                >+ (000) 123 -456 -78 - 90</a
                >
            </div>
            <div class="contact-section__grup">
                <p class="contact-section__subtitle">Email:</p>
                <a href="mailto:info@example.com" class="contact-section__email"
                >Info@example.com</a
                >
            </div>
            <a class="btn btn--tomato contact-section__btn">Button</a>
        </div>
    </div>
</section>
<section class="contact-city">
    <div class="container">
        <ul class="contact-city__list">
            <li class="contact-city__elem">
                <p class="contact-city__photo">
                    <img src="<?=$assets_url?>/img/city-1.jpg" alt="" />
                </p>
                <div class="contact-city__content">
                    <p class="contact-city__name">Amsterdam</p>
                    <div class="contact-city__grup">
                        <p class="contact-city__subtitle">Address</p>
                        <p class="contact-city__adress">
                            Kabelweg 22 1014BB Amsterdam
                        </p>
                    </div>
                    <div class="contact-city__grup">
                        <p class="contact-city__subtitle">Phone:</p>
                        <a href="tel:+0001234567890" class="contact-city__phone"
                        >+ (000) 123 -456 -78 - 90</a
                        >
                    </div>
                    <div class="contact-city__grup">
                        <p class="contact-city__subtitle">Email:</p>
                        <a href="mailto:info@example.com" class="contact-city__email"
                        >Info@example.com</a
                        >
                    </div>
                </div>
            </li>
            <li class="contact-city__elem">
                <p class="contact-city__photo">
                    <img src="<?=$assets_url?>/img/city-2.jpg" alt="" />
                </p>
                <div class="contact-city__content">
                    <p class="contact-city__name">Berlin</p>
                    <div class="contact-city__grup">
                        <p class="contact-city__subtitle">Address</p>
                        <p class="contact-city__adress">
                            Kabelweg 22 1014BB Amsterdam
                        </p>
                    </div>
                    <div class="contact-city__grup">
                        <p class="contact-city__subtitle">Phone:</p>
                        <a href="tel:+0001234567890" class="contact-city__phone"
                        >+ (000) 123 -456 -78 - 90</a
                        >
                    </div>
                    <div class="contact-city__grup">
                        <p class="contact-city__subtitle">Email:</p>
                        <a href="mailto:info@example.com" class="contact-city__email"
                        >Info@example.com</a
                        >
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="contact-us">
    <h2 class="contact-us__title">Contact us</h2>
    <form action="" class="contact-us__form">
        <label class="contact-us__label"
        >Name
            <input type="text" name="" id="" class="contact-us__input" /></label
        ><label class="contact-us__label"
        >Phone Number
            <input type="tel" name="" id="" class="contact-us__input" /></label
        ><label class="contact-us__label"
        >Email <input type="email" name="" id="" class="contact-us__input"
            /></label>
        <label class="contact-us__label"
        >Message:
            <textarea name="" id="" class="contact-us__textarea"></textarea>
        </label>
        <button type="submit" class="btn btn--tomato contact-us__btn">
            Submit
        </button>
    </form>
</section>

<?php get_footer(); ?>
