<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Keuangan</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f4ea;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 80%;
            margin: 50px auto;
        }

        h2 {
            font-size: 28px;
            color: #6d4c41;
            border-bottom: 2px solid #6d4c41;
            padding-bottom: 10px;
        }

        /* Table Styles */
        .table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fafafa;
        }

        .table thead th {
            background-color: #6d4c41;
            color: #ffffff;
            text-align: left;
            padding: 10px;
        }

        .table tbody td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f3f3f3;
        }

        /* Button Styles */
        .btn {
            border: none;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-success {
            background-color: #388e3c;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #2e7d32;
        }

        .btn-warning {
            background-color: #fbc02d;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #f9a825;
        }

        .btn-danger {
            background-color: #d32f2f;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c62828;
        }

        /* Link Styles */
        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover {
            color: #6d4c41;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
                max-width: 95%;
            }

            h2 {
                font-size: 24px;
            }

            .btn {
                font-size: 12px;
                padding: 6px 10px;
            }
        }
    </style>
    
</head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">Manajemen Keuangan</h2>
    <a href="<?= site_url('hotel'); ?>" class="btn btn-secondary mb-3">Kembali</a>
    <a href="<?= site_url('Manajemenkeuangan/tambah'); ?>" class="btn btn-coklat mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>No Transaksi</th>
                <th>No Pemesanan</th>
                <th>No Inventaris</th>
                <th>Total Biaya</th>
                <th>Metode Pembayaran</th>
                <th>Tanggal Transaksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($keuangan as $index => $item): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= $item['id_transaksi']; ?></td>
                    <td><?= $item['id_pemesanan']; ?></td>
                    <td><?= $item['id_inventaris']; ?></td>
                    <td><?= $item['total_biaya']; ?></td>
                    <td><?= $item['metode_pembayaran']; ?></td>
                    <td><?= $item['tanggal_transaksi']; ?></td>
                    <td>
                        <a href="<?= site_url('manajemenkeuangan/edit/'.$item['id_transaksi']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('manajemenkeuangan/delete/'.$item['id_transaksi']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
