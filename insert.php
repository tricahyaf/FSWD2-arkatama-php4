<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tambah User</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Pengguna</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="name">Nama</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Nama lengkap">
            <div class="row g-2">
                <div class="col">
                <label for="">Role</label>
                    <select class="form-select form-control" aria-label="Default select example" name="role">
                        <option selected>Pilih Role Pengguna</option>
                        <option value="admin">Admin</option>
                        <option value="staff">Staff</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Password</label>
                    <input class="form-control" type="password" name="password" id="name">
                </div>
            </div>
            <div class="row g-2">
                <div class="col">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="name@example.com">
                </div>
                <div class="col">
                    <label for="phone">Telp</label>
                    <input class="form-control" type="tel" name="phone" id="phone" placeholder="08967565">
                </div>
            </div>
            <label for="address">Alamat lengkap</label>
            <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
            <label for="avatar">Unggah foto</label>
            <input type="file" class="form-control" id="inputGroupFile04" name="avatar" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button type="submit" name="submit" class="btn btn-success mt-4">Tambah Data</button></br>
            <a href="index.php" type="button" class="btn btn-danger">Batal</a>
        </form>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>