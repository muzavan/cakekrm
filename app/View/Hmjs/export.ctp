<?php
// app/Views/Subscribers/export.ctp
foreach ($data as $row):
	foreach ($row['Hmj'] as &$cell):
		// Escape double quotation marks
		$cell = '"' . preg_replace('/"/','""',$cell) . '"';
	endforeach;
	echo implode(',', $row['Hmj']) . "\n";
endforeach;
?>