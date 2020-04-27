<?php
$name=$_POST["firstname"];
$mobile=$_POST["num"];
$email=$_POST["email"];


$host="localhost";
$db_name="new";
$username="root";
$password="";
$conn;
try{
    $conString="mysql:host=".$host.";dbname=".$db_name;
    $conn=new PDO($conString,$username,$password);
    echo "connected to database-<b>$db_name</b>";
    $query="INSERT INTO data(fname,mobileno,emailadd) VALUES('$name','$mobile','$email')";
    echo "<br>".$query;
    $excecute=$conn->prepare( $query );

    if($excecute->execute()){
        echo "successfully inserted";
    }
    else{
       echo "not done yet";
    }
    $conn=null;
}catch(PDOExecption $exception){
    echo "connection error:".$exception->getMessage();
}
?>