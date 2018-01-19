<template>
	<transition name="fade">
	<div class="content-row" v-show="show">		
		<div class="col-md-8 content-text">
			<slot name="text"></slot>
		</div>
		<div class="col-md-4">
			<slot name="image"></slot>
		</div>
	</div>
	</transition>			
</template>

<script>

export default {
    data: function(){
      return {
      	show: true,
        currentHeight: '',
        itemHeight: ''
      }
    },
    watch: {
      currentHeight: function(){
        if(this.currentHeight >= (this.itemHeight - (window.innerHeight))){
          this.show = true;
          } else {
          this.show = false;
          }
      }
    },
    mounted: function(){
      var vm = this;
      vm.itemHeight = document.getElementById('content-section').offsetTop + vm.$el.offsetTop;
      vm.show = false;
      window.addEventListener('scroll', function(){
      vm.currentHeight = window.scrollY;
      });
    }
  }


</script>


<style>

.content-row {
	display: flex;
	margin-left: 10%;
	margin-right: 10%;
	margin-bottom: 80px;
}

.content-image {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.content-text {
	display: flex;
	align-self: center;
	justify-content: center;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}

</style>