<?php
/*
* Template Name: Rates template
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

<section class="main-section main-section--rates">
	<div class="container container--big container--nopaddings">
		<div class="main-section__wrapper main-section__wrapper--rates">
			<div class="main-section__left main-section__left--rates">
				<h2 class="main-section__title">
					<?=$fields['header_block']['title']?>
				</h2>
				<p class="main-section__description main-section__description--rates">
					<?=$fields['header_block']['small_description']?>
				</p>
			</div>
		</div>
	</div>
</section>




<div id="app">
	<template>
		<calculation></calculation>
	</template>
	<!-- <script
        type="application/javascript"
        src="js/modules/calculation.js"
      ></script> -->
	<section class="benefits benefits--blue">
		<div class="container">
			<h2 class="benefits__title">
                <?=$fields['list_block']['title']?>
			</h2>
			<ul class="benefits__list">
                <?php
                foreach ($fields['list_block']['list'] as $el){
                ?>
				<li class="benefits__item"><?=$el['item']?></li>
                <?php
                }
                ?>
			</ul>
		</div>
	</section>
	<section class="translation-rates">
		<div class="container">
			<?=get_the_content();?>
		</div>
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