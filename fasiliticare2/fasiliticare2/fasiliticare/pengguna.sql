CREATE TABLE pengguna (
    id_pengguna INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    password VARCHAR(255),
    dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);