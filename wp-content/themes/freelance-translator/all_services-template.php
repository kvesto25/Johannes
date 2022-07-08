<?php
/*
* Template Name: All-services template
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

<section class="main-section">
	<div class="container container--big container--nopaddings">
		<div class="main-section__wrapper">
			<div class="main-section__left main-section__left--about-us">
				<h2 class="main-section__title">
					A Perfect translation of your texts in 7 steps
				</h2>
				<p class="main-section__description main-section__description--about-us">
					We have an average rating of 9.3 out of 10 based on over 600 ratings.
					We will gladly help you reach more people by making your message
					legible to them.
				</p>
			</div>
			<div class="swiper main-section__slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="<?= $assets_url ?>/img/main-section-all-services-1.jpg" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="<?= $assets_url ?>/img/main-section-all-services-2.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div id="app">
	<div class="services">
		<div class="container services__wrapper">
			<ul class="services__list">
				<li class="service">
					<h3 class="service__title service__title--cog">Our All Disciplines</h3>
					<ul class="service__list">
						<li class="service__elem"><a href="">Document Translations</a></li>
						<li class="service__elem"><a href="">Financial Translations</a></li>
						<li class="service__elem"><a href="">Medical Translations</a></li>
						<li class="service__elem"><a href="">Legal Translations</a></li>
						<li class="service__elem"><a href="">Marketing Translations</a></li>
						<li class="service__elem"><a href="">Urgent Translations</a></li>
					</ul>
				</li>
				<li class="service">
					<h3 class="service__title">Certified Translations</h3>
					<ul class="service__list">
						<li class="service__elem"><a href="">Birth Certificate</a></li>
						<li class="service__elem"><a href="">Marriage Certificate</a></li>
						<li class="service__elem"><a href="">School Diploma</a></li>
						<li class="service__elem"><a href="">Contracts</a></li>
						<li class="service__elem">
							<a href="">Other Documents & Certificates</a>
						</li>
					</ul>
				</li>
				<li class="service">
					<h3 class="service__title">About Us</h3>
					<ul class="service__list">
						<li class="service__elem"><a href="">Our Story</a></li>
						<li class="service__elem"><a href="">Our Vision & Values</a></li>
						<li class="service__elem"><a href="">Our Success Stories</a></li>
						<li class="service__elem"><a href="">Our Locations</a></li>
					</ul>
				</li>
				<li class="service">
					<h3 class="service__title">Magazine</h3>
					<ul class="service__list">
						<li class="service__elem"><a href="">Featured Articles</a></li>
						<li class="service__elem"><a href="">Featured Articles</a></li>
						<li class="service__elem"><a href="">Featured Articles</a></li>
						<li class="service__elem"><a href="">Featured Articles</a></li>
					</ul>
				</li>
				<li class="service">
					<h3 class="service__title">Specialisation</h3>
					<ul class="service__list">
						<li class="service__elem"><a href="">Skilled Immigration</a></li>
						<li class="service__elem"><a href="">Professional Recognition</a></li>
					</ul>
				</li>
				<li class="service">
					<h3 class="service__title">Digital</h3>
					<ul class="service__list">
						<li class="service__elem"><a href="">Blogs</a></li>
						<li class="service__elem"><a href="">SEO</a></li>
						<li class="service__elem"><a href="">Websites</a></li>
						<li class="service__elem"><a href="">E-Commerce</a></li>
						<li class="service__elem"><a href="">Others</a></li>
					</ul>
				</li>
			</ul>
			<ul class="services__list">
				<li class="service">
					<h3 class="service__title service__title--lang">Lanuages</h3>
					<ul class="service__list">
						<li class="service__elem"><a href="">English</a></li>
						<li class="service__elem"><a href="">German</a></li>
						<li class="service__elem"><a href="">French</a></li>
						<li class="service__elem"><a href="">Italian</a></li>
					</ul>
				</li>
				<li class="service">
					<h3 class="service__title">European</h3>
					<ul class="service__list">
						<li class="service__elem"><a href="">Spanish</a></li>
						<li class="service__elem"><a href="">Tamil</a></li>
						<li class="service__elem"><a href="">Arabic</a></li>
						<li class="service__elem"><a href="">Ukrainian</a></li>
						<li class="service__elem"><a href="">Hindi</a></li>
					</ul>
				</li>
				<li class="service">
					<h3 class="service__title">Asian</h3>
					<ul class="service__list">
						<li class="service__elem"><a href="">Polish</a></li>
						<li class="service__elem"><a href="">Portugese</a></li>
						<li class="service__elem"><a href="">Chinese</a></li>
						<li class="service__elem"><a href="">Russian</a></li>
					</ul>
				</li>
			</ul>
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