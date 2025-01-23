<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Pemesanan</title>
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

        input[type="text"], input[type="date"], select {
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
    <h1>Tambah Pemesanan</h1>

    <?php echo form_open('pemesanan/tambah'); ?>
        <label for="id_pemesanan">ID Pemesanan:</label>
        <input type="text" name="id_pemesanan"><br>

        <label for="id_pelanggan">ID Pelanggan:</label>
        <input type="text" name="id_pelanggan"><br>

        <label for="id_kamar">ID Kamar:</label>
        <input type="text" name="id_kamar"><br>

        <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
        <input type="date" name="tanggal_pemesanan"><br>

        <label for="tanggal_checkin">Tanggal Check-In:</label>
        <input type="date" name="tanggal_checkin"><br>

        <label for="tanggal_checkout">Tanggal Check-Out:</label>
        <input type="date" name="tanggal_checkout"><br>

        <label for="status">Status:</label>
        <select name="status">
            <option value="Dipesan">Dipesan</option>
            <option value="Selesai">Selesai</option>
            <option value="Dibatalkan">Dibatalkan</option>
        </select><br>

        <button type="submit">Tambah</button>
    <?php echo form_close(); ?>
</body>
</html>