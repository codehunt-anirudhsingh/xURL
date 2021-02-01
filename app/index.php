<?php

include 'php/script.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>XURL</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<form action="" method="POST">
		
		<input type="url" name="longurl" placeholder="Paste URL" required>
		<input type="text" name="alias" placeholder="Alias (Optional)">
		<button name="xurlcreate">Create</button>

	</form>

	<?php if (isset($status)) {echo $status;} ?>

</body>
</html>