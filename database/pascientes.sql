-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10/08/2020 às 10:53
-- Versão do servidor: 5.6.47
-- Versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sindieve_banco267`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pascientes`
--

CREATE TABLE `pascientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `fone` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `pascientes`
--

INSERT INTO `pascientes` (`id`, `nome`, `idade`, `cpf`, `fone`, `foto`) VALUES
(54, 'Steve Jobs', 47, '019.814.603-57', '(85) 3101-2166', 'jobs.jpg'),
(52, 'Homem Aranha', 27, '464.026.403-87', '+5585988800631', 'homemaranha.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pascientes_sintomas`
--

CREATE TABLE `pascientes_sintomas` (
  `id` int(11) NOT NULL,
  `id_pasc` int(11) NOT NULL,
  `sintomas` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `pascientes_sintomas`
--

INSERT INTO `pascientes_sintomas` (`id`, `id_pasc`, `sintomas`) VALUES
(14, 42, 'Dor de cabeca,Dore no corpo,Mal estar,Dor de garganta,Falta de paladar,Falta de olfato,'),
(15, 43, 'tosse,Dor de cabeca,Dore no corpo,Mal estar,Dor de garganta,Dificuldade para respirar,Falta de paladar,Falta de olfato,Dificuldade de locomoÃ§Ã£o,DiarrÃ©ia'),
(13, 41, 'Febre,Dor de cabeca,Dore no corpo,Falta de olfato,'),
(16, 43, 'Falta de paladar,'),
(17, 43, 'DiarrÃ©ia'),
(18, 43, 'Falta de olfato,'),
(19, 43, 'tosse,Dor de garganta,Falta de paladar,Dificuldade de locomoÃ§Ã£o,'),
(20, 42, 'Falta de paladar,'),
(21, 41, 'Coriza,Dor de cabeca,Dor de garganta,'),
(22, 43, 'Falta de olfato,DiarrÃ©ia'),
(23, 43, 'Dore no corpo,Mal estar,Dificuldade para respirar,Falta de olfato,DiarrÃ©ia'),
(24, 41, 'Falta de paladar,Dificuldade de locomoÃ§Ã£o,'),
(25, 42, 'Cansaco,Dore no corpo,Mal estar,Dificuldade para respirar,Falta de paladar,Falta de olfato,Dificuldade de locomoÃ§Ã£o,DiarrÃ©ia'),
(26, 43, 'DiarrÃ©ia'),
(27, 42, 'Febre,Coriza,Nariz Entupido,tosse,Dor de cabeca,Dore no corpo,Mal estar,Dor de garganta,Dificuldade para respirar,Falta de olfato,'),
(28, 43, 'Febre,Coriza,Nariz Entupido,Cansaco,tosse,Dor de cabeca,Dore no corpo,Mal estar,Dor de garganta,Dificuldade para respirar,Falta de paladar,Falta de olfato,Dificuldade de locomoÃ§Ã£o,DiarrÃ©ia'),
(29, 43, 'Falta de paladar,'),
(30, 43, 'Febre,'),
(31, 43, 'Dor de cabeca,Dor de garganta,'),
(32, 43, 'Falta de paladar,'),
(33, 43, 'Dor de cabeca,Falta de paladar,'),
(34, 43, 'Dor de cabeca,Mal estar,Falta de paladar,'),
(35, 44, 'Febre,Dor de garganta,Falta de paladar,'),
(36, 44, 'Nariz Entupido,'),
(37, 45, 'Dore no corpo,Mal estar,Dificuldade para respirar,'),
(38, 51, 'Nariz Entupido,'),
(39, 51, ''),
(40, 50, 'Coriza,Nariz Entupido,'),
(41, 52, 'Coriza,Nariz Entupido,'),
(42, 52, ''),
(43, 52, 'Febre,tosse,Dor de cabeca,Mal estar,Dor de garganta,Dificuldade para respirar,Falta de paladar,DiarrÃ©ia'),
(44, 52, 'Febre,Coriza,Nariz Entupido,Cansaco,tosse,Dor de cabeca,Dore no corpo,Mal estar,Dor de garganta,Dificuldade para respirar,Falta de paladar,Falta de olfato,Dificuldade de locomoÃ§Ã£o,DiarrÃ©ia'),
(45, 52, 'Cansaco,Dificuldade para respirar,'),
(46, 52, 'Febre,Coriza,Nariz Entupido,Cansaco,Dor de cabeca,Dore no corpo,Dificuldade para respirar,Falta de paladar,Falta de olfato,Dificuldade de locomoÃ§Ã£o,DiarrÃ©ia'),
(47, 52, 'Febre,Coriza,'),
(48, 53, 'Febre,Coriza,Nariz Entupido,Cansaco,tosse,Dor de cabeca,Dore no corpo,Mal estar,Dor de garganta,Dificuldade para respirar,Falta de paladar,Falta de olfato,Dificuldade de locomoÃ§Ã£o,DiarrÃ©ia'),
(49, 53, 'Febre,Coriza,Nariz Entupido,Cansaco,tosse,Dor de cabeca,Dore no corpo,Mal estar,Dor de garganta,Dificuldade para respirar,Falta de paladar,Falta de olfato,Dificuldade de locomoÃ§Ã£o,DiarrÃ©ia'),
(50, 52, ''),
(51, 52, 'Febre,Coriza,'),
(52, 52, 'Febre,Coriza,Nariz Entupido,'),
(53, 52, 'Febre,Coriza,Nariz Entupido,'),
(54, 52, 'Coriza,Nariz Entupido,'),
(55, 52, 'Febre,Coriza,Nariz Entupido,tosse,'),
(56, 52, 'Coriza,Nariz Entupido,Cansaco,'),
(57, 52, 'Coriza,Nariz Entupido,');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `pascientes`
--
ALTER TABLE `pascientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pascientes_sintomas`
--
ALTER TABLE `pascientes_sintomas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pascientes`
--
ALTER TABLE `pascientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `pascientes_sintomas`
--
ALTER TABLE `pascientes_sintomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
