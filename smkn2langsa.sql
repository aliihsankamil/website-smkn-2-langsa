CREATE DATABASE smkn2langsa;

USE smkn2langsa;

CREATE TABLE pengguna(
	id INT AUTO_INCREMENT,
	nama VARCHAR(50),
	username VARCHAR(100),
	PASSWORD VARCHAR(100),
	LEVEL ENUM("admin","staff"),
	aktif ENUM("Y","T"),
	PRIMARY KEY(id)
);

INSERT INTO pengguna VALUES('','ALI IHSAN KAMIL','admin','admin','admin','Y');
DELETE FROM pengguna WHERE id=2;
SELECT * FROM pengguna;

CREATE TABLE kategori(
	id INT AUTO_INCREMENT,
	nm_kategori VARCHAR(50),
	PRIMARY KEY(id)
);

DROP TABLE berita;
CREATE TABLE berita(
	id INT AUTO_INCREMENT,
	id_kategori INT,
	judul VARCHAR(100),
	isi TEXT,
	foto VARCHAR(100),
	tgl DATE,
	id_pengguna INT,
	PRIMARY KEY(id),
	FOREIGN KEY(id_kategori) REFERENCES kategori(id),
	FOREIGN KEY(id_pengguna) REFERENCES pengguna(id)
);





