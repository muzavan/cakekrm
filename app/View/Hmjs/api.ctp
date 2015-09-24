<?php
	$result = [];
	foreach($hmjs as $hmj){
		array_push($result,$hmj);
	}
	echo json_encode($result);
	
?>