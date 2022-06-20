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
    <button class="enteruser" @click="$emit('openingevent')">Start game</button>
    <div class="mainmenutextbubble">
        <h2 class="gameTitle">Dark Patterns</h2><br><p class="startScreenIntroText">Dark patterns are tricks used in websites and apps that make you do things that you didn’t mean to, like buying or signing up for something.<br>(Brignull, 2018)</p>
        <h2 class="gameTitle">The Game</h2><br><p class="startScreenIntroText">In the following game, you'll assume the role of an UX designer in a Fortune 500 company, where you're attempting to bring the company as much profit as possible by implementing dark patterns into your company's practices. You'll get points for making decisions which are good for the company, but bad for the user.</p>
    </div>
    <div class="mainmenuusernameplay">
    </div>
  </div>
</div>
</template>

<style scoped>
.button1 {
  background-color: rgba(4, 22, 99, 0.87);
  border-color: yellow;
  border-radius: 9px;
  color: rgb(255, 255, 255);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 5vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:95%;
  left: 90%;
  position: absolute;
}
.user {
  background: linear-gradient(to right, #040404, #0d024e);
  border-color: yellow;
  border-radius: 9px;
  color: rgb(255, 255, 255);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 5vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:63%;
  left: 45%;
  position: absolute;
}
.enteruser {
  background: linear-gradient(to right, #040404, #0d024e);
  border-color: yellow;
  border-radius: 9px;
  color: rgb(255, 255, 255);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 4vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:72%;
  left: 45%;
  position: absolute;
}
.mainmenutextbubble {
  width: 70vw;
  height: 40vh;
  top: 15%;
  left: 14.8%;
  position: absolute;
  top: 10%;
  z-index: -1;
  border-radius: 25px;
  background-color: white;
  box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.63);
  -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.63);
  -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.63);
}
.mainmenuusernameplay{
  width: 15vw;
  height: 20vh;
  left: 42.5%;
  top: 60%;
  position: absolute;
  background-color: white;
  border-radius: 25px;
  z-index: -1;
  box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.63);
  -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.63);
  -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.63);
}
.startScreenIntroText {
  padding-right: 1vh;
  padding-left: 1vh;
  text-align: justify;
  line-height: 3vh;
  color:rgb(0, 0, 0);
  font-size: 2vh;
  overflow: hidden;
}
.gameTitle {
  text-align:center;
  padding-top: 1vh;
  font-size: 4vh;
  font-weight: bold;
}
</style>