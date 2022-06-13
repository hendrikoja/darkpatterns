<script setup>
  import Story from './Story.vue'
</script>


<script>
  export default{
    components: {
      Story
    },
    data(){
      return {
        username: "test",

        //funny click button haha
        count: 0,

        //View toggles
        settingsmenu: false,
        story: false,
        question: false,

        //Game flow things
        gamestarted: false,
        gamecounter: 0,
        

        //placeholder questions, later from database
        //gotta add actual images owo
        //boss answers missing rn, gotta work on that in the database stuff :weary:
        questions:
        [
          {
            "description": "Worker! You gotta do this",
            "points": 200,
            "category_id": 1,
            "answers": [
              {
                "correct": 1,
                "image_loc": "src/img1.png",
                "description": "GOOD ANSWER BUDDY!",
              },
              {
                "correct": 0,
                "image_loc": "src/img2.png",
                "description": "WORKER! BAD ANSWER!",
              }
            ]
          }
        ]
      }
    },
    methods: {
      funnistuff(){
        this.count++;
      },
      startGame(){
        //TODO: kui kasutaja pole nime sisestanud, siis ära lase tal edasi minna
        //TODO: kasutaja andmebaasi lisamine
        if (!this.username) {
          return;
        } else {
          this.story = !this.story;
          this.gamestarted = !this.gamestarted;
          this.gamecounter++;
        }

      },
      toggleSettings() {
        this.settingsmenu = !this.settingsmenu;
      },
      nextstory() {
        this.gamecounter++;
        this.story = false;
        this.question = true;
        console.log(this.gamecounter)
      },
      nextquestion() {
        this.gamecounter++;
        this.story = true;
        this.question = false;
      },
    }
  }


</script>

<template>

<Story v-if="story && !settingsmenu"
  @nextstory="nextstory()"
  :username = "username"
/>

<button class="settings" @click="toggleSettings"></button>
<div class="settingsmenu" v-if="settingsmenu">
  <button name="Sound" class="Soundbutton" @click="funnistuff()">Sound</button>

  <label class="switch">
  <input type="checkbox" name="Sound" id="Sound">
  <span class="slider"></span>
  </label>
</div>

<div class="Openingscreen" v-if="settingsmenu != true && gamestarted != true">
  <button name="avaleht" class="button1" @click="funnistuff()">{{count}}</button>
  <input class="kasutaja" v-model="username" placeholder="username" maxlength="14">
  <button class="enterkasutaja" @click="startGame()">Alusta mängu</button>
</div>



<div class="question" v-if="gamecounter == 2 && question == true && !settingsmenu">
  <button name="esimene valik" class="button1game" @click="funnistuff()">{{count}}</button>
  <button name="teine valik" class="button2game" @click="funnistuff()">{{count}}</button>
  <button name="Answer" class="answerbutton" @click="nextquestion()">Advance story or smth</button>
</div>



<div class="question" v-if="gamecounter == 4 && question == true && !settingsmenu">
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