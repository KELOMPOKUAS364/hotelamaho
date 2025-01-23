<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5dc; 
            color: #4b2e2a; 
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #3b2f2f; 
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            color: #6a4a3c; 
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #4b2e2a; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #d2b48c; 
        }

        th {
            background-color: #6a4a3c; 
            color: white;
            padding: 10px;
            text-align: left;
        }

        td {
            background-color: #f8f8f2; 
            color: #4b2e2a; 
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #f2e6d9; 
        }

        button, .button {
            background-color: #6a4a3c; 
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover, .button:hover {
            background-color: #4b2e2a; 
        }
    </style>
</head>
<body>
    <h1>Daftar Pemesanan</h1>
    <a href="<?= site_url('hotel'); ?>" class="btn btn-secondary mb-3">Kembali</a>
    <a href="<?php echo site_url('pemesanan/tambah'); ?>" class="button">Tambah Pemesanan</a>
    <table>
        <tr>
            <th>ID Pemesanan</th>
            <th>ID Pelanggan</th>
            <th>ID Kamar</th>
            <th>Tanggal Pemesanan</th>
            <th>Tanggal Check-In</th>
            <th>Tanggal Check-Out</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($pemesanankamar as $p): ?>
            <tr>
                <td><?php echo $p['id_pemesanan']; ?></td>
                <td><?php echo $p['id_pelanggan']; ?></td>
                <td><?php echo $p['id_kamar']; ?></td>
                <td><?php echo $p['tanggal_pemesanan']; ?></td>
                <td><?php echo $p['tanggal_checkin']; ?></td>
                <td><?php echo $p['tanggal_checkout']; ?></td>
                <td><?php echo $p['status']; ?></td>
                <td>
                    <a href="<?php echo site_url('pemesanan/edit/'.$p['id_pemesanan']); ?>">Edit</a> |
                    <a href="<?php echo site_url('pemesanan/delete/'.$p['id_pemesanan']); ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>