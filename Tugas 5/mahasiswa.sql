-- Active: 1670843044531@@127.0.0.1@3306@test
CREATE TABLE
    mahasiswaItera(
        nim int(12) NOT NULL AUTO_INCREMENT,
        nama char(23) NOT NULL,
        prodi varchar(23) NOT NULL,
        primary key (nim)
    )engine = innoDB;

ALTER TABLE mahasiswaItera AUTO_INCREMENT=100;

INSERT INTO mahasiswaItera (nim, nama, prodi) VALUES
        (120140073, 'Jossy Saragih', 'Teknik Informatika'),
        (120140043, 'Irsan Romardi Harahap', 'Teknik Informatika'),
        (120140053, 'Nurul Fikri', 'Teknik Informatika'), 
        (120140107, 'Naufal Dewanto', 'Teknik Informatika'),
        (120140137, 'Michael Simanjuntak', 'Teknik Informatika'),
        (120130033, 'Andini', 'Teknik Sipil'),
        (120130088, 'Lu Hout ', 'Teknik Sipil'),
        (120110123, 'Rid One Come Ill', 'Biomedis'),
        (120110101, 'Mbappe', 'Biomedis'),
        (120110110, 'Newmar Senior', 'Biomedis'),
        (120007007, 'Row Naldo', 'Fisika'),
        (120007116, 'Aysow Sepid', 'Fisika'),
        (120440017, 'Ke Mario', 'Teknik Industri'),
        (120440010, 'Angkara Messi', 'Teknik Industri'),
        (120440133, 'Acuna Malaka', 'Teknik Industri');

