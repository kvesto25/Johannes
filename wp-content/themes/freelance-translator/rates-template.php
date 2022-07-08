<?php
/*
* Template Name: Rates template
*/
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
$id = get_the_ID();
$fields = get_fields($id);
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
					Calculate the price for your translation
				</h2>
				<p class="main-section__description main-section__description--rates">
					Our clients’ average review score is 9.3, based on more than 600
					reviews. Our customer satisfaction serves as proof that we offer
					excellent translations at competitive rates.
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
				Professional Translation Agency with quality guarantee
			</h2>
			<ul class="benefits__list">
				<li class="benefits__item">Over than 10 years working</li>
				<li class="benefits__item">Professionaly professionals</li>
				<li class="benefits__item">Getting better every day</li>
				<li class="benefits__item">Step by step growing</li>
			</ul>
		</div>
	</section>
	<section class="translation-rates">
		<div class="container">
			<div class="breadcrumbs">
				<span>Home
					<svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L4.5 4.5L1 8" stroke="black" stroke-linecap="round" />
					</svg>
				</span>
				<span>Section 2
					<svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L4.5 4.5L1 8" stroke="black" stroke-linecap="round" />
					</svg></span>
				<span>Section 3</span>
			</div>
			<h2 class="translation-rates__title translation-rates__title--main">
				Translation rates
			</h2>
			<p class="translation-rates__text">
				A translation of a marketing or commercial text by one of our translators
				does exactly what it's supposed to do: win over your readers. We don't
				just translate a text word for word. Marketing translations require a fair
				amount of liberties to be taken in order to meet the needs and desires of
				your target audience abroad. While translating marketing texts, our
				translators may consult you about any cultural differences that need to be
				taken into account. As far as content goes, your translation will of
				course be identical to the source text, unless the briefing states
				otherwise. We are also experienced in providing SEO translations.
			</p>

			<table class="translation-rates__table">
				<colgroup>
					<col style="display: 'block'" />
					<col />
					<col />
				</colgroup>
				<thead class="translation-rates__table-head">
					<tr>
						<th>Regular Translitions</th>
						<th>General Quality Check</th>
						<th>Complete Quality check</th>
					</tr>
				</thead>
				<tbody class="translation-rates__table-body">
					<tr>
						<td>General</td>
						<td>€ 0,12</td>
						<td>€ 0,15</td>
					</tr>
					<tr>
						<td>General</td>
						<td>€ 0,12</td>
						<td>€ 0,15</td>
					</tr>
					<tr>
						<td>General</td>
						<td>€ 0,12</td>
						<td>€ 0,15</td>
					</tr>
					<tr>
						<td>General</td>
						<td>€ 0,12</td>
						<td>€ 0,15</td>
					</tr>
				</tbody>
			</table>

			<h3 class="translation-rates__title">A convincing marketing translation</h3>
			<p class="translation-rates__text">
				A translation of a marketing or commercial text by one of our translators
				does exactly what it's supposed to do: win over your readers.
				<span class="translation-rates__text--red">We don't just translate</span>
				a text word for word. Marketing translations require a fair amount of
				liberties to be taken in order to meet the needs and desires of your
				target audience abroad. While translating marketing texts, our translators
				may consult you about any cultural differences that need to be taken into
				account. As far as content goes, your translation will of course be
				identical to the source text, unless the briefing states otherwise. We are
				also experienced in providing SEO translations.
			</p>
			<h3 class="translation-rates__title">
				Some marketing translations that we provide on a regular basis include:
			</h3>
			<p class="translation-rates__text">
				Brochures, websites, catalogues, surveys, film material, presentations,
				marketing plans, newsletters, research papers, training materials, press
				releases and advertisements.
			</p>
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