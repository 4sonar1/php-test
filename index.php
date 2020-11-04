<?php
function two($arg) {
	eval($arg);
}

function one($arg, $more) {
	$third = $arg . $more;
	two($third);
}

one($_GET['x'], "brah");
?>
