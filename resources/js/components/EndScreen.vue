<script>
export default{
    data(){
        return {
          speedrun_time: null,
        }
    },
    mounted() {
      this.speedrun_time = new Date();
      this.$emit('databaseEvent');
    },
    computed: {
      speedrun_score: {
        get() {
          var calculated_speed = new Date(this.speedrun_time - this.start_time);
          var time_string = calculated_speed.getMinutes() + "m " + calculated_speed.getSeconds() + "s " + calculated_speed.getMilliseconds() + "ms";
          return time_string;
        }
      }
    },
    props:["score", "q_amount", "start_time"],
}
</script>

<template>
<div class="endContainer">
    <p>Congratulations!</p>
    <p>Score: {{score}}</p>
    <p>Speed: {{speedrun_score}}</p>
    <button class="leaderboardButton" @click="$emit('endevent')"><p>Check leaderboard!</p><img class="leaderboardImage" src="../../static/trophy.png"></button> <!--Disainimeeskonna probleem :sunglasses:-->
    </div>
</template>

<style scoped>
  .endContainer {
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: absolute;
    text-align: center;
    color:rgb(0, 0, 0);
    background-color: white;
    font-size: 5vh;
    width: 60vw;
    height: 60vh;
    left: 15%;
    top: 15%;
    border-radius: 25px;
    gap: 5vh;
  }
  .leaderboardButton {
    display: flex;
    justify-content: flex-end;
    background-color: white;
    padding-right: 5vw;
    align-items: center;
    font-size: 2vh;
  }
  .leaderboardImage {
    display: flex;
    width: 5vw;
    height: 5vh;
    object-fit: contain;
  }
</style>