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
        <img src="../../../static/boss.png" class="storybosspng">
      </div>
      <div class="bossitekst">
        <p>{{prompt}}</p>
      </div>
  </div> 
  </Transition>
</template>

<style scoped>
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
  .storybosspng{
  max-width:100%;
  max-height:100%;
  }
  .storybubbles {
  display: flex;
  z-index: -1;
  width: 93vw;
  height: 15vh;
  gap: 1vw;
}
.bossitekst {
  width: 93vw;
  height: 15vh;
  padding: 1vh;
  text-align: left;
  color:rgb(0, 0, 0);
  background-color: white;
  border-radius: 25px;
  font-size: 3vh;
  -webkit-box-shadow: 9px 9px 15px -1px rgba(0,0,0,0.5); 
  box-shadow: 9px 9px 15px -1px rgba(0,0,0,0.5);
  overflow: hidden;
}
.storybosspics { 
  display: flex;
  justify-content: center;
  background-color: white;
  border-radius: 25px;
  width: 10vw;
  height: 15vh;
  -webkit-box-shadow: 9px 9px 15px -1px rgba(0,0,0,0.5); 
  box-shadow: 9px 9px 15px -1px rgba(0,0,0,0.5);
}
</style>