<!DOCTYPE HTML>
<?php include 'teacherHeader.php' ?>
<head>
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
<script>
	//JS to be added to dynamically chagne
</script>
<html>
	<h2> Edit Grades and Comments </h2>
	<div class = "row">
		<div class="column" style="background-color:#fff">
			<h2> Comments/Grade Edits </h2>
			<form>
				<textarea name="comment" rows="2" cols="30" placeholder="Add comment here"></textarea> <br>
				<input type="text" name="newGrade" placeholder="Add new grade here"> <br> <br>
				<input type="submit" value="submit">
			</form>
		</div>
		<div class="column" style="background-color:#bbb">
			<h2> Student Answer </h2>
			<h3> Student Output </h3>
			<h3> Correct Output </h3>
		</div>
	</div>
</html>
