<!DOCTYPE html>
<html>
<head>
	<title>KOTA BATAM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="badan">
<div class="halaman">
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.new a{  
    text-decoration: none;
    text-transform: uppercase;
    color: black;
    font-size: 20px;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    background-color: #87CEFA;
}

.new2 a{
    color: black;
}
</style>
<div class="halaman">
<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?page=kontak");
?>
</div>