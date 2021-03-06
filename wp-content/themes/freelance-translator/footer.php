<?php
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
?>

<footer class="main-footer">
    <div class="container main-footer__wrapper">
        <div class="main-footer__col">
            <h4 class="main-footer__col-title">Company</h4>
            <ul class="main-footer__list">
                <?php
                $menu_items = get_menu_items('header_menu_about_as');
                $count = 0;
                foreach ($menu_items as $item) {
                    if($count > 4) break;
                    $count++
                ?>
                    <li class="main-footer__elem">
                        <a href="<?= $item->url ?>" class="main-footer__link"><?= $item->title ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="main-footer__col main-footer__col--area">
            <h4 class="main-footer__col-title">Areas of expertise</h4>
            <ul class="main-footer__list">
                <?php
                $menu_items = get_menu_items('header_menu_technical_translations');
                $count = 0;
                foreach ($menu_items as $item) {
                    if($count > 4) break;
                    $count++
                ?>
                    <li class="main-footer__elem">
                        <a href="<?= $item->url ?>" class="main-footer__link"><?= $item->title ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="main-footer__col main-footer__col--lang">
            <h4 class="main-footer__col-title">Languages</h4>
            <ul class="main-footer__list">
                <?php
                $menu_items = get_menu_items('header_menu_Languages');
                $count = 0;
                foreach ($menu_items as $item) {
                    if($count > 4) break;
                    $count++
                ?>
                    <li class="main-footer__elem">
                        <a href="<?= $item->url ?>" class="main-footer__link"><?= $item->title ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="main-footer__col main-footer__col--loc">
            <h4 class="main-footer__col-title">Locations</h4>
            <ul class="main-footer__list">
                <?php
                $menu_items = get_menu_items('footer_menu_locations');
                $count = 0;
                foreach ($menu_items as $item) {
                    if($count > 4) break;
                    $count++
                ?>
                    <li class="main-footer__elem">
                        <a href="<?= $item->url ?>" class="main-footer__link"><?= $item->title ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="main-footer__social">
            <h4 class="main-footer__col-title">Follow us</h4>
            <ul class="main-footer__social-list">
                <li class="main-footer__social-elem">
                    <a href="" class="main-footer__social-link">
                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5871 0.677143C17.7116 0.287143 17.5871 0 16.9909 0H15.0222C14.5212 0 14.2902 0.247857 14.165 0.521429C14.165 0.521429 13.1637 2.80429 11.7455 4.28714C11.2865 4.71714 11.078 4.85357 10.8275 4.85357C10.7023 4.85357 10.514 4.71714 10.514 4.32643V0.677143C10.514 0.208571 10.376 0 9.95904 0H6.86311C6.55036 0 6.36212 0.217143 6.36212 0.423571C6.36212 0.867143 7.0716 0.97 7.14435 2.21857V4.93143C7.14435 5.52643 7.0296 5.63429 6.77911 5.63429C6.11162 5.63429 4.48791 3.34071 3.52418 0.716428C3.33743 0.205714 3.14843 0 2.64519 0H0.674986C0.112498 0 0 0.247857 0 0.521429C0 1.00857 0.667486 3.42857 3.10868 6.62929C4.73615 8.815 7.02735 10 9.11456 10C10.3663 10 10.5208 9.73714 10.5208 9.28357V7.63143C10.5208 7.105 10.6393 7 11.036 7C11.3285 7 11.8288 7.13714 12.9972 8.19071C14.3322 9.44 14.5519 10 15.3034 10H17.2721C17.8346 10 18.1166 9.73714 17.9546 9.21714C17.7761 8.7 17.1386 7.94929 16.2934 7.05857C15.8344 6.55143 15.1459 6.005 14.9367 5.73143C14.6449 5.38071 14.7282 5.22429 14.9367 4.91214C14.9367 4.91214 17.3366 1.75071 17.5864 0.677143H17.5871Z" fill="white" />
                        </svg>
                    </a>
                </li>
                <li class="main-footer__social-elem">
                    <a href="" class="main-footer__social-link">
                        <svg width="7" height="15" viewBox="0 0 7 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.78694 15V7.96156H0V5.42739H1.78694V3.26287C1.78694 1.56198 2.84249 0 5.2747 0C6.25947 0 6.98766 0.098325 6.98766 0.098325L6.93028 2.46481C6.93028 2.46481 6.18764 2.45728 5.37725 2.45728C4.50015 2.45728 4.35963 2.87826 4.35963 3.57697V5.42739H7L6.88511 7.96156H4.35963V15H1.78694Z" fill="white" />
                        </svg>
                    </a>
                </li>
                <li class="main-footer__social-elem">
                    <a href="" class="main-footer__social-link">
                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 1.83215C18.3013 2.14176 17.5507 2.35096 16.7616 2.44551C17.5758 1.95833 18.1849 1.19157 18.4753 0.288287C17.7104 0.742652 16.8732 1.06248 16.0001 1.23385C15.413 0.606989 14.6354 0.191493 13.7879 0.0518742C12.9405 -0.0877449 12.0707 0.0563238 11.3135 0.461713C10.5563 0.867102 9.95419 1.51113 9.60054 2.29381C9.2469 3.07649 9.16155 3.95403 9.35775 4.79018C7.80776 4.71236 6.29146 4.30949 4.90725 3.60773C3.52304 2.90596 2.30186 1.92099 1.32295 0.71672C0.988241 1.2941 0.795781 1.96353 0.795781 2.67647C0.795407 3.31828 0.953458 3.95025 1.25591 4.51633C1.55836 5.0824 1.99586 5.56507 2.5296 5.92151C1.91061 5.90182 1.30528 5.73456 0.763983 5.43367V5.48387C0.763921 6.38404 1.07529 7.2565 1.64527 7.95322C2.21524 8.64994 3.00871 9.12801 3.89104 9.3063C3.31683 9.4617 2.71481 9.4846 2.13045 9.37324C2.37939 10.1478 2.86431 10.8251 3.51731 11.3103C4.17031 11.7956 4.95871 12.0645 5.77213 12.0794C4.3913 13.1634 2.68598 13.7514 0.930503 13.7488C0.619538 13.7489 0.308837 13.7307 0 13.6944C1.78191 14.8401 3.85618 15.4481 5.97463 15.4458C13.1459 15.4458 17.0662 9.50629 17.0662 4.35505C17.0662 4.1877 17.062 4.01867 17.0545 3.85131C17.817 3.29985 18.4753 2.61697 18.9983 1.83466L19 1.83215Z" fill="white" />
                        </svg>
                    </a>
                </li>
                <li class="main-footer__social-elem">
                    <a href="" class="main-footer__social-link">
                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.6145 1.8828C17.5127 1.51945 17.3143 1.19049 17.0404 0.930891C16.7588 0.66331 16.4136 0.471903 16.0375 0.374737C14.6299 0.00371678 8.99038 0.00371686 8.99038 0.00371686C6.63934 -0.0230321 4.28887 0.0946163 1.95225 0.355998C1.57613 0.460343 1.23162 0.656027 0.949374 0.925645C0.672046 1.19248 0.47117 1.52152 0.366236 1.88205C0.114162 3.24002 -0.00831294 4.61886 0.0004626 6C-0.00853182 7.37989 0.113642 8.75828 0.366236 10.1179C0.468922 10.477 0.669048 10.8045 0.947125 11.0691C1.2252 11.3337 1.57149 11.5248 1.95225 11.626C3.37862 11.9963 8.99038 11.9963 8.99038 11.9963C11.3444 12.0231 13.6979 11.9054 16.0375 11.644C16.4136 11.5468 16.7588 11.3554 17.0404 11.0878C17.3177 10.8233 17.5148 10.4942 17.6138 10.1359C17.8724 8.77849 17.9982 7.39907 17.9893 6.01723C18.0088 4.62955 17.8831 3.24363 17.6145 1.88205V1.8828ZM7.1975 8.5664V3.43434L11.8896 6.00075L7.1975 8.5664Z" fill="white" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>


<script src="<?= $assets_url ?>/js/vue/vue-components/calculation.js"></script>
<script src="<?= $assets_url ?>/js/vue/vue-components/infoTable.js"></script>
<script src="<?= $assets_url ?>/js/vue/vue-components/meetTeam.js"></script>
<script src="<?= $assets_url ?>/js/vue/vue-components/getquote.js"></script>
<script src="<?= $assets_url ?>/js/vue/vue.js"></script>
<script src="<?= $assets_url ?>/js/app.min.js"></script>
</div>
</body>

</html>