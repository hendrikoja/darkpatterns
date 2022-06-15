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
  <div class="center">
    <button name="openscreen" class="button1" @click="countup()">{{count}}</button>
    <input class="user" v-model="username" placeholder="Username" maxlength="14" @change="emitUsernameChange()">
    <button class="enteruser" @click="$emit('openingevent')">Start game lol</button>
    <div class="mainmenutextbubble">
        <h2 class="gameTitle">Dark Patterns</h2><br><p class="startScreenIntroText">A dark pattern is a user interface that has been carefully crafted to trick users into doing things, such as buying overpriced insurance with their purchase or signing up for recurring bills.</p>
        <h2 class="gameTitle">The Game</h2><br><p class="startScreenIntroText">In the following game, you'll assume the role of an UX designer in a Fortune 500 company, where you're attempting to bring the company as much profit as possible by implementing dark patterns into your company's practices. You'll get points for making decisions which are good for the company, but bad for the user.</p>
    </div>
    <div class="mainmenuusernameplay">
    </div>
  </div>
</div>
</template>