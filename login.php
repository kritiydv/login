<?php
session_start();
include("dbconnect.php");
if(isset($_POST['submit'])){
$username=$_POST["user"];
$password=$_POST["pass"];

$sql="select * from auth_table where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
    
    if ($username == "admin") {
        $_SESSION['username'] = $username;
    header("Location: admin.php");
    echo"welcome";
  } else if ($username == "customer1"|| $username=="customer2") {
    $_SESSION['username'] = $username;
    header("Location:data.php");
  }

}
else{
    echo '<script>
    window.location.href="index.php";
    alert("login failed. invalid username or password!!!")
    </script>';
}
}

?>