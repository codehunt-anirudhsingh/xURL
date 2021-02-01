<?php

include 'app/php/config.php';
$alias = htmlspecialchars($_GET['alias']);

if (!empty($alias)) {

	$SELECT = 'SELECT longurl FROM '.$xurldbtable.' WHERE alias = ?';
		
	$statement = $xurlconnection->prepare($SELECT);
	$statement->bind_param("s", $alias);
	$statement->execute();
	$result = $statement->get_result();

	if($result->num_rows === 1) {

		while($row = $result->fetch_assoc()) {

			$longurl = $row['longurl'];
			header('location: '.$longurl);

		}

	} else{

		header('location: 404.php');

	}

} else{

	header('location: 404.php');

}

?>