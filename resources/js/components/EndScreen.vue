<script>

</script>

<template>
<div class="💄">
    <div class="😂">Congratulations! You got to the end</div>
    <div class="🥺">Your score was (score) points. Good job!</div>
    <img class="👨‍💼" src="../../static/bosssmiling.jpg">
    <img src="../../static/interactivescreenbig.png">
    <button class="🔘" @click="$emit('endevent')">Leaderboard</button> <!--Disainimeeskonna probleem :sunglasses:-->
    </div>
</template>

<style scoped>
.💄 {
  position: relative;
  text-align: center;
  color:rgb(0, 0, 0);
  font-size: 5vh;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.👨‍💼 {
  position: absolute;
  width: 75vh;
  height: 37vh;
  top:27%;
  left:30%;
}


.🥺 {
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
}


.😂 {
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.🔘 {
  position: absolute;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 5vh;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
</style>