<script>
import { ref } from 'vue'

function drop(e) {
    if(e.preventDefault) { e.preventDefault(); }
    return false;
}

export default{
  data(){
    return{
      funny: 0,
    }
  },
  setup() {
    const items = ref([
      { id: 0, list: 1, image: "../images/30dayfreetrial.png" },
      { id: 1, list: 1, image: "../images/adidas.png" },
      { id: 2, list: 1, image: "../images/1000.png"},
      { id: 3, list: 1, image: "../images/mostpopularplan.png"},
      { id: 4, list: 1, image: "../images/freeplan.png"},
      { id: 5, list: 1, image: "../images/trqsted.png"},
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
    const onDrop = (event, list, ele) => {
      var id = ele
      const dropzone = document.getElementById(id)
      var funny = dropzone.dataset.draglimit
    if(funny != "false"){
      dropzone.dataset.draglimit = "false"
      const itemID = event.dataTransfer.getData('itemID')
      const item = items.value.find((item) => item.id == itemID)
      item.list = list
    }
    }
    const onReset = () =>{
      for(let i=1; i < 8; i++){
        const dropzone = document.getElementById("dropzone" +i)
        dropzone.dataset.draglimit = "true"
      }
      for(let i=1; i<8; i++){
        var funky = getList(i)
        for(var g = 0; g < funky.length; g++){
          for(let e=0; e<6; e++){
            const item = items.value.find((item) => item.id == e)
            if(item != null){item.list = 1}
          }
        }
      }
    }
    return {
      getList,
      onDrop,
      startDrag,
      onReset,
    }
  }
}
document.body.addEventListener('drop',drop,true);
</script>


<template>
<div class="menu">
  <div
    class="drop-zone"
    @drop="onDrop($event, 1, 'dropzone1')"
    @dragover.prevent
    @dragenter.prevent
    id="dropzone1"
    data-draglimit = "true"
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
<div>
  <img src="../../static/isoef.jpg" class="cooldrop">
</div>
<div class="interactivegame">
  <div
    class="drop-zone2"
    @drop="onDrop($event, 2, 'dropzone2')"
    @dragover.prevent
    @dragenter.prevent
    id="dropzone2"
    data-draglimit = "true"
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
    @drop="onDrop($event, 3, 'dropzone3')"
    @dragover.prevent
    @dragenter.prevent
    id="dropzone3"
    data-draglimit = "true"
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
    @drop="onDrop($event, 4, 'dropzone4')"
    @dragover.prevent
    @dragenter.prevent
    id="dropzone4"
    data-draglimit = "true"
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
<div class="interactivegame">
  <div
    class="drop-zone5"
    @drop="onDrop($event, 5, 'dropzone5')"
    @dragover.prevent
    @dragenter.prevent
    id="dropzone5"
    data-draglimit = "true"
  >
    <div
      class="drag-el5"
      v-for="item in getList(5)"
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
    class="drop-zone6"
    @drop="onDrop($event, 6, 'dropzone6')"
    @dragover.prevent
    @dragenter.prevent
    id="dropzone6"
    data-draglimit = "true"
  >
    <div
      class="drag-el6"
      v-for="item in getList(6)"
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
    class="drop-zone7"
    @drop="onDrop($event, 7, 'dropzone7')"
    @dragover.prevent
    @dragenter.prevent
    id="dropzone7"
    data-draglimit = "true"
  >
    <div
      class="drag-el7"
      v-for="item in getList(7)"
      :key="item.title"
      draggable="true"
      @dragstart="startDrag($event, item)"
    >
      <img :src = "item.image" class="scale2">
    </div>
  </div>
</div>
  <button id="Reset" name="Reset" class="resetbutton" @click="onReset()" >Reset</button>
  <button name="Answer" class="answerbutton" @click='$emit("questionevent")'>Answer</button>
</template>

<style scoped>
.resetbutton {
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
  left: 0%;
  position: absolute;
}

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
