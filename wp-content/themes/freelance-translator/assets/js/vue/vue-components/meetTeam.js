const tl = gsap.timeline({
	defaults: { duration: 0.75, ease: 'Power3.easeOut' },
});
const tl2 = gsap.timeline({
	defaults: { duration: 0.75, ease: 'Power3.easeOut' },
});
const tl3 = gsap.timeline({
	defaults: { duration: 0.75, ease: 'Power3.easeOut' },
});

Vue.component('meetTeam', {
	data() {
		return {
			team: [],
			nextBtn: {},
			showNextBtn: true,
			currenPersonId: 0,
			isShowSlider: false,
			sliderIsOpen: false,
		};
	},

	template: `<section class="meet-team">
	<h2 class="meet-team__title">Meet our team</h2>

	<div
		class="meet-team__wrapper"
		:class="{'open':sliderIsOpen}"
	>
		<div class="meet-team__content">
			<div class="meet-team__top">
				<div
					class="meet-team__person meet-team__person--big"
					v-for="(item, index) in getBigPerson"
					@click="openSlider(item.personId)"
				>
					<p
						class="meet-team__photo"
						:class="{'meet-team__photo--elips meet-team__photo--up':item.personSubtitle==='CEO'}"
					>
						<img
							:src="item.personImageUrl"
							alt=""
						/>
					</p>

					<p class="meet-team__name">{{item.personName}}</p>
					<p class="meet-team__position">{{item.personSubtitle}}</p>
				</div>
			</div>

			<div class="meet-team__bottom">
				<div
					class="meet-team__person meet-team__person--small"
					v-for="(item, index) in getSmallPerson"
					@click="openSlider(item.personId)"
				>
					<p class="meet-team__photo meet-team__photo--small">
						<img
							:src="item.personImageUrl"
							alt=""
						/>
					</p>

					<p class="meet-team__name meet-team__name--small">
						{{item.personName}}
					</p>
					<p class="meet-team__position meet-team__position--small">
						{{item.personSubtitle}}
					</p>
				</div>
			</div>
		</div>

		<div v-if="isShowSlider" class="meet-team__slider">
			<button
				class="meet-team__close-btn"
				@click="closeSlider()"
			>
				<svg
					width="154"
					height="24"
					viewBox="0 0 154 24"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M0.939346 10.9393C0.353546 11.5251 0.353546 12.4749 0.939346 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939346 10.9393ZM154 10.5L2 10.5V13.5L154 13.5V10.5Z"
						fill="#F24C4C"
					/>
				</svg>
			</button>
			<div  class="meet-team__slide">
				<a
					:href=" team[currenPersonId].personMoreInfo.link"
					class="meet-team__slide-left"
				>
					<p
						class="meet-team__slide-photo"
						:class="{'meet-team__slide-photo--elips': team[currenPersonId].personSubtitle==='CEO'}"
					>
						<img
							:src="team[currenPersonId].personMoreInfo.bigImageUrl"
						/>
					</p>

					<p class="meet-team__slide-name">{{ team[currenPersonId].personName}}</p>
					<p class="meet-team__slide-position">
						{{ team[currenPersonId].personSubtitle}}
					</p>
				</a>
				<div class="meet-team__slide-right">
					<p class="meet-team__text reviews__text">
						<!-- <span class="reviews__text--red"
							>is the best i???ve ever cooperate with!</span
						> -->
						{{ team[currenPersonId].personMoreInfo.description}}
					</p>
				</div>
			</div>
			<div
				v-if="showNextBtn"
				class="meet-team__next-slide"
				@click="nextSlide()"
			>
				<p class="meet-team__photo">
					<img
						:src="nextBtn.imgUrl"
						alt=""
					/>
				</p>

				<p class="meet-team__name">{{nextBtn.name}}</p>
				<p class="meet-team__position">{{nextBtn.position}}</p>
			</div>
		</div>
	</div>
</section>
  `,
	created() {
		this.getPersons();
	},
	computed: {
		getBigPerson() {
			const res = [];
			this.team.forEach(pers => {
				if (pers.personSubtitle === 'Co-founder' || pers.personSubtitle === 'CEO') {
					res.push(pers);
				}
			});
			return res;
		},
		getSmallPerson() {
			const res = [];
			this.team.forEach(pers => {
				if (pers.personSubtitle !== 'Co-founder' && pers.personSubtitle !== 'CEO') {
					res.push(pers);
				}
			});
			return res;
		},
	},
	methods: {
		getPersons() {
			let params = new URLSearchParams();
			params.append('action', 'get_users');
			axios.post(ajax_url, params).then(res => {
				this.team = res.data;
				this.nextBtn = {
					imgUrl: this.team[1].personImageUrl,
					name: this.team[1].personName,
					position: this.team[1].personSubtitle,
				};
			});
		},

		getPersonsByIdRequest() {
			let params = new URLSearchParams();
			params.append('action', 'get_user_by_id');
			params.append('id', this.team[this.currenPersonId].id);
			return axios.post(ajax_url, params);
		},

		getPersonsById(res) {
			const data = res.data.data;
			this.team[this.currenPersonId].personMoreInfo = {
				bigImageUrl: data.bigImageUrl,
				description: data.description,
				link: data.link,
			};
			this.team[this.currenPersonId].isHaveMoreInfo = true;
		},

		setPerson(callback) {
			if (this.team[this.currenPersonId].personMoreInfo.description == '') {
				this.getPersonsByIdRequest().then(res => {
					this.getPersonsById(res);
					this.nextBtnUpdate();
					callback();
				});
			} else {
				this.nextBtnUpdate();
				callback();
			}
		},

		nextBtnUpdate() {
			if (this.team[this.currenPersonId + 1]) {
				this.showNextBtn = true;
				this.nextBtn.imgUrl = this.team[this.currenPersonId + 1].personImageUrl;
				this.nextBtn.name = this.team[this.currenPersonId + 1].personName;
				this.nextBtn.position = this.team[this.currenPersonId + 1].personSubtitle;
			} else {
				this.showNextBtn = false;
			}
		},

		nextSlide() {
			const nextSlide = document.querySelector('.meet-team__next-slide'),
				content = document.querySelector('.meet-team__slide');
			tl.to(nextSlide, {
				right: '-300px',
			}).to(
				content,
				{
					x: '-2000px',

					duration: 0.4,
				},
				'<'
			);
			this.currenPersonId++;

			this.setPerson(() => {
				tl.to(nextSlide, {
					right: '0px',
					duration: 0.4,
				}).to(
					content,
					{
						x: '0',
						duration: 0.4,
					},
					'<'
				);
			});
		},
		openSlider(id) {
			this.currenPersonId = id;

			this.setPerson(() => {
				this.isShowSlider = true;
				const persons = document.querySelectorAll('.meet-team__person'),
					nextSlide = document.querySelector('.meet-team__next-slide'),
					wrapper = document.querySelector('.meet-team__wrapper');

				tl.staggerTo([...persons], 0.5, { y: 20, opacity: 0, pointerEvents: 'none' }, 0.2).call(
					() => {
						wrapper.classList.add('open');
					},
					'',
					'>'
				);
				tl2.to(nextSlide, {
					right: '0',
					duration: 0.4,
				});
			});
		},
		closeSlider() {
			const persons = document.querySelectorAll('.meet-team__person'),
				wrapper = document.querySelector('.meet-team__wrapper');
			tl3
				.call(
					() => {
						wrapper.classList.remove('open');
					},
					'',
					'>'
				)
				.staggerTo([...persons], 0.5, { y: 0, opacity: 1, pointerEvents: 'auto' }, 0.2, '>+1');
		},
	},
});
