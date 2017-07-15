<?php

$expiry = new DateTime('+2 days');

setcookie('data','cats', $expiry->getTimestamp());

?>
