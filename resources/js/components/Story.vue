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
      v-for="k in this.story_data"
      :key=k
      :prompt="k['description']" />
  </div>
</div> 
</template>