<?php
require "../../bootSAND.php";
echo json_encode(Braintree_ClientToken::generate());
?>
