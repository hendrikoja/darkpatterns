<script>
export default{
    data(){
        return {
            count: 0
        }
    },
    methods: {
        countup(){
            this.count++
        }
    }
}
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>

<div class="settingsmenu">
  <div class="music-player">
  <button name="Sound" class="Soundbutton" @click="countup()">Sound</button>
  </div>
  <label class="switch">
  <input type="checkbox" name="Sound" id="Sound">
  <span class="slider"></span>
  </label>
</div>

</template>

<style scoped>
.Soundbutton {
  display: flex;
  background-color: #a14337;
  border-color: yellow;
  border-radius: 9px;
  color: rgb(0, 255, 76);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 4vh;
  font-size: 1.5vw;
  cursor: pointer;
  top:10%;
  right: 5%;
  position: absolute;
}
.switch {
    position: absolute;
    display: inline-block;
    width: 80px;
    height: 34px;
    right: 18%;
    top: 10%;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider{
  position: absolute;
  cursor: pointer;
  top: 2%;
  left: 25%;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked + .slider {
    background-color: #2196F3;
  }

  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  .slider.round:before {
    border-radius: 50%;
  }
</style>