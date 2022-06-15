<script>
export default{
    methods: {
    },
    props: [
        "prompt",
    ]
}
</script>

<template>
<div class="storybubbles">
    <div class="storybosspics">
      <img src="../../../static/boss2.png" class="storybosspng">
    </div>
    <div class="bossitekst">
      <p>{{prompt}}</p>
    </div>
</div> 
</template>