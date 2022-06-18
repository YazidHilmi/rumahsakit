<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/authload.php";

use Rhumsaa\Uuid\Uuid;
use Rhumsaa\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
    $total = $_POST['add'];
    for ($i=1; $i<= ; $i++) { 
        $uuid = Uuid::uuid4()->toString();
        $nama = trim(mysqli_real_escape_string($con, $_POST['nama-'.$i]));
        $gedung = trim(mysqli_real_escape_string($con, $_POST['gedung-'.$i]));
        mysqli_query($con, "INSERT INTO tb_obat (id_poli, nama_poli, gedung) VALUES ('$uuid','$nama', '$gedung')") or die (mysqli_error($con));
    }
    if($sql){
        echo "<script>alert('".$total." data berhasil ditambahkan');window.location='data.php';</script>";
    } else {
        echo "<script>alert('Gagal tambah data, coba lagi');window.location='generate.php';</script>";
    }
    
    echo "<script>window.location='data.php';</script>";

} else if(isset($_POST['edit'])) {
    
}
?>