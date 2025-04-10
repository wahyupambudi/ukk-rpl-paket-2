<?php
include 'koneksi.php';
include 'function.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <section class="text-center">
        <h2 class="mb-4">UKK Manajemen Data Siswa</h2>
        <p>Nama : Wahyu Pambudi | XII RPL</p>
    </section>
    <a href="add.php" class="btn btn-primary mb-3">Tambah Data</a>
    <form method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Cari NIS/Nama" value="<?= $keyword ?>">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </form>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nis'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td><?= $row['jurusan'] ?></td>
                    <td class="text-center">
                        <a href="edit.php?edit=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="index.php?hapus=<?= $row['id'] ?>" class="btn btn-sm btn-danger"
                            onclick="return confirm('Yakin?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>