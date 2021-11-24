<!DOCTYPE html>
<html>
<head>
	<title>KOTA BATAM</title>
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
</head>
<body>
<div class="halaman">
<style>
#datainput {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#datainput td, #datainput th {
  border: 1px solid #ddd;
  padding: 8px;
}

#datainput tr:nth-child(even){background-color: #f2f2f2;}

#datainput tr:hover {background-color: #ddd;}

#datainput th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #87CEFA;
  color:black;
}

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
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

a{
    color: black;
}
</style>


<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<div class="new">
<a href="index.php?page=add">Add New User</a><br/><br/>
</div>
<div class="new2">
    <table width='80%' border=1 align="center" id="datainput">
    <br>
    <tr>
        <th>Name</th> <th>Email</th> <th>Comment</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['komentar']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
</table>
</div>
</body>
</html>
