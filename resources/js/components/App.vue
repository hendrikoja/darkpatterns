<script setup>
/*import Story from 'Story'*/
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
      if (this.gamecounter == 1){
      this.story = !this.story;
      }
      if (this.gamecounter == 2){
      this.question = !this.question;
      }
    },
    next(){
      this.gamecounter++;
      this.story = false;
      this.question = true;
    }
  }
}


</script>

<template>
<button class="settings" @click="settingsfunc"></button>
<div class="settingsmenu" v-if="settingsmenu">
  <button name="settingsfunni" class="buttonfunnisetting" @click="funnistuff()">Sound</button>
  <div class="switch">
  <input class="slider" type="checkbox" name="Sound" id="Sound">
  </div>
</div>

<div class="Openingscreen" v-if="settingsmenu != true && gamestarted != true">
  <button name="avaleht" class="button1" @click="funnistuff()">{{count}}</button>
  <input class="kasutaja" v-model="kasutajanimi" placeholder="Kasutajanimi" maxlength="14">
  <button class="enterkasutaja" @click="kasutajabaasi()">Alusta mängu</button>
</div>

<<<<<<< Updated upstream
<div class="story" v-if="story == true">
  <div class="localisation">
  <p>Nüüd see on gaming, POG</p>
  <button class="edasi" @click="next()">Järgmine küsimus or smth</button>
=======
<div class="story" v-if="gamecounter == 1 && story == true">
  <div class="localisation">
  <button class="edasi" @click="nextstory()">To Work</button>
  </div>
  <div class="bossitekst">
<<<<<<< Updated upstream
    <p class="line-1 anim-typewriter">Good morning worker! Your first task is to provide the appropriate cookie settings for our website. ()</p>
=======
    <p class="line-1 anim-typewriter ">Good morning worker! Your first task is to provide the appropriate cookie settings for our website. ()</p>
>>>>>>> Stashed changes
  </div>
  <div class="bossitekst2">
    <p class="line-1 anim-typewriter2">Make the most beneficial decision for us.</p>
  </div>
  <div class="bossitekst3">
    <p class="line-1 anim-typewriter3">Ok.</p>
  </div>
<<<<<<< Updated upstream
  <div class="storybubbles" >
=======
  <div class="storybubbles">
>>>>>>> Stashed changes
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
  <p>Nüüd see on gaming, POG Make the most beneficial decision for us. </p>
  <button class="edasi" @click="nextstory()">Järgmine küsimus or smth</button>
>>>>>>> Stashed changes
  </div>
</div>

<div class="question1" v-if="gamecounter == 2 && question == true">
  <button name="esimene valik" class="button1game" @click="funnistuff()">{{count}}</button>
  <button name="teine valik" class="button2game" @click="funnistuff()">{{count}}</button>
</div>
  <main>
    
  </main>
</template>


<style>
@import '../../css/base.css';

#app {
  margin: 0;
  padding: 2rem;
  font-weight: normal;
}

html {
  background-color: rgba(4, 22, 99, 0.87);
  background-size: cover;
  overflow: hidden;
}

.button1 {
  display: flex;
  background-color: #a14337;
  border-color: yellow;
  border-radius: 9px;
  color: rgb(0, 0, 0);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 5vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:50%;
  left: 50%;
  position: absolute;
}

.kasutaja {
  display: flex;
  background-color: #a14337;
  border-color: yellow;
  border-radius: 9px;
  color: rgb(0, 0, 0);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 5vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:40%;
  left: 40%;
  position: absolute;
}

.enterkasutaja {
  display: flex;
  background-color: #a14337;
  border-color: yellow;
  border-radius: 9px;
  color: rgb(0, 255, 76);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 4vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:40%;
  left: 52%;
  position: absolute;
}

.settings{
  background-image: url("../../static/settings.png");
  background-position: 0% 0%;
  background-repeat: no-repeat;
  background-size: contain;
  background-color: transparent;
  border-color: rgba(0, 0, 0, 0);
  display: flex;
  width: 3vw;
  height: 3vw;
  cursor: pointer;
  top: 0%;
  left: 0%;
  position: absolute;
}

.buttonfunnisetting {
  display: flex;
  background-color: #a14337;
  border-color: yellow;
  border-radius: 9px;
  color: rgb(0, 255, 76);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 4vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:10%;
  left: 5%;
  position: absolute;
}

.slider{
  position: absolute;
  cursor: pointer;
  top: 12%;
  left: 25%;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.localisation{
  position: absolute;
  top: 72%;
  left: 50%;
}

.edasi{
  display: flex;
  background-color: #a14337;
  border-color: yellow;
  border-radius: 9px;
  color: rgb(0, 0, 0);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 10vh;
  font-size: 1.5vw;
  cursor: pointer;
  position: absolute;
}

.button1game {
  display: flex;
  background-color: #2bdd58;
  border-color: yellow;
  border-radius: 9px;
  color: rgb(15, 214, 148);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 5vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:50%;
  left: 30%;
  position: absolute;
}

.button2game {
  display: flex;
  background-color: #fa0cee;
  border-color: yellow;
  border-radius: 9px;
  color: rgb(0, 0, 0);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 5vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:50%;
  left: 60%;
  position: absolute;
}

/* .switch vaja lisada, praegu lihtsalt checkbox, send help!!!!! */
</style>