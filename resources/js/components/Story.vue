<script setup>
  import Storybubble from './UI/Storybubble.vue'
</script>

<script>
export default{
    data(){
        return {
            //Pole veel kindel, kas seda on vaja, aga igaks juhuks jätan
            rand_story_data: "",
        }
    },
    methods: {

    },
    props: [
        "story_data",
    ]
}
</script>


<template>
<div class="story">
  <div class="localisation">
    <button class="next" @click="$emit('storyevent')">Answer</button>
  </div>
  <div class="storyContainer">
    <Storybubble
      v-for="(k, v) in this.story_data"
      :key=k
      :prompt="k['description']"
      :order_number = v />
  </div>
</div> 
</template>

<style scoped>
.next{
  display: flex;
  background: linear-gradient(to right, #040404, #0d024e);
  border-color: yellow;
  border-radius: 9px;
  color: rgb(255, 255, 255);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 20vw;
  height: 6vh;
  font-size: 1.5vw;
  cursor: pointer;
  position: absolute;
  top: 72%;
  left: 67.5%;
}
.storyContainer {
  display:flex;
  flex-direction: column;
  gap: 1vh;
  position: absolute;
  top: 10vh;
}
</style>