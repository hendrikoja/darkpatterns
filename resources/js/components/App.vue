<template>
<main>
<button class="settings" @click="settingsfunc"></button>
<div class="settingsmenu" v-if="settingsmenu">
  <button name="Sound" class="Soundbutton" @click="funnistuff()">Sound</button>

  <label class="switch">
  <input type="checkbox" name="Sound" id="Sound">
  <span class="slider"></span>
  </label>
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
    <div class="bossitekst">
      <p class="line-1 anim-typewriter">Good morning worker! Your first task is to provide the appropriate cookie settings for our website. ()</p>
    </div>
    <div class="bossitekst2">
      <p class="line-1 anim-typewriter2">Make the most beneficial decision for us.</p>
    </div>
    <div class="bossitekst3">
      <p class="line-1 anim-typewriter3">Ok.</p>
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
<div class="menu">
  <div
    class="drop-zone"
    @drop="onDrop($event, 1)"
    @dragover.prevent
    @dragenter.prevent
  >
    <div
      class="drag-el"
      v-for="item in getList(1)"
      :key="item.title"
      draggable="true"
      @dragstart="startDrag($event, item)"
    >
      <img :src = "item.image">
    </div>
  </div>
</div>
<div class="interactivegame">
  <div
    class="drop-zone"
    @drop="onDrop($event, 2)"
    @dragover.prevent
    @dragenter.prevent
  >
    <div
      class="drag-el"
      v-for="item in getList(2)"
      :key="item.title"
      draggable="true"
      @dragstart="startDrag($event, item)"
    >
      <img :src = "item.image">
    </div>
  </div>
</div>
  <button name="Answer" class="answerbutton" @click="nextquestion()">Advance story or smth</button>
</div>
</main>
</template>

<script>
import { ref } from 'vue'

function drop(e) {
    if(e.preventDefault) { e.preventDefault(); }
    return false;
}

export default{
  setup() {
    const items = ref([
      { id: 0, title: 'oh', list: 1, image: "../images/boss2.png" },
      { id: 1, title: 'the', list: 1, image: "../images/boss2.png" },
      { id: 2, title: 'misery', list: 2, image: "../images/boss2.png" },
    ])

    const getList = (list) => {
      return items.value.filter((item) => item.list == list)
    }

    const startDrag = (event, item) => {
      console.log(item)
      event.dataTransfer.dropEffect = 'move'
      event.dataTransfer.effectAllowed = 'move'
      event.dataTransfer.setData('itemID', item.id)
    }

    const onDrop = (event, list) => {
      const itemID = event.dataTransfer.getData('itemID')
      const item = items.value.find((item) => item.id == itemID)
      item.list = list
    }

    return {
      getList,
      onDrop,
      startDrag,
    }

  },
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
  },
}

document.body.addEventListener('drop',drop,true);
</script>

<style>
@import '../../css/base.css';
@import '../../css/app.css';
</style>
