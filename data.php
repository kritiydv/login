<?php
session_start();
include("dbconnect.php");
if(!isset($_SESSION['username'])){
    header('location:index.php');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Customer Detail</title>
</head>
<style>
        .form-heading {
            text-align: center;
            font-size:40px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .heading{
          text-align: right;


        }
        .container{
          margin:100px
        }
        
    </style>
<body class="container">
  <h3 class="heading">Welcome ,  <?php echo  $_SESSION['username']?>!</h3>
       <h1 class="form-heading">Form Submission</h1>
    <form action="form.php" method="POST" onsubmit="return validateForm()" >
      
  
    <div>
        <label for="exampleFormControlSelect1">Order Date</label>
      <input type="date" class="form-control" id="input "placeholder="Order date" name='date'>
      <script>
document.getElementById('today').value = moment().format('YYYY-MM-DD');
</script>
    </div>
    <div>
        <label for="exampleFormControlSelect1">Company</label>
      <input type="text" class="form-control" placeholder="Company" name='company'>
    </div>
     <div>
        <label for="exampleFormControlSelect1">Owner</label>
      <input type="text" class="form-control" placeholder="owner" name='owner'>
    </div>
    <div>
        <label for="exampleFormControlSelect1">Item</label>
      <input type="text" class="form-control" placeholder="Item" name='item'>
    </div>
    <div>
        <label for="exampleFormControlSelect1">Quantity</label>
      <input type="text" class="form-control" placeholder="Quantity" name='quantity'>
    </div>
  
  <div>
        <label for="exampleFormControlSelect1">Weight</label>
      <input type="text" class="form-control" placeholder="Weight" name='weight'>
    </div>
    <div>
        <label for="exampleFormControlSelect1">Request For Shipment</label>
      <input type="text" class="form-control" placeholder="Request For Shipment" name='request'>
    </div>
    <div>
        <label for="exampleFormControlSelect1">Tracking Id</label>
      <input type="text" class="form-control" placeholder="Tracking Id" name='tracking'>
    </div>
    <div>
        <label for="exampleFormControlSelect1">Shipment Size</label>
      <input type="text" class="form-control" placeholder="LXBXH" name='size'>
    </div>
    <div>
        <label for="exampleFormControlSelect1">Box Count</label>
      <input type="text" class="form-control" placeholder="Box Count" name='box_count'>
    </div>
    <div>
        <label for="exampleFormControlSelect1">Specification</label>
      <input type="text" class="form-control" placeholder="Specification" name='specification'>
    </div>
    <div>
        <label for="exampleFormControlSelect1">Checklist Quantity</label>
      <input type="text" class="form-control" placeholder="Checklist Quantity" name='chklist_qty'>
    </div><br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <a href="logout.php" class="btn btn-danger">Logout</a>

  
</form>
</body>
</html>

 <script>
        function validateForm() {
            var quantity = document.forms["myForm"]["quantity"].value;
            var weight = document.forms["myForm"]["weight"].value;
            var box_count = document.forms["myForm"]["box_count"].value;
            
            if (quantity == "" || weight == "" || box_count == "") {
                alert("Please fill in all required fields.");
                return false;
            }
        }
    </script>