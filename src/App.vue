<template>
  <div id="conatiner">
    <div id="parallax">  
    </div>
    <div id="top">
      <navigation></navigation>
      <div id="hero" class="col-md-8 col-md-offset-2">
      <h1>Design that converts users</h1>
      <h3>We'll help you increase revenue and reduce churn by making your product more usable, friendly and fun</h3>
      <a href="#" class="hero-button">See my work</a>
      </div> 
    </div>
    <skillsets></skillsets>
    <div id="content" class="col-md-8 col-md-offset-2">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <projects></projects>
    <google-map></google-map>
    <contact></contact>
    <footer class="col-sm-12">
    </footer>
  </div>
</template>

<script>

  import SkillSets from './components/SkillSets.vue';
  import Navigation from './components/Navigation.vue';
  import GoogleMaps from './components/GoogleMaps.vue';
  import Contact from './components/Contact.vue';
  import Projects from './components/Projects';

  export default {
    components: {
      'skillsets': SkillSets,
      'navigation': Navigation,
      'google-map': GoogleMaps,
      'contact': Contact,
      'projects': Projects
    }
  }
</script>

<style lang="scss">

$sm: "only screen and (max-width: 768px)";

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

#content { 
  
}

footer {
  height: 80px;
  background-color: #a294a3;
}

</style>
