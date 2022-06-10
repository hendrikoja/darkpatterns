<script setup>

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
      if (this.gamecounter % 2 == 0){
      this.question = !this.question;
      }
      else{
      this.story = !this.story;
      }
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
    }
  }
}


</script>

<template>
<button class="settings" @click="settingsfunc"></button>
<div class="settingsmenu" v-if="settingsmenu">
  <button name="settingsfunni" class="buttonfunnisetting" @click="funnistuff()">Language</button>
  <div class="switch">
  <input class="slider" type="checkbox" name="Sound" id="Sound">
  </div>
</div>

<div class="Openingscreen" v-if="settingsmenu != true && gamestarted != true">
  <button name="avaleht" class="button1" @click="funnistuff()">{{count}}</button>
  <input class="kasutaja" v-model="kasutajanimi" placeholder="Username" maxlength="14">
  <button class="enterkasutaja" @click="kasutajabaasi()">Play</button>
  <img src="../../static/textbubble.png" class="mainmenutextbubble">
  <img src="../../static/interactivescreensmall.png" class="mainmenuusernameplay">
</div>

<div class="story" v-if="gamecounter == 1 && story == true">
  <div class="localisation">
  <button class="edasi" @click="nextstory()">To Work</button>
  </div>
  <div class="storybubbles">
    <img src="../../static/textbubble.png" class="storymenutextbubble">
    <img src="../../static/textbubble.png" class="storymenutextbubble">
    <img src="../../static/textbubble.png" class="storymenutextbubble">
  </div>
  <div class="storybosspics">
    <img src="../../static/boss2.png" class="storybosspng">
    <img src="../../static/boss2.png" class="storybosspng2">
  </div>
</div>

<div class="question" v-if="gamecounter == 2 && question == true">
  <img src="../../static/interactivescreenbig.png" class="bigscreen">
  <img src="../../static/interactivescreenbig.png" class="smallscreen">
  <img src="../../static/interactivescreenbig.png" class="smallscreen2">
  <button name="Answer" class="answerbutton" @click="nextquestion()">Finish Work</button>
</div>

<div class="story" v-if="gamecounter == 3 && story == true">
  <div class="localisation">
  <p>Nüüd see on gaming, POG</p>
  <button class="edasi" @click="nextstory()">Järgmine küsimus or smth</button>
  </div>
</div>

<div class="question" v-if="gamecounter == 4 && question == true">
  <button name="esimene valik" class="button1game" @click="funnistuff()">{{count}}</button>
  <button name="teine valik" class="button2game" @click="funnistuff()">{{count}}</button>
  <button name="Answer" class="answerbutton" @click="nextquestion()">Advance story or smth</button>
</div>
  <main>
  </main>
</template>


<style>
@import '../../css/base.css';
@import '../../css/app.css';

/* .switch vaja lisada, praegu lihtsalt checkbox, send help!!!!! */
</style>