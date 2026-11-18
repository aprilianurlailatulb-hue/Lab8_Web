CREATE DATABASE IF NOT EXISTS latihan1;
USE latihan1;

CREATE TABLE IF NOT EXISTS data_barang (
  id_barang int(10) auto_increment PRIMARY KEY,
  kategori varchar(30),
  nama varchar(50),
  gambar varchar(100),
  harga_beli decimal(10,0),
  harga_jual decimal(10,0),
  stok int(4)
);

INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok) VALUES
('Elektronik', 'HP Samsung Android', 'gambar/hp_samsung.jpg', 2000000, 2400000, 5),
('Elektronik', 'HP Xiaomi Android', 'gambar/hp_xiaomi.jpg', 1000000, 1400000, 5),
('Elektronik', 'HP OPPO Android', 'gambar/hp_oppo.jpg', 1800000, 2300000, 5),
('Komputer', 'Laptop Gaming', 'gambar/laptop_gaming.jpg', 9500000, 11500000, 3),
('Komputer', 'PC Desktop', 'gambar/pc_desktop.jpg', 6000000, 7500000, 4),
('Hand Phone', 'HP Realme', 'gambar/hp_realme.jpg', 1700000, 2100000, 8),
('Hand Phone', 'HP Vivo', 'gambar/hp_vivo.jpg', 2200000, 2700000, 6);
