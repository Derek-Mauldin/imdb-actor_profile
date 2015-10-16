<!DOCTYPE html lang="en">
<html>

	<head>
		<meta charset="utf-8">
		<title>Actor Profile</title>

		<style>
			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
			}
			th, td {
				padding: 3px;
			}
		</style>
	</head>

	<body>

		<h1>Data Design Project</h1>
		<br>

		<h2>Persona</h2>
		<p>
			A dedicated and knowledgeable Movie & Television fan, Katy, wants to research and profile actors and their work.
			Katy is very knowledgeable about many actors and may have something to contribute to the database.<br>
			Katy will be using her PC and Mobile devices.
		</p>

		<h2>Use Case 1</h2>
		<p>Goal: Katy is looking for more information on an actor the he/she is unfamiliar with</p>
		<ul>
			<li>Katy will go to the home page and enter the name of the actor in the search</li>
			<li>Katy will click on the button that displays the general characteristics of the actor</li>
			<li>General Bio will be displayed</li>
		</ul>

		<h2>Use Case 2</h2>
		<p>Goal: User is looking to update information on an actor that he/she is very famaliar with</p>
		<ul>
			<li>Katy will go to the home page and enter actors name in the search</li>
			<li>Katy will choose either biography or trivia for the actor</li>
			<li>Katy will chose the Update Actor Info button</li>
			<li>Katy will be presented with a form to fill out with new info on the actor</li>
			<li>Katy will enter info into the form</li>
			<li>Katy will submit form</li>
		</ul>

		<h2>Conceptual Model</h2>
		<p>
			The Actor Profile table will have a <strong>One to One Relationship</strong> with the Actor Biography Table.<br>
			The Actor Profile table will have a <strong>One to Many Relationship</strong> with the Actor Trivia Table.<br>
		</p>

		<table style="width:15%">
			<tr><th>Actor Profile</th></tr>
			<tr><td>Actor ID &rarr; <em>PK</em></td></tr>
			<tr><td>Actor Name</td></tr>
			<tr><td>Birthday</td></tr>
			<tr><td>Birth Name</td></tr>
			<tr><td>Height</td></tr>
		</table>
		<br>

		<table style="width:15%">
			<tr><th>Actor Biography</th></tr>
			<tr><td>Bio ID &rarr; <em>PK</em></td></tr>
			<tr><td>Actor ID &rarr; <em>FK</em></td></tr>
			<tr><td>Biography Entry</td></tr>
		</table>
		<br>

		<table style="width:15%">
			<tr><th>Actor Trivia</th></tr>
			<tr><td>Trivia ID &rarr; <em>PK</em></td></tr>
			<tr><td>Actor ID &rarr; <em>FK</em></td></tr>
			<tr><td>Trivia Entry</td></tr>
		</table>

		<img src="img/erd.svg" />

	</body>
</html>