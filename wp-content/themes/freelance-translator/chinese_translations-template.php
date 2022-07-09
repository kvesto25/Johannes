<?php
/*
* Template Name: Chinese-Translations template
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

<section class="main-section main-section--big main-section--chinese-translations">
	<h2 class="main-section__title main-section__title--big">Chinese Translations</h2>
</section>

<div class="bg-wrapper">
	<div class="bg-wrapper__img">
		<img src="<?= $assets_url ?>/img/chinese-bg.png" alt="" />
	</div>
	<section class="translations-info">
		<div class="container translations-info__wrapper">
			<div class="translations-info__img">
				<img src="<?= $assets_url ?>/img/chines-translation-info.jpg" alt="" />
			</div>
			<div class="translations-info__content">
				<h2 class="translations-info__title">Chinese Translations</h2>
				<div class="translations-info__text">
					Schneiders-Sprach-Service (SSS) is an owner-operated translation
					agency based in Berlin. As a Latin America specialist,
					translator and interpreter for Spanish and Portuguese, CEO and
					Founder Sabine Schneider founded SSS over 30 years ago, and
					since then has served thousands of clients in Germany and around
					the world. With the teamwork of our robust internal team and the
					cooperation of our global network of translators, our knowledge
					is vast, and our reach is wide.
				</div>
				<div class="translations-info__btn btn btn--tomato">
					Learn more
				</div>
			</div>
		</div>
	</section>
	<section class="speciality">
		<div class="speciality__left speciality__left--red">
			<h3 class="speciality__title">Areas of Speciality</h3>
			<ul class="speciality__list">
				<li class="speciality__item speciality__item--blue">
					travel and tourism
				</li>
				<li class="speciality__item speciality__item--blue">Legal</li>
				<li class="speciality__item speciality__item--blue">
					environment
				</li>
				<li class="speciality__item speciality__item--blue">chemistry</li>
				<li class="speciality__item speciality__item--blue">
					architecture
				</li>
				<li class="speciality__item speciality__item--blue">culture</li>
				<li class="speciality__item speciality__item--blue">fmcg</li>
				<li class="speciality__item speciality__item--blue">
					bank and finance
				</li>
				<li class="speciality__item speciality__item--blue">Technical</li>
				<li class="speciality__item speciality__item--blue">
					Healthcare
				</li>
			</ul>
		</div>
		<div class="speciality__right">
			<img src="<?= $assets_url ?>/img/speciality-img.png" alt="Speciality" class="speciality__img" />
		</div>
	</section>
	<div class="description description--lang">
		<div class="container">
			<div class="description__wrapper description__wrapper--big">
				<h2 class="description__title description__title--start">
					Translation Agency for Professional Chinese Translations
				</h2>
				<p class="description__text description__text--start">
					Our agency is delighted to offer the professional translation of
					language documents into or from Chinese by veteran linguists and
					certified translators. All of our polyglots are native speakers
					of Chinese and practice the four-eyes principle, whereby two
					people review the work before being submitted back to you. Our
					professional services include the translation of a wide range of
					industries and specialist areas. In addition to German - Chinese
					translations, frequently requested language combinations are
					English - Chinese, French - Chinese, Spanish - Chinese, Chinese
					- Russian, and vice versa. These are the most common language
					combinations that our professional translators encounter on a
					daily basis. With regard to Chinese specialty subject areas, you
					have come to the right place!
				</p>
			</div>
		</div>
	</div>
	<section class="translation-contact-us">
		<div class="translation-contact-us__wrapper">
			<div class="translation-contact-us__inner">
				<h2 class="contact-us__title contact-us__title--small contact-us__title--red">
					Contact us
				</h2>
				<form action="" class="contact-us__form contact-us__form--clasic">
					<input type="text" name="" id="" class="contact-us__input" placeholder="Name" />

					<input type="tel" name="" id="" class="contact-us__input" placeholder="Phone Number" />

					<input type="email" name="" id="" class="contact-us__input" placeholder="Email" />

					<textarea name="" id="" class="contact-us__textarea" placeholder="Message:"></textarea>

					<button type="submit" class="btn btn--tomato contact-us__btn">
						Submit
					</button>
				</form>
			</div>
		</div>
	</section>
	<section class="contact-city">
		<div class="container">
			<h2 class="contact-city__title">
				Or get in contact with any of our global locations for more
				information!
			</h2>
			<ul class="contact-city__list contact-city__list--chinese">
				<li class="contact-city__elem">
					<p class="contact-city__photo">
						<img src="<?= $assets_url ?>/img/city-1.jpg" alt="" />
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
							<a href="tel:+0001234567890" class="contact-city__phone">+ (000) 123 -456 -78 - 90</a>
						</div>
						<div class="contact-city__grup">
							<p class="contact-city__subtitle">Email:</p>
							<a href="mailto:info@example.com" class="contact-city__email">Info@example.com</a>
						</div>
					</div>
				</li>
				<li class="contact-city__elem">
					<p class="contact-city__photo">
						<img src="<?= $assets_url ?>/img/city-2.jpg" alt="" />
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
							<a href="tel:+0001234567890" class="contact-city__phone">+ (000) 123 -456 -78 - 90</a>
						</div>
						<div class="contact-city__grup">
							<p class="contact-city__subtitle">Email:</p>
							<a href="mailto:info@example.com" class="contact-city__email">Info@example.com</a>
						</div>
					</div>
				</li>
			</ul>
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