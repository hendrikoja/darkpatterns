<script>
import MethodsVue from './MethodsVue.vue'
export default{

}
// Script on vaja muuta, temp. lahendus praegu
</script>

<template>
<div class="Openingscreen">
  <button name="avaleht" class="button1" @click="countup()">{{count}}</button>
  <input class="kasutaja" v-model="kasutajanimi" placeholder="Kasutajanimi" maxlength="14">
  <button class="enterkasutaja" @click="$emit('openingevent')">Alusta mängu</button>
</div>
</template>