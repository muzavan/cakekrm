<?php
// app/Views/Subscribers/export.ctp
foreach ($data as $row):
	foreach ($row['Komunita'] as &$cell):
		// Escape double quotation marks
		$cell = '"' . preg_replace('/"/','""',$cell) . '"';
	endforeach;
	echo implode(',', $row['Komunita']) . "\n";
endforeach;
?>