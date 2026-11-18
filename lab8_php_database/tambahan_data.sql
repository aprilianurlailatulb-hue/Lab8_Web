-- Data tambahan: kategori Komputer dan Hand Phone
-- Jalankan di tab SQL phpMyAdmin (database latihan1) jika database.sql sebelumnya sudah diimport.
USE latihan1;

INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok) VALUES
('Komputer',   'Laptop Gaming',  'gambar/laptop_gaming.jpg', 9500000, 11500000, 3),
('Komputer',   'PC Desktop',     'gambar/pc_desktop.jpg',    6000000,  7500000, 4),
('Hand Phone', 'HP Realme',      'gambar/hp_realme.jpg',     1700000,  2100000, 8),
('Hand Phone', 'HP Vivo',        'gambar/hp_vivo.jpg',       2200000,  2700000, 6);
