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
    mounted() {
       console.log("Story data: " + this.story_data);
       console.log("correctimus" + this.correct)
    },
    methods: {

    },
    props: [
        "story_data", "correct"
    ],
    computed: {
      responses: function() {
        return this.correct ? this.story_data.filter(i => i.correct === 1) : this.story_data.filter(i => i.correct === 0);
      }
    }
}
</script>


<template>
<div class="story">
  <div class="localisation">
    <button class="next" @click="$emit('storyevent')">Answer</button>
  </div>
  <div class="storyContainer">
    <Storybubble
      v-for="(k, v) in this.responses"
      :key=k
      :prompt="k['description']"
      :order_number = v />
  </div>
</div> 
</template>