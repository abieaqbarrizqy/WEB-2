<!DOCTYPE html>
<html>
<head>
	<title>KOTA BATAM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">BATAM</h1>
		<h3 class="deskripsi">Blog Website of Batam City</h3>
	</header>

    <div class="menu">
		<ul>
            <li><a href="index.php?page=home">HOME</a></li>
            <li><a href="index.php?page=sejarah">SEJARAH & GEOGRAFI</a></li>
            <li><a href="index.php?page=demografi">DEMOGRAFI</a></li>
            <li><a href="index.php?page=wisata">WISATA BATAM</a></li>
			<li><a href="index.php?page=about">ABOUT ME</a></li> 
			<li><a href="index.php?page=add">CONTACT</a></li>
			<li><a href="index.php?page=kontak">DATA</a></li>    
		</ul>
	</div>
<div class="badan">
<div class="halaman">
<?php
// Memasukan file koneksi database
include_once("config.php");

//  Mengecek jika form telah disubmit oleh pengguna (update), lalu menuju halaman utama setelah update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $name=$_POST['name'];
    $komentar=$_POST['komentar'];
    $email=$_POST['email'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',komentar='$komentar' WHERE id=$id");
    // Menuju ke halaman utama setelah pengguna telah update di list
        header("Location: index.php");
}
?>
<?php
// Tampilam memilih pengguana user data berdasarkan id
// Mendapatakan id dari url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $komentar = $user_data['komentar'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
<div class="new">
    <a href="index.php">Home</a>
<div>
    <br/><br/>

    <form  method="post" action="edit.php" name="form1" style="max-width:500px;margin:auto">
    <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Fullname" name="name" value=<?php echo $name;?>>
    </div>

    <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" value=<?php echo $email;?>>
    </div>
  
    <div class="input-container">
    <i class="fa fa-comments-o icon"></i>
    <textarea id="komentar" name="komentar" placeholder="Write something.." style="height:200px" value=<?php echo $komentar;?>></textarea>
<!--    <input class="input-field" type="text" placeholder="PhoneNumber" name="mobile" value=<?php echo $mobile;?>> -->
    </div>

    <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
    </tr>
 <!--       <table border="0" align="center">
            <tr> 
                <td>Name</td>
                <td><input type="hidden" name="id" value="<?php echo $user_data['id']; ?>">
                <input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table> -->
    </form>
</div>
</div>
</div>
</body>
</html>
<style>
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

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

textarea{
    width: 100%;
  padding: 12px;
  resize: vertical;
}
</style>
