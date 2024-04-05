<?php
// echo "Hello Good Monring Anil Here from Dumra";
// $varialname="Anil";
// ##String
// $mark=30;
// $float=30.4;
// $boolean=true;
// ##way of priting
// echo "<br> My Mark Is = " .$mark  ;
// echo "<br> My Mark Is =  $mark %" ;
// echo "<br> My Mark Is =  {$mark }";
// echo '<br> My Mark Is =  {$mark }';
// echo "<br>";
// ##value testing 
// var_dump($varialname);
// echo "<br>";
// ##value testing 
// var_dump($mark);
// echo "<br>";
// var_dump($float);
// //Operators in php 
// echo "<br>";
// $a=10;
// $b=20;
// $c= 30;
// $d= 40;
// $e=$a+$b;
// $x=$a/10;
// $y=$a**10;
// echo $a . "+". $b ."=" . $e;
// echo "<br>";
// echo "modules =" .$y ;
// echo "<br>";
// echo $a. "<Br>";
// $a++;
// echo "new value =" .$a."<Br>";
// echo "New value is  there :" .$a. "<Br>";
// ++$a;
// echo "new value =" .$a;
// echo "<h1 style='color: red;'>Hii there, I am learning</h1>";
// $total=$a+$b/$c*10%$e;
// echo "Total = $total" ;

// //Predefine Funtion : 
// //String 
// $nam='anil';
// echo  strlen($nam);
// echo "<br>";
// // case senstive 
// echo str_replace("a","b", $nam);
// echo "<br>";
// //non case senstive 
// echo str_ireplace("A","z", $nam);
// echo "<br>";
// echo ucfirst($nam);
// echo "<br>";
// echo metaphone($nam);
// echo "<br>";
// echo strtolower($nam);
// echo "<br>";
// echo strtoupper($nam);
// echo "<br>";
// //number function 
// $num=30;
//  var_dump($num);
//  echo "<br>";
//  var_dump(is_int($num));
//  var_dump(is_int($num));
//  echo "<br>";
//  var_dump(is_float($num));
//  echo "<br>";
//  var_dump(is_numeric($num));
// #maths function 
// echo "<br>";
// echo pi();
// echo "<br>";
// echo abs(-56);
// echo "<br>";
// echo sqrt(100);
// echo "<br>";
// echo round(30.56);
// echo "<br>";
// echo rand();
// echo "<br>";
// echo rand(1,100);

// //conditoinal language 
// /*
// >
// <
// >=
// ==
// !
// */
//  $ae = 30;
// if ($ae>=30){
//     echo "<br> condinal statement ";
//     echo "<br>";
// echo "you are fine ";
// echo "<br>";
// }
// else{
// echo "you not fine";
// }
// echo "<br><hr>";
// echo "calculator";

// $hour=40;
// $rate=40;
// $weekpay=0;
// if($hour<=400){
// $weekpay=$hour*$rate;
// }
// echo "<br><hr>";
// echo"workin time :".$hour." rate of one hour : ".$rate." week pay".$weekpay."";
// echo "<br><hr>";
// // && || !

// $temp=30;
// if($temp>0 && $temp > 30){
//     echo "<h1>Temparatur are good</h1>";
//     echo "<br>";
// }
// else if($temp>45){
//     echo "Temp are midium ";
// }
// else{
// echo "tempature are not good ";
// }
// //switch statement 
// echo "<br>";
// $grade ="A";
// if($grade=="A"){
//     echo " You  Did A :Gread Work";
//     echo "<br>";
// }
// else if ($grade=="B"){
//     echo " You Did B : Gread Work";
//     echo "<br>";
// }
// else if($grade=="C"){
//     echo " You Did C : Gread Work";
//     echo "<br>";
// }
// else{
//     echo " You  Did Worst Work";
//     echo "<br>";
// }


//             echo "<br>";
// //switch 
// $mark=30;
// switch($mark){
//     case 30<=$mark:
//         echo "fail";
//         echo "<br>";
//         break;
//         case $mark>30:  
//             echo "grade C";
//             echo "<br>";
//             break;
//         case $mark> 60:
//             echo "grade B";
//             echo "<br>";
//             break;
//         case $mark> 80 && $mark>100:
//             echo "A grade awesome::";
//             echo "<br>";
//             break;
    
//             default:
//             echo "invalid";
//             echo "<br>";
        

// }

// //loop

// for($i= 0; $i<=10; $i++){
//     echo $i;
//     echo "<br>";
// }
// echo "<br>";

// for($i= 10; $i>0; $i--){
//     echo $i."<br>";
   
// }
// $table=30;
// for($i= 1; $i<=10; $i++){
//     echo $i*$table ."<br>";
   
// }
// echo "<br>";
// // While loop 
// $i=1;
// while($i<= 10){
//     echo $i*$table ."<br>";
// $i++;
// }  
// echo "Out of loops";   

// array's
//index array 0,1,3,4,5,like that .
// $fruits=array("Mango","Graps","Orange","Pine","Apple","Banana","Carret");
// //echo "<br>". $fruits[1];

// array_push($fruits,"coconut","pine");
// array_pop($fruits);
// array_shift($fruits);
// $fruits=array_reverse($fruits);
// foreach($fruits as $fruit){
//     echo $fruit ."<br>";
// };


// //assiciative array

// $emp=array(
// "wasim"=>"SoftE",
// "rohan"=>"FSD",
// "kirat"=>"WEB",
// "kirati"=>"WEB");
// echo "<pre>";
// print_r($emp);

// function myfun(){
//     echo "my fun";
// }
// myfun()
// ?>
<?php
// echo "<br>";
// //dynamic function 
// function my($num1,$num2){
// return $num1+$num2;
// }
// echo my(2,3);
##isset()
$name ="name";
echo isset($name);
if(isset($name)){
    echo "name is SET";
}
else{
    echo "name is not set";
}
echo "<br>";
echo isset($name);
if(empty($name)){
    echo "name is SET";
}
else{
    echo "name is not set";
}



?>