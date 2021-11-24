<div class="halaman">
<link rel="stylesheet" href="font/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<div class="new">
<a href="index.php">Go to Home</a>
</div>
    <br/><br/>
    <form action="index.php?page=add" method="post" name="form1" style="max-width:500px;margin:auto">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Fullname" name="name">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-comments-o icon"></i>
    <textarea id="subject" name="komentar" placeholder="Write something.." style="height:200px"></textarea>
<!--    <input class="input-field" type="text" placeholder="PhoneNumber" name="mobile"> -->
  </div>

  <button type="submit" class="btn" name="Submit" value="Add" onclick="alert('Thank you for your advice! I appreciate.')">ADD</button>
</form>
<br><br>
 <!--       <table width="25%" border="0" align="center">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td><br>
            </tr>
        </table>
    </form>-->

    <?php
    // Mengecek form jika disubmit, memasukan data ke dalam tabel.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        // Memanggil koneksi database file
        include_once("config.php");

        // Memasukan data ke tabel
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,komentar) VALUES('$name','$email','$komentar')");

        // Menampilkan pesan yang telah berhasil ditambah
        // echo "User added successfully. <a href='kontak.php'>View Users</a>"; //
    }
    ?>
</div>

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