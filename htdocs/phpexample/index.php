<!-- <?php
echo "string";
?> -->
<!DOCTYPE html>
<html>
<head>
	<title>
		Welcome to PHP Web programming
	</title>
</head>
<body>
<font color="0000ff">PHP code appears as:</font>
<p>
	<?php

	$message1="Hellow";
	$message2="Wrold";
	$message_total=$message1."-".$message2."!";
	echo ("<br/>".$message_total);


	$auth = true;

	echo ($auth);
	if($auth==true){
		echo ("variable auth is".$auth);
}echo "<br/>";
		// $mypay = 1234;
		// $mydebt = -1234;
		// $myocto = 0123;
		// $myhex = 0xff;
		// echo ("<br/>My pay is ".$mypay);
		// echo ("<br/>My debt is ".$mydebt);
		// echo ("<br/>My octal number vaue in decimal is ".$myocto);
		// echo ("<br/>My hexadevimal number value in decimal is ".$myhex);
		// echo ("<br/>The size of PHP int on my system is".PHP_INT_SIZE);
		// echo ("<br/>The max value of PHP int on my system is".PHP_INT_MAX);

		// $mypay1 = 1234.326;
		// $mydebt1 = -1234.326;
		// echo ("<br/>My pay is ".$mypay1);
		// echo ("<br/>My pay is ".number_format($mypay1,2));
		// echo ("<br/>My pay is \$".number_format($mydebt1,2));

		// $mypay1 = 1234.324;
		// echo ("<br/>My pay is \$".number_format($mypay1,2));

		// $myfriendpay = 1.9e3;
		// $mycommission = 7E-3;
		// echo ("<br/>".$myfriendpay."".$mycommission);

		
		// $x = 29; $y = 10;
		// $z = $x + $y;
		// echo ("<br/>".$z);

		// echo "<br/>";
		// $z = $x/$y;
		// echo $z;

		// echo "<br/>";
		// $z = $y*$y*$x;
		// echo $z-1500;
		// echo "<br/";

		$x1 =1;
		$x1++;
		$y2 =5;
		$y2 *=$x1;
		echo $y2."<br/>";
		$z1 = 180;
		$z1/= $y2--;
		echo "<br/>".$z1;
	
	?>

	<!-- array -->
	
	<?php
	
	$families = array (
"Ko Phyo"=>array(
"Ko naing",
"Ko myo"
),
"Peter"=>array(
"jay"
),
"Ko Linn"=>array(
"Ko hein",
"Ko Zin",
"Ko Htet"
)
	);
	echo "<br/>Is ".$families['Ko Linn'][1]." apart of Ko phyo family?";
	echo "<br/>";
	var_dump($families);
	?>



<?php

$cars = array("honda","Lexus","BMW","Toyota");
echo "<br/>". $cars[0]
	?>
	
	<?php

$myday = date("D");
	if($myday=="fri"){
		echo("Thank God it's Friday!");
	}
	elseif ($myday=="Sat") {
		echo("Reading PHP class notes.");
	}
	elseif($myday=="Sun"){
		echo ("Doing PHP class homework");
	}
	else{
		echo ("Thinking about PHP class");
	}

	?>
	<!-- for loop -->
	<?php
	$myland = 6;
	echo("My first piece of land:<br/>");
for($lengthCounter=1;$lengthCounter<$myland;$lengthCounter++){
	echo($lengthCounter."****<br/>");
}
?>
<!-- foreach loop -->

<?php
 $user = array ("name"=> "AA", "q" => "BB");
// $key=>$value
foreach ($user as $value ) {
	echo $value;
}
?>
<!--  -->

<?php
 $users = array (
 	array("name"=> "AA"),
 array( "name" => "BB")
);
 echo("My cars:<br/>");
// $key=>$value
foreach ($users as $value ) {
	var_dump($value['name']);
	echo "<br/>";
}
?>


<!-- 12.1 exercise -->

<?php
// $num = 50;
// $result =0;
// echo "string";
// for($length=1;$length<=$num;$length++){
// 	$result +=$length;

// echo $result;
// echo("<br/>");

// }

?>

<!-- star coding -->
<?php

for($length=1;$length<5;$length++){
	
	for($j =5 ; $j >=$length ; $j--)
	{
		echo "&nbsp";
	}

	for($j =1 ; $j <=$length ; $j++)
	{
		echo "*";
	}
	echo "<br/>";
}
echo "<br/>";

?>

<!-- start pattern  -->
<?php



for($length=1;$length<6;$length++){
	
	for ($i=5; $i >= $length ; $i--) { 
	echo "*";
	}
	echo "<br/>";
}
echo "<br/>";
?>
<!--  -->
<?php
for($length=9; $length>=1; $length--)
{
if($length%2 != 0)
{
for($i=9; $i>=$length; $i--)
{
echo "* ";
}
echo "<br>";
}
}
?>

<!-- function -->
<?php
// helloworld();
// function helloworld()
// {
// 	echo("Hello world!<br/>");
// 	echo("here i come.<br/>");
// }
// helloworld();

// // function greet
// function greet($personname,$personage){

// 	$age = $personage -5;
// 	echo ("hi".$personname."!<br/>");
// 	echo ("you dont look a day over".$age."<br/>");
// }
// greet("soe",29);

// 

function add($firstnumber,$secondnumber){
	return $firstnumber + $secondnumber;
}
function outputresult($value){
	echo ("The value is".$value."<br/>");
}
$totalvalue = add(5,8);
outputresult($totalvalue);
?>

<!-- while loop -->
<?php
$myland = 6;
$lengthCounter = 1;
echo "<br/>";

echo ("MY first piece of land:<br/>");
while ($lengthCounter<$myland) {
	echo ($lengthCounter."****<br/>");
	$lengthCounter++;
}


?>
<!-- do while loop -->
<?php
$myland =6;
$lengthCounter = 1;
echo ("MY first piece of land:<br/>");
do{
	echo ($lengthCounter."****<br/>");
	$lengthCounter++;

}while ($lengthCounter<$myland)
?>

<?php 
$foo="0";
var_dump($foo);

$foo +=2;
var_dump($foo);

$foo = $foo + 1.3;
var_dump($foo);

$foo = 5 + "10 Little piggies";
var_dump($foo);

$foo = 5+"10 small pigs";
var_dump($foo);
echo "<br/>";
?>

<!-- array insert and remove -->
<?php
$arr_data = array("gg","wp","bobo","noob");
$arr_data2 = array_push($arr_data, "AA");
var_dump($arr_data);
echo "</br>";

$arr_data3 = array_unshift($arr_data, "rr");
var_dump($arr_data);
// unset($arr_data3);
var_dump($arr_data);
?>
</p>
</font>
</body>
</html>