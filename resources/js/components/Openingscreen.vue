<script>
import MethodsVue from './MethodsVue.vue'
export default{

}
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>
<div class="Openingscreen">
  <button name="openscreen" class="button1" @click="countup()">{{count}}</button>
  <input class="user" v-model="username" placeholder="Username" maxlength="14">
  <button class="enteruser" @click="$emit('openingevent')">Start game lol</button>
  <img src="../../static/textbubble.png" class="mainmenutextbubble">
  <img src="../../static/interactivescreensmall.png" class="mainmenuusernameplay">
</div>
</template>