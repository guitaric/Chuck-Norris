<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello Istvan, this is tough</title>

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

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
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
		background-color: lightblue;
		font-size: 2em;
		font-weight: bold;
	}

	.boxes > div > div:nth-child(2) {
		background-color: blanchedalmond;
	}

	.boxes > div > div:last-child {
		background-color: lightpink;
	}

	button {
		width: 50%;
		height: 50%;
		border: 5px solid black;
		background-color: white;
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
				<div></div>
				<div><button>Open for more</button></div>
			</div>
			<!-- <div>Chuck Norris is funnier than Zlatan. NOT</div> -->
		</div> 

	    <div class='boxes' id='box2'>
			<div>
				<div>Chuck Norris Joke</div>
				<div></div>
				<div><button>Open for more</button></div>
			</div>
		</div>

		<div class='boxes' id='box3'>
			<div>
				<div>Chuck Norris Joke</div>
				<div></div>
				<div><button>Open for more</button></div>
			</div>
		</div> 

	</div>

</div>

</body>
</html>