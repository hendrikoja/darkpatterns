<script>
export default{
    data(){
        return {
        }
    },
    mixins: [
        require('./MethodsVue.vue')
    ]
}
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>
<div class="question">
  <img src="../../static/textbubble.png" class="QuestionsTextbubble">
  <img src="../../static/fakedarkpattern.png" class="QuestionsChoice1">
  <img src="../../static/cookieyum.png" class="QuestionsChoice2">
  <button name="Answer" class="answerbutton" @click="$emit('questionevent')">Answer</button>
  <button name="openscreen" class="button1" @click="funnistuff()">{{count}}</button>
</div> 
</template>