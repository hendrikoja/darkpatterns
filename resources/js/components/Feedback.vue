<script setup>
  import Storybubble from './UI/Storybubble.vue'
  import AnswerButton from './UI/AnswerButton.vue'
</script>

<script>
export default{
    data(){
        return {
            //Pole veel kindel, kas seda on vaja, aga igaks juhuks jätan
            rand_story_data: "",
        }
    },
    methods: {

    },
    props: [
        "story_data", "correct"
    ],
    computed: {
      responses: function() {
        return this.correct ? this.story_data.filter(i => i.correct === 1) : this.story_data.filter(i => i.correct === 0);
      },
    }
}
</script>


<template>
<div class="story">
  <div class="localisation">
    <button class="next" @click="$emit('storyevent')">Continue</button>
  </div>
  <div class="storyContainer">
    <Storybubble
      v-for="(k, v) in this.responses"
      :key=k
      :prompt="k['description']"
      :order_number = v
    />
    <AnswerButton 
      :delay = responses.length
      @click="$emit('storyevent')"
    />
  </div>
</div> 
</template>

<style scoped>
  .storyContainer {
    display:flex;
    align-items: flex-end;
    flex-direction: column;
    gap: 1vh;
    position: absolute;
    top: 10vh;
  }
</style>