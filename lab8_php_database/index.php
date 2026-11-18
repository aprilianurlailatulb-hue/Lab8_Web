<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>
        <div class="main">
            <a class="btn" href="tambah.php">+ Tambah Barang</a>
            <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php if ($result && mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td>
                        <?php if (!empty($row['gambar']) && file_exists(__DIR__ . '/' . $row['gambar'])): ?>
                            <img src="<?= htmlspecialchars($row['gambar']); ?>" alt="<?= htmlspecialchars($row['nama']); ?>">
                        <?php else: ?>
                            <span class="noimg"><?= htmlspecialchars($row['nama']); ?></span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($row['nama']); ?></td>
                    <td><span class="badge"><?= htmlspecialchars($row['kategori']); ?></span></td>
                    <td>Rp <?= number_format($row['harga_beli'], 0, ',', '.'); ?></td>
                    <td>Rp <?= number_format($row['harga_jual'], 0, ',', '.'); ?></td>
                    <td class="stok"><?= $row['stok']; ?></td>
                    <td class="aksi">
                        <a href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a>
                        <a class="hapus" href="hapus.php?id=<?= $row['id_barang']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>
