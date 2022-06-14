<script>
import { ref } from 'vue'

function drop(e) {
    if(e.preventDefault) { e.preventDefault(); }
    return false;
}

export default{
  setup() {
    const items = ref([
      { id: 0, title: 'oh', list: 1, image: "../images/boss2.png" },
      { id: 1, title: 'the', list: 1, image: "../images/boss2.png" },
      { id: 2, title: 'misery', list: 2, image: "../images/boss2.png" },
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
      @dragstart="startDrag($event, item)"
    >
      <img :src = "item.image">
    </div>
  </div>
</div>
<div class="interactivegame">
  <div
    class="drop-zone"
    @drop="onDrop($event, 2)"
    @dragover.prevent
    @dragenter.prevent
  >
    <div
      class="drag-el"
      v-for="item in getList(2)"
      :key="item.title"
      draggable="true"
      @dragstart="startDrag($event, item)"
    >
      <img :src = "item.image">
    </div>
  </div>
</div>
  <button name="Answer" class="answerbutton" @click='$emit("questionevent")'>Answer</button>
</template>
