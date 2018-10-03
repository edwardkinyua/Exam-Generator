<!DOCTYPE HTML>
<html>
<?php include 'teacherHeader.php'; ?>
<title> Edit Test </title>
<head>
<!-- Resize to fit screen dynamically -->
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<style>
	* { box-sizing: border-box; }
	.row { display: flex; }
	.column {
		flex: 50%;
		padding: 10px;
	}
</style>
</head>
<body>
	<h2> Choose Questions to Add to the Test </h2>
	<div class="row">
		<div class="column" style="background-color:#fff;">
			<h2> Selected Questions </h2>
			<p> SAMPLE TEXT </p>
		</div>
		<div class="column" style="background-color:#bbb;">
			<h2> Availabe Questions </h2>
			<p> SAMPLE TEXT </p>
			<!-- Increase number dynamically -->
			<!-- https://stackoverflow.com/questions/13330202/how-to-create-list-of-checkboxes-dynamically-with-javascript-->
			<input type="checkbox" name="test" value="test"> SAMPLE TEXT <br><br>
			<button type="button" onClick=>Submit Selected</button>
		</div>
	</div>
</body>
</html>

