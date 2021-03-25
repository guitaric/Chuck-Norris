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
		/* height: 100px; */
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
		/* background-color: lightgreen; */
		font-size: 2em;
		font-weight: bold;
	}

	.boxes > div > div:nth-child(2) {
		/* background-color: white; */
		font-size: 2em;
	}

	.boxes > div > div:last-child {
		/* background-color: red; */
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

	.jokeDiv {
		display: none;
		font-size: 1.5em;
		line-height: 1.2em;
		padding: 1em;
	}

	</style>


</head>
<body>

<div id="container">
	<h1>Chuck Norris API</h1>

    <div id="container">

		<div class='boxes' id='box1'>
			<div >
				<div>Chuck Norris Joke</div>
				<div class='category'></div>
				<div><button id='button1'>Open for more</button></div>
			</div>
			<div  style="display:none" class='jokeDiv'>first gjoke</div>
		</div> 

	    <div class='boxes' id='box2'>
			<div>
				<div>Chuck Norris Joke</div>
				<div class='category'></div>
				<div><button id='button2'>Open for more</button></div>
			</div>
			<div style="display:none" class='jokeDiv'>her is the joke</div>
		</div>

		<div class='boxes' id='box3'>
			<div>
				<div>Chuck Norris Joke</div>
				<div class='category'></div>
				<div><button id='button3'>Open for more</button></div>
			</div>
			<div style="display:none" class='jokeDiv'>third joke</div>
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

function convertHTML(str) {
  const htmlEntities = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': "&quot;",
    "'": "&apos;"
  };
  // Using a regex, replace characters with it's corresponding html entity
  return str.replace(/([&<>\"'])/g, match => htmlEntities[match]);
}


var jokes;

fetch('http://api.icndb.com/jokes/random/3').then(function (response) {
	// The API call was successful!
	return response.json();
}).then(function (data) {
	// This is the JSON from our response
	jokes = data;
	console.log(jokes)


	//categories
	let categories = document.getElementsByClassName('category');
	for(let i=0; i<jokes.value.length; i++) {
		if(jokes.value[i].categories.length == 0) {
			categories[i].textContent = "Category: general";
		} else {
			categories[i].textContent = "Category: " + jokes.value[i].categories;
		}
	}

	//buttons
	let buttons = document.getElementsByTagName('button');
	let jokeDivs = document.getElementsByClassName('jokeDiv');
	console.log(jokeDivs)

	//add joke
	for(let i=0; i<jokes.value.length; i++) {
		//escape characters
		jokeDivs[i].textContent =
				jokes.value[i].joke.replace('&amp;', '&')
									.replace('&quot;', '"')
									.replace("&apos;", "'")
									.replace("&lt;", '<')
									.replace("&gt;", '>')
	}

	//show/hide joke and change button text
	document.addEventListener('click', function(e) {
		(e.target.textContent === "Open for more") ? e.target.textContent = "Close for less" : e.target.textContent = "Open for more";
		let buttonId = e.target.id
		let buttonIndex = buttonId.charAt(buttonId.length-1)-1

		jokeDivs[buttonIndex].style.display === 'none' ? 
			jokeDivs[buttonIndex].style.display = 'block' :
			jokeDivs[buttonIndex].style.display = 'none'  
	})



}).catch(function (err) {
	// There was an error
	console.warn('Something went wrong.', err);
});




	</script>

</html>