<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['ganti'])) {
  $id = $_POST['id'];
  $Nama = $_POST['Nama'];
  $Kelas = $_POST['Kelas'];
  $Alamat = $_POST['Alamat'];

  // update user data
  $result = mysqli_query($mysqli, "UPDATE data SET Nama='$Nama',Kelas='$Kelas',Alamat='$Alamat' WHERE id=$id");

  // Redirect to homepage to display updated user in list
  header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM data WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
  $Nama = $user_data['Nama'];
  $Kelas = $user_data['Kelas'];
  $Alamat = $user_data['Alamat'];
}
?>
<html>

<head>
  <title>Edit User Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-4">
    <a href="index.php">Home</a>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
      

      <div class="form-group">
        <label for="exampleInputName1">Nama</label>
        <input type="text" class="form-control" id="exampleInputNama1" placeholder="Enter Nama" name="Nama" value=<?php echo $Nama; ?>>
      </div>

      <div class="form-group">
        <label for="exampleInputKelas1">Kelas</label>
        <input type="number" class="form-control" id="exampleInputNIM1" placeholder="Enter Kelas" name="Kleas" value=<?php echo $Kelas; ?>value="<?php echo isset($Kelas) ? $Kelas : '9'; ?>">
      </div>

      <div class="form-group">
        <label for="exampleInputAlamat1">Alamat</label>
        <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Enter Alamat" name="Alamat" value=<?php echo $Alamat; ?>>
      </div>

      <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
      <input class="btn btn-primary" type="submit" name="ganti" value="Ganti">

    </form>
  </div>
</body>

</html>