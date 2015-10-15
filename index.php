<!DOCTYPE html lang="en">
<html>
	<head>
		<meta charset="utf-8">
		<title>Actor Profile</title>
	</head>
	<body>
		<h1>Persona</h1>
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
			The Actor Profile table will have a <strong>One to Many Relationship</strong> with the Actor Triva Table.<br>
		</p>
		<p><strong>Actor Profile</strong></p>
		<ul>
			<li>Actor ID &rarr; <em>PK</em></li>
			<li>Actor Name</li>
			<li>Birthday</li>
			<li>Birth Name</li>
			<li>Height</li>
		</ul>
		<br>
		<p><strong>Actor Biography</strong></p>
		<ul>
			<li>Bio ID &rarr; <em>PK</em></li>
			<li>Actor ID &rarr; <em>FK</em></li>
			<li>Biography Entry</li>
		</ul>
		<br>
		<p><strong>Actor Trivia</strong></p>
		<ul>
			<li>Trivia ID &rarr; <em>PK</em></li>
			<li>Actor ID &rarr; <em>FK</em></li>
			<li>Trivia Entry</li>
		</ul>
	</body>
</html>