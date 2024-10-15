<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .table {
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">ADD NEW USER</a></button>
    </div>
    <div class="container my-5">
        <h2 class="text-center mb-4">User Data</h2>
        <div class="table-responsive">
            <table class="table table-sm table-striped table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Password</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT * from  `crud` ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_array(($result))) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '
                <tr>
                <th scope="row">' . $id . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $mobile . '</td>
                <td>' . $password . '</td>
                <td>
           <button class="btn btn-primary">
           <a href="update.php?updateid=' . $id . '" class="text-light">Update</a>
           </button>
           <button class="btn btn-danger">
           <a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a>
           </button> 
           </td>
           </tr> ';

                    }
                } ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css"></script>
    </table>

</html>