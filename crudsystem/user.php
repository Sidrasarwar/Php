<?php
include 'config.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $sql = "INSERT INTO `crud` (name, email,mobile, password) 
    VALUES ('$name', '$email', '$mobile', '$password')";
  $result = mysqli_query($con, $sql);


  if ($result) {
    //echo "data inserted successfully ";
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP CRUD System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm p-4">
          <h3 class="text-center mb-4">Sign Up Form</h3>
          <form action="" method="post">

            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" id="name" name="name" autocomplete="off"
                  placeholder="Enter your  Name" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input type="email" class="form-control" id="email" autocomplete="off" name="email"
                  placeholder="Enter your Email" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="text" class="form-control" autocomplete="off" id="mobile" name="mobile"
                  placeholder="Enter your Number" required>
              </div>
            </div>


            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" autocomplete="off"
                  placeholder="Enter your password" required>
              </div>
            </div>




            <button type="submit" class="btn btn-primary w-100" name="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css"></script>
</body>

</html>


</body>

</html>