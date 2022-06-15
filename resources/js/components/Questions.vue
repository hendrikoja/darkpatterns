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
<div class="question center">
    <img src="../../static/textbubble.png" class="QuestionsTextbubble">
    <div class="QuestionsChoice1">
    <button><img src="../../static/fakedarkpattern.png" class="scale" /></button>
    </div>
    <div class="QuestionsChoice2">
    <button><img src="../../static/cookieyum.png" class="scale" /></button>
    </div>
    <div class="bossitekst4">
      <p class="line-1 anim-typewriter4">One of the following images is a dark pattern while the other one is not.</p>
    </div>
  <button name="Answer" class="answerbutton" @click="$emit('questionevent')">Answer</button>
</div> 
</template>