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
<div class="Openingscreen">
  <button name="openscreen" class="button1" @click="countup()">{{count}}</button>
  <input class="user" v-model="username" placeholder="Username" maxlength="14">
  <button class="enteruser" @click="$emit('openingevent')">Start game lol</button>
</div>
</template>