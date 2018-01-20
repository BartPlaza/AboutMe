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
    <div id="content-section" class="col-md-12">
      <div class="col-md-8 col-md-offset-2">
        <div class="content-header">
          <h1>Cześć! Jestem Bartek, jestem początkującym web deweloperem...</h1>
        </div>
        <content-row>
          <h4 slot="text">... i najlepiej odnajduję się w rozwązywaniu konkretnych problemów i tworzeniu, czyli sprawianiu, że coś zaczyna istnieć i działać ...</h4>
          <img slot="image" src="./assets/content/thinking.png">
        </content-row>
        <content-row>
          <h4 slot="text">... pomimo, że mam doswiadczenie zawodowe w prowadzeniu szkoleń i zarządzaniu organizacją łączącą 140 osób.</h4>
          <img slot="image" src="./assets/content/training.png">
        </content-row>
        <content-row>
          <h4 slot="text">Jestem inżynierem, dotychczas zajmowałem się oprogramowanie CAD 3D. Supportem technicznym, sprzedażą, szkoleniami...</h4>
          <img slot="image" src="./assets/content/modeling.png">
        </content-row>
        <content-row>
          <h4 slot="text">... i to dzięki tym szerokim dowiadczeniom obrałem swój kierunek dalszego rozwoju w tworzeniu i rozwiązywaniu problemów aplikacji webowych.</h4>
          <img slot="image" src="./assets/content/programming.png">
        </content-row>
        <content-row>
          <h2 slot="text">... czy myślisz, że moglibyśmy nawiązać współpracę?</h2>
          <div slot="image">
            <transition name="arrows">
            <div class="content-arrows" v-show="arrows">
              <i class="fa fa-chevron-down" aria-hidden="true" style="color:#c7bfc8"></i>
              <i class="fa fa-chevron-down" aria-hidden="true" style="color:#a294a3"></i>
              <i class="fa fa-chevron-down" aria-hidden="true" style="color:#745376"></i>
            </div>
            </transition>
          </div>
        </content-row>
        </div>
    </div>

    <!--<projects></projects>-->
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
  import Projects from './components/Projects.vue';
  import ContentRow from './components/ContentRow.vue';


  export default {
    components: {
      'skillsets': SkillSets,
      'navigation': Navigation,
      'google-map': GoogleMaps,
      'contact': Contact,
      'projects': Projects,
      'content-row': ContentRow
    },
    data: function() {
      return {
        arrows: false
      }
    },
    created: function(){
      var vm = this;
      window.onbeforeunload = function () {
        window.scrollTo(0, 0);
      };
      setInterval(function(){
        vm.arrows = !vm.arrows
      },2000);
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


footer {
  height: 80px;
  background-color: #a294a3;
}


#content-section {
  width: 100%;
  background-color: #f5f7f9;
}

.content-header{
  margin-bottom: 80px;
  text-align: center;
}

.content-image > img{
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.content-arrows {
  display: flex;
  flex-direction: column;
  font-size: 25px;
}

.arrows-enter-active, .arrows-leave-active {
  transition: transform 2s;
}

.arrows-leave-active{
  transition: transform 2s;
}

.arrows-enter,.arrows-leave-to {
  transform: translateY(30px);
}

</style>
