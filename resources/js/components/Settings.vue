<script>
export default{
    data(){
        return {
            count: 0
        }
    },
    mixins: [
        require('./MethodsVue.vue')
    ]
}
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>

<div class="settingsmenu">
  <div class="music-player">
  <button name="Sound" class="Soundbutton" @click="funnistuff()">Sound</button>
  </div>
  <label class="switch">
  <input type="checkbox" name="Sound" id="Sound">
  <span class="slider"></span>
  </label>
</div>

</template>