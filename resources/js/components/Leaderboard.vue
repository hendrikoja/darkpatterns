<script setup>
  import UserLeaderboard from './UI/UserLeaderboard.vue'
</script>


<script>
export default{
	components: {
		UserLeaderboard,
    },
    data(){
        return {
			headernames: {
				username:"Username",
				points: "Score",
				time: "Time",
				questions_correct: "Questions"
			},
			testdata: {
				username:"Urmas",
				points: "1500",
				time: "1h 30min",
				questions_correct: "3/5"
			}
        }
    },
    props:["leaderboard_data", "question_amount"],
}
</script>

<template>
<div class="Leaderboard2">
	<div class="container">
		<div class="leaderboardHead">
			<UserLeaderboard 
				:place="-1"
				:user_data="headernames"
			/>
		</div>
		<div class="scores">
			<UserLeaderboard
				v-for="(k, v) in this.leaderboard_data"
				:key=k
				:user_data="k"
				:place = v
				:question_amount = "question_amount"/> 
		</div>
	</div>
</div>
</template>


<style scoped>
.Leaderboard2 {
  position: absolute;
  top: 5%;
  left: 25%;
  width: 100vh;
  height: 80vh;
  text-align: center;
  color:rgb(0, 0, 0);
  background-color: white;
  border-radius: 25px;
  font-size: 5vh;
}
.container {
	width: 100vh;
	height: 100vh;
	position: absolute;
  top: 0%;
  left: 0%;
}
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
.leaderboardHead {
	padding: 1vh 1.6vh;
	font-size: 3vh;
	display: flex;
	justify-content: center;
    text-align: center;
	font-family: "Roboto", sans-serif;
}
.leaderboard .head h1 {
	display: inline-block;
	margin-left: 1vh;
}

.scores{
	display: flex;
	flex-direction: column;
	align-items: center;
	gap: 1vh;
	color: rgb(3, 3, 3);
	font-size: 3vh;
}
.leaderboard ol {
	counter-reset: number;
}
.leaderboard li {
	padding: 4vh;
	display: flex;
}
.leaderboard li mark {
	flex-grow: 1;
	color: rgb(0, 0, 0);
	background-color: transparent;
}
.leaderboard li:before {
	counter-increment: number;
	content: counter(number) ".";
	margin-right: 4px;
}
.leaderboard li:nth-child(1) {
	background: #fa6855;
}
.leaderboard li:nth-child(2) {
	background: #e0574f;
}
.leaderboard li:nth-child(3) {
	background: #d7514d;
}
.leaderboard li:nth-child(4) {
	background: #cd4b4b;
}
.leaderboard li:nth-child(5) {
	background: #c24448;
}
</style>