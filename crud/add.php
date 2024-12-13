<html>

<head>
  <title>Add Users</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-4">
    <a href="index.php" class="btn btn-secondary mb-3">Go to Home</a>

    <form action="add.php" method="post" name="form1">
      <div class="form-group">
        <label for="exampleInputNama1">Nama</label>
        <input type="text" class="form-control" id="exampleInputNama1" placeholder="Enter Nama" name="Nama" required>
      </div>

      <div class="form-group">
        <label for="exampleInputKelas1">Kelas</label>
        <input type="number" class="form-control" id="exampleInputKelas1" placeholder="Enter Kelas" name="Kelas" value="<?php echo isset($Kelas) ? $Kelas : '9'; ?>" required>
      </div>

      <div class="form-group">
        <label for="exampleInputAlamat1">Alamat</label>
        <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Enter Alamat" name="Alamat" required>
      </div>

      <input class="btn btn-primary" type="submit" name="Submit" value="Add">
    </form>

    <?php
    // Check if form is submitted, then insert data
    if (isset($_POST['Submit'])) {
      $Nama = $_POST['Nama'];
      $Kelas = $_POST['Kelas'];
      $Alamat = $_POST['Alamat'];

      // Include database connection file
      include_once("config.php");

      // Validate input to ensure data is not empty
      if (!empty($Nama) && !empty($Kelas) && !empty($Alamat)) {
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO data (Nama, Kelas, Alamat) VALUES ('$Nama', '$Kelas', '$Alamat')");

        // Show success message
        echo "<div class='alert alert-success mt-3'>User added successfully. <a href='index.php'>View Users</a></div>";
      } else {
        echo "<div class='alert alert-danger mt-3'>Please fill all fields.</div>";
      }
    }
    ?>
  </div>
</body>

</html>
