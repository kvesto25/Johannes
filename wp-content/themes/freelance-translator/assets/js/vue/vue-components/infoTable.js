Vue.component('infoTable', {
	props: ['action', 'big'],
	data() {
		return {
			data: [],
		};
	},

	template: `
	<div class="information-cards-section">
	<div class="container information-cards-section__wrapper" :class="{'big':big}">
		<div v-for='val in data' class="information-card" :class="{'big':big}">
			<div class="information-card__header">
				<img v-if="val.image_url" :src="val.image_url" alt="" class="information-card__img" />
				<div class="information-card__info">
					<h3 class="information-card__title" :class="{'big':big}">{{val.title}}</h3>
					<a :href="val.link" class="information-card__link">To language page</a>
				</div>
			</div>
			<p class="information-card__text">
				{{val.small_description}}
			</p>
		</div>
	</div>
</div>
  `,
	created() {
		let params = new URLSearchParams();
		params.append('action', this.action);
		axios.post(ajax_url, params).then(res => {
			this.data = res.data;
		});
	},
});
