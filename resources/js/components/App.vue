<script setup>
import Story from './Story.vue'
import PropsVue from './PropsVue.vue'
import Questions from './Questions.vue'
//import json from './Data.json'
import Openingscreen from './Openingscreen.vue'
import Settings from './Settings.vue'
</script>


<script>
export default{
  data(){
    return {
      cum: false,
      count: 0,
      kasutajanimi: "",
      settingsmenu: false,
      story: false,
      gamestarted: false,
      gamecounter: 0,
      question: false,
      file: "../../assets/Testmusic.mp3"
    }
  },
  methods: {
    funnistuff(){
      this.count++;
    },
    kasutajabaasi(){
      this.story = !this.story;
      this.gamestarted = !this.gamestarted;
      this.gamecounter++;
    },
    settingsfunc(){
      this.settingsmenu = !this.settingsmenu;
    },
    nextstory(){
      this.gamecounter++;
      this.story = false;
      this.question = true;
    },
    nextquestion(){
      this.gamecounter++;
      this.story = true;
      this.question = false;
      console.log(this.gamecounter)
    },
    console(){
      console.log(this.file)
    },
    sound(){
      /*var audio = new Audio(require("../../assets/Testmusic.mp3"));*/
      audio.play();
    }
  }
}


</script>

<template>

<button class="settings" @click="settingsfunc()"></button>

<Openingscreen v-if="gamestarted == false && settingsmenu == false" @openingevent="kasutajabaasi()"/>

<Settings v-if="settingsmenu == true" />

<Story v-if="gamecounter == 1 && settingsmenu == false" @storyevent="nextstory()"/>

<Questions v-if="gamecounter == 2 && settingsmenu == false" @questionevent="nextquestion()"  />

<Story v-if="gamecounter == 3 && settingsmenu == false" @storyevent="nextstory()"/>

<Questions v-if="gamecounter == 4 && settingsmenu == false" @questionevent="nextquestion()" />

  <main>
    
  </main>
</template>


<style>
@import '../../css/base.css';
@import '../../css/app.css';
</style>