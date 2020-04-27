<?php
$name1=$_POST["name"];
$password1=$_POST["password"];

if($name1=="" || $password1=="")
{
    echo "plz enter the password and username";
    echo "<br><a href='login.html'>click here</a>";
}
elseif($name1=="Aniket" && $password1=="Aniket")
{
    echo "login done";
    echo "<br><a href='form.html'>click here</a>";
}

?>