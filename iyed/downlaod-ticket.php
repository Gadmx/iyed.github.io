<?php
//dowload
		$file="ticket-model.txt";
		header('Content-type: text/plain');
		header('Content-Length: '.filesize($file));
		header('Content-Disposition: attachment; filename='.$file);
		readfile($file);

?>