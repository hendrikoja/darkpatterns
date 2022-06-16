<script>
    export default{
        data(){
            return {
            }
        },
        props:["points"],
    }
</script>

<template>
    <div class="points"><p>Points: <b>{{points}}</b></p></div>
</template>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap');
    .points {
        color:rgb(0, 0, 0);
        display: flex;
        cursor: pointer;
        font-size: 2vw;
        left: 1vw;
        top: 1.5vh;
        position: absolute;
        border-radius: 2px;
        font-style: "Light";
        font-family: "Roboto", sans-serif;
    }
</style>