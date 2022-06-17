<script>
export default{
    data(){
        return {
        }
    },
    mounted() {
      this.$emit('databaseEvent');
    },
    props:["score", "q_amount"],
}
</script>

<template>
<div class="endContainer">
    <p>Congratulations!</p>
    <p>Score: {{score}}</p>
    <button class="🔘" @click="$emit('endevent')">Leaderboard</button> <!--Disainimeeskonna probleem :sunglasses:-->
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
</style>