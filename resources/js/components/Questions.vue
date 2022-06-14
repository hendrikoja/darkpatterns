<template>
<div class="question">
  <img src="../../static/textbubble.png" class="QuestionsTextbubble">
  <img src="../../static/fakedarkpattern.png" class="QuestionsChoice1">
  <img src="../../static/cookieyum.png" class="QuestionsChoice2">
  <button name="Answer" class="answerbutton" @click="$emit('questionevent')">Answer</button>
</div> 
</template>