	<?php


// variable

// 1. start with $
// variable type = Character, Integer, Float, double

// Character = "a";

// Int = 10;
// Float = 10.255;
// double  = 10.43352354354351351

// $a = 100;

// //variable = value


// $b = 20;



// $c = $a + $b;

// echo $c;


// $name = "Bangladesh";

// echo $name;

//////////////////////////////
// echo = not return
// print = power of return

// print($name);



// string
// $a = 'Name'; // A set of character is string

// if, if else, else if = conditional

// $a = 10;
// $b = 11;

// print greater value

// oparator
// +, -, *, /, >, <, %, ==, &&, 

// 10 > 9 = true
// 3 > 9 = false
// $b > $a = true


// if condition

//if( $b > $a ){
// // true

// 	echo " B is Greater than A";

// }


// if else condition

// if( $b > $a ){
// // true

// 	echo " B is Greater than A";

// }else{
// 	echo "A is greater than B";
// }


// == Equal value

// $pass = '3278468723';
 
// if($pass == '3278468723'){
// 	echo "Login Success";
// }else{
// 	echo "Login Falied";	
// }

// nested if else



// $name = 'Hasan';
// $town = 'Bogura';
// $phone = '1211';


// if($name == 'Hasan'){

// 	if($town == 'Bogura'){
// 		if($phone == '1211'){
// 			echo "All requirenments matched! Winner!";
// 		}else{
// 			echo "Hasan Found from Bogura, but Phone number not matched.";
// 		}
// 	}else{
// 		echo "Hasan Found, But out of Bogura";
// 	}


// }else{
// 	echo "Not Found Hasan";
// }


  // else if

// exam grade result

// $number = 10;

// if($number > 100 ){
// 	echo "Invalid Input.";
// }elseif ($number >= 80) {
// 	echo "A+";
// }elseif ($number >=70) {
// 	echo "A";
// }elseif ($number >=60) {
// 	echo "A-";
// }elseif ($number >=50) {
// 	echo "B";
// }elseif ($number >=40) {
// 	echo "C";
// }elseif ($number >=33) {
// 	echo "D";
// }else{
// 	echo "Fail!";
// }


// $old = 45;
// if ($old > 70){
// echo "Serior Cizition ";
// echo "<br><img src='imgs/senior.jpg' height='250px' >";
// }elseif ($old >=45){
// 	echo "Mature";
// 	echo "<br><img src='imgs/Mature.jpg' height='250px' >";
// }elseif ($old >=25){
// 	echo "Young";
// 	"<br><img src='imgs/young.jpg' height='250px' >";
// }elseif ($old >=10){
// 	echo "Tenager";
// 	"<br><img src='imgs/Tenager.jpg' height='250px' >";
// }elseif ($old >= 1){
// 	echo "Child";
// 	"<br><img src='imgs/child.jpg' height='250px' >";
// }else{
// 	echo "Not born ";
// }



// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }



// $countryCode = 91;
// switch($countryCode){
// 	case '880':
// 		echo "BD";
// 	break;

// 	case '91':
// 		echo "India";
// 		break;

// 	case '92':
// 		echo "Pakisthan";
// 	break;


// 	default:
// 	echo "Not Found";
// 	break;
// }



// $color = 'red';
// switch($color){
// 	case 'red':
// 		echo "Your Favourite Color red";
// 		echo "<style>body{background-color:red;}</style>";
// 	break;

// 	case 'green':
// 		echo "Your Favourite Color green";
// 		echo "<style>body{background-color:green;}</style>";
// 		break;

// 	case 'yellow':
// 		echo "Your Favourite Color yellow";
// 		echo "<style>body{background-color:yellow;}</style>";
// 	break;


// 	default:
// 	echo "Not Found";
// 	break;
// }



// $date = date('D');      


// switch ($date){
// 	case 'Sat':
// 		echo "I am going to school";
// 	break;

// 	case 'Sun':
// 		echo "I am going to playing football";
// 	break;

// 	case 'Mon':
// 		echo "I am going to walk";
// 	break;

// 	case 'wed':
// 		echo "I will wake up in the morning";
// 	break;

// 	case 'Tue':
// 		echo "I am going to playing cricket";
// 	break;

// 	case 'Thu':
// 		echo "I will wake in the morning and going to school";
// 	break;

// 	case 'Fri':
// 		echo "I will wake up late";
// 	break;

// 	default:
// 		echo "Not found";
// 	break;
// }

// echo ' on   ' . date ('l');






// $date = date('D');

// if ($date == 'Sun'){
// 	echo "date Sun";
// }elseif ($date =='Mon'){
// 	echo "I shall been gone to school Mon";
// }elseif ($date =='Tue'){
// 	echo "I will wake up in the morning Tue";
// }elseif ($date =='Wed'){
// 	echo "I am going to playing football Wed";
// }elseif ($date =='Thu'){
// 	echo "I am going to Walk Thu";
// }elseif ($date =='Fri'){
// 	echo "I am going to play cricket Fri";
// }elseif ($date =='Sat'){
// 	echo "I will wake up late Sat";
// }else{
// 	echo "date is failed";
// }
	

// statement = done,
// condition, if, if else, if elseif = done
// switch = done


// loop = for, while, do while, foreach

// for

// ++ increment op

// for($i=1; $i<=100000; $i++){
// 	echo $i.'<br>';
// }


// Q:- only even no will show


// for($i=1; $i<=50; $i++){

// 	if( ($i%2) == 0){
// 		echo $i.'<br>';
// 	}

// }

// odd

// for($i=1; $i<=50; $i++){

// 	if( ($i%2) != 0){
// 		echo $i.'<br>';
// 	}

// }

// not = !

// $i%2=0
// 4/2=true 
// 5/2=false 


// while
// $i=1;

// while($i <= 20){
// 	echo $i.'<br>';
// 	$i++;
// }


// do while 
 
// do {
// 	echo $i.'<br>';
// 	$i++;
// } while ( $i<= 10);

// array

// $class = array('Rahim', 'Karim');

// Array 

// $className = array('Rahim', 'Karim', 'Rana', 'Hablu', 'Fayez', 'Karina', 'Katrina');
			// index 0,		1,			2

// echo $className['4'];

// foreach ($className as $val => $value) {
	// echo $value.'<br>';
	// }

// $value = 'Hey';

// concatanation
// echo $value.'<br>'.$value.'<br>';



// echo "string";


// $playerName = array ('Shamim', 'Hasan', 'Shohid',);

// foreach ($playerName as $val => $value) {
// 	echo $value.'<br>';
// }



// math challange

// $value = 1000;

// $end = 0;

// // ** = cable cut

// for ($value; $value >= $end ; $value-= 5) { 
	
// 	if( ($value%2) == 0 ){
// 		echo $value.'----<br>';	
// 	}else{
// 		echo $value.'<br>';	
// 	}
// }

// $value = 200;

// $end = 0;

// for ($value; $value >= $end ; $value-= 5) { 
// 	if ( ($value%2) == 0){
// 		echo $value. '----<br>';
// 	}else{
// 		echo $value.'<br>';
// 	}
// }

//  $value = 20;

//  $end = 0;

// for ($value; $value >= $end ; $value-= 5) { 
// 	if ( ($value%2) == 0) {
// 		echo $value. '<br>';
// 	}else{
// 		echo $value.'<br>';
// 	}
// }


// $value = 50;

// $end = 0;

// for ($value; $value >= $end; $value-=5) { 
// 	if ( ($value%2) == 0){
// 		echo $value. '-----<br>';
// 	}else{
// 		echo $value.'<br>';
// 	}
// }

// function 
// function - function name

// function calculatorAddition($a, $b){

// 	$c = $a + $b;
// 	echo $a.'+'.$b.'='.$c.'<br>';
// }


//  // function call
// calculatorAddition(10, 12);


// calculatorAddition(10, 11542345452);
// calculatorAddition(10, 5);
// calculatorAddition(10, 55);



// function calculatorSub($a, $b){
// 	$c = $a - $b;
// 	echo $a.'-'.$b.'='.$c.'<br>';
// 	// echo $c.'<br>';
// }


// calculatorSub(10, 5);
  
   
//

/*

1. HTML5
2. CSS3
3. Font-awesome
4. Bootstrap / Uikit
5. PHP
6. Wordpress


*/
// function calculatorAddition($a, $b){
// 	$c= $a - $b;
// 	echo $a. '-'.$b.'='.$c.'<br>';
// }

// calculatorAddition(10, 5);




// function calculatoraddition($b, $c){
// 	$a= $b + $b;
// 	echo $b. '+'.$c.'='.$a.'<br>';	
// }

// calculatoraddition(20, 20);


  

// function calculatorAddition($a, $b, $c){
// 	$c= 50;
// 	$d= $a + $b + $c;
// 	echo $a. '+'.$b. '+' .$c.'='.$d.'<br>';
// }

// calculatorAddition(50, 30, 40);


// function sub ($a, $b){
// 	$c= $a - $b;
// 	echo $a. '-'.$b.'='.$c.'<br>';
// 	mul (50, 60, 70);
// }

// sub(0, 0 );


// function mul ($a, $b, $c){
// 	$d= $a* $b* $c;
// 	echo $a.'*'.$b.'*'.$c.'='.$d.'<br>';
// }



// $d= 50 + 30 + 20;

// $a= 'shamim';

// echo $a. $d.'<br>';

// function shamim(){
// 	$d= 50 + 30 + 20;
// 	echo $d;
// }
// shamim();





// $number = 20;
// if ($number == 20){
// 	echo "The number is right <br>";
// }else{
// 	echo "The number is wrong <br>";
// }


// function compare($a, $b){

// 	if ($a > $b){
// 		echo $b." is greater than ".$a."<br>";
// 	}else{
// 		echo $b." is not greater than ".$a."<br>";
// 	}
// }

// compare(50, 30); 



// 	$a = 100;
// 	$b = 500;
// 	$c = 1000;

// 	if(($a > $b) and ($a > $c)){
// 		echo "Big A ".$a;
// 	}elseif (($b > $a) and ($b > $c)){
// 		echo "Big B ".$b;
// 	}else{
// 		echo "Big C ".$c;
// 	}

// 	echo "<br>";




// 	$a = 1000;
// 	$b = 2000;
// 	$c = 3000;

// 	 if($a > $b && $a > $c){
// 	 	echo "This is Big Number A ".$a;
// 	 }elseif ($b > $a && $b > $c){
// 	 	echo "This is Big Number B ".$b;
// 	 }else{
// 	 	echo "This is Big Number C ".$c;
// 	 }

// echo "<br>";

// 	$shamim = 17;
// 	$hasan  = 30;
// 	$shohid = 35;

// 	if($shamim > $hasan && $shamim > $shohid){
// 		echo "He old is Shamim ".$shamim;
// 	}elseif ($hasan > $shamim && $hasan > $shohid){
// 		echo "Your old is Hasan".$hasan;
// 	}else{
// 		echo "Your old is Shohid".$shohid;
// 	}

// echo "<br>";



// $number = 20;

// if($number || 10){
// 	echo "Invalid Input.";
// }elseif ($number >= 10){
// 	echo "20";
// }elseif ($number >= 30){
// 	echo "10";
// }

//  $a = 30;
// 	$b = 30;
// 	$c = 35;

// 	if(($a == 20) || ($a == 30)){
// 		echo "valid input ".$a;
// 	}else{
// 		echo "Invalid input".$c;
// 	}


// 	$a = 'apple';
// 	$b = 'greape';

// 	if (($a == 'apple') || ($b == 'greape')){
// 		echo "vaild input ". $a;
// 	}else{
// 		echo "Invalid Input ".$b;
// 	}


/*
function fruit ($a, $b){

	if (($a == 'apple') || ($b == 'greape')){
		echo "vaild input ". $a;
	}else{
		echo "Invalid Input ".$b;
	};
};
 
fruit ("", "");*/
/*
$sum=0;

for ($i=1; $i <= 100; $i++) {
	$sum=$sum+$i;
}
echo "Sumation is ".$sum;*/


// function sumation ($start, $increment, $lastnumber){
// $sum=0;
// 	for ($start; $start <= $lastnumber; $start+=$increment) { 
// 		$sum+=$start;
// 	}
// 		echo $sum;
// }
// sumation(1,1,100);

