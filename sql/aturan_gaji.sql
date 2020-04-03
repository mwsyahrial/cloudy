USE `cloudy`; 

CREATE TABLE `tbl_aturan_gaji` (
  `kode` int(8) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `masa_kerja` int(3) NOT NULL,
  `insentif` int(18) NOT NULL,
  `bonus` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tbl_aturan_gaji`
  ADD PRIMARY KEY (`kode`);



