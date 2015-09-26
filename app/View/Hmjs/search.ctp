<?php
	$result = array();

	foreach($hmjs as $hmj){
		array_push($result,$hmj['Hmj']);
	}
	echo json_encode($result);
?>