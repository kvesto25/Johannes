<?php
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="Content-Type" content="application/xhtml+xml" />
    <title>Main Page</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Картинка лого сайта -->
    <meta name="image" content="<?=$assets_url?>/files/favicons/favicon.ico" />
    <!-- Meta для социальных сетей и мессенджеров -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Main Page" />
    <meta property="og:description" content="" />
    <!-- Картинка лого сайта -->
    <meta property="og:image" content="<?=$assets_url?>/files/favicons/favicon.ico" />
    <!-- Ссылка на страницу в сети -->
    <meta property="og:url" content="" />
    <!-- Ссылка на страницу в сети без доп параметров-->
    <link rel="canonical" href="" />
    <!--Преконекты к дополнительно подключаемым ресурсам-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Название сайта на рабочем столе apple -->
    <meta name="apple-mobile-web-app-title" content="" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Запрет подсвечивания адрессов и телефонов -->
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <!--! Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?=$assets_url?>/files/favicons/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="60x60" href="<?=$assets_url?>/files/favicons/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$assets_url?>/files/favicons/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="<?=$assets_url?>/files/favicons/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$assets_url?>/files/favicons/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="<?=$assets_url?>/files/favicons/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="<?=$assets_url?>/files/favicons/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="<?=$assets_url?>/files/favicons/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$assets_url?>/files/favicons/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="<?=$assets_url?>/files/favicons/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$assets_url?>/files/favicons/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="<?=$assets_url?>/files/favicons/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$assets_url?>/files/favicons/favicon-16x16.png"/>
    <link rel="manifest" href="<?=$assets_url?>/files/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="<?=$assets_url?>/files/favicons/ms-icon-144x144.png"/>
    <link rel="shortcut icon" href="<?=$assets_url?>/files/favicons/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?=$assets_url?>/files/favicons/favicon.ico" type="image/x-icon" />
    <meta name="theme-color" content="#ffffff" />
    <!--! Стили и шрифты -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?=$assets_url?>/css/style.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
<div class="container container--big">
    <header class="main-header">
        <div class="main-header__wrapper">
            <a href="<?=home_url()?>" class="main-logo"><img src="<?=$assets_url?>/img/main-logo.png" alt="Main Logo"/></a>
            <div class="burger-btn"><span></span><span></span><span></span></div>
            <div class="fullnav">
                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__elem">
                            <a href="#" class="main-nav__link main-nav__link--collapce" id="services">Our Services(test)</a>
                            <div class="mega-menu">
                                <div class="container">
                                    <div class="mega-menu__wrapper">
                                        <div class="mega-menu__grup">
                                            <h4 class="mega-menu__grup-title mega-menu__grup-title--cog">
                                                Areas of Expertise
                                            </h4>
                                            <ul class="mega-menu__grup-list">
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Document Translations</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Financial Translations</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Medical Translations</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Legal Translations</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Marketing Translations</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Urgent Translations</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu__grup">
                                            <h4 class="mega-menu__grup-title mega-menu__grup-title--certified">
                                                Certified Translations
                                            </h4>
                                            <ul class="mega-menu__grup-list">
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Birth Certificate</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Marriage Certificate</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">School Diploma</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Contracts</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Other Documents & Certificates</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu__grup">
                                            <h4 class="mega-menu__grup-title mega-menu__grup-title--specialisation">
                                                Specialisation
                                            </h4>
                                            <ul class="mega-menu__grup-list">
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Skilled Immigration</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Professional Recognition</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu__grup">
                                            <h4 class="mega-menu__grup-title mega-menu__grup-title--digital">
                                                Digital
                                            </h4>
                                            <ul class="mega-menu__grup-list">
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Blogs</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">SEO</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Websites</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">E-Commerce</a>
                                                </li>
                                                <li class="mega-menu__grup-elem">
                                                    <a href="">Others</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <?php
                        $menu_items = get_menu_items('header_menu_all');
                        foreach ($menu_items as $item){
                            ?>
                            <li class="main-nav__elem">
                                <a href="<?=$item->url?>" class="main-nav__link"><?=$item->title?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
                <div class="user-nav">
                    <button class="btn btn--large btn--blue">Get A Quote</button>
                    <button class="btn-lang">
                        <img src="<?=$assets_url?>/img/flag-ger.png" alt="" />
                    </button>
                    <ul class="lang-list">
                        <li class="lang-list__item">
                            <a href=""><img src="<?=$assets_url?>/img/flag-ger.png" alt="" /></a>
                        </li>
                        <li class="lang-list__item">
                            <a href=""><img src="<?=$assets_url?>/img/flag-ger.png" alt="" /></a>
                        </li>
                        <li class="lang-list__item">
                            <a href=""><img src="<?=$assets_url?>/img/flag-ger.png" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mobile-menu mega-menu">
                <div class="container">
                    <div class="mega-menu__wrapper">
                        <div class="mega-menu__grup">
                            <ul class="mega-menu__grup-list">
                                <?php
                                $menu_items = get_menu_items('header_menu_all');
                                foreach ($menu_items as $item){
                                ?>
                                <li class="mega-menu__grup-elem">
                                    <a href="<?=$item->url?>"><?=$item->title?></a>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="mega-menu__grup">
                            <h4 class="mega-menu__grup-title">Specialisation</h4>
                            <ul class="mega-menu__grup-list">
                                <li class="mega-menu__grup-elem">
                                    <a href="">Skilled Immigration</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Professional Recognition</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__grup">
                            <h4 class="mega-menu__grup-title">Digital</h4>
                            <ul class="mega-menu__grup-list">
                                <li class="mega-menu__grup-elem"><a href="">Blogs</a></li>
                                <li class="mega-menu__grup-elem"><a href="">SEO</a></li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Websites</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">E-Commerce</a>
                                </li>
                                <li class="mega-menu__grup-elem"><a href="">Others</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu__grup">
                            <h4 class="mega-menu__grup-title">Areas of Expertise</h4>
                            <ul class="mega-menu__grup-list">
                                <li class="mega-menu__grup-elem">
                                    <a href="">Document Translations</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Financial Translations</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Medical Translations</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Legal Translations</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Marketing Translations</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Urgent Translations</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__grup">
                            <h4 class="mega-menu__grup-title">Certified Translations</h4>
                            <ul class="mega-menu__grup-list">
                                <li class="mega-menu__grup-elem">
                                    <a href="">Birth Certificate</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Marriage Certificate</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">School Diploma</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Contracts</a>
                                </li>
                                <li class="mega-menu__grup-elem">
                                    <a href="">Other Documents & Certificates</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>