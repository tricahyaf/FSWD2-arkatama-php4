<?php 
    include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Data Pengguna</title>
    <style>
        body{
            padding: 50px;
        }
        #btn_tambah{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <table class="table table-light table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Aksi</th>
                <th scope="col">Avatar</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $i=1;
                foreach ($rows as $row) {
                    echo "<tr>
                            <th scope='row'>" .$i++. "</td>
                            <td>".
                                "<button type='button' class='btn btn-primary'>
                                    <a class='text-light' href=detail.php?id=".$row['id'].">Detail</a>
                                </button>
                                <button type='button' class='btn btn-warning'>
                                    <a class='text-light' href=edit.php?id=".$row['id'].">Edit</a>
                                </button>
                                <button type='button' class='btn btn-danger'>
                                    <a class='text-light' href=delete.php?id=".$row['id'].">Hapus</a>
                                </button>
                                " 
                                ."</td>
                            <td> <img src=". $row["avatar"] . " width=80px></td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["address"] . "</td>
                            <td>" . $row["role"] . "</td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>

    <a id="btn_tambah" class="btn btn-success" href="insert.php">Tambah Data</a>
    


    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>