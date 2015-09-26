<?php
	$result = array();
	foreach($kategoris as $kategori){
		array_push($result,$kategori['Kategori']);
	}

	echo json_encode($result);
?>