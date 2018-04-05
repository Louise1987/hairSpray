<?php
$host="localhost";
$user="root";
$password="";
$database="demo";

mysql_connect($host,$user,$password);
$mysql_select_database($database);

if(isset(['user'])){
$uname=$_POST['user'];
$password=$_POST['pass'];

$sql="select * from Admin where user='".$uname."'AND pass='".$password."'
limit 1";

$result=mysql_query($sql);

if(mysql_num_rows($result)==1){
    echo " Du har lyckats logga in";
    exit();
}
else{
    echo "Du har skrivit in fel lösenord";
    exit();
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>

<div id="inlogg">
<form method="POST" action="#">
 <input type="text" name="user" placeholder="Namn">
 <input type="password" name="pass" placeholder="Lösenord">
<input type="submit" name="submit" value="Logga in">
</form>
</div>


    
</body>
</html>