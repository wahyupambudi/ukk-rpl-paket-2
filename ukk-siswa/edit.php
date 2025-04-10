<?php
include 'koneksi.php';
include 'function.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2 class="mb-4">Edit Data Siswa</h2>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" value="<?= $data['nis'] ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" value="<?= $data['kelas'] ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="<?= $data['jurusan'] ?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>

</html>