<script>
import { ref } from 'vue'

function drop(e) {
    if(e.preventDefault) { e.preventDefault(); }
    return false;
}

export default{
  setup() {
    const items = ref([
      { id: 0, title: 'oh', list: 1, image: "../images/30dayfreetrial.png" },
      { id: 1, title: 'the', list: 1, image: "../images/adidas.png" },
      { id: 2, title: 'misery', list: 1, image: "../images/1000.png" },
    ])
    const getList = (list) => {
      return items.value.filter((item) => item.list == list)
    }
    const startDrag = (event, item) => {
      console.log(item)
      event.dataTransfer.dropEffect = 'move'
      event.dataTransfer.effectAllowed = 'move'
      event.dataTransfer.setData('itemID', item.id)
    }
    const onDrop = (event, list) => {
      const itemID = event.dataTransfer.getData('itemID')
      const item = items.value.find((item) => item.id == itemID)
      item.list = list
    }
    return {
      getList,
      onDrop,
      startDrag,
    }
  }
}
document.body.addEventListener('drop',drop,true);
</script>


<template>
<div class="menu">
  <div
    class="drop-zone"
    @drop="onDrop($event, 1)"
    @dragover.prevent
    @dragenter.prevent
  >
    <div
      class="drag-el"
      v-for="item in getList(1)"
      :key="item.title"
      draggable="true"
      @dragstart="startDrag($event, item)" >
      <img :src = "item.image" class="scale2">
    </div>
  </div>
</div>
<div class="cooldrop">
  <img src="../../static/isoef.jpg">
</div>
<div class="interactivegame">
  <div
    class="drop-zone2"
    @drop="onDrop($event, 2)"
    @dragover.prevent
    @dragenter.prevent
  >
    <div
      class="drag-el2 scale"
      v-for="item in getList(2)"
      :key="item.title"
      draggable="true"
      @dragstart="startDrag($event, item)"
    >
      <img :src = "item.image" class="scale2">
      
    </div>
  </div>
</div>
<div class="interactivegame">
  <div
    class="drop-zone3"
    @drop="onDrop($event, 3)"
    @dragover.prevent
    @dragenter.prevent
  >
    <div
      class="drag-el3"
      v-for="item in getList(3)"
      :key="item.title"
      draggable="true"
      @dragstart="startDrag($event, item)"
    >
      <img :src = "item.image" class="scale2">
    </div>
  </div>
</div>
<div class="interactivegame">
  <div
    class="drop-zone4"
    @drop="onDrop($event, 4)"
    @dragover.prevent
    @dragenter.prevent
  >
    <div
      class="drag-el4"
      v-for="item in getList(4)"
      :key="item.title"
      draggable="true"
      @dragstart="startDrag($event, item)"
    >
      <img :src = "item.image" class="scale2">
    </div>
  </div>
</div>
  <button name="Answer" class="answerbutton" @click='$emit("questionevent")'>Answer</button>
</template>

<style scoped>
.answerbutton {
  background: linear-gradient(to right, #040404, #0d024e);
  border-color: yellow;
  border-radius: 9px;
  color: rgb(255, 255, 255);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  padding: 0.2rem;
  width: 10vw;
  height: 5vh;
  font-size: 1.5vw;
  cursor: pointer;
  top: 95%;
  right: 0%;
  position: absolute;
}
.scale2 {
  height: 100%;
  width: 100%;
  object-fit: contain;
}
</style>