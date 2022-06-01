-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Jun-2022 às 20:03
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_bike`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bicicletas`
--

DROP TABLE IF EXISTS `bicicletas`;
CREATE TABLE IF NOT EXISTS `bicicletas` (
  `idBICICLETAS` int NOT NULL AUTO_INCREMENT,
  `MARCA_BIKE` varchar(45) NOT NULL,
  `MODELO_BIKE` varchar(45) NOT NULL,
  `ARO_BIKE` varchar(45) NOT NULL,
  `CONTEUDO_EMBALAGEM_BIKE` varchar(45) NOT NULL,
  `COR_BIKE` varchar(45) NOT NULL,
  `MARCHAS_BIKE` varchar(45) NOT NULL,
  `QUADRO_BIKE` varchar(45) NOT NULL,
  `FREIO_DIANTEIRO_BIKE` varchar(45) NOT NULL,
  `FREIO_TRASEIRO_BIKE` varchar(45) NOT NULL,
  `MANOPLA_BIKE` varchar(45) NOT NULL,
  `SELIM_BIKE` varchar(45) NOT NULL,
  `PEDAL_BIKE` varchar(45) NOT NULL,
  `FILA_COMPRA_BIKE` varchar(45) NOT NULL DEFAULT 'N',
  `FOTO_BIKE` varchar(45) NOT NULL,
  `VENDAS_idVENDAS` int NOT NULL,
  PRIMARY KEY (`idBICICLETAS`),
  KEY `fk_BICICLETAS_VENDAS1_idx` (`VENDAS_idVENDAS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `bicicletas`
--
ALTER TABLE `bicicletas`
  ADD CONSTRAINT `fk_BICICLETAS_VENDAS1` FOREIGN KEY (`VENDAS_idVENDAS`) REFERENCES `vendas` (`idVENDAS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
