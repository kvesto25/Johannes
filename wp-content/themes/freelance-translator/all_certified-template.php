<?php
/*
* Template Name: All-certified template
*/
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
$id = get_the_ID();
$fields = get_fields($id);
$desc = $fields['description'];
?>
<?php get_header(); ?>

<script>
	let ajax_url = "<?= admin_url('admin-ajax.php'); ?>";
</script>

<section class="main-section main-section--big main-section--disciplines">
	<h2 class="main-section__title main-section__title--big">All Certified</h2>
</section>

<div class="description">
	<div class="container">
		<div class="description__wrapper">
			<h2 class="description__title">
				<?= $desc['title'] ?>
			</h2>
			<p class="description__text">
				<?= $desc['text'] ?>
			</p>
		</div>
	</div>
</div>

<div id="app">
	<template>
		<info-table :action="'get_certificates'" :big="true"></info-table>
	</template>
	<!-- <script
        type="application/javascript"
        src="js/modules/infoTable.js"
      ></script> -->
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