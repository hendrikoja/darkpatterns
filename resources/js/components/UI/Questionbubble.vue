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
    <div class="bossitekst">
      <p>{{prompt}}</p>
    </div>
</div> 
</template>

<style scoped>
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
</style>