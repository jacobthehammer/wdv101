<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Koala Site - Form Received</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="styles.css">
<style>
	table {
		width: 100%;
		margin-top: 1.5em;
		border-collapse: collapse;
		background-color: #eee8d5;
	}
	
	table th, table td {
		border: 1px solid #586e75;
		padding: 0.75em;
		text-align: left;
		font-style: normal; /* Override p style */
	}
	
	table th {
		background-color: #268bd2;
		color: #fff;
		text-transform: uppercase;
		letter-spacing: 0.05em;
	}

	.return-link {
		display: inline-block;
		margin-top: 2em;
		padding: 0.75em 1.5em;
		background-color: #268bd2;
		color: #fff;
		text-decoration: none;
		font-weight: bold;
		border-radius: 6px;
		transition: background-color 0.2s ease;
	}
	.return-link:hover {
		background-color: #2aa198;
	}

</style>
</head>

<body>
	
	<h1>Thank You!</h1>
	<h2>Your Form Has Been Received</h2>
	<p>Thank you for contacting us. A copy of the information you submitted is shown below.</p>

	<?php
		echo "<table border='1'>";
		echo "<tr><th>Field Name</th><th>Value of Field</th></tr>";
		foreach($_POST as $key => $value)
		{
			$key = htmlspecialchars($key);
			$value = htmlspecialchars($value);

			echo '<tr>';
			echo '<td>',$key,'</td>';
			echo '<td>',$value,'</td>';
			echo "</tr>";
		} 
		echo "</table>";
		echo "<p>&nbsp;</p>";
	?>

	<a href="index.html" class="return-link">Return to Homepage</a>

</body>
</html>
