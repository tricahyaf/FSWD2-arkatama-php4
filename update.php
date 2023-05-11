<?php 

include 'koneksi.php';

if (isset($_POST['submit'])) {
    $targetDir = "../storage/";
    $targetFile = $targetDir.basename($_FILES["avatar"]["name"]);

    if (move_uploaded_file($_FILES["avatar"]["tmp_name"],$targetFile)) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
    }
    $sql = "UPDATE users  SET name='$name', role='$role', password='$password', email='$email', phone='$phone', address='$address', avatar='$targetFile' WHERE id='$id'";

    $msg = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Selamat !!</strong> Data baru telah diperbarui
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";

    if (mysqli_query($conn,$sql)) {
        echo $msg;
    }else{
        echo $msg="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Maaf !!</strong> Terjadi Kesalahan Ketika Memperbarui Data
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }

    header("location:index.php");
    exit;
}