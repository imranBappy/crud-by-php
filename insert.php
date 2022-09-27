<?php
  $connection = mysqli_connect('localhost', 'root', '','crud');
if (isset($_POST['submit']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

$sql = "INSERT INTO users(name, email, phone) VALUES('$name', '$email', '$phone')";
  if (mysqli_query($connection,$sql) == TRUE) {
    echo "Successfully Inserted!";
    header("location:index.php");
  }else {
    echo "Not Insert!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .contact-body {
        background-color: #0F2F38;
        max-width: 800px;
        margin: 0 auto;
        padding: 0px 20px;
        height: 100vh;
    }

    body {
        background-color: #004457;
    }

    input {
        background-color: #001920 !important;
    }
    </style>
</head>

<body>
    <div class="contact-body">
        <h2 class="text-white py-3" align="center">Create Contact</h2>
        <div class="row ">
            <div class="col px-4 py-5  align-self-center">
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label text-white">Name </label>
                        <input type="text" name="name" class=" form-control" id="exampleInputName"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone" class="form-label text-white">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputPhone">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>