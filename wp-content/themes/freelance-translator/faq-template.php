<?php
/*
* Template Name: FAQ template
*/
$template_url = get_template_directory_uri();
$assets_url = $template_url . '/assets';
$id = get_the_ID();
$fields = get_fields($id);
$pricing = $fields['pricing'];
$orders = $fields['orders'];
$service = $fields['service'];
?>
<?php get_header(); ?>
<script>
	let ajax_url = "<?= admin_url('admin-ajax.php'); ?>";
</script>
<section class="main-section main-section--big main-section--faq">
	<h2 class="main-section__title main-section__title--big"><?= get_the_title(); ?></h2>
</section>


<div class="faq-spollers">
	<div class="container">
		<h2 class="faq-title faq-title--red">Pricing</h2>
		<div data-spollers data-one-spoller class="spollers">
			<?php
			foreach ($pricing as $price) {
				echo '<div class="spollers__item">
				<button type="button" data-spoller class="spollers__title spollers__title--red">'
					. $price['title'] .
					'</button>
				<div class="spollers__body">'
					. $price['descr'] .
					'</div>
			</div>';
			};
			?>
		</div>
	</div>
</div>
<div class="faq-spollers">
	<div class="container">
		<h2 class="faq-title">Orders & Payment</h2>
		<div data-spollers data-one-spoller class="spollers">
			<?php
			foreach ($orders as $order) {
				echo '<div class="spollers__item">
				<button type="button" data-spoller class="spollers__title">'
					. $order['title'] .
					'</button>
				<div class="spollers__body">'
					. $order['descr'] .
					'</div>
			</div>';
			};
			?>
		</div>
	</div>
</div>
<div class="faq-spollers">
	<div class="container">
		<h2 class="faq-title faq-title--red">Our Service</h2>
		<div data-spollers data-one-spoller class="spollers">
			<?php
			foreach ($service as $serv) {
				echo '<div class="spollers__item">
				<button type="button" data-spoller class="spollers__title spollers__title--red">'
					. $serv['title'] .
					'</button>
				<div class="spollers__body">'
					. $serv['descr'] .
					'</div>
			</div>';
			};
			?>
		</div>
	</div>
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