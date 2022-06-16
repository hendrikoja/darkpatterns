<script>
    export default{
        data(){
            return {
                tweened: 0
            }
        },
        props:["points"],
    }
</script>

<template>
    <div class="points">
        <p class="pointtext">Score:</p><p class="numbertext">{{points}}</p>
    </div>
</template>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    .numbertext {
        display:flex;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-size: 2vw;
        flex-wrap: wrap;
        align-content: stretch;
        justify-content: center;
    }
    .points {
        color:rgb(0, 0, 0);
        display: flex;
        cursor: pointer;
        left: 1vw;
        top: 1.5vh;
        border-radius: 2px;
        flex-direction: column;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    .pointtext {
        font-family: "Roboto", sans-serif;
        font-weight: 300;
        font-size: 2vw;
    }
</style>