-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2019 pada 16.38
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_history_user`
--

CREATE TABLE `tbl_history_user` (
  `histID` int(15) NOT NULL,
  `userID` int(15) NOT NULL,
  `histActiv` text NOT NULL,
  `histDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ingridients`
--

CREATE TABLE `tbl_ingridients` (
  `ingridientID` int(15) NOT NULL,
  `ingridientName` varchar(70) NOT NULL,
  `ingridientQty` int(10) NOT NULL,
  `ingridientType` varchar(10) NOT NULL,
  `ingridientNote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menuID` int(15) NOT NULL,
  `categoryID` int(15) NOT NULL,
  `menuName` varchar(70) NOT NULL,
  `menuPrice` int(30) NOT NULL,
  `menuDesc` text NOT NULL,
  `menuDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`menuID`, `categoryID`, `menuName`, `menuPrice`, `menuDesc`, `menuDate`) VALUES
(301001, 1, 'Mie Ayam Jakarta ', 18000, 'Mie Ayam Jakarta 77', '2019-12-04 19:35:00'),
(301002, 1, 'Mie Ayam Bakso Ayam', 20000, 'Mie Ayam + 2 pcs Bakso Ayam ', '2019-12-05 00:00:00'),
(301003, 1, 'Mie Ayam Bakso Sapi', 21000, 'Mie Ayam + 2pcs Bakso Sapi', '2019-12-05 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_category`
--

CREATE TABLE `tbl_menu_category` (
  `categoryID` int(15) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `categoryNote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_menu_category`
--

INSERT INTO `tbl_menu_category` (`categoryID`, `categoryName`, `categoryNote`) VALUES
(1, 'Mie Ayam', 'Makanan yang berisi mie ayam'),
(5, 'Cold Drink', 'asdad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_ingridients`
--

CREATE TABLE `tbl_menu_ingridients` (
  `mnIngridientID` int(15) NOT NULL,
  `menuID` int(15) NOT NULL,
  `ingridientID` int(15) NOT NULL,
  `mnIngridientQty` int(10) NOT NULL,
  `mnIngridientNote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu_variant`
--

CREATE TABLE `tbl_menu_variant` (
  `variantID` int(15) NOT NULL,
  `menuID` int(15) NOT NULL,
  `variantName` varchar(50) NOT NULL,
  `variantPrice` int(30) NOT NULL,
  `variantNote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `orderID` varchar(35) NOT NULL,
  `userID` int(15) NOT NULL,
  `orderDate` datetime NOT NULL,
  `orderStatus` varchar(30) NOT NULL,
  `orderOther` text NOT NULL,
  `orderDisc` int(5) NOT NULL,
  `OrderTax` int(5) NOT NULL,
  `OrderTotal` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order_menu`
--

CREATE TABLE `tbl_order_menu` (
  `ordMnID` int(15) NOT NULL,
  `orderID` varchar(35) NOT NULL,
  `menuID` int(15) NOT NULL,
  `ordMnQty` int(5) NOT NULL,
  `ordMnOther` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order_menu_variant`
--

CREATE TABLE `tbl_order_menu_variant` (
  `ordMnVarID` int(15) NOT NULL,
  `variantID` int(15) NOT NULL,
  `variantQty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_payment_method`
--

CREATE TABLE `tbl_payment_method` (
  `paymentID` int(15) NOT NULL,
  `paymentMethod` varchar(30) NOT NULL,
  `paymentOther` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `transID` varchar(30) NOT NULL,
  `orderID` varchar(30) NOT NULL,
  `userID` int(15) NOT NULL,
  `paymentID` int(15) NOT NULL,
  `transDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` int(15) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userPass` text NOT NULL,
  `userAccess` varchar(5) NOT NULL,
  `userDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `userName`, `userPass`, `userAccess`, `userDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '2019-11-25 09:00:00'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2', '2019-11-25 09:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_history_user`
--
ALTER TABLE `tbl_history_user`
  ADD PRIMARY KEY (`histID`),
  ADD KEY `userID` (`userID`);

--
-- Indeks untuk tabel `tbl_ingridients`
--
ALTER TABLE `tbl_ingridients`
  ADD PRIMARY KEY (`ingridientID`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menuID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indeks untuk tabel `tbl_menu_category`
--
ALTER TABLE `tbl_menu_category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indeks untuk tabel `tbl_menu_ingridients`
--
ALTER TABLE `tbl_menu_ingridients`
  ADD PRIMARY KEY (`mnIngridientID`),
  ADD KEY `menuID` (`menuID`),
  ADD KEY `ingridientID` (`ingridientID`);

--
-- Indeks untuk tabel `tbl_menu_variant`
--
ALTER TABLE `tbl_menu_variant`
  ADD PRIMARY KEY (`variantID`),
  ADD KEY `menuID` (`menuID`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`);

--
-- Indeks untuk tabel `tbl_order_menu`
--
ALTER TABLE `tbl_order_menu`
  ADD PRIMARY KEY (`ordMnID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indeks untuk tabel `tbl_order_menu_variant`
--
ALTER TABLE `tbl_order_menu_variant`
  ADD PRIMARY KEY (`ordMnVarID`),
  ADD KEY `variantID` (`variantID`);

--
-- Indeks untuk tabel `tbl_payment_method`
--
ALTER TABLE `tbl_payment_method`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indeks untuk tabel `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`transID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `paymentID` (`paymentID`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_history_user`
--
ALTER TABLE `tbl_history_user`
  MODIFY `histID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ingridients`
--
ALTER TABLE `tbl_ingridients`
  MODIFY `ingridientID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu_category`
--
ALTER TABLE `tbl_menu_category`
  MODIFY `categoryID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_history_user`
--
ALTER TABLE `tbl_history_user`
  ADD CONSTRAINT `tbl_history_user_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`userID`);

--
-- Ketidakleluasaan untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD CONSTRAINT `tbl_menu_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `tbl_menu_category` (`categoryID`);

--
-- Ketidakleluasaan untuk tabel `tbl_menu_ingridients`
--
ALTER TABLE `tbl_menu_ingridients`
  ADD CONSTRAINT `tbl_menu_ingridients_ibfk_1` FOREIGN KEY (`menuID`) REFERENCES `tbl_menu` (`menuID`),
  ADD CONSTRAINT `tbl_menu_ingridients_ibfk_2` FOREIGN KEY (`ingridientID`) REFERENCES `tbl_ingridients` (`ingridientID`);

--
-- Ketidakleluasaan untuk tabel `tbl_menu_variant`
--
ALTER TABLE `tbl_menu_variant`
  ADD CONSTRAINT `tbl_menu_variant_ibfk_1` FOREIGN KEY (`menuID`) REFERENCES `tbl_menu` (`menuID`);

--
-- Ketidakleluasaan untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`userID`);

--
-- Ketidakleluasaan untuk tabel `tbl_order_menu`
--
ALTER TABLE `tbl_order_menu`
  ADD CONSTRAINT `tbl_order_menu_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `tbl_order` (`orderID`);

--
-- Ketidakleluasaan untuk tabel `tbl_order_menu_variant`
--
ALTER TABLE `tbl_order_menu_variant`
  ADD CONSTRAINT `tbl_order_menu_variant_ibfk_1` FOREIGN KEY (`variantID`) REFERENCES `tbl_menu_variant` (`variantID`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD CONSTRAINT `tbl_transaction_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `tbl_order` (`orderID`),
  ADD CONSTRAINT `tbl_transaction_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`userID`),
  ADD CONSTRAINT `tbl_transaction_ibfk_3` FOREIGN KEY (`paymentID`) REFERENCES `tbl_payment_method` (`paymentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
