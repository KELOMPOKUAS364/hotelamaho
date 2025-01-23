<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Check-In/Check-Out</title>
    <style>
    /* Tema Coklat Elegan */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5dc; /* Beige */
            color: #4b2e2a; /* Dark brown */
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #3b2f2f; /* Slightly lighter dark brown */
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            color: #6a4a3c; /* Medium brown */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #4b2e2a; /* Dark brown */
        }

        p {
            background-color: #f8e9dd; /* Light beige */
            padding: 10px;
            border: 1px solid #e0c4a8; /* Beige border */
            border-radius: 5px;
            width: fit-content;
            margin: 10px auto;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #d2b48c; /* Tan */
        }

        th {
            background-color: #8b5e3c; /* Rich brown */
            color: white;
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f5f5dc; /* Beige */
        }

        tr:hover {
            background-color: #f8e9dd; /* Light beige */
        }

        button, .button {
            background-color: #6a4a3c; /* Medium brown */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover, .button:hover {
            background-color: #4b2e2a; /* Dark brown */
        }
    </style>
</head>
<body>
    <h1>Data Check-In/Check-Out</h1>

    <?php if ($this->session->flashdata('message')): ?>
        <p><?php echo $this->session->flashdata('message'); ?></p>
    <?php endif; ?>
    <a href="<?= site_url('hotel'); ?>" class="btn btn-secondary mb-3">Kembali</a>
    <a href="<?php echo site_url('checkinout/checkin'); ?>">Tambah Check-In</a> |
    <a href="<?php echo site_url('checkinout/checkout'); ?>">Tambah Check-Out</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Check-In/Out</th>
                <th>ID Pemesanan</th>
                <th>Tanggal Check-In</th>
                <th>Tanggal Check-Out</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <body>
    <?php if(isset($checkinout) && !empty($checkinout)): ?>
        <?php foreach ($checkinout as $row): ?>
            <tr>
                <td><?php echo isset($row['id']) ? $row['id'] : '-'; ?></td>
                <td><?php echo isset($row['id_checkinout']) ? $row['id_checkinout'] : '-'; ?></td>
                <td><?php echo isset($row['id_pemesanan']) ? $row['id_pemesanan'] : '-'; ?></td>
                <td><?php echo isset($row['tanggal_checkin']) ? $row['tanggal_checkin'] : '-'; ?></td>
                <td><?php echo isset($row['tanggal_checkout']) ? $row['tanggal_checkout'] : '-'; ?></td>
                <td>
                    <a href="<?php echo site_url('checkinout/delete/' . (isset($row['id']) ? $row['id'] : '')); ?>" 
                       onclick="return confirm('Apakah Anda yakin?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6" style="text-align: center;">Tidak ada data</td>
        </tr>
    <?php endif; ?>
</body>
    </table>
</body>
</html>