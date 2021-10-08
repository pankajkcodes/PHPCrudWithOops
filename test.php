<?php
include('database.inc.php');

$obj =  new query();
$result = $obj->getData('*','emp');
echo '<pre>';
print_r($result)

?>