<script setup>
  import Questionbubble from './UI/Questionbubble.vue'
  import Answer from './UI/Answer.vue'
</script>
<script>
export default{
    data(){
        return {
            count: 0,
            answered: false
        }
    },
    mixins: [
      require('./MethodsVue.vue')
    ],
    props:["question_data"],
}
</script>

<template>
<div class="questionPage">
    <Questionbubble
      :prompt="this.question_data['description']"
    />
    <div class="questionContainer">
      <Answer @click="$emit('questionevent')" />
      <Answer @click="$emit('questionevent')" />
    </div>
  <button v-if="answered" name="Answer" class="answerbutton" @click="$emit('questionevent')">Answer</button>
</div> 
</template>

<style scoped>
  .questionContainer {
    display:flex;
    position: absolute;
    bottom: 1vh;
    justify-content: center;
    align-items: flex-end;
    height: 15vh;
    width: 100vw;
    gap: 1vw;
  }
</style>