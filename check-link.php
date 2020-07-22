<?php

function check_link($filename) {
	if (($file = fopen($filename, 'r')) !== false) {
		while (($data = fgetcsv($file, 1000, ';')) !== false) {
			$out = get_headers($data[0]);
			print_r($data[0] . ' | ' . $out[0] . PHP_EOL);
			print_r('---------------------------' . PHP_EOL);
		}
	}
}

// RUN -----------------------

check_link('file.csv');