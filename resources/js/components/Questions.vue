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
        }
    },
    props:["question_data"],
}
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>
<div class="question center">
    <img src="../../static/textbubble.png" class="QuestionsTextbubble">
    <div class="QuestionsChoice1">
      <img class="scale"
      :src='this.question_data["answers"][0]["image_loc"]' />
    </div>
    <div class="QuestionsChoice2">
      <img src="../../static/cookieyum.png" class="scale">
    </div>
    <div class="bossitekst4">
      <p class="line-1 anim-typewriter4">{{this.question_data["description"]}}</p>
    </div>
  <button name="Answer" class="answerbutton" @click="$emit('questionevent')">Answer</button>
</div> 
</template>