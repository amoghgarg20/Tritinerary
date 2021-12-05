<?php
session_start();

$con=mysqli_connect('localhost','root','','tritinerary_login');
$name=$_POST["Username"];
$password=$_POST["Password"];
$cpassword=$_POST["CPassword"];
$full_name=$_POST["Name"];
$s="select * from userid where username='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo "<script type='text/javascript'>alert('Username already exists!');window.location='Signup.php'</script>";
}
else{
    if($password==$cpassword){
        $reg="insert into userid(username,password,name) values ('$name','$password','$full_name')";
        mysqli_query($con,$reg);
        echo("Registration Successfull");
        header('location:Home-Login.html');
    }
    else{
        echo "<script type='text/javascript'>alert('Confirm your password correctly!');window.location='Signup.php'</script>";
    }
    
}


?>