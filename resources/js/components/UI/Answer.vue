<script>
export default{
    data(){
        return {
          hidden: true,
        }
    },
    mounted() {
    },
    methods: {
    },

    props: ["answer_data"]
}
</script>

<template>
    <div class="QuestionsChoice1">
        <img v-bind:src="answer_data['image_loc']" class="scale" @click="answeredfunc()">
    </div>
</template>

<style scoped>
.QuestionsChoice1 {
  max-width: 25vw;
  height: auto;
}
</style>