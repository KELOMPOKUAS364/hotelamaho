<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
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

        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #d7ccc8;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
        }

        input:focus, textarea:focus {
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
    </style>
</head>
<body>
    <h1>Tambah Pelanggan</h1>
    <form action="<?= site_url('pelanggan/tambah'); ?>" method="post">
        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" id="nama_pelanggan">
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>

        <label for="telepon">Telepon:</label>
        <input type="text" name="telepon" id="telepon">
        <br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat"></textarea>
        <br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
