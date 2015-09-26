<?php
	$result = array();

	foreach($komunitas as $komunita){
		array_push($result,$komunita);
	}
	echo json_encode($result);
?>