<?php
/*
* Template Name: Methods template
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

<section class="main-section main-section--methods">
	<div class="container container--big container--nopaddings">
		<div class="main-section__wrapper">
			<div class="main-section__left main-section__left--methods">
				<h2 class="main-section__title">
					<?=$fields['slider']['title']?>
				</h2>
				<p class="main-section__description">
                    <?=$fields['slider']['small_description']?>
				</p>
			</div>
			<div class="swiper main-section__slider">
				<div class="swiper-wrapper">
                    <?php
                    foreach ($fields['slider']['images'] as $image)
                    {
                    ?>
					<div class="swiper-slide">
						<img src="<?=$fields['image']['url']?>" alt="" />
					</div>
                    <?php
                    }
                    ?>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="app">
	<section class="steps">
        <?php
        $i = 0;
        foreach ($fields['step'] as $step){
            $i++;
        ?>
		<div class="step">
			<div class="step__img step__img--cylinder">
				<img src="<?=$step['image']['url']?>" alt="Step 1" />
			</div>
			<div class="step__content">
				<p class="step__number">STEP <?=$i?></p>
				<h3 class="step__title"><?=$step['title']?></h3>
				<p class="step__text">
                    <?=$step['description']?>
				</p>
			</div>
		</div>
        <?php
        }
        ?>
	</section>

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