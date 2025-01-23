<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f5f0;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #3e2723;
            margin-top: 20px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            color: #5d4037;
        }

        input, select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #6d4c41;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #5d4037;
        }

        .btn-secondary {
            text-decoration: none;
            display: inline-block;
            padding: 10px 15px;
            background-color: #d7ccc8;
            color: #5d4037;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #c5b4ac;
        }

        p {
            text-align: center;
            color: #d84315;
        }

    </style>
</head>
<body>
    <h1>Tambah Data Manajemen Keuangan</h1>

    <?php if ($this->session->flashdata('message')): ?>
    <p><?= $this->session->flashdata('message'); ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="id_pemesanan">ID Pemesanan:</label><br>
        <input type="number" id="id_pemesanan" name="id_pemesanan" required><br><br>

        <label for="id_inventaris">ID Inventaris:</label><br>
        <input type="number" id="id_inventaris" name="id_inventaris" required><br><br>

        <label for="total_biaya">Total Biaya:</label><br>
        <input type="number" id="total_biaya" name="total_biaya" step="0.01" required><br><br>

        <label for="metode_pembayaran">Metode Pembayaran:</label><br>
        <select id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="Tunai">Tunai</option>
            <option value="Kartu Kredit">Kartu Kredit</option>
        </select><br><br>

        <label for="tanggal_transaksi">Tanggal Transaksi:</label><br>
        <input type="datetime-local" id="tanggal_transaksi" name="tanggal_transaksi" required><br><br>

        <a href="<?= site_url('manajemenkeuangan'); ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-secondary">Simpan</button>
        
    </form>
</body>
</html>
