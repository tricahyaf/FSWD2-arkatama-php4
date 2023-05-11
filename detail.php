<?php
    include 'koneksi.php';
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <?php
        $data = mysqli_query($conn,"select * from users where id='$id'");
        while ($d = mysqli_fetch_array($data)) {
    ?>
        <div class="data_profil">
            <img src="<?php echo $d['avatar']; ?>" alt="">
            <h3 class="nama"><?php echo $d['name']; ?></h5>
            <div class="data">
                <p><?php echo $d['email']; ?></p>
                <p><?php echo $d['phone']; ?></p>
                <p><?php echo $d['address']; ?></p>
                <p><?php echo $d['role']; ?></p>
            </div>
        </div>
    <?php 
        }
    ?>

</body>
</html>