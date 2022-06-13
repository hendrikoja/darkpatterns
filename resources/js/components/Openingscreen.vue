<script>
export default{
    data(){
        return {
            count: 0,
            username: "",
        }
    },
    methods: {
        countup() {
            this.count++
        },
        emitUsernameChange() {
            this.$emit("usernameChange", this.username)
        }
    }
}
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>
<div class="Openingscreen">
  <button name="openscreen" class="button1" @click="countup()">{{count}}</button>
  <input class="user" v-model="username" placeholder="Username" maxlength="14" @change="emitUsernameChange()">
  <button class="enteruser" @click="$emit('openingevent')">Start game lol</button>
  <img src="../../static/textbubble.png" class="mainmenutextbubble">
  <img src="../../static/interactivescreensmall.png" class="mainmenuusernameplay">
</div>
</template>