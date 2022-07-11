<?php
/*
* Template Name: Methods template
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

<section class="main-section main-section--methods">
	<div class="container container--big container--nopaddings">
		<div class="main-section__wrapper">
			<div class="main-section__left main-section__left--methods">
				<h2 class="main-section__title">
					A Perfect translation of your texts in 7 steps
				</h2>
				<p class="main-section__description">
					We have an average rating of 9.3 out of 10 based on over 600 ratings.
					We will gladly help you reach more people by making your message
					legible to them.
				</p>
			</div>
			<div class="swiper main-section__slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="<?= $assets_url ?>/img/main-section-methods-1.jpg" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="<?= $assets_url ?>/img/main-section-methods-2.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="app">
	<section class="steps">
		<div class="step">
			<div class="step__img step__img--cylinder">
				<img src="<?= $assets_url ?>/img/methods-1.jpg" alt="Step 1" />
			</div>
			<div class="step__content">
				<p class="step__number">STEP 1</p>
				<h3 class="step__title">Translation rates</h3>
				<p class="step__text">
					A translation of a marketing or commercial text by one of our
					translators does exactly what it's supposed to do: win over your
					readers. We don't just translate a text word for word. Marketing
					translations require a fair amount of liberties to be taken in order to
					meet the needs and desires of your target audience abroad.
					<a href="" class="step__link">While translating marketing texts.</a>
				</p>
			</div>
		</div>
		<div class="step">
			<div class="step__img">
				<img src="<?= $assets_url ?>/img/methods-1.jpg" alt="Step 1" />
			</div>
			<div class="step__content">
				<p class="step__number">STEP 1</p>
				<h3 class="step__title">Translation rates</h3>
				<p class="step__text">
					A translation of a marketing or commercial text by one of our
					translators does exactly what it's supposed to do: win over your
					readers. We don't just translate a text word for word. Marketing
					translations require a fair amount of liberties to be taken in order to
					meet the needs and desires of your target audience abroad.
					<a href="" class="step__link">While translating marketing texts.</a>
				</p>
			</div>
		</div>
		<div class="step">
			<div class="step__img">
				<img src="<?= $assets_url ?>/img/methods-1.jpg" alt="Step 1" />
			</div>
			<div class="step__content">
				<p class="step__number">STEP 1</p>
				<h3 class="step__title">Translation rates</h3>
				<p class="step__text">
					A translation of a marketing or commercial text by one of our
					translators does exactly what it's supposed to do: win over your
					readers. We don't just translate a text word for word. Marketing
					translations require a fair amount of liberties to be taken in order to
					meet the needs and desires of your target audience abroad.
					<a href="" class="step__link">While translating marketing texts.</a>
				</p>
			</div>
		</div>
		<div class="step">
			<div class="step__img">
				<img src="<?= $assets_url ?>/img/methods-1.jpg" alt="Step 1" />
			</div>
			<div class="step__content">
				<p class="step__number">STEP 1</p>
				<h3 class="step__title">Translation rates</h3>
				<p class="step__text">
					A translation of a marketing or commercial text by one of our
					translators does exactly what it's supposed to do: win over your
					readers. We don't just translate a text word for word. Marketing
					translations require a fair amount of liberties to be taken in order to
					meet the needs and desires of your target audience abroad.
					<a href="" class="step__link">While translating marketing texts.</a>
				</p>
			</div>
		</div>
		<div class="step">
			<div class="step__img">
				<img src="<?= $assets_url ?>/img/methods-1.jpg" alt="Step 1" />
			</div>
			<div class="step__content">
				<p class="step__number">STEP 1</p>
				<h3 class="step__title">Translation rates</h3>
				<p class="step__text">
					A translation of a marketing or commercial text by one of our
					translators does exactly what it's supposed to do: win over your
					readers. We don't just translate a text word for word. Marketing
					translations require a fair amount of liberties to be taken in order to
					meet the needs and desires of your target audience abroad.
					<a href="" class="step__link">While translating marketing texts.</a>
				</p>
			</div>
		</div>
		<div class="step">
			<div class="step__img">
				<img src="<?= $assets_url ?>/img/methods-1.jpg" alt="Step 1" />
			</div>
			<div class="step__content">
				<p class="step__number">STEP 1</p>
				<h3 class="step__title">Translation rates</h3>
				<p class="step__text">
					A translation of a marketing or commercial text by one of our
					translators does exactly what it's supposed to do: win over your
					readers. We don't just translate a text word for word. Marketing
					translations require a fair amount of liberties to be taken in order to
					meet the needs and desires of your target audience abroad.
					<a href="" class="step__link">While translating marketing texts.</a>
				</p>
			</div>
		</div>
		<div class="step">
			<div class="step__img step__img--cylinder">
				<img src="<?= $assets_url ?>/img/methods-1.jpg" alt="Step 1" />
			</div>
			<div class="step__content">
				<p class="step__number">STEP 1</p>
				<h3 class="step__title">Translation rates</h3>
				<p class="step__text">
					A translation of a marketing or commercial text by one of our
					translators does exactly what it's supposed to do: win over your
					readers. We don't just translate a text word for word. Marketing
					translations require a fair amount of liberties to be taken in order to
					meet the needs and desires of your target audience abroad.
					<a href="" class="step__link">While translating marketing texts.</a>
				</p>
			</div>
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