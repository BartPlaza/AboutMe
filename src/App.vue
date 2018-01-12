<template>
  <div id="conatiner">
    <div id="parallax">  
    </div>
    <div id="top">
      <nav class="col-md-8 col-md-offset-2" :class="{'nav-background':!responseIcon}">
        <div class="nav-section" :class="{'nav-show':!responseIcon}">
          <a href="#" >Home</a>
          <a href="#">O mnie</a>
          <a href="#">Projekty</a>
          <a href="#">Kontakt</a>
        </div>
        <div class="nav-section" :class="{'nav-show':!responseIcon}">
          <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn</a>
          <span>
            <a href="#"><i class="fa fa-github"  aria-hidden="true"></i> GitHub</a>
            <i class="fa fa-eject response-menu" aria-hidden="true" @click="showMenu" v-show="!responseIcon"></i>
          </span>
        </div>
        <i class="fa fa-bars response-menu" @click="showMenu" v-show="responseIcon" aria-hidden="true"></i>
      </nav>
      <hr v-show="!responseIcon" style="width: 100%; margin: 0;">
      <div id="hero" class="col-md-8 col-md-offset-2">
      <h1>Design that converts users</h1>
      <h3>We'll help you increase revenue and reduce churn by making your product more usable, friendly and fun</h3>
      <a href="#" class="hero-button">See my work</a>
      </div> 
    </div>
    <div id="content" class="col-md-8 col-md-offset-2">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div id="skillset" class="col-md-8 col-md-offset-2">
      
      <transition name="progress">
      <h1 class="text-center" v-show="aaa">My skills and expirience</h1> 
      </transition>
      <button @click="testy">Show</button>
      
      <div class="col-md-6">  
        <div class="progress">
          <transition name="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">HTML
          </div>
          </transition>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">CSS
            <span class="sr-only">20% Complete</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">Javascript
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">Javascript
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">Javascript
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
      </div>
      <div class="col-md-6"> 
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">Vue 2.0
            <span class="sr-only">40% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">PHP
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">Laravel
            <span class="sr-only">80% Complete (danger)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">Javascript
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">Javascript
            <span class="sr-only">60% Complete (warning)</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data: function(){
      return {
        responseIcon: true,
        aaa: false
      }
    },
    methods: {
      showMenu: function(){
        this.responseIcon = !this.responseIcon;
      },
      testy: function(){
        this.aaa = !this.aaa;
      }
    }
  }
</script>

<style lang="scss">

$sm: "only screen and (max-width: 768px)";

body {
 
}

#container{

} 

#parallax {
  background-image: url("./assets/background.jpg");
  background-size: cover;
  background-attachment: fixed;
  width: 100%;
  height: 90vh;
  position: absolute;
  top: 0;
  z-index: -1;
  display: block;
}

#top {
  height: 90vh;
  display: flex;
  flex-direction: column;
  color: white;
}

#hero {
  margin: auto;
  text-align: center;
}

#hero > h1 {
  font-size: 50px;

  @media #{$sm}{
      font-size: 35px;
    }
}

#hero > h3 {
  margin-bottom: 40px;

  @media #{$sm}{
      font-size: 18px;
    }
}

.hero-button {
  border: 2px solid white;
  border-radius: 10px;
  padding: 10px;
  background-color: transparent;
  font-size: 20px;
  text-decoration: none !important;
  color: white;
}

.hero-button:hover {
  background-color: white;
  color: darkgray;
}

nav {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  font-size: 18px;

  @media #{$sm}{
      flex-direction: column;      
      padding-bottom: 15px;
    }
}

.nav-section{
  display: flex;
  flex-direction: row;

  @media #{$sm}{
      flex-direction: column;
      display: none;
    }
}

.nav-section > span {
  display: flex;
  justify-content: space-between;
  padding: 0;
}

.nav-section > span > i {
  padding: 0px;
}

nav a {
  color: white;
  display: block;
  padding: 20px;
  text-decoration: none !important;


  @media #{$sm}{
      padding: 5px;
    }
}

nav a:hover {
  color: #152034;
  border-bottom: 2px solid #152034;
  padding-bottom: 18px;
  box-sizing: border-box;
}

.response-menu {
  padding: 20px;
  font-size: 30px;
  display: none;

  @media #{$sm}{
      display: flex;
      align-self: flex-end;
    }
}

.response-menu:hover {
  cursor: pointer;
}

.nav-show {
  @media #{$sm}{
      display: block;
    }
}

.nav-background {
  @media #{$sm}{
      background-color: rgba(162,148,163, 0.7);
    }
}

#content { 
  height: 400px;
}

#skillset {
  height: 400px;
}

.progress-enter-active, .progress-leave-active {
  transition: opacity .5s;
}
.progress-enter, .progress-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 20;
}


</style>
