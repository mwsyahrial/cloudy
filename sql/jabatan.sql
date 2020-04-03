USE `cloudy`; 

CREATE TABLE `tbl_jabatan` (
  `kode` int(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `standar_gaji` int(18) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

truncate table `tbl_jabatan`;

INSERT INTO `tbl_jabatan` (`kode`, `jabatan`, `standar_gaji`, `keterangan`) VALUES
(1, 'manager', '15000000', 'Team manager'),
(2, 'staff', '10000000', 'staff programmer'),
(3, 'admin', '1000000', 'admin');

ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`kode`);




