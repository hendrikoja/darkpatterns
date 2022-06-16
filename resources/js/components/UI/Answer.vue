<script>
export default{
    data(){
        return {
          hidden: true,
        }
    },
    mixins: [
      require('../MethodsVue.vue')
    ],
    mounted() {
    },
    methods: {
    },

    props: ["answer_data"]
}
</script>

<template>
    <div class="QuestionsChoice1">
        <img v-bind:src="answer_data['image_loc']" class="scale">
    </div>
</template>

<style scoped>
    .QuestionsChoice1 {
    max-width: 25vw;
    height: auto;
    background: #2196F3;
    border: 2px solid #222;
    }

    .QuestionsChoice1:hover{
    box-shadow: 0 0 2px 2px greenyellow;
    }
</style>