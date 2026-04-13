<?php 

echo " 📊 (SQL)
1. 🧱 DDL (Data Definition Language)

Digunakan untuk membuat dan mengubah struktur tabel/database

CREATE → membuat database / tabel
CREATE TABLE customers (...);
ALTER → mengubah struktur tabel
ALTER TABLE customers ADD email VARCHAR(100);
DROP → menghapus tabel / database
DROP TABLE customers;
TRUNCATE → menghapus semua isi tabel (lebih cepat dari DELETE)
TRUNCATE TABLE customers;
2. 📥 DML (Data Manipulation Language)

Digunakan untuk mengolah data

INSERT → menambah data
INSERT INTO customers (name, city) VALUES ('Budi', 'Jayapura');
SELECT → mengambil data
SELECT * FROM customers;
SELECT * FROM customers LIMIT 10 OFFSET 4;  //berfunsi untuk mengabil sebagian data dari customer dengan limit 10 data dimalai dari id 4
UPDATE → mengubah data
UPDATE customers SET city='Wamena' WHERE id=1;
DELETE → menghapus data
DELETE FROM customers WHERE id=1;
3. 🔐 DCL (Data Control Language)

Mengatur hak akses user

GRANT → memberi akses
GRANT SELECT, INSERT ON db_name.* TO 'user';
REVOKE → mencabut akses
REVOKE INSERT ON db_name.* FROM 'user';
4. 🔄 TCL (Transaction Control Language)

Mengatur transaksi database

COMMIT → simpan perubahan
ROLLBACK → batalkan perubahan
SAVEPOINT → titik penyimpanan sementara
START TRANSACTION;
UPDATE customers SET city='Papua';
ROLLBACK;
5. 🔍 Query Penting Tambahan
WHERE (filter data)
SELECT * FROM customers WHERE city='Jayapura';
ORDER BY (urutkan)
SELECT * FROM customers ORDER BY name ASC;
GROUP BY (pengelompokan)
SELECT city, COUNT(*) FROM customers GROUP BY city;
JOIN (gabungkan tabel)
SELECT orders.id, customers.name
FROM orders
JOIN customers ON orders.customer_id = customers.id;
🧠 Kesimpulan singkat:
DDL → atur struktur (tabel)
DML → olah data
DCL → hak akses
TCL → transaksi

"



 ?>