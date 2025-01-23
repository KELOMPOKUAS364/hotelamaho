<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris</title>
    <!-- Link ke Bootstrap dan CSS Kustom -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
.table th {
    background-color: #5a3a29; /* Warna coklat */
    color: #ffffff; /* Warna putih */
    font-size: 1rem;
    font-weight: bold;
}

.table td {
    background-color: #ffffff; /* Warna putih */
    color: #000000; /* Warna hitam */
    font-size: 1rem;
}

.table tbody tr:hover {
    background-color: #f2f2f2; /* Warna abu-abu muda */
}

.btn-danger {
    background-color: #dc3545; /* Warna merah */
    color: #fff; /* Warna putih */
}

.btn-warning {
    background-color: #ffc107; /* Warna kuning */
    color: #000; /* Warna hitam */
}

h2 {
    color: #5a3a29; /* Warna coklat */
}

    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Data Inventaris</h2>

    <!-- Tombol Kembali -->
    <a href="<?= site_url('hotel'); ?>" class="btn btn-secondary mb-3">Kembali</a>

    <a href="<?= site_url('Inventaris/tambahinventaris'); ?>" class="btn btn-success mb-3">Tambah Data</a>

    <!-- Tabel Data Inventaris -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Kelola</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Inventaris as $index => $item): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $item['id_barang']; ?></td>
                    <td><?php echo $item['nama_barang']; ?></td>
                    <td><?php echo $item['jumlah']; ?></td>
                    <td><?php echo ucfirst($item['kondisi']); ?></td>                    
                    <td>
                        <a href="<?php echo site_url('inventaris/delete/'.$item['id_barang']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        <a href="<?php echo site_url('inventaris/edit/'.$item['id_barang']); ?>" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
