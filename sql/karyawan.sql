USE `cloudy`; 

CREATE TABLE `tbl_karyawan` (
  `nip` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` char(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `masa_kerja` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan`
--

truncate table `tbl_karyawan`;

INSERT INTO `tbl_karyawan` (`nip`, `nama`, `jenis_kelamin`, `tgl_lahir`, `telp`, `email`,`alamat`, `jabatan`,`masa_kerja`) VALUES
(1, 'budi', 'L', 01/02/1990, '086799017393', 'budi@cloudy.com','jogja', 'manager', 7),
(2, 'ani', 'W', 04/30/1998, '086735683393', 'ani@cloudy.com','malang', 'staff', 2),
(3, 'andri', 'L', 08/09/1995, '082349017393', 'andri@cloudy.com','surabaya', 'marketing', 3);

ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`nip`);




