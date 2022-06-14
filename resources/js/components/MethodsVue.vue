<script> 
module.exports = {
  methods: {
    funnistuff() {
      this.count++;
    },
    userdatabase() {
        if (!this.username) {
        console.log("No username has been entered");
        return;
      } else {
        this.story = !this.story;
        this.gamestarted = !this.gamestarted;
        this.gamecounter++;
      }
    },
    settingsfunc() {
      this.settingsmenu = !this.settingsmenu;
    },
    nextstory() {
      this.gamecounter++;
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
     usernameChange(data) {
      this.username = data;   
     }
   },
}
</script>