<script setup>
  import Questionbubble from './UI/Questionbubble.vue'
  import Answer from './UI/Answer.vue'
</script>
<script>
export default{
    data(){
        return {
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
      <Answer v-for="(k, v) in this.question_data['answers']"
        :key = v
        :answer_data="k"
        @click="$emit('questionevent', k['correct'], this.question_data['points'])"
      />
    </div>
</div> 
</template>

<style scoped>
  .questionContainer {
    display:flex;
    position: absolute;
    bottom: -50vh;
    justify-content: center;
    align-items: flex-end;
    height: 15vh;
    width: 100vw;
    gap: 3vw;
  }
  .questionPage {
    display:flex;
    position: absolute;
    top: 15vh;
  }
</style>