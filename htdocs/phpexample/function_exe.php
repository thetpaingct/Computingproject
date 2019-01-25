
<?php

function add($firstnumber,$secondnumber){
	return $firstnumber + $secondnumber;
}
function outputresult($value){
var_dump($value);
	echo ("The value is".$value."<br/>");
}
$totalvalue = add(5,8);
var_dump($totalvalue);
outputresult($totalvalue);

?>