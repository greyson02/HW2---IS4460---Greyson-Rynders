<HTML>

	<head>

		<title>User Add</title>

	<?php
		include 'navbar.php';
	?>

	</head>

	<H1>Add a user</H1>

	<p>
	<form>
	First name:<br>
	<input type="text" name="firstname"><br>
	Last name:<br>
	<input type="text" name="lastname"><br>
	Date of Birth:<br>
	<input type="text name="birthdate"><br><br>
	</form>

	<form action="user-list.php"><button class="btn">Go</button>

	<p>
	<a href='login-form.php'>Return to login</a>
	</p>

</HTML>