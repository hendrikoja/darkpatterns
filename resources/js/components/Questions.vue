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
    }
}
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>
<div class="question">
    <img src="../../static/textbubble.png" class="QuestionsTextbubble">
    <img src="../../static/fakedarkpattern.png" class="QuestionsChoice1">
    <img src="../../static/cookieyum.png" class="QuestionsChoice2">
    <div class="bossitekst4">
      <p class="line-1 anim-typewriter4">One of the following images is a dark pattern while the other one is not.</p>
    </div>
    <div class="bossitekst5">
      <p class="line-1 anim-typewriter5">Choose the dark pattern....be careful!</p>
    </div>
  <button name="Answer" class="answerbutton" @click="$emit('questionevent')">Answer</button>
</div> 
</template>