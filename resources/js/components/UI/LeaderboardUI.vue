<script>
export default{
    data(){
        return {
        }
    },
    mixins: [
      require('../MethodsVue.vue')
    ],
    props:["game_scores"],
}
</script>

<template>
    <div class="leaderboardContainer">
    </div>
</template>