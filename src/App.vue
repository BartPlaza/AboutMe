<template>
  <div id="conatiner">
    <header>
    <navigation></navigation>
    <div id="parallax"></div>
      <div id="hero" class="col-md-8 col-md-offset-2">
      <h1>Bartłomiej Płaza web developer</h1>
      <p>Witaj na mojej stronie wizytówce na której dowiesz się kim jestem i jakie umiejętności oferuje.</p>
      <a href="#skillset" class="hero-button">Sprawdź mnie</a>
      </div> 
    </header>
    <main>
    <skillsets></skillsets>
    <section id="content-section" class="col-md-12">
      <div class="col-md-8 col-md-offset-2">
        <div class="content-header">
          <h1>Moja historia</h1>
        </div>
        <content-row>
          <h4 slot="text">
          Jestem inżynierem, dotychczas zajmowałem się oprogramowanie CAD 3D. Supportem technicznym, sprzedażą, wdrożeniami...
         </h4>
          <img slot="image" src="./assets/content/thinking.png">
        </content-row>
        <content-row>
          <h4 slot="text"> ...posiadam umiejętności miękkie, mam doswiadczenie zawodowe w prowadzeniu szkoleń. Zarządzałem też organizacją łączącą 140 osób.</h4>
          <img slot="image" src="./assets/content/training.png">
        </content-row>
        <content-row>
          <h4 slot="text"> Te bardzo różne doświadczenia pokazły mi, że najlepiej odnajduję się w rozwązywaniu konkretnych problemów i sprawianiu, że coś zaczyna istnieć, działać ...</h4>
          <img slot="image" src="./assets/content/modeling.png">
        </content-row>
        <content-row>
          <h4 slot="text">... dlatego swojego dalszy rozwoju ukierunkowałem na tworzenie i rozwiązywanie problemów aplikacji webowych.</h4>
          <img slot="image" src="./assets/content/programming.png">
        </content-row>
        <content-row>
          <h3 slot="text">Jeśli uważasz, że moglibyśmy nawiązać współpracę skontaktuj się ze mną</h3>
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
    </section>
  </main>

    <!--<projects></projects>-->
    <google-map></google-map>
    <contact></contact>
    <aside class="flesh alert"></aside>
    <footer class="col-sm-12">
      &copy; Bartłomiej Płaza web developer 2018
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

header {
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
  font-size: 58px;

  @media #{$sm}{
      font-size: 40px;
      margin-top: 0;
    }
}

#hero > p {
  font-size: 22px;
  margin-bottom: 60px;
  margin-top: 60px;
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
  box-shadow: 0 -5px 2px -2px #f5f7f9;
}

.content-header{
  padding-top: 20px;
  margin-bottom: 30px;
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

.flesh {
  display: none;
  position: fixed;
  bottom: 0px;
  right: 20px;
  z-index: 20;
}

footer {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
}

</style>
