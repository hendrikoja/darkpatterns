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
    components: {
      Story
    },
    mixins: [
      require('./MethodsVue.vue')
    ],
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
              "image_loc": "../images/fakedarkpattern.png",
              "description": "GOOD ANSWER BUDDY!"
            },
            {
              "correct": 0,
              "image_loc": "../images/cookieyum.png",
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


    <Story
      v-if="gamecounter == 1 && settingsmenu == false"
      @storyevent="nextstory()"
      :story_data="questions[0]['question_story']"
    />


    <Questions v-if="gamecounter == 2 && settingsmenu == false" @questionevent="nextquestion()"  />

    <Story
      v-if="gamecounter == 3 && settingsmenu == false"
      @storyevent="nextstory()"
      :story_data="questions[0]['question_story']"
    />

    <Draggable v-if="gamecounter == 4 && settingsmenu == false" @questionevent="nextquestion()" />

  </main>

</template>


<style>
  @import '../../css/base.css';
  @import '../../css/app.css';
</style>