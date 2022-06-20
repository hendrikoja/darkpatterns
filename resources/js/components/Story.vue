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
    computed: {
      question_amount: {
        get() {
          return this.story_data ? this.story_data.length : 0;
        }
      }
    },
    props: [
        "story_data",
    ]
}
</script>


<template>
<div class="story">
  <div class="storyContainer">
    <Storybubble
      v-for="(k, v) in this.story_data"
      :key=k
      :prompt="k['description']"
      :order_number = v
    />
    <AnswerButton 
      :delay = question_amount
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