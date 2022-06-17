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
          if (this.ready) {
            this.story = !this.story;
            this.gamestarted = !this.gamestarted;
          } else {
            return;
          }
          this.start_date = new Date();
        /*}*/
      },
      settingsfunc() {
        this.settingsmenu = !this.settingsmenu;
      },
      nextfeedback() {
        this.story = true;
        this.feedback = false;
        this.question = false;
      },
      nextstory() {
        this.story = false;
        this.feedback = false;
        this.question = true;
      },
      nextfeedback() {
        this.gamecounter++;

        this.story = true;
        this.question = false;
        this.feedback = false;
      },
      nextquestion(correct, points) {
        if (correct) {
          this.correct_answer = true;
          this.points += points;
          this.correct_answers += 1;
        } else {
          this.correct_answer = false;
        }

        this.story = false;
        this.feedback = true;
        this.question = false;
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
      },
      next() {
        this.leaderboard_visible = true;
      },
  },
}
</script>