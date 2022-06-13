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
  <img src="../../static/interactivescreenbig.png" class="bigscreen">
  <img src="../../static/interactivescreenbig.png" class="smallscreen">
  <img src="../../static/interactivescreenbig.png" class="smallscreen2">
  <button name="Answer" class="answerbutton" @click="$emit('questionevent')">Advance story or smth</button>
</div> 
</template>