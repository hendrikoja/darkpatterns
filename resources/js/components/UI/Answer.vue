<script>
export default{
  mixins: [
    require('../MethodsVue.vue')
  ]
}
</script>


<template>
    <div class="QuestionsChoice1">
        <img src="../../../static/acceptcookies1.png" class="scale" @click="answeredfunc()" tabindex="1">
    </div>
</template>

<style scoped>
.QuestionsChoice1 {
  max-width: 25vw;
  height: auto;
  background: #2196F3;
  border: 2px solid #222;
}

.QuestionsChoice1:focus{
  box-shadow: 0 0 2px 2px #000;
}
</style>