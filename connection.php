<?php

 $servername ="localhost";
 $username="root";
 $password="";
 $dbname ="user"; 

$connect= mysqli_connect($servername,$username,$password,$dbname);
if($connect){
    
 echo("connection done sucessfully");
}
$sql="CREATE TABLE login(Username varchar(40) not null, Password varchar(30))";
if ($connect->query($sql) === TRUE){
    echo("Table Login is sucessfully created!");
}else{
    echo "Oooops Things are getting worse, check well in your codes!".$conn->error;
}
$connect->close();
?>
