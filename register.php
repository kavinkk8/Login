<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="data";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

$name=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$ad=$_POST['ad'];

$s="SELECT * FROM login WHERE uname='$name'";
$result=mysqli_query($con,$s);
if(isset($_POST['insert']))
{
    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc())
         {
            if($row["uname"]==$name)
            echo"user name already exist";
        }
    } 
    else 
    {
        $reg="INSERT INTO login(`uname`, `email`, `password`, `fname`, `lname`, `address`) VALUES ('$name','$email','$pass','$fname','$lname','$ad')";
        mysqli_query($con,$reg);
        echo'<script>alert("Registration Successfull")</script>';
        header("location:register.html");
    }
}
?>