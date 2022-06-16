<script setup>
  import Story from './Story.vue'
  import Feedback from './Feedback.vue'
  import Questions from './Questions.vue'
  import Openingscreen from './Openingscreen.vue'
  import Settings from './Settings.vue'
  import Draggable from './Draggable.vue'
  import background from './background.js'
  import EndScreen from './EndScreen.vue'
  import Leaderboard from './Leaderboard.vue'
  import Points from './UI/Points.vue'

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
        question: false,
        //bossi tagasiside ekraan or some shit go fuck yourself
        feedback: false,
        
        correct_answer: false,

        gamecounter: 0,
        file: "../../assets/Testmusic.mp3",
        points: 0,
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
    <div class="topBar" v-if="gamestarted">
      <Points
        :points="this.points"
      />
    </div>

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
        @questionevent="nextquestion"
        :question_data="questions[gamecounter]"
      />

      <Feedback
        v-if="feedback && settingsmenu == false"
        @storyevent="nextfeedback()"
        :story_data="questions[gamecounter]['boss_answers']"
        :correct="correct_answer"
      />

      <Draggable 
        v-if="settingsmenu == false && question && ready && questions[gamecounter].category_id == 2"
        @questionevent="nextquestion"
       />

    </div>
    <!-- Mängu loop lõpeb -->




    <EndScreen v-if="gamecounter == 3 && settingsmenu == false" @Endevent="next()" :score="points" />

    <Leaderboard v-if="gamecounter == 4 && settingsmenu == false" />

  </main>

</template>


<style>
  @import '../../css/base.css';
  @import '../../css/app.css';
</style>