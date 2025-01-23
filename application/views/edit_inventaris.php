<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Data Inventaris</h2>
        
        <form action="<?= site_url('inventaris/update/'.$inventaris->id_barang); ?>" method="POST">
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" 
                       value="<?= $inventaris->nama_barang ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" 
                       value="<?= $inventaris->jumlah ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi</label>
                <select class="form-select" id="kondisi" name="kondisi" required>
                    <option value="baik" <?= $inventaris->kondisi == 'baik' ? 'selected' : '' ?>>Baik</option>
                    <option value="rusak" <?= $inventaris->kondisi == 'rusak' ? 'selected' : '' ?>>Rusak</option>
                </select>
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?= site_url('inventaris'); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>