<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4ece1;
            color: #5d4037;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #4e342e;
        }

        a {
            color: #6d4c41;
            text-decoration: none;
        }

        a:hover {
            color: #8d6e63;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff8e1;
        }

        table, th, td {
            border: 1px solid #d7ccc8;
        }

        th {
            background-color: #6d4c41;
            color: white;
            padding: 10px;
        }

        td {
            text-align: center;
            padding: 10px;
        }

        tr:nth-child(even) {
            background-color: #efebe9;
        }

        tr:hover {
            background-color: #d7ccc8;
        }

        .action-buttons a {
            margin: 0 5px;
            padding: 5px 10px;
            border: 1px solid #6d4c41;
            border-radius: 5px;
            background-color: #efebe9;
        }

        .action-buttons a:hover {
            background-color: #d7ccc8;
        }

        .container {
            text-align: left;
            margin: 20px 10%;
        }

        .container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #8d6e63;
            color: white;
            border-radius: 5px;
        }

        .container a:hover {
            background-color: #6d4c41;
        }
    </style>
</head>
<body>
    <h1>Daftar Pelanggan</h1>
    <div class="container">
    <a href="<?= site_url('hotel'); ?>" class="btn btn-secondary mb-3">Kembali</a>
        <a href="<?= site_url('pelanggan/tambah'); ?>">Tambah Pelanggan</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pelanggan)) : ?>
                <?php foreach ($pelanggan as $item): ?>
                    <tr>
                        <td><?= $item['id_pelanggan']; ?></td>
                        <td><?= $item['nama_pelanggan']; ?></td>
                        <td><?= $item['email']; ?></td>
                        <td><?= $item['telepon']; ?></td>
                        <td><?= $item['alamat']; ?></td>
                        <td class="action-buttons">
                            <a href="<?= site_url('pelanggan/edit/' . $item['id_pelanggan']); ?>">Edit</a>
                            <a href="<?= site_url('pelanggan/delete/' . $item['id_pelanggan']); ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Tidak ada data pelanggan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
