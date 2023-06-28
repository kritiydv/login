<?php
session_start();
include("dbconnect.php");
include ("query.php");
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>


<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            
        }

        th {
            background-color: #f2f2f2;
            font-weight: bolder;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ebebeb;
        }
        .container{
            margin:50px
        }
        .heading{
          text-align: right;
        }
    </style>
</head>
<body class="container" >
     <h3 class="heading">Welcome ,  <?php echo  $_SESSION['username']?>!</h3>
    <h1>Customer Data</h1>
    <table>
        <tr>
            <th>Item/Customer</th>
            <th>Customer 1</th>
            <th>Customer 2</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Quantity</td>
            <td><?php echo $totalqty1; ?></td>
            <td><?php echo $totalqty2; ?></td>
            <td><?php echo $totalqty1+$totalqty2;?></td>
        </tr>
        <tr>
            <td>Weight</td>
            <td><?php echo $totalwt1; ?></td>
            <td><?php echo $totalwt2; ?></td>
            <td><?php echo $totalwt1+$totalwt2; ?></td>
        </tr>
        <tr>
            <td>Box Count</td>
            <td><?php echo $totalbc1; ?></td>
            <td><?php echo $totalbc2; ?></td>
            <td><?php echo $totalbc1+$totalbc2; ?></td>
        </tr>
        
    </table><br>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</body>
</html>







