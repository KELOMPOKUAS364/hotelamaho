<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f6f4ee;
            color: #3c3c3b;
            font-family: 'Arial', sans-serif;
        }
        h2 {
            color: #3c3c3b;
        }
        .btn-primary {
            background-color: #a08a5c;
            border-color: #a08a5c;
        }
        .btn-primary:hover {
            background-color: #8f7a4e;
            border-color: #8f7a4e;
        }
        .btn-secondary {
            background-color: #3c3c3b;
            border-color: #3c3c3b;
        }
        .btn-secondary:hover {
            background-color: #2b2b2b;
            border-color: #2b2b2b;
        }
        label {
            color: #3c3c3b;
        }
        input.form-control {
            background-color: #ffffff;
            border: 1px solid #d9d7d2;
            color: #3c3c3b;
        }
        input.form-control:focus {
            border-color: #a08a5c;
            box-shadow: 0 0 0 0.2rem rgba(160, 138, 92, 0.25);
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Data Keuangan</h2>
    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label">No Transaksi</label>
            <input type="text" name="id_transaksi" class="form-control" value="<?= $keuangan['id_pemesanan']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">No Pemesanan</label>
            <input type="text" name="id_pemesanan" class="form-control" value="<?= $keuangan['id_pemesanan']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">No Inventaris</label>
            <input type="text" name="id_inventaris" class="form-control" value="<?= $keuangan['id_inventaris']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Total Biaya</label>
            <input type="number" name="total_biaya" class="form-control" value="<?= $keuangan['total_biaya']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" class="form-control" value="<?= $keuangan['metode_pembayaran']; ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Transaksi</label>
            <input type="datetime-local" name="tanggal_transaksi" class="form-control" value="<?= date('Y-m-d\TH:i', strtotime($keuangan['tanggal_transaksi'])); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= site_url('manajemenkeuangan'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
