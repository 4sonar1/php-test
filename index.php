<?php
function two($arg) {
	eval($arg);
}

function one($arg, $more) {
	$third = $arg . $more;
	two($third);
}

one($_GET['x'], "brah");

extract($_GET['x']);

require($_GET['lfi']);
?>
