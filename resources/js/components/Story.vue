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
      <div class="bossitekst">
      <p class="line-1 anim-typewriter">{{this.story_data[0]["description"]}}</p>
    </div>
    <div class="bossitekst2">
      <p class="line-1 anim-typewriter2">{{this.story_data[1]["description"]}}</p>
    </div>
    <div class="storybubbles">
      <img src="../../static/textbubble.png" class="storymenutextbubble">
      <img src="../../static/textbubble.png" class="storymenutextbubble">
    </div>
    <div class="storybosspics">
      <img src="../../static/boss2.png" class="storybosspng">
      <img src="../../static/boss2.png" class="storybosspng2">
    </div>
</div> 
</template>