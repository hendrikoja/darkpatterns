<template>
<div class="story">
  <div class="localisation">
  <p>Nüüd see on gaming, POG, mul pole aimugi kuidas selle tööle sain, ära küsi</p>
  <button class="next" @click="$emit('storyevent')">Next question or smth</button>
  </div>
      <div class="bossitekst">
      <p class="line-1 anim-typewriter">Good morning worker! Your first task is to provide the appropriate cookie settings for our website. ()</p>
    </div>
    <div class="bossitekst2">
      <p class="line-1 anim-typewriter2">Make the most beneficial decision for us.</p>
    </div>
    <div class="bossitekst3">
      <p class="line-1 anim-typewriter3">Ok.</p>
    </div>
    <div class="storybubbles">
      <img src="../../static/textbubble.png" class="storymenutextbubble">
      <img src="../../static/textbubble.png" class="storymenutextbubble">
      <img src="../../static/textbubble.png" class="storymenutextbubble">
    </div>
    <div class="storybosspics">
      <img src="../../static/boss2.png" class="storybosspng">
      <img src="../../static/boss2.png" class="storybosspng2">
       <img src="../../static/epicworkerdoingtheworkingfortheboss.png" class="storyworkerpng">
      
    </div>
</div> 
</template>