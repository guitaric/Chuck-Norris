<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello Istvan</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: black;
	}

	h1 {
		color: #444;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#container {
		margin: 0 15px 0 15px;
	}


	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	.boxes {
		margin: 20px auto;
		width: 60%;
		height: 100px;
		border: 5px solid black;
		border-radius: 10px;

	}

	.boxes > div {
		display: flex;
		flex-direction: row;
	}

    .boxes > div > div {
		flex: 1;
		text-align: center;
		line-height: 100px;
	}

	
	.boxes > div > div:first-child {
		background-color: lightgreen;
		font-size: 2em;
		font-weight: bold;
	}

	.boxes > div > div:nth-child(2) {
		background-color: white;
		font-size: 2em;
	}

	.boxes > div > div:last-child {
		background-color: red;
	}

	button {
		width: 50%;
		height: 50%;
		font-weight: bold;
		border: 5px solid black;
		background-color: white;
	} 

	img {
		width: 400px;
		height: 300px;

	}

	h1 {
		display: inline;
		font-size: 30px;
		font-weight: bold;
	}

	.things {
		display: flex;
		justify-content: space-evenly ;
	}

	.things > h1 {
		line-height: 200px;
	}

	</style>

	<script>



// let categ1 = document.getElementById('category1');
// // categ1.textContent = jokes


// function toggleBox() {
// 	console.log(jokes)
// }
	
</script>


</head>
<body>

<div id="container">
	<h1>Chuck Norris API</h1>

    <div id="container">

		<div class='boxes' id='box1'>
			<div >
				<div>Chuck Norris Joke</div>
				<div class='category'></div>
				<div><button onclick="toggleBox()">Open for more</button></div>
			</div>
			<!-- <div>Chuck Norris is funnier than Zlatan. NOT</div> -->
		</div> 

	    <div class='boxes' id='box2'>
			<div>
				<div>Chuck Norris Joke</div>
				<div class='category'></div>
				<div><button>Open for more</button></div>
			</div>
		</div>

		<div class='boxes' id='box3'>
			<div>
				<div>Chuck Norris Joke</div>
				<div class='category'></div>
				<div><button>Open for more</button></div>
			</div>
		</div> 

	</div>

	<div class='things'>
		<img src="images/zlatan-pic.jpeg" alt="">
		<h1>VS.</h1>
		<img src="images/chuck-norris-pic.jpg" alt="">
	</div>

</div>

</body>

<script>

var jokes;

fetch('http://api.icndb.com/jokes/random/3').then(function (response) {
	// The API call was successful!
	return response.json();
}).then(function (data) {
	// This is the JSON from our response
	jokes = data;
	console.log(jokes)

	let categories = document.getElementsByClassName('category');
	console.log(categories[0])

	for(let i=0; i<jokes.value.length; i++) {
		if(jokes.value[i].categories.length == 0) {
			categories[i].textContent = "Category: general";
		} else {
			categories[i].textContent = "Category: " + jokes.value[i].categories;
		}
	}



}).catch(function (err) {
	// There was an error
	console.warn('Something went wrong.', err);
});



	</script>

</html>