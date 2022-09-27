    <?php
  $connection = mysqli_connect('localhost', 'root', '','crud');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id = $id";
        if (mysqli_query($connection, $sql) == TRUE) {
           header("location:index.php");
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacts List</title>
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
        </style>

    </head>

    <body>
        <div class="contact-body">

            <h2 class="text-white py-3" align="center">Contacts Numbers</h2>
            <button class="btn btn-primary mb-2">
                <a href="insert.php" class='text-white'>Create Contact</a>
            </button>
            <div class="row">

                <div class="col">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $sql = "SELECT * FROM users";
                        $query = mysqli_query($connection, $sql);
                         while ($data = mysqli_fetch_assoc($query)) {
                        $id = $data['id'];
                          $name = $data['name'];      
                          $email = $data['email'];
                          $phone = $data['phone'];
                          echo "  <tr>
                                <th scope='row'>$id</th>
                                <td>$name</td>
                                <td>$email</td>
                                <td>$phone</td>
                                <td>
                                 <button type='button' class='btn btn-primary'>
                                    <a class='text-white' href='edit.php?id=$id'>Edit</a>
                                 </button>
                                <button type='button' class='btn btn-danger'>
                                    <a class='text-white' href='index.php?id=$id'>Delete</a>
                                </button>
                                </td>
                                
                            </tr>";  
                         }
                    ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </body>

    </html>