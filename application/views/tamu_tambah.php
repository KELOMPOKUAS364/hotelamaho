<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tamu</title>
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

        form {
            width: 50%;
            margin: 20px auto;
            background-color: #fff8e1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #6d4c41;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #d7ccc8;
            border-radius: 5px;
        }

        input:focus, select:focus {
            border-color: #8d6e63;
            outline: none;
        }

        button {
            background-color: #8d6e63;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #6d4c41;
        }

        option {
            color: #5d4037;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Tambah Tamu</h1>
    <form action="<?= site_url('tamu/tambah'); ?>" method="post">
        <label for="id_pelanggan">Pelanggan:</label>
        <select name="id_pelanggan" id="id_pelanggan">
            <option value="" data-nama="" data-telepon="">-- Pilih Pelanggan --</option>
            <?php foreach ($pelanggan as $p): ?>
                <option 
                    value="<?= $p['id_pelanggan']; ?>" 
                    data-nama="<?= $p['nama_pelanggan']; ?>" 
                    data-telepon="<?= $p['telepon']; ?>">
                    <?= $p['nama_pelanggan']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>

        <label for="nama_tamu">Nama Tamu:</label>
        <input type="text" name="nama_tamu" id="nama_tamu">
        <br>

        <label for="telepon">Telepon:</label>
        <input type="text" name="telepon" id="telepon">
        <br>

        <button type="submit">Simpan</button>
    </form>

    <script>
        // Mengisi Nama Tamu dan Telepon berdasarkan pilihan pelanggan
        $('#id_pelanggan').on('change', function() {
            const selectedOption = $(this).find(':selected');
            const namaPelanggan = selectedOption.data('nama') || '';
            const teleponPelanggan = selectedOption.data('telepon') || '';

            $('#nama_tamu').val(namaPelanggan);
            $('#telepon').val(teleponPelanggan);
        });
    </script>
</body>
</html>
