<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemesanan</title>
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

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #d2b48c; /* Tan */
            border-radius: 5px;
            background-color: #f8f8f2; /* Light beige */
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
<h1>Edit Pemesanan</h1>

<?php echo form_open('pemesanan/edit/' . $pemesanankamar['id_pemesanan']); ?>

    <label>ID Pelanggan:</label>
    <input type="text" name="id_pelanggan" value="<?php echo set_value('id_pelanggan', $pemesanankamar['id_pelanggan']); ?>"><br>
    
    <label>ID Kamar:</label>
    <input type="text" name="id_kamar" value="<?php echo set_value('id_kamar', $pemesanankamar['id_kamar']); ?>"><br>
    
    <label>Tanggal Pemesanan:</label>
    <input type="date" name="tanggal_pemesanan" value="<?php echo set_value('tanggal_pemesanan', $pemesanankamar['tanggal_pemesanan']); ?>"><br>
    
    <label>Tanggal Check-In:</label>
    <input type="date" name="tanggal_checkin" value="<?php echo set_value('tanggal_checkin', $pemesanankamar['tanggal_checkin']); ?>"><br>
    
    <label>Tanggal Check-Out:</label>
    <input type="date" name="tanggal_checkout" value="<?php echo set_value('tanggal_checkout', $pemesanankamar['tanggal_checkout']); ?>"><br>
    
    <label>Status:</label>
    <select name="status">
        <option value="Dipesan" <?php echo set_select('status', 'Dipesan', $pemesanankamar['status'] == 'Dipesan'); ?>>Dipesan</option>
        <option value="Selesai" <?php echo set_select('status', 'Selesai', $pemesanankamar['status'] == 'Selesai'); ?>>Selesai</option>
        <option value="Dibatalkan" <?php echo set_select('status', 'Dibatalkan', $pemesanankamar['status'] == 'Dibatalkan'); ?>>Dibatalkan</option>
    </select><br>
    
    <button type="submit">Simpan</button>

<?php echo form_close(); ?>

