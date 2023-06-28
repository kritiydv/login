<?php
include("dbconnect.php");
$sql1_qty = "SELECT SUM(qty) AS total_qty1 FROM customer1";
$result = $conn->query($sql1_qty);

// Check if the query was successful
if ($result) {
    $row = $result->fetch_assoc();
    $totalqty1 = $row['total_qty1'];
} else {
    $totalqty1 = "N/A";
}

$sql2_qty = "SELECT SUM(qty) AS total_qty2 FROM customer2";
$result = $conn->query($sql2_qty);

// Check if the query was successful
if ($result) {
    $row = $result->fetch_assoc();
    $totalqty2 = $row['total_qty2'];
} else {
    $totalqty2 = "N/A";
}

$sql1_wt = "SELECT SUM(weight) AS total_wt1 FROM customer1";
$result = $conn->query($sql1_wt);

// Check if the query was successful
if ($result) {
    $row = $result->fetch_assoc();
    $totalwt1 = $row['total_wt1'];
} else {
    $totalwt1 = "N/A";
}

$sql2_wt = "SELECT SUM(weight) AS total_wt2 FROM customer2";
$result = $conn->query($sql2_wt);

// Check if the query was successful
if ($result) {
    $row = $result->fetch_assoc();
    $totalwt2 = $row['total_wt2'];
} else {
    $totalwt2 = "N/A";
}
$sql1_bc = "SELECT SUM(box_count) AS total_bc1 FROM customer1";
$result = $conn->query($sql1_bc);

// Check if the query was successful
if ($result) {
    $row = $result->fetch_assoc();
    $totalbc1 = $row['total_bc1'];
} else {
    $totalbc1 = "N/A";
}

$sql2_bc = "SELECT SUM(box_count) AS total_bc2 FROM customer2";
$result = $conn->query($sql2_bc);

// Check if the query was successful
if ($result) {
    $row = $result->fetch_assoc();
    $totalbc2 = $row['total_bc2'];
} else {
    $totalbc2 = "N/A";
}

// Close the database connection
$conn->close();
?>