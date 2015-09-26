<?php
	$result = array();

	foreach($komunitas as $komunita){
		array_push($result,$komunita['Komunita']);
	}
	echo json_encode($result);
?>