<script setup>
  import Questionbubble from './UI/Questionbubble.vue'
</script>
<script>
export default{
    data(){
        return {
            count: 0
        }
    },
    methods: {
        countup(){
            this.count++
            console.log(this.count)
        }
    },
    props:["question_data"],
}
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>
<div class="question center">
    <Questionbubble
      :prompt="this.question_data['description']"
    />
    <div class="QuestionsChoice1">
      <img src="../../static/acceptcookies1.png" class="scale">
    </div>
    <div class="QuestionsChoice2">
      <img src="../../static/acceptcookies2.png" class="scale">
    </div>
  <button name="Answer" class="answerbutton" @click="$emit('questionevent')">Answer</button>
</div> 
</template>