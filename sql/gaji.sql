USE `cloudy`; 

DROP TABLE `tbl_gaji`;

CREATE TABLE `tbl_gaji` (
  `kode_gaji` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tgl_terima` date NOT NULL,
  `nominal` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`kode_gaji`);




