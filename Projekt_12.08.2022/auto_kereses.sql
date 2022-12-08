-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Dec 08. 19:45
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `projekt`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `auto_kereses`
--

CREATE TABLE `auto_kereses` (
  `auto_nev` varchar(25) NOT NULL,
  `auto_tipus` varchar(25) NOT NULL,
  `uz_tipus` varchar(25) NOT NULL,
  `meghajtas` varchar(25) NOT NULL,
  `min_hp` int(11) NOT NULL,
  `ulesek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `auto_kereses`
--

INSERT INTO `auto_kereses` (`auto_nev`, `auto_tipus`, `uz_tipus`, `meghajtas`, `min_hp`, `ulesek`) VALUES
('audi_a3', 'csaladi', 'dizel', 'FWD', 150, 5),
('audi_a3', 'csaladi', 'benzin', 'FWD', 200, 5),
('audi_a4', 'csaladi', 'dizel', 'AWD', 200, 5),
('audi_a4', 'csaladi', 'benzin', 'AWD', 250, 5),
('bmw_m2', 'sport', 'benzin', 'RWD', 400, 2),
('bmw_m8', 'sport', 'benzin', 'AWD', 625, 2),
('bmw_x5', 'suv', 'dizel', 'AWD', 350, 5),
('bmw_x5', 'suv', 'benzin', 'AWD', 400, 5),
('bmw_x7', 'suv', 'diesel', 'AWD', 350, 7),
('bmw_x7', 'suv', 'benzin', 'AWD', 450, 7),
('mazda_3', 'csaladi', 'diesel', 'FWD', 110, 5),
('mazda_3', 'csaladi', 'benzin', 'FWD', 170, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
