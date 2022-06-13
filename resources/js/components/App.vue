<script setup>
  import Story from './Story.vue'
  import PropsVue from './PropsVue.vue'
  import Questions from './Questions.vue'
  //import json from './Data.json'
  import Openingscreen from './Openingscreen.vue'
  import Settings from './Settings.vue'
  import Draggable from './Draggable.vue'
</script>


<script>
  export default{
    data(){
      return {
        count: 0,
        username: "",
        //Vaate väärtused
        settingsmenu: false,
        story: false,
        gamestarted: false,

        gamecounter: 0,
        question: false,
        file: "../../assets/Testmusic.mp3",

        //Temp küsimused, hiljem ABst
        questions: [
        {
          "description": "Worker! You gotta do this",
          "points": 200,
          "category_id": 1,
          "answers": [
            {
              "correct": 1,
              "image_loc": "src/img1.png",
              "description": "GOOD ANSWER BUDDY!"
            },
            {
              "correct": 0,
              "image_loc": "src/img2.png",
              "description": "WORKER! BAD ANSWER!"
            }
          ],
          "boss_answers": [
            {
              "correct": 1,
              "description": "VERY GOOD, WORKER! YOU MADE THE CORRECT CHOICE VERY POGGERS YOU'RE AMAZING AHHHH LETS GO"
            },
            {
              "correct": 0,
              "description": "NOO WORKER YOU F'D UP HARDD BRO"
            }
          ],
          "question_story": [
            {
              "description": "Good morning worker! Your first task is to provide the appropriate cookie settings for our website."
            },
            {
              "description": "Make the most beneficial decision for us."
            },
            {
              "description": "Ok"
            }
          ]
        }
      ]
      }
    },
    methods: {
      funnistuff() {
        this.count++;
      },
      userdatabase() {
        if (!this.username) {
          console.log("Kasutjanimi sisestamata!");
          return;
        } else {
          this.story = !this.story;
          this.gamestarted = !this.gamestarted;
          this.gamecounter++;
        }
      },
      settingsfunc() {
        this.settingsmenu = !this.settingsmenu;
      },
      nextstory() {
        this.gamecounter++;
        this.story = false;
        this.question = true;
      },
      nextquestion() {
        this.gamecounter++;
        this.story = true;
        this.question = false;
        console.log(this.gamecounter)
      },
      console() {
        console.log(this.file)
      },
      sound() {
        /*var audio = new Audio(require("../../assets/Testmusic.mp3"));*/
        audio.play();
      },
      usernameChange(data) {
        this.username = data;   
      }
    }
  }
</script>

<template>

  <main>

    <button class="settings" @click="settingsfunc()"></button>

    <Openingscreen v-if="gamestarted == false && settingsmenu == false"
      @openingevent="userdatabase()"
      @usernameChange="usernameChange($event)"
    />

    <Settings v-if="settingsmenu == true" />


    <Story v-if="gamecounter == 1 && settingsmenu == false" @storyevent="nextstory()"/>


    <Questions v-if="gamecounter == 2 && settingsmenu == false" @questionevent="nextquestion()"  />

    <Story v-if="gamecounter == 3 && settingsmenu == false" @storyevent="nextstory()"/>

    <Draggable v-if="gamecounter == 4 && settingsmenu == false" @questionevent="nextquestion()" />

  </main>

</template>


<style>
  @import '../../css/base.css';
  @import '../../css/app.css';
</style>