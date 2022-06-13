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
  <button name="Answer" class="answerbutton" @click="$emit('questionevent')">Advance story or smth</button>
</div> 
</template>