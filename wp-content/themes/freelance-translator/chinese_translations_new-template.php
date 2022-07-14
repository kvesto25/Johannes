<?php
/*
* Template Name: Chinese-Translations-New template
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

	<div class="description">
		<div class="container">
			<div class="description__wrapper">
				<h2 class="description__title">
					Chinese Translations
				</h2>
				<p class="description__text">
					Schneiders-Sprach-Service (SSS) is an owner-operated translation
					agency based in Berlin. As a Latin America specialist,
					translator and interpreter for Spanish and Portuguese, CEO and
					Founder Sabine Schneider founded SSS over 30 years ago, and
					since then has served thousands of clients in Germany and around
					the world. With the teamwork of our robust internal team and the
					cooperation of our global network of translators, our knowledge
					is vast, and our reach is wide.
				</p>
			</div>
		</div>
	</div>

	<section class="translations-info">
		<div class="container translations-info__wrapper">
			<div class="translations-info__img">
				<img src="<?= $assets_url ?>/img/chines-translation-info.jpg" alt="" />
			</div>
			<div class="translations-info__content">
				<h2 class="translations-info__title">History of the Language</h2>
				<div class="translations-info__text">
					Chinese scholars and linguists alike classify all variations and styles of spoken Chinese as part of the Sino-Tibetan family. Despite the lack of supporting evidence and documentation available, it is believed that its origins date back to an original language called Proto-Sino-Tibetan over 7000 years ago. Due to its immense geographic size, China has always been a land of many languages and dialects. During the latter part of the Ming Dynasty (1368-1644), Mandarin emerged as the language of the ruling class. The later part of the Ming Dynasty saw the capital of China move from Nanjing to Beijing and remained as such through the Qing Dynasty (1644-1912). Since Mandarin is based on the Beijing dialect, it naturally became the official language of the country.

				</div>
				<h2 class="translations-info__title">History of the Language</h2>
				<div class="translations-info__text">
					About 1.3 billion people (one-fifth of the world) speak some form of Chinese, making it the language with the most native speakers. The Chinese language, spoken in the form of Standard Mandarin, is the official language in the largest part of mainland China and Taiwan. In the form of Standard Cantonese, there are 66 million speakers and is mainly spoken in the Guangdong province, is one of the two official languages of Hong Kong together with English, and in Macau together with Portuguese. Today, the Mandarin Chinese language is becoming a much more common language to study from primary school up to university.


				</div>
				<!-- <div class="translations-info__btn btn btn--tomato">
					Learn more
				</div> -->
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


	<div class="description">
		<div class="container">
			<div class="description__wrapper description__wrapper--big description__wrapper--pt">
				<h2 class="description__title">
					Translation Agency for Professional Chinese Translations
				</h2>
				<p class="description__text">
					Translation Agency for Professional Chinese Translations
					Our agency is delighted to offer the professional translation of language documents into or from Chinese by veteran linguists and certified translators. All of our polyglots are native speakers of Chinese and practice the four-eyes principle, whereby two people review the work before being submitted back to you.
				</p>
				<p class="description__text">
					Our professional services include the translation of a wide range of industries and specialist areas. In addition to German - Chinese translations, frequently requested language combinations are English - Chinese, French - Chinese, Spanish - Chinese, Chinese - Russian, and vice versa. These are the most common language combinations that our professional translators encounter on a daily basis. With regard to Chinese specialty subject areas, marketing texts, medical documents, legal documents, e-commerce product descriptions and technical instructions are most frequently requested. If this sounds like you, you have come to the right place!
				</p>

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


	<div class="description">
		<div class="container">
			<div class="description__wrapper description__wrapper--pt">
				<h2 class="description__title">
					Digital Translition
				</h2>
				<p class="description__text">
					The digital revolution has fundamentally transformed business and marketing strategies worldwide. As more information flows across multi-channel digital platforms, businesses must continuously publish content to support their social media, e-commerce stores, customer support services and even features or devices connected to the Internet of Things (IoT). Business-to-business (B2B) and business-to-consumer (B2C) services are facing a growing mandate for multilingual content that has been localised for specific world markets. With our digital translation services, enterprises can confidently develop a competitive online presence while extending their digital content for a global audience, ensuring they reach customers across the world.

				</p>
			</div>
		</div>
	</div>

	<div id="app">
		<getquote></getquote>
	</div>


	<section class="contact-city">
		<div class="container">
			<h2 class="contact-city__title contact-city__title--chinese">
				Or get in contact with any of our global locations for more
				information!
			</h2>
			<ul class="contact-city__list contact-city__list--chinese">
				<li class="contact-city__elem contact-city__elem--chinese">
					<p class="contact-city__name">Amsterdam</p>
					<p class="contact-city__photo">
						<img src="<?= $assets_url ?>/img/city-1.jpg" alt="" />
					</p>
				</li>
				<li class="contact-city__elem contact-city__elem--chinese">
					<p class="contact-city__name">Berlin</p>
					<p class="contact-city__photo">
						<img src="<?= $assets_url ?>/img/city-2.jpg" alt="" />
					</p>
				</li>
				<li class="contact-city__elem contact-city__elem--chinese">
					<p class="contact-city__name">Berlin</p>
					<p class="contact-city__photo">
						<img src="<?= $assets_url ?>/img/city-2.jpg" alt="" />
					</p>
				</li>
			</ul>
		</div>
	</section>
</div>


<?php get_footer(); ?>