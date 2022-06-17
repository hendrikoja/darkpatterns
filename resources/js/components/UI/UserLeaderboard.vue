<script>
export default{
    data(){
        return {
        }
    },
    mounted() {
    },
    methods: {
    },

    computed: {
        award_icon: {
            get() {
                if (this.place < 0) {
                    return "";
                } else if (this.place == 0) {
                    return "👑";
                } else if (this.place == 1) {
                    return "🥈";
                } else if (this.place == 2) {
                    return "🥉";
                } else {
                    return "🎈";
                }
            }
        },
        time_taken: {
            get() {
                var start_date = new Date(this.user_data.start);
                var stop_date = new Date(this.user_data.stop);
                console.log(start_date);
                console.log(stop_date);
                return this.user_data.start ? Math.floor((stop_date - start_date) / (1000 * 60 * 60)) : "Time";
            }
        },
        question_or_header: {
            get() {
                console.log("we have :" + this.question_amount);
                return this.question_amount ? this.user_data.correct_answers + "/" + this.question_amount : "Questions";
            }
        }
    },

    props: ["user_data", "place", "question_amount"]
}
</script>

<template>
    <div class="userBox">
        <div class="awardIcon">
            <p>{{award_icon}}</p>
        </div>
        <div class="username">
            <p>{{user_data.username}}</p>
        </div>
        <div class="score">
            <p>{{user_data.points}}</p>
        </div>
        <div class="time">
            <p>{{time_taken}}</p>
        </div>
        <div class="questionsRight">
            <p>{{question_or_header}}</p>
        </div>
    </div>
</template>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    .userBox{
        display:flex;
        width: 95%;
        height: 5vh;
        font-family: "Roboto", sans-serif;
        font-weight: 100;
        text-align: center;
    }
    .awardIcon {
        width: 6%;
        height: 100%;
    }
    .username {
        width: 20%;
        height: 100%;
        font-family: "Roboto", sans-serif;
    }
    .score {
        width: 15%;
        height: 100%;
    }
    .time {
        width: 30%;
        height: 100%;
    }
    .questionsRight {
        width: 25%;
        height: 100%;
    }
</style>