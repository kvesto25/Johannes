Vue.component('allLanguages', {
	data() {
		return {
			languages: [],
		};
	},

	template: `
	<div class="information-cards-section">
	<div class="container information-cards-section__wrapper">
		<div v-for='lang in languages' class="information-card">
			<div class="information-card__header">
				<img :src="lang.image_url" alt="" class="information-card__img" />
				<div class="information-card__info">
					<h3 class="information-card__title">{{lang.title}}</h3>
					<a :href="lang.link" class="information-card__link">To language page</a>
				</div>
			</div>
			<p class="information-card__text">
				{{lang.small_description}}
			</p>
		</div>
	</div>
</div>
  `,
	created() {
		let params = new URLSearchParams();
		params.append('action', 'get_languages');
		axios.post(ajax_url, params).then(res => {
			this.languages = res.data;
		});
	},
});
