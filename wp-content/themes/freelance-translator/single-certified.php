<?php
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
?>
<?php get_header(); ?>
    <script>
        let ajax_url = "<?= admin_url('admin-ajax.php'); ?>";
    </script>
<?php
//$users = get_users();
//print_r($users);
$id = get_the_ID();
$fields = get_fields($id);
?>
    <section class="main-section main-section--about-us">
        <div class="container container--big container--nopaddings">
            <div class="main-section__wrapper">
                <div class="main-section__left main-section__left--about-us">
                    <h2 class="main-section__title">Wanna learn
                        more About Us huh?</h2>
                    <p class="main-section__description main-section__description--about-us">We have an average rating
                        of 9.3 out of 10 based on over 600 ratings. We will gladly help you reach more people by making
                        your message legible to them.</p>
                </div><!-- <div class="main-section__right"> -->
                <div class="swiper main-section__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?= $assets_url ?>/img/main-section-about-us-1.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="<?= $assets_url ?>/img/main-section-about-us-2.jpg" alt=""></div>
                    </div>
                </div><!-- </div> -->
            </div>
        </div>
    </section>
    <div id="app">
        <template v-if="meetTeamIsLoad">
            <meet-team></meet-team>
        </template>
        <!-- <script
            type="application/javascript"
            src="js/modules/meetTeam.js"
          ></script> -->
    </div>
    <section class="timeline">
        <h2 class="timeline__title">Timeline of the Company</h2>
        <div class="timeline__inner">
            <svg width="1240" height="408" class="timeline__svg" viewBox="0 0 1240 408" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path opacity="0.5" d="M140.5 118.634C154.5 183.301 266.5 312.634 602.5 312.634" stroke="white" stroke-width="3" stroke-linecap="round" stroke-dasharray="10 10" class="timeline__line timeline__line-first" />
                <path d="M1135 118.634C1121 183.301 1009 312.634 673 312.634" opacity="0.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-dasharray="10 10" class="timeline__line timeline__line-second" />
                <circle cx="95" cy="95.134" r="95" fill="url(#pattern1)" class="timeline__circle-first" />
                <circle r="95" transform="matrix(-1 0 0 1 1145 95.134)" fill="url(#pattern3)" class="timeline__circle-third" />
                <circle cx="620" cy="312.134" r="95" fill="url(#pattern2)" class="timeline__circle-second" />
                <defs>
                    <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image1_1799_103" transform="translate(-0.2502) scale(0.000798085)" />
                    </pattern>
                    <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image2_1799_103" transform="translate(-0.390995) scale(0.000947867)" />
                    </pattern>
                    <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image3_1799_103" transform="translate(0 -0.248848) scale(0.00115207)" />
                    </pattern>
                    <image id="image1_1799_103" width="1880" height="1253" href="<?= $assets_url ?>/img/timeline-1.jpg" />
                    <image id="image2_1799_103" width="1880" height="1055" href="<?= $assets_url ?>/img/timeline-3.jpg" />
                    <image id="image3_1799_103" width="868" height="1300" href="<?= $assets_url ?>/img/timeline-2.jpg" />
                </defs>
            </svg>
            <svg class="timeline__svg timeline__svg--medium" width="794" height="878" viewBox="0 0 794 878" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M489.5 294.027L489.666 292.034L489.5 294.027ZM120.623 184.574C120.585 185.678 121.45 186.603 122.553 186.641C123.657 186.679 124.583 185.815 124.621 184.711L120.623 184.574ZM124.996 195.452C124.877 194.354 123.89 193.56 122.792 193.679C121.694 193.798 120.9 194.785 121.019 195.883L124.996 195.452ZM123.133 207.038C123.427 208.103 124.528 208.728 125.593 208.434C126.658 208.141 127.283 207.039 126.989 205.975L123.133 207.038ZM130.696 216.003C130.227 215.003 129.035 214.574 128.036 215.044C127.036 215.514 126.607 216.705 127.076 217.705L130.696 216.003ZM132.754 227.552C133.382 228.46 134.628 228.688 135.537 228.06C136.445 227.432 136.673 226.186 136.045 225.277L132.754 227.552ZM142.81 233.63C142.054 232.824 140.789 232.784 139.983 233.539C139.177 234.295 139.137 235.561 139.892 236.366L142.81 233.63ZM148.147 244.093C148.998 244.797 150.259 244.677 150.962 243.826C151.666 242.975 151.547 241.714 150.696 241.01L148.147 244.093ZM159.417 247.461C158.497 246.85 157.256 247.101 156.644 248.021C156.033 248.941 156.284 250.182 157.204 250.793L159.417 247.461ZM166.825 256.587C167.794 257.117 169.01 256.761 169.54 255.792C170.07 254.823 169.714 253.608 168.745 253.077L166.825 256.587ZM178.513 257.967C177.509 257.506 176.322 257.947 175.861 258.951C175.401 259.955 175.842 261.142 176.846 261.603L178.513 257.967ZM187.155 265.96C188.184 266.361 189.344 265.851 189.745 264.822C190.146 263.793 189.636 262.633 188.607 262.232L187.155 265.96ZM198.948 265.963C197.9 265.613 196.767 266.179 196.417 267.226C196.067 268.274 196.632 269.407 197.68 269.757L198.948 265.963ZM208.367 273.077C209.428 273.383 210.537 272.771 210.843 271.71C211.149 270.648 210.537 269.54 209.476 269.234L208.367 273.077ZM220.056 272.081C218.985 271.812 217.898 272.463 217.63 273.534C217.361 274.606 218.012 275.692 219.083 275.961L220.056 272.081ZM229.907 278.496C230.986 278.732 232.052 278.049 232.288 276.97C232.524 275.891 231.84 274.825 230.761 274.589L229.907 278.496ZM241.567 276.797C240.482 276.59 239.434 277.302 239.227 278.387C239.02 279.472 239.732 280.519 240.817 280.726L241.567 276.797ZM251.791 282.685C252.88 282.867 253.911 282.131 254.092 281.041C254.274 279.952 253.538 278.921 252.449 278.74L251.791 282.685ZM263.321 280.435C262.228 280.276 261.213 281.033 261.054 282.126C260.895 283.219 261.652 284.234 262.745 284.394L263.321 280.435ZM273.746 285.892C274.842 286.031 275.843 285.256 275.983 284.16C276.122 283.064 275.346 282.063 274.251 281.924L273.746 285.892ZM285.225 283.226C284.127 283.105 283.139 283.896 283.017 284.994C282.896 286.092 283.687 287.081 284.785 287.202L285.225 283.226ZM295.827 288.34C296.926 288.446 297.903 287.64 298.009 286.541C298.114 285.441 297.308 284.464 296.209 284.359L295.827 288.34ZM307.206 285.34C306.106 285.249 305.139 286.067 305.048 287.168C304.957 288.269 305.775 289.235 306.876 289.326L307.206 285.34ZM317.943 290.177C319.045 290.255 320.001 289.425 320.08 288.324C320.158 287.222 319.328 286.265 318.227 286.187L317.943 290.177ZM329.248 286.912C328.145 286.845 327.197 287.684 327.13 288.787C327.064 289.89 327.903 290.838 329.006 290.904L329.248 286.912ZM340.086 291.524C341.189 291.581 342.13 290.732 342.186 289.629C342.243 288.526 341.395 287.586 340.292 287.529L340.086 291.524ZM351.34 288.051C350.236 288.003 349.303 288.859 349.256 289.963C349.208 291.066 350.064 291.999 351.168 292.047L351.34 288.051ZM362.228 292.484C363.332 292.523 364.259 291.661 364.299 290.557C364.338 289.453 363.476 288.526 362.372 288.486L362.228 292.484ZM373.434 288.849C372.33 288.816 371.408 289.685 371.375 290.789C371.342 291.893 372.211 292.815 373.315 292.848L373.434 288.849ZM384.411 293.149C385.516 293.176 386.433 292.303 386.46 291.199C386.487 290.094 385.614 289.177 384.51 289.15L384.411 293.149ZM395.564 289.399C394.46 289.376 393.546 290.253 393.524 291.357C393.501 292.462 394.378 293.375 395.482 293.398L395.564 289.399ZM406.515 293.607C407.619 293.627 408.53 292.747 408.55 291.643C408.569 290.538 407.69 289.627 406.585 289.608L406.515 293.607ZM417.685 289.793C416.58 289.775 415.671 290.656 415.653 291.761C415.636 292.865 416.517 293.775 417.621 293.792L417.685 289.793ZM428.72 293.967C429.824 293.984 430.734 293.103 430.751 291.998C430.769 290.894 429.888 289.984 428.783 289.967L428.72 293.967ZM439.867 290.15C438.762 290.13 437.851 291.01 437.832 292.114C437.812 293.219 438.692 294.13 439.796 294.149L439.867 290.15ZM450.853 294.363C451.958 294.388 452.872 293.512 452.896 292.407C452.921 291.303 452.045 290.388 450.94 290.364L450.853 294.363ZM462.018 290.645C460.914 290.612 459.992 291.481 459.96 292.585C459.927 293.689 460.795 294.61 461.9 294.643L462.018 290.645ZM472.944 295.036C474.048 295.084 474.981 294.227 475.028 293.124C475.075 292.02 474.219 291.087 473.115 291.04L472.944 295.036ZM484.242 291.633C483.14 291.56 482.187 292.395 482.115 293.497C482.042 294.599 482.877 295.551 483.979 295.624L484.242 291.633ZM495.045 296.531C496.145 296.637 497.122 295.831 497.227 294.731C497.332 293.632 496.526 292.655 495.427 292.549L495.045 296.531ZM506.77 293.785C505.674 293.65 504.676 294.431 504.542 295.527C504.408 296.623 505.188 297.621 506.285 297.755L506.77 293.785ZM517.476 299.281C518.568 299.446 519.587 298.694 519.752 297.602C519.917 296.51 519.165 295.491 518.073 295.326L517.476 299.281ZM529.33 297.197C528.243 296.999 527.202 297.72 527.004 298.807C526.807 299.894 527.527 300.935 528.614 301.133L529.33 297.197ZM539.72 303.34C540.8 303.574 541.864 302.888 542.098 301.808C542.331 300.728 541.645 299.664 540.565 299.431L539.72 303.34ZM551.715 302.046C550.645 301.775 549.557 302.422 549.285 303.493C549.013 304.564 549.661 305.652 550.732 305.923L551.715 302.046ZM561.624 308.91C562.683 309.223 563.796 308.618 564.109 307.558C564.422 306.499 563.817 305.387 562.757 305.074L561.624 308.91ZM573.665 308.546C572.62 308.188 571.483 308.745 571.125 309.79C570.767 310.836 571.325 311.973 572.37 312.33L573.665 308.546ZM582.979 316.236C584.006 316.642 585.168 316.139 585.574 315.111C585.98 314.084 585.477 312.922 584.45 312.516L582.979 316.236ZM595.033 317.016C594.028 316.557 592.842 316.999 592.383 318.004C591.924 319.009 592.367 320.195 593.372 320.654L595.033 317.016ZM603.485 325.621C604.461 326.136 605.671 325.763 606.187 324.786C606.703 323.809 606.329 322.599 605.352 322.083L603.485 325.621ZM615.329 327.759C614.388 327.182 613.156 327.477 612.579 328.419C612.002 329.361 612.298 330.592 613.239 331.169L615.329 327.759ZM622.608 337.377C623.506 338.02 624.756 337.814 625.399 336.916C626.043 336.019 625.837 334.769 624.939 334.126L622.608 337.377ZM634.04 341.217C633.198 340.502 631.936 340.606 631.221 341.448C630.507 342.29 630.611 343.553 631.453 344.267L634.04 341.217ZM639.648 351.883C640.421 352.672 641.687 352.686 642.476 351.913C643.266 351.141 643.279 349.875 642.507 349.085L639.648 351.883ZM650.151 357.748C649.466 356.882 648.208 356.735 647.342 357.42C646.475 358.105 646.328 359.363 647.014 360.229L650.151 357.748ZM653.396 369.367C653.971 370.31 655.202 370.608 656.145 370.033C657.088 369.458 657.386 368.227 656.811 367.284L653.396 369.367ZM662.185 377.619C661.746 376.605 660.569 376.139 659.555 376.577C658.541 377.016 658.075 378.193 658.514 379.207L662.185 377.619ZM662.098 389.652C662.371 390.722 663.46 391.369 664.53 391.097C665.6 390.824 666.247 389.735 665.975 388.665L662.098 389.652ZM667.853 400.229C667.777 399.127 666.821 398.296 665.719 398.372C664.617 398.449 663.786 399.404 663.863 400.506L667.853 400.229ZM663.546 411.469C663.402 412.564 664.173 413.569 665.268 413.712C666.364 413.856 667.368 413.085 667.512 411.989L663.546 411.469ZM664.746 423.442C665.12 422.403 664.581 421.257 663.541 420.883C662.502 420.509 661.356 421.049 660.982 422.088L664.746 423.442ZM121.01 178.803C120.817 180.758 120.688 182.682 120.623 184.574L124.621 184.711C124.683 182.907 124.806 181.069 124.991 179.197L121.01 178.803ZM121.019 195.883C121.438 199.748 122.148 203.465 123.133 207.038L126.989 205.975C126.062 202.613 125.392 199.108 124.996 195.452L121.019 195.883ZM127.076 217.705C128.693 221.144 130.593 224.424 132.754 227.552L136.045 225.277C134.004 222.325 132.216 219.236 130.696 216.003L127.076 217.705ZM139.892 236.366C142.431 239.074 145.189 241.647 148.147 244.093L150.696 241.01C147.859 238.664 145.225 236.206 142.81 233.63L139.892 236.366ZM157.204 250.793C160.26 252.823 163.472 254.753 166.825 256.587L168.745 253.077C165.484 251.294 162.371 249.423 159.417 247.461L157.204 250.793ZM176.846 261.603C180.175 263.129 183.615 264.58 187.155 265.96L188.607 262.232C185.134 260.879 181.766 259.459 178.513 257.967L176.846 261.603ZM197.68 269.757C201.165 270.922 204.73 272.027 208.367 273.077L209.476 269.234C205.889 268.198 202.377 267.109 198.948 265.963L197.68 269.757ZM219.083 275.961C222.636 276.852 226.246 277.696 229.907 278.496L230.761 274.589C227.138 273.797 223.567 272.962 220.056 272.081L219.083 275.961ZM240.817 280.726C244.436 281.417 248.096 282.069 251.791 282.685L252.449 278.74C248.783 278.128 245.153 277.482 241.567 276.797L240.817 280.726ZM262.745 284.394C266.386 284.924 270.055 285.423 273.746 285.892L274.251 281.924C270.583 281.458 266.938 280.962 263.321 280.435L262.745 284.394ZM284.785 287.202C288.451 287.607 292.134 287.986 295.827 288.34L296.209 284.359C292.534 284.006 288.871 283.629 285.225 283.226L284.785 287.202ZM306.876 289.326C310.561 289.632 314.252 289.914 317.943 290.177L318.227 286.187C314.55 285.925 310.875 285.644 307.206 285.34L306.876 289.326ZM329.006 290.904C332.706 291.129 336.401 291.335 340.086 291.524L340.292 287.529C336.618 287.341 332.935 287.135 329.248 286.912L329.006 290.904ZM351.168 292.047C354.871 292.207 358.56 292.352 362.228 292.484L362.372 288.486C358.713 288.355 355.034 288.21 351.34 288.051L351.168 292.047ZM373.315 292.848C377.043 292.959 380.744 293.058 384.411 293.149L384.51 289.15C380.849 289.06 377.155 288.96 373.434 288.849L373.315 292.848ZM395.482 293.398C399.204 293.474 402.884 293.543 406.515 293.607L406.585 289.608C402.958 289.544 399.282 289.475 395.564 289.399L395.482 293.398ZM417.621 293.792C421.386 293.852 425.09 293.909 428.72 293.967L428.783 289.967C425.151 289.91 421.45 289.853 417.685 289.793L417.621 293.792ZM439.796 294.149C443.581 294.215 447.27 294.285 450.853 294.363L450.94 290.364C447.35 290.286 443.655 290.216 439.867 290.15L439.796 294.149ZM461.9 294.643C465.741 294.757 469.427 294.886 472.944 295.036L473.115 291.04C469.577 290.888 465.873 290.759 462.018 290.645L461.9 294.643ZM483.979 295.624C485.832 295.746 487.618 295.878 489.334 296.02L489.666 292.034C487.924 291.889 486.115 291.756 484.242 291.633L483.979 295.624ZM489.334 296.02C491.256 296.18 493.159 296.35 495.045 296.531L495.427 292.549C493.524 292.367 491.604 292.195 489.666 292.034L489.334 296.02ZM506.285 297.755C510.092 298.221 513.822 298.73 517.476 299.281L518.073 295.326C514.381 294.769 510.614 294.255 506.77 293.785L506.285 297.755ZM528.614 301.133C532.404 301.822 536.106 302.559 539.72 303.34L540.565 299.431C536.907 298.64 533.163 297.895 529.33 297.197L528.614 301.133ZM550.732 305.923C554.464 306.87 558.094 307.867 561.624 308.91L562.757 305.074C559.177 304.016 555.497 303.006 551.715 302.046L550.732 305.923ZM572.37 312.33C576.026 313.581 579.562 314.885 582.979 316.236L584.45 312.516C580.973 311.141 577.379 309.817 573.665 308.546L572.37 312.33ZM593.372 320.654C596.885 322.258 600.255 323.916 603.485 325.621L605.352 322.083C602.053 320.342 598.614 318.651 595.033 317.016L593.372 320.654ZM613.239 331.169C616.535 333.189 619.657 335.261 622.608 337.377L624.939 334.126C621.907 331.952 618.705 329.827 615.329 327.759L613.239 331.169ZM631.453 344.267C634.397 346.764 637.127 349.307 639.648 351.883L642.507 349.085C639.896 346.418 637.076 343.791 634.04 341.217L631.453 344.267ZM647.014 360.229C649.405 363.254 651.529 366.305 653.396 369.367L656.811 367.284C654.857 364.08 652.64 360.895 650.151 357.748L647.014 360.229ZM658.514 379.207C660.029 382.709 661.219 386.199 662.098 389.652L665.975 388.665C665.042 385 663.781 381.309 662.185 377.619L658.514 379.207ZM663.863 400.506C664.123 404.251 664.012 407.917 663.546 411.469L667.512 411.989C668.013 408.167 668.132 404.234 667.853 400.229L663.863 400.506ZM660.982 422.088C660.364 423.807 659.653 425.486 658.852 427.119L662.444 428.881C663.31 427.114 664.078 425.299 664.746 423.442L660.982 422.088Z" fill="white" />
                <path d="M299.073 611.027L298.908 609.034L299.073 611.027ZM667.95 501.574C667.988 502.678 667.124 503.603 666.02 503.641C664.916 503.679 663.99 502.815 663.952 501.711L667.95 501.574ZM663.577 512.452C663.696 511.354 664.683 510.56 665.781 510.679C666.879 510.798 667.673 511.785 667.554 512.883L663.577 512.452ZM665.44 524.038C665.146 525.103 664.045 525.728 662.98 525.434C661.915 525.141 661.29 524.039 661.584 522.975L665.44 524.038ZM657.877 533.003C658.347 532.003 659.538 531.574 660.538 532.044C661.537 532.514 661.967 533.705 661.497 534.705L657.877 533.003ZM655.819 544.552C655.191 545.46 653.945 545.688 653.037 545.06C652.128 544.432 651.9 543.186 652.528 542.277L655.819 544.552ZM645.763 550.63C646.519 549.824 647.785 549.784 648.59 550.539C649.396 551.295 649.437 552.561 648.681 553.366L645.763 550.63ZM640.427 561.093C639.575 561.797 638.315 561.677 637.611 560.826C636.907 559.975 637.026 558.714 637.877 558.01L640.427 561.093ZM629.156 564.461C630.076 563.85 631.318 564.101 631.929 565.021C632.54 565.941 632.289 567.182 631.369 567.793L629.156 564.461ZM621.748 573.587C620.779 574.117 619.564 573.761 619.034 572.792C618.504 571.823 618.86 570.608 619.829 570.077L621.748 573.587ZM610.06 574.967C611.064 574.506 612.252 574.947 612.712 575.951C613.172 576.955 612.732 578.142 611.728 578.603L610.06 574.967ZM601.418 582.96C600.389 583.361 599.229 582.851 598.828 581.822C598.428 580.793 598.937 579.633 599.966 579.232L601.418 582.96ZM589.626 582.963C590.673 582.613 591.806 583.179 592.156 584.226C592.506 585.274 591.941 586.407 590.893 586.757L589.626 582.963ZM580.206 590.077C579.145 590.383 578.037 589.771 577.73 588.71C577.424 587.648 578.036 586.54 579.097 586.234L580.206 590.077ZM568.517 589.081C569.588 588.812 570.675 589.463 570.944 590.534C571.212 591.606 570.562 592.692 569.49 592.961L568.517 589.081ZM558.666 595.496C557.587 595.732 556.521 595.049 556.285 593.97C556.05 592.891 556.733 591.825 557.812 591.589L558.666 595.496ZM547.007 593.797C548.092 593.59 549.139 594.302 549.346 595.387C549.553 596.472 548.842 597.519 547.757 597.726L547.007 593.797ZM536.782 599.685C535.693 599.867 534.662 599.131 534.481 598.041C534.299 596.952 535.035 595.921 536.125 595.74L536.782 599.685ZM525.252 597.435C526.345 597.276 527.36 598.033 527.519 599.126C527.679 600.219 526.922 601.234 525.829 601.394L525.252 597.435ZM514.827 602.892C513.731 603.031 512.73 602.256 512.591 601.16C512.451 600.064 513.227 599.063 514.323 598.924L514.827 602.892ZM503.348 600.226C504.446 600.105 505.435 600.896 505.556 601.994C505.677 603.092 504.886 604.081 503.788 604.202L503.348 600.226ZM492.746 605.34C491.647 605.446 490.67 604.64 490.565 603.541C490.459 602.441 491.265 601.464 492.365 601.359L492.746 605.34ZM481.367 602.34C482.468 602.249 483.434 603.067 483.525 604.168C483.616 605.269 482.798 606.235 481.697 606.326L481.367 602.34ZM470.63 607.177C469.529 607.255 468.572 606.425 468.494 605.324C468.415 604.222 469.245 603.265 470.347 603.187L470.63 607.177ZM459.325 603.912C460.428 603.845 461.376 604.684 461.443 605.787C461.51 606.89 460.67 607.838 459.568 607.904L459.325 603.912ZM448.487 608.524C447.384 608.581 446.444 607.732 446.387 606.629C446.33 605.526 447.179 604.586 448.282 604.529L448.487 608.524ZM437.233 605.051C438.337 605.003 439.27 605.859 439.318 606.963C439.365 608.066 438.509 608.999 437.406 609.047L437.233 605.051ZM426.345 609.484C425.242 609.523 424.314 608.661 424.275 607.557C424.235 606.453 425.098 605.526 426.201 605.486L426.345 609.484ZM415.139 605.849C416.243 605.816 417.165 606.685 417.198 607.789C417.231 608.893 416.362 609.815 415.258 609.848L415.139 605.849ZM404.162 610.149C403.058 610.176 402.14 609.303 402.113 608.199C402.086 607.094 402.959 606.177 404.063 606.15L404.162 610.149ZM393.009 606.399C394.113 606.376 395.027 607.253 395.049 608.357C395.072 609.462 394.195 610.375 393.091 610.398L393.009 606.399ZM382.058 610.607C380.954 610.627 380.043 609.747 380.023 608.643C380.004 607.538 380.883 606.627 381.988 606.608L382.058 610.607ZM370.888 606.793C371.993 606.775 372.902 607.656 372.92 608.761C372.938 609.865 372.057 610.775 370.952 610.792L370.888 606.793ZM359.853 610.967C358.749 610.984 357.839 610.103 357.822 608.998C357.804 607.894 358.686 606.984 359.79 606.967L359.853 610.967ZM348.707 607.15C349.811 607.13 350.722 608.01 350.741 609.114C350.761 610.219 349.881 611.13 348.777 611.149L348.707 607.15ZM337.72 611.363C336.616 611.388 335.701 610.512 335.677 609.407C335.653 608.303 336.528 607.388 337.633 607.364L337.72 611.363ZM326.556 607.645C327.66 607.612 328.581 608.481 328.614 609.585C328.646 610.689 327.778 611.61 326.674 611.643L326.556 607.645ZM315.629 612.036C314.526 612.084 313.593 611.227 313.545 610.124C313.498 609.02 314.354 608.087 315.458 608.04L315.629 612.036ZM304.331 608.633C305.433 608.56 306.386 609.395 306.458 610.497C306.531 611.599 305.696 612.551 304.594 612.624L304.331 608.633ZM293.528 613.531C292.428 613.637 291.452 612.831 291.346 611.731C291.241 610.632 292.047 609.655 293.146 609.549L293.528 613.531ZM281.803 610.785C282.899 610.65 283.897 611.431 284.031 612.527C284.165 613.623 283.385 614.621 282.288 614.755L281.803 610.785ZM271.097 616.281C270.005 616.446 268.986 615.694 268.821 614.602C268.657 613.51 269.408 612.491 270.501 612.326L271.097 616.281ZM259.243 614.197C260.33 613.999 261.371 614.72 261.569 615.807C261.767 616.894 261.046 617.935 259.959 618.133L259.243 614.197ZM248.853 620.34C247.773 620.574 246.709 619.888 246.475 618.808C246.242 617.728 246.928 616.664 248.008 616.431L248.853 620.34ZM236.858 619.046C237.929 618.775 239.017 619.422 239.288 620.493C239.56 621.564 238.912 622.652 237.842 622.923L236.858 619.046ZM226.949 625.91C225.89 626.223 224.777 625.618 224.464 624.558C224.151 623.499 224.756 622.387 225.816 622.074L226.949 625.91ZM214.908 625.546C215.953 625.188 217.091 625.745 217.448 626.79C217.806 627.836 217.249 628.973 216.204 629.33L214.908 625.546ZM205.595 633.236C204.567 633.642 203.405 633.139 202.999 632.111C202.593 631.084 203.096 629.922 204.124 629.516L205.595 633.236ZM193.54 634.016C194.545 633.557 195.731 633.999 196.19 635.004C196.649 636.009 196.206 637.195 195.202 637.654L193.54 634.016ZM185.089 642.621C184.112 643.136 182.902 642.763 182.386 641.786C181.871 640.809 182.244 639.599 183.221 639.083L185.089 642.621ZM173.244 644.759C174.186 644.182 175.417 644.477 175.994 645.419C176.571 646.361 176.276 647.592 175.334 648.169L173.244 644.759ZM165.965 654.377C165.067 655.02 163.818 654.814 163.174 653.916C162.531 653.019 162.737 651.769 163.634 651.126L165.965 654.377ZM154.533 658.217C155.375 657.502 156.637 657.606 157.352 658.448C158.066 659.29 157.963 660.553 157.12 661.267L154.533 658.217ZM148.925 668.883C148.153 669.672 146.886 669.686 146.097 668.913C145.308 668.141 145.294 666.875 146.067 666.085L148.925 668.883ZM138.422 674.748C139.107 673.882 140.365 673.735 141.231 674.42C142.098 675.105 142.245 676.363 141.56 677.229L138.422 674.748ZM135.177 686.367C134.602 687.31 133.371 687.608 132.428 687.033C131.485 686.458 131.187 685.227 131.762 684.284L135.177 686.367ZM126.388 694.619C126.827 693.605 128.004 693.139 129.018 693.577C130.032 694.016 130.498 695.193 130.059 696.207L126.388 694.619ZM126.475 706.652C126.202 707.722 125.114 708.369 124.043 708.097C122.973 707.824 122.326 706.735 122.599 705.665L126.475 706.652ZM120.72 717.229C120.797 716.127 121.752 715.296 122.854 715.372C123.956 715.449 124.787 716.404 124.71 717.506L120.72 717.229ZM125.028 728.469C125.171 729.564 124.4 730.569 123.305 730.712C122.21 730.856 121.205 730.085 121.062 728.989L125.028 728.469ZM123.827 740.442C123.453 739.403 123.992 738.257 125.032 737.883C126.071 737.509 127.217 738.049 127.591 739.088L123.827 740.442ZM667.563 495.803C667.756 497.758 667.885 499.682 667.95 501.574L663.952 501.711C663.89 499.907 663.768 498.069 663.583 496.197L667.563 495.803ZM667.554 512.883C667.135 516.748 666.426 520.465 665.44 524.038L661.584 522.975C662.511 519.613 663.181 516.108 663.577 512.452L667.554 512.883ZM661.497 534.705C659.88 538.144 657.981 541.424 655.819 544.552L652.528 542.277C654.569 539.325 656.357 536.236 657.877 533.003L661.497 534.705ZM648.681 553.366C646.142 556.074 643.385 558.647 640.427 561.093L637.877 558.01C640.715 555.664 643.348 553.206 645.763 550.63L648.681 553.366ZM631.369 567.793C628.313 569.823 625.101 571.753 621.748 573.587L619.829 570.077C623.09 568.294 626.203 566.423 629.156 564.461L631.369 567.793ZM611.728 578.603C608.398 580.129 604.958 581.58 601.418 582.96L599.966 579.232C603.439 577.879 606.807 576.459 610.06 574.967L611.728 578.603ZM590.893 586.757C587.408 587.922 583.843 589.027 580.206 590.077L579.097 586.234C582.685 585.198 586.197 584.109 589.626 582.963L590.893 586.757ZM569.49 592.961C565.937 593.852 562.327 594.696 558.666 595.496L557.812 591.589C561.436 590.797 565.006 589.962 568.517 589.081L569.49 592.961ZM547.757 597.726C544.138 598.417 540.478 599.069 536.782 599.685L536.125 595.74C539.791 595.128 543.42 594.482 547.007 593.797L547.757 597.726ZM525.829 601.394C522.187 601.924 518.518 602.423 514.827 602.892L514.323 598.924C517.991 598.458 521.636 597.962 525.252 597.435L525.829 601.394ZM503.788 604.202C500.122 604.607 496.439 604.986 492.746 605.34L492.365 601.359C496.039 601.006 499.702 600.629 503.348 600.226L503.788 604.202ZM481.697 606.326C478.012 606.632 474.321 606.914 470.63 607.177L470.347 603.187C474.023 602.925 477.698 602.644 481.367 602.34L481.697 606.326ZM459.568 607.904C455.868 608.129 452.172 608.335 448.487 608.524L448.282 604.529C451.956 604.341 455.639 604.135 459.325 603.912L459.568 607.904ZM437.406 609.047C433.702 609.207 430.013 609.352 426.345 609.484L426.201 605.486C429.861 605.355 433.54 605.21 437.233 605.051L437.406 609.047ZM415.258 609.848C411.53 609.959 407.829 610.058 404.162 610.149L404.063 606.15C407.724 606.06 411.418 605.96 415.139 605.849L415.258 609.848ZM393.091 610.398C389.369 610.474 385.689 610.543 382.058 610.607L381.988 606.608C385.616 606.544 389.291 606.475 393.009 606.399L393.091 610.398ZM370.952 610.792C367.187 610.852 363.483 610.909 359.853 610.967L359.79 606.967C363.422 606.91 367.123 606.853 370.888 606.793L370.952 610.792ZM348.777 611.149C344.992 611.215 341.303 611.285 337.72 611.363L337.633 607.364C341.224 607.286 344.918 607.216 348.707 607.15L348.777 611.149ZM326.674 611.643C322.832 611.757 319.146 611.886 315.629 612.036L315.458 608.04C318.996 607.888 322.701 607.759 326.556 607.645L326.674 611.643ZM304.594 612.624C302.741 612.746 300.955 612.878 299.239 613.02L298.908 609.034C300.649 608.889 302.458 608.756 304.331 608.633L304.594 612.624ZM299.239 613.02C297.318 613.18 295.414 613.35 293.528 613.531L293.146 609.549C295.049 609.367 296.97 609.195 298.908 609.034L299.239 613.02ZM282.288 614.755C278.481 615.221 274.751 615.73 271.097 616.281L270.501 612.326C274.192 611.769 277.959 611.255 281.803 610.785L282.288 614.755ZM259.959 618.133C256.169 618.822 252.467 619.559 248.853 620.34L248.008 616.431C251.666 615.64 255.411 614.895 259.243 614.197L259.959 618.133ZM237.842 622.923C234.109 623.87 230.479 624.867 226.949 625.91L225.816 622.074C229.396 621.016 233.076 620.006 236.858 619.046L237.842 622.923ZM216.204 629.33C212.547 630.581 209.012 631.885 205.595 633.236L204.124 629.516C207.6 628.141 211.195 626.817 214.908 625.546L216.204 629.33ZM195.202 637.654C191.688 639.258 188.318 640.916 185.089 642.621L183.221 639.083C186.52 637.342 189.959 635.651 193.54 634.016L195.202 637.654ZM175.334 648.169C172.038 650.189 168.916 652.261 165.965 654.377L163.634 651.126C166.666 648.952 169.869 646.827 173.244 644.759L175.334 648.169ZM157.12 661.267C154.176 663.764 151.447 666.307 148.925 668.883L146.067 666.085C148.677 663.418 151.498 660.791 154.533 658.217L157.12 661.267ZM141.56 677.229C139.168 680.254 137.044 683.305 135.177 686.367L131.762 684.284C133.716 681.08 135.934 677.895 138.422 674.748L141.56 677.229ZM130.059 696.207C128.544 699.709 127.354 703.199 126.475 706.652L122.599 705.665C123.532 702 124.792 698.309 126.388 694.619L130.059 696.207ZM124.71 717.506C124.45 721.251 124.562 724.917 125.028 728.469L121.062 728.989C120.56 725.167 120.441 721.234 120.72 717.229L124.71 717.506ZM127.591 739.088C128.209 740.807 128.92 742.486 129.721 744.119L126.129 745.881C125.263 744.114 124.495 742.299 123.827 740.442L127.591 739.088Z" fill="white" />
                <circle cx="97.5" cy="97.5" r="97.5" fill="url(#pattern4)" />
                <circle cx="97.5" cy="780.5" r="97.5" fill="url(#pattern5)" />
                <circle cx="696.5" cy="478.5" r="97.5" fill="url(#pattern6)" />
                <defs>
                    <pattern id="pattern4" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image4" transform="translate(-0.2502) scale(0.000798085)" />
                    </pattern>
                    <pattern id="pattern5" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image5" transform="translate(-0.390995) scale(0.000947867)" />
                    </pattern>
                    <pattern id="pattern6" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image6" transform="translate(0 -0.248848) scale(0.00115207)" />
                    </pattern>
                    <image id="image4" width="1880" height="1253" href="<?= $assets_url ?>/img/timeline-1.jpg" />
                    <image id="image5" width="1880" height="1055" href="<?= $assets_url ?>/img/timeline-3.jpg" />
                    <image id="image6" width="868" height="1300" href="<?= $assets_url ?>/img/timeline-2.jpg" />
                </defs>
            </svg>
            <svg class="timeline__svg timeline__svg--small" width="124" height="629" viewBox="0 0 124 629" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M59 113V362" stroke="white" stroke-linecap="round" stroke-dasharray="5 5" />
                <path d="M59 362V611" stroke="white" stroke-linecap="round" stroke-dasharray="5 5" />
                <circle cx="61.7903" cy="61.7903" r="59.7903" fill="url(#pattern7)" stroke="#101F42" stroke-width="4" />
                <circle cx="61.7903" cy="317.79" r="59.7903" fill="url(#pattern8)" stroke="#101F42" stroke-width="4" />
                <circle cx="61.7903" cy="566.79" r="59.7903" fill="url(#pattern9)" stroke="#101F42" stroke-width="4" />
                <defs>
                    <pattern id="pattern7" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image7" transform="translate(-0.2502) scale(0.000798085)" />
                    </pattern>
                    <pattern id="pattern8" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image8" transform="translate(-0.390995) scale(0.000947867)" />
                    </pattern>
                    <pattern id="pattern9" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image9" transform="translate(0 -0.248848) scale(0.00115207)" />
                    </pattern>
                    <image id="image7" width="1880" height="1253" href="<?= $assets_url ?>/img/timeline-1.jpg" />
                    <image id="image8" width="1880" height="1055" href="<?= $assets_url ?>/img/timeline-3.jpg" />
                    <image id="image9" width="868" height="1300" href="<?= $assets_url ?>/img/timeline-2.jpg" />
                </defs>
            </svg>
            <div class="timeline__text timeline__text--first">
                <h3 class="timeline__text-title">FROM THE VERY START</h3>
                <p class="timeline__text-descr">We opened our company at 02.05.2000 and launched sucessfully We opened
                    our company at 02.05.2000 and launched sucessfully</p>
            </div>
            <div class="timeline__text timeline__text--second">
                <h3 class="timeline__text-title">STEP BY STEP GROWED</h3>
                <p class="timeline__text-descr">We opened our company at 02.05.2000 and launched sucessfully We opened
                    our company at 02.05.2000 and launched sucessfully</p>
            </div>
            <div class="timeline__text timeline__text--third">
                <h3 class="timeline__text-title">AND NOW WE’RE HERE</h3>
                <p class="timeline__text-descr">We opened our company at 02.05.2000 and launched sucessfully We opened
                    our company at 02.05.2000 and launched sucessfully</p>
            </div>
        </div>
    </section>
    <!-- <object
                class="timeline__svg timeline__svg--small"
                data="img/small.svg"
                type="image/svg+xml"
            ></object> -->
    <section class="vision">
        <div class="container vision__wrapper">
            <div class="vision__left">
                <h2 class="vision__title">Our Vision & Values</h2>
                <ol class="vision__list">
                    <li class="vision__item">With personal profile you can make a good impression to the people, who
                        searching for a good specialist. Also you can gain a lot of good things every month!
                    </li>
                    <li class="vision__item">With personal profile you can make a good impression to the people, who
                        searching for a good specialist. Also you can gain a lot of good things every month!
                    </li>
                    <li class="vision__item">With personal profile you can make a good impression to the people, who
                        searching for a good specialist. Also you can gain a lot of good things every month!
                    </li>
                    <li class="vision__item">With personal profile you can make a good impression to the people, who
                        searching for a good specialist. Also you can gain a lot of good things every month!
                    </li>
                </ol>
            </div>
            <div class="vision__right">
                <img src="<?= $assets_url ?>/img/vision-1.png" alt="" class="vision-f">
                <img src="<?= $assets_url ?>/img/vision-2.png" alt="" class="vision-e">
                <img src="<?= $assets_url ?>/img/vision-3.png" alt="" class="vision-r">
                <img src="<?= $assets_url ?>/img/vision-4.png" alt="" class="vision-v">
                <img src="<?= $assets_url ?>/img/vision-5.png" alt="" class="vision-s">
                <img src="<?= $assets_url ?>/img/vision-6.png" alt="" class="vision-b">
                <img src="<?= $assets_url ?>/img/vision-7.png" alt="" class="vision-q">
            </div>
        </div>
    </section>
    <section class="stories">
        <div class="container">
            <h2 class="stories__title">Success Stories</h2>
            <div class="swiper stories__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?= $assets_url ?>/img/stories-1.jpg" alt="" class="stories__img">
                        <p class="stories__name">Story Name</p>
                        <p class="stories__descr">The event description The event description The event description</p>
                    </div>
                    <div class="swiper-slide"><img src="<?= $assets_url ?>/img/stories-1.jpg" alt="" class="stories__img">
                        <p class="stories__name">Story Name</p>
                        <p class="stories__descr">The event description The event description The event description</p>
                    </div>
                    <div class="swiper-slide"><img src="<?= $assets_url ?>/img/stories-1.jpg" alt="" class="stories__img">
                        <p class="stories__name">Story Name</p>
                        <p class="stories__descr">The event description The event description The event description</p>
                    </div>
                    <div class="swiper-slide"><img src="<?= $assets_url ?>/img/stories-1.jpg" alt="" class="stories__img">
                        <p class="stories__name">Story Name</p>
                        <p class="stories__descr">The event description The event description The event description</p>
                    </div>
                    <div class="swiper-slide"><img src="<?= $assets_url ?>/img/stories-1.jpg" alt="" class="stories__img">
                        <p class="stories__name">Story Name</p>
                        <p class="stories__descr">The event description The event description The event description</p>
                    </div>
                </div>
                <div class="stories-pagination"></div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>