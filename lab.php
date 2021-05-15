<!DOCTYPE html>
<html>
<body>

<?php
$a = 17;
//1
function print_variable(){
	// variable $a is local to this function 
	// var $a outside the function is different
	$a = 27;
}
print_variable();/*why its not printed? 
because we dont write echo into function 
respectively its not printed and local var dont works outside the function*/
echo $a; //result is 17

//2
$a = 84;
function print_variable(){
	// we use global keyword before the var to give access into function
	global $a;
	$a = 105;
}
print_variable(); /*its printed 105 because its accepts a new value for var $a
 we can use $a var within function outside the function because we give global keyword*/
echo $a;//result is 105


//3
echo strlen("Dastan");


//3
function test($numbers){
$o = str_replace("бір","1",$numbers);
$e = str_replace("екі","2",$o);
$u = str_replace("үш","3",$e);
$t = str_replace("төрт","4",$u);
echo $t;
}
test("бір екі үш төрт <br>");
test("екі бір үш төрт <br>");
test("төрт екі үш бір <br>");
test("үш бір төрт екі <br>");
?>

</body>
</html>