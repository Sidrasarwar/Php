<?php
include 'config.php';


$id = $_GET['updateid'];

$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('Location: display.php');
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
            <h3 class="text-center mb-4">Update Form</h3>
            <form action="" method="post">
            
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person"></i></span>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your  name" required value="<?php echo $name; ?>">
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required value="<?php echo $email; ?>">
                </div>
              </div>

              <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-phone"></i></span>
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your Number" required value="<?php echo $mobile; ?>">
                </div>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required value="<?php echo $password; ?>">
                </div>
              </div>

              <button type="submit" class="btn btn-primary w-100" name="submit">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css"></script>
  </body>
</html>
