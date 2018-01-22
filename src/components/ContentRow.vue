<template>
	<transition name="fade">
	<div class="content-row" v-show="show">		
		<div class="col-md-8 content-text">
			<slot name="text"></slot>
		</div>
		<div class="col-md-4 content-image">
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


<style lang="scss">

$sm: "only screen and (max-width: 768px)";

.content-row {
	display: flex;
  align-items: center;
	margin-left: 10%;
	margin-right: 10%;
	padding-bottom: 60px;

   @media #{$sm} {
      flex-direction: column;
    }
}

.content-row:last-child {
  @media #{$sm} {
      flex-direction: row;
    }
}

.content-row:last-child > .content-image {
  order: 2;
}

.content-row:nth-child(odd) > .content-text {
  order: 2;
}

.content-text {
	display: flex;
	align-self: center;
	justify-content: center;

  @media #{$sm} {
      order: 2;
      margin-top:20px
    }
}


.fade-enter-active, .fade-leave-active {
  transition: all 4s;
}

.fade-leave-active{
  transition: all 0.5s;
}

.content-row:nth-child(odd).fade-enter, .fade-leave-to {
  opacity: 0;
  transform: translateX(-50px);
}

.content-row:nth-child(even).fade-enter, .fade-leave-to {
  opacity: 0;
  transform: translateX(50px);
}


</style>