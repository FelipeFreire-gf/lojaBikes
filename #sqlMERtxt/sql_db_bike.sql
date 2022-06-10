-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Jun-2022 às 18:25
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

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
  `idBICICLETAS` INT(11) NOT NULL AUTO_INCREMENT,
  `TIPO_BIKE` VARCHAR(45) NOT NULL,
  `MARCA_BIKE` VARCHAR(45) NOT NULL,
  `MODELO_BIKE` VARCHAR(45) NOT NULL,
  `COR_BIKE` VARCHAR(45) NOT NULL,
  `RODA_BIKE` VARCHAR(200) NOT NULL,
  `GRUPO_BIKE` VARCHAR(200) NOT NULL,
  `QUADRO_BIKE` VARCHAR(200) NOT NULL,
  `GUIDAO_BIKE` VARCHAR(200) NOT NULL,
  `FREIO_BIKE` VARCHAR(45) NOT NULL,
  `SELIM_BIKE` VARCHAR(45) NOT NULL,
  `PEDAL_BIKE` VARCHAR(45) NOT NULL,
  `PESO_BIKE` VARCHAR(45) NULL,
  `FOTO_BIKE` VARCHAR(200) NOT NULL,
  `PRECO_BIKE` DECIMAL(10,2) NOT NULL,
  `FILA_COMPRA_BIKE` VARCHAR(45) NOT NULL DEFAULT 'N',
  `VENDAS_idVENDAS` INT(11) DEFAULT NULL,
  PRIMARY KEY (`idBICICLETAS`),
  KEY `fk_BICICLETAS_VENDAS1_idx` (`VENDAS_idVENDAS`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bicicletas`
--

INSERT INTO `BICICLETAS` (`TIPO_BIKE`, `MARCA_BIKE`, `MODELO_BIKE`, `COR_BIKE`, `RODA_BIKE`, 
`GRUPO_BIKE`, `QUADRO_BIKE`, `GUIDAO_BIKE`, `FREIO_BIKE`, `SELIM_BIKE`, `PEDAL_BIKE`, 
`PESO_BIKE`, `FOTO_BIKE`, `PRECO_BIKE`) VALUES
(1, 'MTB', 'Oggi', 'Float Sport 21v 2021 M', 'Preto', 'Aros Aero; Pneus MTB 29',
'Shimano Tourney 21 marchas; Manete/Passador ST-EF500 EZ Fire 3x7v; Pedivela FC-TY301; Mov. central Shimano blindado', 
'Float em Alum 6061 TAM. M; Suspensão Oggi 29', 'Alumínio Reto 31,8x680mm; Manoplas Velo Confort', 'Mecânico - Disco', 'MTB', 'Plataforma',
'~14,3kg', 'img/1-float-sport-21-preto.jpg', 1999.00),

(2, 'MTB', 'Caloi', 'Explorer Sport 2021 M', 'Alumínio', 'Aros Rodi Blackrock; Cubos TX505 Quick Release; Pneus Vee Rubber 29x2.1',
'Shimano Altus 24 velocidades; Manete/Passador MT200 e Trigger Rapidfire 3x8v; Pedivela FC-TY301; Cassete SunRace 8v; Câmbio FD-M313 e RD-TX800; Mov. central BB-UN100', 
'Alum 6061 TAM. M; Suspensão Caloi 100mm', 'MTB Alumínio 31.8x710mm - 20mm Rise; Manoplas borracha;', 'Disco SMRT10 160mm Center Lock', 'Selle Royal Vivo Ergo', 'Plástico',
'~15,5kg', 'img/2-explorer-sport-21-prata.jpg', 2949.00),

(3, 'MTB', 'Caloi', 'Vulcan 2021 M', 'Branco', 'Aros VZAN P68; Cubos Aço com Quick Release; Pneus MTB 29x2.25',
'Shimano Tourney 21 marchas; Manete/Passador RapidTrigger SFT5P 3x7v; Pedivela Aço com chain guard; Cassete Roda Livre 7v; Câmbio FD-Power Index 3v e RD-TY300; Mov. central Neco B887W', 
'Alum 6061 TAM. M; Suspensão Caloi 60mm', 'Aço curvo; Manoplas borracha', 'Mecânico - Disco', 'MTB DDK', 'Plástico',
'~15,7kg', 'img/3-vulcan-21-branco.jpg', 1099.00),

(4, 'MTB', 'Caloi', 'Moab 2021 microSHIFT M', 'Preto', 'Aros Rodi Blackrock; Cubos Alumínio com Quick Release; Pneus MTB 29x2.1',
'microSHIFT 18 marchas, Pedivela FSA CK-725NST; Manete/Passador Trigger SFT5P 3x7v; Cambio microSHIFT FD-M292 2v e RD-M36L 9v; Cassete Sunrace 9v; Mov. central Feimin FP-B908', 
'Alum 6061 TAM. M; Suspensão Rock Shox XC30 - 100mm', 'MTB Alumínio 31.8x680mm; Manoplas borracha', 'XT BL-M8100 Hidráulico - Disco', 'Fizik Thundra M5', 'Não acompanha',
'~15,5kg', 'img/4-moab-21-preto.jpg', 3499.00),

(5, 'MTB', 'Sense', 'Impact Carbon Evo 2021 G', 'Preto', 'Rodas Sentec RS1 TLR; Cubos DT Swiss 350 com E-Thru-Axle; Pneus Schwalbe Racing TLR 29x2.3',
'Shimano XT 12 marchas, Pedivela XT FC-M8100; Manete/Passador XT SL-M8100 12v; Cambio XT 12v; Cassete XT CS-M8100 12v; Mov. central FSA PF30 MTB', 
'Sense Carbon Mitsubishi M40 Tapered TAM. G; Suspensão Fox Float SC32 100mm', 'Sentec RS1 Team Alloy 31,8x750mm; Manoplas Sentec Silicone High Density', 'Logan Hidráulico - Disco ', 'Selle Royal', 'MTB',
'~13,1kg', 'img/5-impact-carbon-evo-21-preto', 24990.00),

(6, 'Gravel', 'Sense', 'Versa Comp Gravel 2021/22 S', 'Creme', 'Rodas Sense Disc SL 700C; Cubos Shimano CenterLock RM35; Pneus Schwalbe G One All Around 700x40C TLE',
'Shimano Sora R3000 18 marchas; Pedivela Sora FC R3000 Compact; Manete/Passador Sora R3000; Cambio Sora R3000 9v; Cassete Shimano HG400-9; Mov. central Shimano BSA Sora', 
'Sense Alumínio 6061 Dupla Espessura Geometria Gravel TAM. 52(S); Garfo Sense Alumínio 6061 Tapered', 'Sentec Alloy Flare 16° 440mm; Fita de guidão Sentec', 'BR R317 Mecânico - Disco RT30', 'Selle Royal Essenza', 'Sem pedal',
'~11,4kg', 'img/6-comp-gravel-21-creme.jpg', 6990.00),

(7, 'Speed', 'Oggi', 'Cadenza 500 2021 S', 'Azul', 'Rodas Shimano WH-RS171 Thru-Axle F-100x12mm e R-142x12mm; Cubos Shimano WH-RS171; Pneus Kenda 700x28C - Valkyrie TLR',
'Shimano 105 R3000 22 marchas; Pedivela 105 FC-R7000 Compact; Manete/Passador 105 Hidráulico ST-R7000; Cambio 105 FD-R7000 2v e RD-R7000 11v; Cassete 105 CS R7000 11v; Mov. central Shimano Press Fit', 
'Oggi 700 Full Carbon Racing Press Fit TAM. S; Garfo Carbon Racing Tapered Shock', 'Alcor 80 400mm; Fita de guidão ITM', '105 R7020 Hidráulico - Disco RT70s', 'Velo; Canote ITM Alcor 80', 'Sem pedal',
'~8,4kg', 'img/7-cadenza-500-21-azul.jpg', 19750.00),

(8, 'Urbana', 'Caloi', 'Urbam 2021 18 M', 'Preto', 'Aros 700 36F Parede Dupla; Cubos de Aço 36F com Quick Release; Pneus Mitas V71 Reflex 700x40',
'Shimano Tourney 21 marchas; Manete plástico/Passador Trigger 3v e 7v; Pedivela Aço 3v; Cassete Roda Livre 7v; Cambio FD-Power3v e RD-TY300 7v; Mov. central Feimin', 
'Alumínio c/ suporte p/ V-Brake TAM. M; Garfo rígido de aço', 'Aço 640mm; Manoplas Velo', 'V-Brake de Alumínio', 'DDK; Canote Alumínio com Quick Release', 'Plástico',
'~16,0kg', 'img/8-urbam-21-preto', 1899.00);
-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `idFUNCIONARIOS` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_FUNCIONARIO` varchar(45) NOT NULL,
  `LOGIN_FUNCIONARIO` varchar(45) NOT NULL,
  `SENHA_FUNCIONARIO` varchar(45) NOT NULL,
  `STATUS_FUNCIONARIO` varchar(45) NOT NULL DEFAULT 'ATIVO',
  `FUNCAO_FUNCIONARIO` varchar(45) NOT NULL,
  `ENDERECO_FUNCIONARIO` varchar(45) NOT NULL,
  `TELEFONE_FUNCIONARIO` varchar(45) NOT NULL,
  `CPF_FUNCIONARIO` varchar(45) NOT NULL,
  `RG_FUNCIONARIO` varchar(45) NOT NULL,
  `CTPS_FUNCIONARIO` varchar(45) NOT NULL,
  `DATA_NASCIMENTO_FUNCIONARIO` varchar(45) NOT NULL,
  `SEXO_FUNCIONARIO` varchar(45) NOT NULL,
  `ESCOLARIDADE_FUNCIONARIO` varchar(45) NOT NULL,
  PRIMARY KEY (`idFUNCIONARIOS`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idFUNCIONARIOS`, `NOME_FUNCIONARIO`, `LOGIN_FUNCIONARIO`, `SENHA_FUNCIONARIO`, `STATUS_FUNCIONARIO`, `FUNCAO_FUNCIONARIO`, `ENDERECO_FUNCIONARIO`, `TELEFONE_FUNCIONARIO`, `CPF_FUNCIONARIO`, `RG_FUNCIONARIO`, `CTPS_FUNCIONARIO`, `DATA_NASCIMENTO_FUNCIONARIO`, `SEXO_FUNCIONARIO`, `ESCOLARIDADE_FUNCIONARIO`) VALUES
(1, 'ADMINISTRADOR', 'admin', '1', 'ativo', 'administrador', 'qnn 09 conj 8', '40028922', '99966677722', '234234', '8492894832', '02082000', 'masculino', 'superior completo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `idVENDAS` int(11) NOT NULL AUTO_INCREMENT,
  `DATA_VENDA` varchar(45) NOT NULL,
  `FUNCIONARIOS_idFUNCIONARIOS` int(11) NOT NULL,
  PRIMARY KEY (`idVENDAS`),
  KEY `fk_VENDAS_FUNCIONARIOS_idx` (`FUNCIONARIOS_idFUNCIONARIOS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `bicicletas`
--
ALTER TABLE `bicicletas`
  ADD CONSTRAINT `fk_BICICLETAS_VENDAS1` FOREIGN KEY (`VENDAS_idVENDAS`) REFERENCES `vendas` (`idVENDAS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_VENDAS_FUNCIONARIOS` FOREIGN KEY (`FUNCIONARIOS_idFUNCIONARIOS`) REFERENCES `funcionarios` (`idFUNCIONARIOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
