<script setup>
  import Questionbubble from './UI/Questionbubble.vue'
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
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>
<div class="question center">
    <Questionbubble
      :prompt="this.question_data['description']"
    />
    <div class="QuestionsChoice1" @click="answeredfunc()" tabindex="1">
      <img src="../../static/acceptcookies1.png" class="scale">
    </div>
    <div class="QuestionsChoice2" @click="answeredfunc()" tabindex="1">
      <img src="../../static/acceptcookies2.png" class="scale">
    </div>
  <button v-if="answered" name="Answer" class="answerbutton" @click="$emit('questionevent')">Answer</button>
</div> 
</template>