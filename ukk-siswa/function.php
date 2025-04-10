<?php
// cari data siswa
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$sql = "SELECT * FROM tb_siswa WHERE nama LIKE '%$keyword%' OR nis LIKE '%$keyword%'";
$result = mysqli_query($con, $sql);


// tambah data siswa
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST["add"])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $sql = "INSERT INTO tb_siswa (nis, nama, kelas, jurusan) VALUES ('$nis', '$nama', '$kelas', '$jurusan')";
    mysqli_query($con, $sql);
    header("Location: index.php");
}

// edit data siswa
if (isset($_GET["edit"])) {
    $id = $_GET['edit'];
    $data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM tb_siswa WHERE id=$id"));
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $sql = "UPDATE tb_siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id=$id";
        mysqli_query($con, $sql);
        header("Location: index.php");
    }
}

// hapus data

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql = "DELETE FROM tb_siswa WHERE id=$id";
    mysqli_query($con, $sql);
    header("Location: index.php");
}
?>