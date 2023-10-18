<?php
$koneksi = new mysqli('localhost', 'root', '', 'dzacki_xipplg3')
or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idpasien, nmpasien, jk, alamat) VALUES ('$idpasien', '$nmpasien', '$jk', '$alamat')");

    header('location: pasien.php');
}

if (isset($_GET['idpasien'])) {
    $idpasien = $_GET['idpasien'];
    $koneksi->query("DELETE FROM pasien WHERE idpasien = '$idpasien'");
    header('location: pasien.php');
}

if (isset($_POST['edit'])) {
    $idpasien = $_POST['idpasien'];
    $nmpasien = $_POST['nmpasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("UPDATE pasien SET idpasien='$idpasien', nmpasien='$nmpasien', jk='$jk', alamat='$alamat' WHERE idpasien='$idpasien'");
    header("location: pasien.php");
}


?>
