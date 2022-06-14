<script> 
module.exports = {
    methods: {
      funnistuff() {
        this.count++;
      },
      userdatabase() {
        /*if (!this.username) {
          console.log("No username has been entered");
          return;
        } else {*/
          this.story = !this.story;
          this.gamestarted = !this.gamestarted;
        /*}*/
      },
      settingsfunc() {
        this.settingsmenu = !this.settingsmenu;
      },
      nextstory() {
        this.story = false;
        this.question = true;
      },
      nextquestion() {
        this.gamecounter++;
        this.story = true;
        this.question = false;
        console.log(this.gamecounter)
      },
      console() {
        console.log(this.file)
      },
      sound() {
        /*var audio = new Audio(require("../../assets/Testmusic.mp3"));*/
        audio.play();
      },
      usernameChange(data) {
        this.username = data;   
      }
  },
}
</script>