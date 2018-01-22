<template>
	<div id="contact" class="col-md-12 col-sm-12">
		<div id="about-me">
	      <div class="photo">
	      </div>
	      <div class="about-links">
	      	<a href="mailto:bartlomiejplaza@wp.pl"><i class="fa fa-envelope" aria-hidden="true"></i></a>
	      	<a href="https://plus.google.com/u/0/+Bart%C5%82omiejP%C5%82aza"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
	      	<a href="https://www.linkedin.com/in/bart%C5%82omiej-p%C5%82aza-89407792/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
	      	<a href="https://github.com/grzebyk44"><i class="fa fa-github" aria-hidden="true"></i></a>
	      </div>
	    </div>
      <form class="col-md-6 col-md-offset-4">
      	<div class="form-row">
	      	<div class="form-group col-md-3 col-sm-12 col-xs-12">
	      		<input type="text" class="form-controll col-md-12 col-sm-12 col-xs-12" id="name" name="name" placeholder="Imię" required v-model.lazy="userData.name" v-validate.lazy="'required|min: 3'">
	   			<label for="name" v-show="errors.has('name')">{{errors.first('name')}}</label>
	      	</div>
	      	<div class="form-group col-md-6 col-sm-12 col-xs-12">
	      		<input type="email" class="form-controll col-md-12 col-sm-12 col-xs-12" id="email" name="email"placeholder="Email" required v-model.lazy="userData.email" v-validate.lazy="'required|email'">
	      		<label for="email" v-show="errors.has('email')">{{errors.first('email')}}</label>
	      	</div>
	      	<div class="form-group col-md-3 col-sm-12 col-xs-12">
	      		<input type="text" class="form-controll col-md-12 col-sm-12 col-xs-12" id="phone" name="phone" placeholder="Telefon" v-model.lazy="userData.phone">
	      	</div>
	    </div>
	    <div class="form-row">
		    <div class="form-group col-md-12 col-sm-12 col-xs-12">
		    	<textarea class="col-md-12 col-sm-12 col-xs-12" id="message" name="message" placeholder="Wiadomość" required v-model.lazy="message" v-validate="'required|min: 10'"></textarea>
		    	<label for="message" v-show="errors.has('message')">{{errors.first('message')}}</label>
		    </div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12 col-sm-12 text-right">
				<button type="submit" class="btn" @click.prevent="validateEmail">Wyślij</button>
			</div>
		</div>
      </form>
    </div>
</template>

<script>
	import Vue from 'vue'
	import VeeValidate from 'vee-validate';
	import { Validator } from 'vee-validate';
	import VueResource from 'vue-resource';

Vue.use(VueResource);

	const dict = {
		custom: {
			name: {
				required: 'Jak masz na imię?',
				min: 'Wprowadź co najmniej 3 znaki'
			},
			email: {
				required: 'Podaj swój email',
				email: 'Sprawdź proszę adres email'
			},
			message: {
				required: 'Co chcesz mi przekazać',
				min: 'Prosze napisz coś więcej ;)'
			}
		}
	};

	Validator.localize('pl', dict);

	Vue.use(VeeValidate);

	export default {
		data: function(){
			return {
				userData: {
					name: '',
					email: '',
					phone: ''
				},
				message: ''
			}
		},
		methods: {
			sendEmail: function(){
				var vm = this;
				var flashError = function(){
					$('.flesh').removeClass('alert-success');
					$('.flesh').text('Wystąpił problem z wysłaniem maila. Wyślij wiadomość bezpośrednio').addClass('alert-danger').show();
				    		setTimeout(function(){
				    		$('.flesh').fadeOut();
				    		},3000);
				 };
				$.ajax({
				    type: "POST",
				    url: 'php/sendEmail.php',
				    data: {name: vm.userData.name,
				    	   email: vm.userData.email,
				    	   phone: vm.userData.phone,
				    	   message: vm.message
						},
				    success: function(data){
				    	if (data) {
				    		vm.userData.name = '';
				    		email: vm.userData.email ='';
				    		phone: vm.userData.phone = '';
				    		message: vm.message = '';
				    		vm.$validator.reset();

				    		$('.flesh').text('Twoja wiadomość została wysłana').addClass('alert-success').show();
				    		setTimeout(function(){
				    		$('.flesh').fadeOut();
				    		},3000);
				    	} else {
				    		flashError();
				    	}
				    },
				    error: function(data){
				    	flashError();
				    }
				});
			},
			validateEmail: function(){
				var vm = this;
      			this.$validator.validateAll().then((result) => {
        			if (result) {
        				vm.sendEmail();
        			}
        		});
			}
		}
	}

</script>


<style scoped>

	.about-links {
		margin-top: 10px;
		margin-left: 20%;
	}

	.about-links > a{
		font-size: 22px;
		margin-left: 7px;
		color: #745376;
	}

	.fa-github:hover {
		color: black;
	}

	.fa-linkedin-square:hover{
		color: #0077b5;
	}

	.fa-google-plus-square:hover {
		color: #dc4e41;
	}

	.fa-envelope:hover {
		color: #bfbfbf;
	}
	
	.photo {
	  margin-left: 20%;
	  width:130px;
	  height:130px;
	  border:1px solid #745376;
	  border-radius: 65px;
	  margin-top: -65px;
	  background-image: url("../assets/me.jpg");
	  background-size: cover;
	}

	form {
		margin-bottom: 40px;
	}

	input, textarea, button {
		background-color: #f5f5f5;
		border-radius: 5px;
		border: 1px solid darkgrey;
	}

	input, button {
		height: 40px;
	}

	textarea {
		height: 120px;
	}

	input:focus {
		border: 2px solid #745376;
		outline: none;
		height: 38px;
	}

	textarea:focus {
		border: 2px solid #745376;
		outline: none;
	}

	button:hover {
		border: 2px solid #745376;
		color:  #745376;
	}

	label {
		font-size: 9px;
		color: red;
	}

	


</style>