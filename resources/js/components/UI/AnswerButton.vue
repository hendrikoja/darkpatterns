<script>
export default{
    data(){
        return {
          hidden: true
        }
    },
    mounted() {
       setTimeout(() => this.hidden = false, 500 + (1000 * this.delay));
    },
    methods: {

    },

    props: [
        "delay",
    ]
}
</script>

<template>
  <Transition name="bounce">
    <div class="localisation" v-if="!hidden">
        <button class="next">Next Question</button>
    </div>
  </Transition>
</template>

<style scoped>
  .next{
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to right, #040404, #0d024e);
    border-color: yellow;
    border-radius: 9px;
    color: rgb(255, 255, 255);
    width: 20vw;
    height: 6vh;
    font-size: 1.5vw;
    cursor: pointer;
  }

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