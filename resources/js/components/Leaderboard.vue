<script>

</script>

<template>
<div class="Leaderboard2">
    <img class="scale" src="../../static/interactivescreenbig.png">
	<div class="container">
		<div class="leaderboard">
			<div class="head">
				<i class="fas fa-crown"></i>
				<h1>Top Scores</h1>
			</div>
			<div class="body">
				<ol>
					<li>
						<mark>Andrus Ansip</mark>
						<small>948</small>
					</li>
					<li>
						<mark>Peeter Parkija</mark>
						<small>750</small>
					</li>
					<li>
						<mark>Mari Maasikas</mark>
						<small>684</small>
					</li>
					<li>
						<mark>Ämber Höörd</mark>
						<small>335</small>
					</li>
					<li>
						<mark>Egon Ubina</mark>
						<small>-1000</small>
					</li>
				</ol>
			</div>
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
  font-size: 5vh;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
.container {
	width: 100vh;
	height: 100vh;
	position: absolute;
  top: 0%;
  left: 0%;
}
.leaderboard {
	background: linear-gradient(to bottom, #3a404d, #181c26);
}

.leaderboard .head {
	padding: 2vh 1.6vh;
	color: snow;
	font-size: 5vh;
	text-align: center;
}
.leaderboard .head h1 {
	display: inline-block;
	margin-left: 1vh;
}

.leaderboard .body {
	color: rgb(3, 3, 3);
	font-size: 4vh;
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