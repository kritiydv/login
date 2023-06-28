<?php
session_start();
include("dbconnect.php");

if(isset($_POST['submit'])){
    $order_dt=$_POST['date'];
    $company=$_POST['company'];
    $owner=$_POST['owner'];
    $item=$_POST['item'];
    $quantity=$_POST['quantity'];
    $weight=$_POST['weight'];
    $request=$_POST['request'];
    $tracking=$_POST['tracking'];
    $size=$_POST['size'];
    $box_count=$_POST['box_count'];
    $specification=$_POST['specification'];
    $chklist_qty=$_POST['chklist_qty'];

    $sql1="insert into customer1(order_dt,company,owner,item,qty,weight,req_shipmnt,tracking_id,ship_size,box_count,specification,checklist_qty) values('$order_dt','$company','$owner','$item','$quantity','$weight','$request','$tracking','$size','$box_count','$specification','$chklist_qty')";

    $sql2="insert into customer2(order_dt,company,owner,item,qty,weight,req_shipmnt,tracking_id,ship_size,box_count,specification,checklist_qty) values('$order_dt','$company','$owner','$item','$quantity','$weight','$request','$tracking','$size','$box_count','$specification','$chklist_qty')";
     if($_SESSION['username']=='customer1'){
        if(mysqli_query($conn,$sql1)){
        echo "<script>alert('new record inserted')</script>";
        }
        else{
        echo "error:" .mysqli_error($conn);
        }}
    if($_SESSION['username']=='customer2'){
         if(mysqli_query($conn,$sql2)){
        echo '<script>
        window.location.href="data.php";
        alert("new record inserted")</script>';
        }
        else{
        echo "error:" .mysqli_error($conn);
        }
    }
    else{
       
    echo '<script>
    window.location.href="index.php";
    alert("login failed. invalid username or password!!!")
    </script>';
}
    
    mysqli_close($conn);
    }

?>