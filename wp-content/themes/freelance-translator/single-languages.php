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

<section class="main-section main-section--big main-section--chinese-translations" style="background: url(<?=get_the_post_thumbnail_url($id)?>)">
	<h2 class="main-section__title main-section__title--big"><?=get_the_title();?></h2>
</section>

<div class="bg-wrapper">
	<div class="bg-wrapper__img">
		<img src="<?= $assets_url ?>/img/chinese-bg.png" alt="" />
	</div>
	<section class="translations-info">
		<div class="container translations-info__wrapper">
			<div class="translations-info__img">
				<img src="<?=$fields['block_from_subpage']['image_subpage']['sizes']['medium']?>" alt="" />
			</div>
			<div class="translations-info__content">
				<h2 class="translations-info__title"><?=$fields['block_from_subpage']['title_subpage']?></h2>
				<div class="translations-info__text">
                    <?=$fields['block_from_subpage']['small_description_subpage']?>
				</div>
				<a href="<?=$fields['block_from_subpage']['link_to_subpage']?>" class="translations-info__btn btn btn--tomato">
					Learn more
				</a>
			</div>
		</div>
	</section>
	<section class="speciality">
		<div class="speciality__left speciality__left--red">
			<h3 class="speciality__title"><?=$fields['list_block']['title_list_block']?></h3>
			<ul class="speciality__list">
                <?php
                foreach ($fields['list_block']['list_elements'] as $list_element){
                    echo '<li class="speciality__item speciality__item--blue">' . $list_element['test'] . '</li>';
                }
                ?>
			</ul>
		</div>
		<div class="speciality__right">
			<img src="<?=$fields['list_block']['image_list_block']['url']?>" alt="Speciality" class="speciality__img" />
		</div>
	</section>
	<div class="description description--lang">
		<div class="container">
			<div class="description__wrapper description__wrapper--big">
                <?=get_the_content()?>
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