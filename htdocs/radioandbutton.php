<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="radioandbutton.php" method="post">
<label for="">Select any course</label>
<br>
<input type="radio" name='course' value='BCA'> BCA <br>
<input type="radio" name='course' value='BA' > BA <br>
<input type="radio" name='course' value="BSC" > BSC <br>
<input type="submit" name="confirm" value="confirm" id="">

</form>
<?php

if(isset($_POST['confirm'])){
$course=$_POST['course'];
if($course== 'BSC'){
    echo "you : BSC";
}
if($course== 'BA'){
    echo "you : BA";
}
if($course== 'BCA'){
    echo "you : BCA";
}
}
else{
    echo 'PLEASE SELECT ANY OF THE COURSE';
}

?>

<form action="" method='post'>
<label for="">Your favaurite food</label><br>
<input type="checkbox" value="fastfood" name="food[]" id="">Fast Food<br>
<input type="checkbox" value="namkeen" name="food[]" >Namkeen<br>
<input type="checkbox" value="chips" name="food[]" >Chips<br>
<input type="submit" name="confirm" value=confirm id="">
</form>
<?php 

if(isset($_POST['confirm'])){
  $foods=$_POST['food'];
  foreach($foods as $food){
echo "You are selected :".$food ."<br> ";  

  }}
else{
    echo "nothing";
}


?>
</body>
</html>