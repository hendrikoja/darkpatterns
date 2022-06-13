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
  <button name="Firstchoice" class="button1game" @click="countup()">{{count}}</button>
  <button name="Secondchoice" class="button2game" @click="countup()">{{count}}</button>
  <button name="Answer" class="answerbutton" @click="$emit('questionevent')">Advance story or smth</button>
</div> 
</template>