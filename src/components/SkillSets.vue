<template>
  <div id="skillset" class="col-md-8 col-md-offset-2">
      <h1 class="text-center">Moje umiejętności</h1>    
      <div class="col-md-6">  
        <div class="progress">
          <transition name="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%" :class="{progressZero: !progress}">HTML
            <span class="sr-only">80% Complete</span>
          </div>
          </transition>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 75%" :class="{progressZero: !progress}">CSS
            <span class="sr-only">20% Complete</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 75%" :class="{progressZero: !progress}">Bootstrap
            <span class="sr-only">20% Complete</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%" :class="{progressZero: !progress}">Javascript
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%" :class="{progressZero: !progress}">Jquery
            <span class="sr-only">40% Complete (warning)</span>
          </div>
        </div>
      
      </div>
      <div class="col-md-6"> 
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%" :class="{progressZero: !progress}">Vue 2.0
            <span class="sr-only">40% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%" :class="{progressZero: !progress}">PHP
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%" :class="{progressZero: !progress}">Laravel
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%" :class="{progressZero: !progress}">MySQL
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-grey" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%" :class="{progressZero: !progress}">Git
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
      </div>


    </div>
</template>
<script>

export default {
    data: function(){
      return {
        progress: false,
        currentHeight: '',
        itemHeight: ''
      }
    },
    methods: {
      testy: function(){
        this.progress = true;
      }
    },
    watch: {
      currentHeight: function(){
        if(this.currentHeight >= (this.itemHeight - (window.innerHeight/2))){
          this.progress = true;
          } else {
          this.progress = false;
          }
      }
    },
    mounted: function(){
      var vm = this;
      vm.itemHeight = document.getElementById('skillset').offsetTop;
      window.addEventListener('scroll', function(){
      vm.currentHeight = window.scrollY;
      });
    }
  }

</script>
<style>

#skillset {
  height: 500px;
}

#skillset > h1 {
  font-color: rgb(162,148,163);
  margin-top: 40px;
  margin-bottom: 40px;
}

.progressZero {
  width: 0% !important;
}

.progress {
  height: 30px;
}

.progress-bar {
  line-height: 30px;
  font-size: 15px
}

.progress-bar-grey {
  background-color: #868e96;
}

</style>