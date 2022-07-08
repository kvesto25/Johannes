Vue.component('getquote', {
	data() {
		return {
			lang: [],
			serchLangFrom: '',
			isOpenLangFrom: false,

			serchLangTo: '',
			isOpenLangTo: false,

			isOpenFile: false,

			formData: {
				name: '',
				first_name: '',
				last_name: '',
				email: '',
				phone: '',
				translate_from: 'Afghanistan',
				translate_to: ['German'],
				source: 'Yes',
				files: [],
				message: '',
			},
			options: [
				{
					name: 'name',
					pattern: /^[a-zA-Z ]{2,30}$/,
					isValid: null,
					isImportant: false,
				},
				{
					name: 'first_name',
					pattern: /^[a-zA-Z ]{2,30}$/,
					isValid: null,
					isImportant: true,
				},
				{
					name: 'last_name',
					pattern: /^[a-zA-Z ]{2,30}$/,
					isValid: null,
					isImportant: true,
				},
				{
					name: 'email',
					pattern: /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/,
					isValid: null,
					isImportant: true,
				},
				{
					name: 'phone',
					pattern: /^[0-9]{7,14}$/,
					isValid: null,
					isImportant: false,
				},
				{
					name: 'translate_from',
					isImportant: false,
				},
				{
					name: 'translate_to',
					isImportant: false,
				},
				{
					name: 'source',
					isImportant: false,
				},
				{
					name: 'files',
					isImportant: false,
				},
				{
					name: 'message',
					isImportant: false,
				},
			],
		};
	},

	template: `
  <section
	id="getquote"
	class="get-quote"
>
	<div class="container">
		<h2 class="get-quote__title">Get a Quote</h2>
		<form
			@submit.prevent
			class="get-quote__form"
		>
			<div class="get-quote__form-section">
				<h3 class="get-quote__form-title">Your contact data</h3>
				<label class="get-quote__form-label">
					Name of organisation
					<input
						type="text"
						name=""
						id=""
						v-model="formData.name"
						class="get-quote__form-input"
					/> </label
				><label class="get-quote__form-label">
					First Name
					<input
						type="text"
						name="firstName"
						id="firstName"
						v-model="formData.first_name"
						class="get-quote__form-input"
						:class="getIsValid('first_name')"
						 /></label
				><label class="get-quote__form-label">
					Last Name<input
						type="text"
						name="lastName"
						id="lastName"
						v-model="formData.last_name"
						class="get-quote__form-input"
						:class="getIsValid('last_name')"
						 /></label
				><label class="get-quote__form-label">
					Email Address
					<input
						type="email"
						name="email"
						id="email"
						v-model="formData.email"
						class="get-quote__form-input"
						:class="getIsValid('email')"
						 /></label
				><label class="get-quote__form-label">
					Phone Number
					<input
						type="tel"
						name="phone"
						id="phone"
						v-model="formData.phone"
						class="get-quote__form-input"
						
				/></label>
			</div>
			<div class="get-quote__form-section">
				<h3 class="get-quote__form-title">The translation</h3>
				<label class="get-quote__form-label">
					Translate from:
					<div
						class="get-quote__form-dropdawn dropdawn dropdawn-langfrom"
						:class="{'active':isOpenLangFrom}"
					>
						<div
							class="dropdawn__select-btn"
							@click="isOpenLangFrom = !isOpenLangFrom"
						>
							<span>{{formData.translate_from}}</span>
							<i class="dropdawn__arrow"></i>
						</div>
						<div class="dropdawn__content">
							<div class="dropdawn__search">
								<i class="uil uil-search"></i>
								<input
									spellcheck="false"
									type="text"
									placeholder="Search"
									v-model="serchLangFrom"
								/>
							</div>
							<ul class="dropdawn__options">
								<li
									v-for="lan in getLangFrom"
									@click="updateLangFrom(lan)"
								>
									{{lan.title}}
								</li>
							</ul>
						</div>
					</div>
				</label>
				<label class="get-quote__form-label">
					Translate to:
					<div
						class="get-quote__form-dropdawn dropdawn dropdawn--multiple"
						:class="{'active':isOpenLangTo}"
					>
						<div
							class="dropdawn__select-btn dropdawn--multiple__select-btn"
							@click.self="isOpenLangTo = !isOpenLangTo"
						>
							<template v-if="formData.translate_to[0]">
								<span
									v-for="(lan,index) in formData.translate_to"
									@click="delLangTo(index)"
								>
									<svg
										width="16"
										height="16"
										viewBox="0 0 16 16"
										fill="none"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											d="M5 5L8 8L5 11"
											stroke="white"
											stroke-linecap="round"
										/>
										<path
											d="M11.375 11L8.375 8L11.375 5"
											stroke="white"
											stroke-linecap="round"
										/>
										<circle
											cx="8"
											cy="8"
											r="7.5"
											stroke="white"
										/>
									</svg>
									{{lan}}
								</span>
							</template>
							<template v-else>Select Languages</template>
						</div>
						<div class="dropdawn__content">
							<div class="dropdawn__search">
								<i class="uil uil-search"></i>
								<input
									spellcheck="false"
									type="text"
									placeholder="Search"
									v-model="serchLangTo"
								/>
							</div>
							<ul class="dropdawn__options">
								<li
									v-for="lan in getLangTo"
									@click="updateLangTo(lan)"
								>
									{{lan.title}}
								</li>
							</ul>
						</div>
					</div>
				</label>
				<label class="get-quote__form-label">
					Translatable source file available?

					<div
						class="get-quote__form-dropdawn dropdawn dropdawn-file"
						:class="{'active':isOpenFile}"
					>
						<div
							class="dropdawn__select-btn"
							@click.self="isOpenFile = !isOpenFile"
						>
							<span>{{formData.source}}</span>
							<i class="dropdawn__arrow"></i>
						</div>
						<div class="dropdawn__content">
							<ul class="dropdawn__options">
								<li @click="updateFile('Yes')">Yes</li>
								<li @click="updateFile('No')">No</li>
							</ul>
						</div>
					</div>
				</label>
				<div class="get-quote__form-drag">
					<input
						type="file"
						multiple
						name=""
						id=""
						ref="file"
						@change="selectFile()"
					/>
					<p>
						<svg
							width="30"
							height="28"
							viewBox="0 0 30 28"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="M1.66699 20.6667L2.49499 23.98C2.6392 24.5569 2.97209 25.0691 3.44077 25.4351C3.90944 25.8011 4.487 25.9999 5.08166 26H24.919C25.5136 25.9999 26.0912 25.8011 26.5599 25.4351C27.0286 25.0691 27.3615 24.5569 27.5057 23.98L28.3337 20.6667M15.0003 18V2V18ZM15.0003 18L9.66699 12.6667L15.0003 18ZM15.0003 18L20.3337 12.6667L15.0003 18Z"
								stroke="#101F42"
								stroke-width="3.33333"
								stroke-linecap="round"
								stroke-linejoin="round"
							/>
						</svg>

						<template v-if="formData.files.length > 0">
							<span v-for="item in formData.files">{{item.name}}</span>
						</template>
						<template v-else> Drag file(s) here or click to upload </template>
					</p>
				</div>
			</div>
			<div class="get-quote__form-section">
				<h3 class="get-quote__form-title">Extra information</h3>
				<label class="get-quote__form-label">
					Comments:
					<textarea
						class="get-quote__form-textarea"
						name=""
						id=""
            v-model="formData.message"
					></textarea>
					<button
						type="submit"
						class="btn btn--large btn--blue get-quote__form-submite"
            @click="submite()"
					>
						Submit
					</button>
					<div class="get-quote__form-info">
						<b>Safe and Secure</b>
						<p>
							All data contained and uploaded by this website is sent over a
							secure SSL connection.
						</p>
						<b>Privacy Policy</b>
						<p>
							All files and information are processed in regard to our
							<a href="">privacy statement</a> .
						</p>
					</div>
				</label>
			</div>
		</form>
	</div>
</section>

  `,
	created() {
		let params = new URLSearchParams();
		params.append('action', 'get_languages');
		axios.post(ajax_url, params).then(res => {
			this.lang = res.data;
		});
	},
	computed: {
		getLangFrom() {
			let arr = [];
			if (this.serchLangFrom.length > 0) {
				arr = this.lang.filter(data => data.title.toLowerCase().startsWith(this.serchLangFrom));
				return arr;
			}
			return this.lang;
		},
		getLangTo() {
			let arr = [];
			if (this.serchLangTo.length > 0) {
				arr = this.lang.filter(data => data.title.toLowerCase().startsWith(this.serchLangTo));
				return arr;
			}
			return this.lang;
		},
	},
	methods: {
		updateLangFrom(val) {
			this.formData.translate_from = val;
			this.isOpenLangFrom = false;
		},

		delLangTo(index) {
			this.formData.translate_to.splice(index, 1);
		},
		updateLangTo(val) {
			if (!this.formData.translate_to.find(el => el === val)) {
				this.formData.translate_to.push(val);
			}
		},

		selectFile() {
			this.formData.files = [];
			for (var i = 0; i < this.$refs.file.files.length; i++) {
				let file = this.$refs.file.files[i];
				this.$set(this.formData.files, i, file);
			}
		},
		updateFile(val) {
			his.formData.source = val;
			this.isOpenFile = false;
		},

		getIsValid(name) {
			const elem = this.options.find(patt => patt.name === name);
			if (elem.isValid != null) {
				return elem.isValid ? 'valid' : 'error';
			}
			return '';
		},

		submite() {
			let error = [];

			this.options.forEach(element => {
				if (element.isImportant) {
					if (!element.pattern.test(this.formData[element.name])) {
						error.push(element.name);
						element.isValid = false;
					} else {
						element.isValid = null;
					}
				}
			});

			if (error.length === 0) {
				const data = JSON.stringify(this.formData);
				let params = new URLSearchParams();
				params.append('action', 'get_quote');
				params.append('data', data);
				for (var i = 0; i < this.formData.files.length; i++) {
					let file = this.formData.files[i];
					params.append('files[' + i + ']', file);
				}
				axios
					.post(ajax_url, params)
					.then(res => {
						console.log(res);
					})
					.catch(() => {
						console.log('BAD');
					});
			}
		},

		// if (flag) {
		//
		// 	console.log(JSON.stringify({ l: 50, m: 'asdf' }));
		//
	},
});
