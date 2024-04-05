<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <!-- <?php
    $i=1;
    $mark=10;

    while($i<=10){
        $table=$mark*$i;
        echo "<h5 style='color:green'>$table</h5>";
        $i++;
    }
    ?>
    <hr>
    <?php
    $i=1;
    $mark=10;
?>
    <?php
    while($i<=10){
      
    ?>
<h5 style='color:green'>Table :<?php echo $i*$mark ?></h5>
   
        <?php
            $i++;
    }
        ?>
<?php

$emp=array(
    "wasim"=>"SoftE",
    "rohan"=>"FSD",
    "kirat"=>"WEB",
    "kirati"=>"WEB");
   foreach($emp as $k=>$v){

?>

    <p style="color:green" >Name : <?php  
    echo strtoupper($k)." // possition : ".$v."<hr>";
   }
    ?></p> -->
  <hr>
  <?php 
 echo "<pre>";

 //get blich of security 
 print_r($_GET);
 if(isset($_GET['submit'])){
   if(empty($_GET["username"])){
       echo $_GET["username"];
       echo $_GET["password"];
       
   }
}
else{
echo "nothing";
}

 
 ?>
<form action="" method="get">
<div> 
<label for="user name">user name</label>
   <input type="text" name="username" id="">
   </div>  
   <br>
   <div>
   <label for="password">password</label>
   <input type="password" name="password" id="">
</div>
<div>
   <button type="submit" >Submit</button>
</div>
</form>
<?php 


?>
<?php
 //if need of security 
  print_r($_POST);
  if(isset($_POST['submit'])){
    if(empty($_POST["username"])){
        echo $_POST["username"];
        echo $_POST["password"];
        
    }
}
else{
echo "nothing";
}

  
  ?>
<form action="" method="post">
<div> 
<label for="user name">user name</label>
    <input type="text" name="username" id="">
    </div>  
    <br>
    <div>
    <label for="password">password</label>
    <input type="password" name="password" id="">
</div>
<div>
    <button type="submit" >Submit</button>
</div>
</form>
<?php 


 ?>



</body>
</html>