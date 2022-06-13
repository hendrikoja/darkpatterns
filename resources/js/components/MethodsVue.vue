<script> // IGNOREEEEERI BRUUUUUUUH IT DOES NOTHING
export default{
  data(){
    return {
      count: 0,
      username: "",
      settingsmenu: false,
      story: false,
      gamestarted: false,
      gamecounter: 0,
      question: false,
      file: "../../assets/Testmusic.mp3"
    }
  },
  methods: {
    countup(){
      this.count++;
    },
    kasutajabaasi(){
      this.story = !this.story;
      this.gamestarted = !this.gamestarted;
      this.gamecounter++;
    },
    settingsfunc(){
      this.settingsmenu = !this.settingsmenu;
      if (this.gamecounter % 2 == 0){
      this.question = !this.question;
      }
      else{
      this.story = !this.story;
      }
    },
    nextstory(){
      this.gamecounter++;
      this.story = false;
      this.question = true;
    },
    nextquestion(){
      this.gamecounter++;
      this.story = true;
      this.question = false;
      console.log(this.gamecounter)
    },
    console(){
      console.log(this.file)
    },
    sound(){
      /*var audio = new Audio(require("../../assets/Testmusic.mp3"));*/
      audio.play();
    }
  },
}
var test = {
  car(){
    this.count++;
  }
}
</script>