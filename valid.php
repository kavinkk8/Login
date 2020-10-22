<?php 

$host="localhost";
$user="root";
$password="";
$db="data";
$c=0;

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['uname'])){
    
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    
    $sql="select uname,password from login where uname='".$uname."'";
    
    $result=mysqli_query($con,$sql);
    
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            if($row["uname"]==$uname&&$row["password"]==$password){
                header("location:content.html");
            }
            else{
                header("location:login.html");
            }
            
        }
}
?>
