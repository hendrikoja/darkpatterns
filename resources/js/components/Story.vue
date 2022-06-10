<script>
export default{
  props: {
      cum: Boolean,
      count: Number,
      kasutajanimi: String,
      settingsmenu: Boolean,
      story: Boolean,
      gamestarted: Boolean,
      gamecounter: Number,
      question: Boolean,
  },
  methods: {
    submit(){
        this.$emit('nextstory')
    }
  }
}
</script>

<template>
<div class="story">
  <div class="localisation">
  <p>Nüüd see on gaming, POG</p>
  <button class="edasi" @click="nextstory()">Järgmine küsimus or smth</button>
  </div>
</div> 
</template>