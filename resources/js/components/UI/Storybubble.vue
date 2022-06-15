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

    props: [
        "prompt",
        "order_number"
    ]
}
</script>

<template>
<div class="storybubbles" v-if="hidden">
    <div class="storybosspics">
      <img src="../../../static/boss2.png" class="storybosspng">
    </div>
    <div class="bossitekst">
      <p>{{order_number}} : {{prompt}}</p>
    </div>
</div> 
</template>