<?php
// draw.php
foreach (str_split(stream_get_contents(STDIN), 1) as $c) {

	$n = -1;

	if (ctype_digit($c)) {
		$n = 40 + $c;
	}
	elseif ($c == 'a') {
		$n = 101;
	}
	elseif ($c == 'b') {
		$n = 102;
	}
	elseif ($c == 'c') {
		$n = 103;
	}
	elseif ($c == 'd') {
		$n = 104;
	}
	elseif ($c == 'e') {
		$n = 105;
	}
	elseif ($c == 'f') {
		$n = 106;
	}
	elseif ($c == 'g') {
		$n = 107;
	}
	elseif ($c == 'h') {
		$n = 100;
	}


	if ( $n < 0 ) {
		echo $c;
	} else {
		echo "\x1b[" . $n . "m \x1b[0m";
	}
}
?>
