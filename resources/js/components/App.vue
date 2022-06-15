<script setup>
  import Story from './Story.vue'
  import Questions from './Questions.vue'
  import Openingscreen from './Openingscreen.vue'
  import Settings from './Settings.vue'
  import Draggable from './Draggable.vue'
  import background from './background.js'
  import EndScreen from './EndScreen.vue'
  import Leaderboard from './Leaderboard.vue'

  import axios from 'axios';
</script>

<script>
  export default{
    components: {
      Story,
      Questions,
      Openingscreen,
      Settings,
      Draggable,
      EndScreen,
      Leaderboard
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

        questions: null,
        //Kas küsimused on ABst käes
        ready: false,
      }
    },
    mounted() {

      //Läbi Laraveli küsimuste võtmine andmebaasist.
      //Enne, kui mängu mängida saab, peame ära ootama küsimused.
      axios
      .get("/questions")
      .then(
        response =>{
          (this.questions = response["data"]);
          this.ready = true;
          console.log(this.questions);
        });
    },
    computed: {
      question_amount: {
        get() {
          return this.questions ? this.questions.length : 0;
        }
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

    <!-- Mängu main loop siin -->
    <div v-if="gamecounter < question_amount">
      <Story
          v-if="story && settingsmenu == false"
          @storyevent="nextstory()"
          :story_data="questions[gamecounter]['question_story']"
      />

      <Questions
        v-if="settingsmenu == false && question && questions[gamecounter].category_id == 1"
        @questionevent="nextquestion()"
        :question_data="questions[gamecounter]"
      />

      <Draggable 
        v-if="settingsmenu == false && ready && questions[gamecounter].category_id == 2"
        @questionevent="nextquestion()"
       />

    </div>
    <!-- Mängu loop lõpeb -->




    <EndScreen v-if="gamecounter == 2 && settingsmenu == false" @Endevent="next()" />

    <Leaderboard v-if="gamecounter == 3 && settingsmenu == false" />

  </main>

</template>


<style>
  @import '../../css/base.css';
  @import '../../css/app.css';
</style>