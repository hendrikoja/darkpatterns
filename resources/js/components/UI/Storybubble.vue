<script>
export default{
    data(){
        return {
          hidden: true,
        }
    },
    mounted() {
       setTimeout(() => this.hidden = false, 500 + (1000 * this.order_number));
       console.log(this.order_number);
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
  <Transition name="bounce">
  <div class="storybubbles" v-if="!hidden">
      <div class="storybosspics">
        <img src="../../../static/boss2.png" class="storybosspng">
      </div>
      <div class="bossitekst">
        <p>{{prompt}}</p>
      </div>
  </div> 
  </Transition>
</template>

<style>
  .bounce-enter-active {
    animation: bounce-in 0.5s;
  }
  .bounce-leave-active {
    animation: bounce-in 0.5s reverse;
  }
  @keyframes bounce-in {
    0% {
      transform: scale(0);
    }
    50% {
      transform: scale(1.25);
    }
    100% {
      transform: scale(1);
    }
  }
</style>