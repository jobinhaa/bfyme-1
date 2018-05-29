-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Maio-2018 às 16:44
-- Versão do servidor: 5.7.20-log
-- PHP Version: 7.1.11

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bfyme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_sbfy_categoria`
--

CREATE TABLE `t_sbfy_categoria`
(
  `cd_categoria` int
(11) NOT NULL,
  `nm_categoria` varchar
(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_sbfy_categoria`
--

INSERT INTO `t_sbfy_categoria` (`
cd_categoria`,
`nm_categoria
`) VALUES
(3, 'CABELO'),
(6, 'ESTÉTICA CORPORAL'),
(7, 'ESTÉTICA FACIAL'),
(1, 'MAQUIAGEM'),
(4, 'MASSAGEM'),
(5, 'SOBRANCELHA'),
(2, 'UNHAS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE
IF NOT EXISTS `t_sbfy_post`
(
  `post_id` int
(11) NOT NULL AUTO_INCREMENT,
  `post_date` text NOT NULL,
  `post_title` varchar
(180) NOT NULL,
  `post_autor` varchar
(180) NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY
(`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `t_sbfy_post` (`
post_id`,
`post_date
`, `post_title`, `post_autor`, `post_image`, `post_content`) VALUES
(3, '2018-04-30', 'Olá, somos o Bfy.me', 'Bfy.me', 'postagem_1.jpg', 'Nossos hábitos mudaram conforme a mudança de estilo de vida e hoje queremos facilidade e rapidez nos serviços. \r\nA partir desta filosofia, nasceu o Bfyme. Somos uma plataforma de agendamentos de serviços de beleza que auxilia pessoas encontrarem um profissional qualificado para realizar o atendimento do serviço escolhido no local e hora que desejar, com a segurança de ter todo esse processo acompanhado pelo Bfy.me.'),
(4, '2018-04-30', 'Dia Nacional da Mulher', 'Bfy.me', 'postagem_5.png', 'Hoje, 30 de abril é o dia nacional da mulher, dia esse que não é muito popular em nosso país mas que tem como objetivo promover a inserção da mulher em todas as áreas da sociedade. Hoje mais do que nunca devemos incentivar as mulheres da nossa vida a mostrar o poder delas. Marque no comentário sua amiga, irmã, prima que é um exemplo de coragem e determinação.'),
(5, '2018-04-30', 'Não entendeu os agendamentos?', 'Bfy.me', 'postagem_6.png', 'Ainda não entendeu como os agendamentos funcionam? Vem cá que a gente explica! '),
(7, '2018-04-30', '#DicaBfyme', 'Bfy.me', 'postagem_4.png', 'Você conhece os produtos hidratantes com proteção solar? Há uma grande gama de produtos de cuidado com a pele que estão associando a hidratação com a proteção solar e facilitando a rotina. A #DicaBfyme de hoje é sobre esses novos queridinhos :)'),
(8, '2018-04-24', 'Conheça a drenagem linfática', 'Bfy.me', 'postagem_2.png', 'A sensação de cansaço e inchaço pode acontecer com frequência no nosso dia a dia. Existem algumas técnicas que ajudam o corpo se recuperar e uma delas é a massagem relaxante.\r\nA massagem relaxante beneficia a circulação sanguínea, melhora a flexibilidade do corpo e ainda proporciona uma sensação de bem-estar. \r\n');


--
-- Estrutura da tabela `t_sbfy_servico`
--

CREATE TABLE `t_sbfy_servico`
(
  `cd_servico` int
(11) NOT NULL,
  `cd_categoria` int
(11) NOT NULL,
  `nm_servico` varchar
(45) NOT NULL,
  `ds_servico` varchar
(255) NOT NULL,
  `nr_duracao_maxima_servico` int
(11) NOT NULL,
  `vl_servico` decimal
(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_sbfy_servico`
--

INSERT INTO `t_sbfy_servico` (`
cd_servico`,
`cd_categoria
`, `nm_servico`, `ds_servico`, `nr_duracao_maxima_servico`, `vl_servico`) VALUES
(1, 1, 'MAQUIAGEM ARTISTICA', 'Precisa de uma maquiagem para aquela festa a fantasia ou até para uma apresentação no teatro?\r\n		A maquiagem artística é perfeita para essas ocasiões.', 45, '130.00'),
(2, 1, 'MAQUIAGEM', 'Festas de casamento, formatura ou aquela ocasião especial pedem destaque para sua beleza e a maquiagem é uma ótima\r\n    forma de completar o look.', 60, '110.00'),
(3, 2, 'MANICURE', 'No serviço de manicure simples é realizado a limpeza das unhas e esmaltação.', 30, '25.00'),
(4, 2, 'PEDICURE', 'Serviço oferece a limpeza das unhas e esmaltação', 30, '25.00'),
(5, 2, 'UNHAS DECORADAS', 'Unhas postiças ou naturais ganham cor e formatos diferente com essa técnica', 40, '45.00'),
(6, 2, 'MANICURE E PEDICURE', 'Serviço completo de limpeza e esmaltação de mãos e pés.', 40, '40.00'),
(7, 3, 'PENTEADOS', 'Penteados para todos os tipos de ocasiões podem ser solicitados.', 60, '150.00'),
(8, 3, 'CORTE', 'Cortes simples para manutenção ou cortes mais elaborados', 45, '40.00'),
(9, 3, 'ESCOVA', 'Para a modelagem, é utilizada a técnica que seca e modela o cabelo com ajuda do secador, conforme gosto do cliente.', 60, '30.00'),
(10, 4, 'BAMBUTERAPIA', 'Massagem que utiliza bambus para movimentos rigorosos e que promove relaxamento e contorno corporal', 45, '140.00'),
(11, 4, 'PEDRAS QUENTES', 'Massagem que proporciona relaxamento intenso, por meio de pedras vulcânicas aquecidas', 45, '110.00'),
(12, 4, 'RELAXANTE', 'A massagem relaxante é uma técnica que beneficia a flexibilidade e aumenta a circulação sanguínea do corpo, de modo\r\n    que alivia o estresse e tensão muscular.', 45, '85.00'),
(13, 5, 'DESIGN DE SOBRANCELHA', 'Técnica que desenha e alinha harmoniosamente as sobrancelhas, seguindo o formato de rosto e gosto do\r\n    cliente.', 45, '40.00'),
(14, 5, 'COLORAÇÃO DE SOBRANCELHA', 'Utilizada para realçar sobrancelhas que são mais claras, criando o aspecto de sobrancelha preenchida', 45, '45.00'),
(15, 6, 'DRENAGEM LINFÁTICA', 'Procedimento realizado para redução de inchaço corporal.', 60, '80.00'),
(16, 6, 'TRATAMENTO DE CELULITE', 'Procedimento pode reunir várias tecnologias e técnicas manuais para redução da aparência das celulites', 60, '220.00'),
(17, 6, 'GORDURA LOCALIZADA', 'Voltado para redução de medidas, com produtos específicos e massagem rigorosa.', 60, '200.00'),
(18, 7, 'LIMPEZA DE PELE', 'Procedimento voltado para extração de cravos e melhora da aparência da pele do rosto.', 45, '85.00'),
(19, 7, 'PEELING', 'Por meio de uma leve descamação da pele, acontece a renovação celular da pele promovendo aspecto de saudável e limpa.', 60, '100.00'),
(20, 7, 'HIDRATAÇÃO FACIAL', 'Para melhorar a textura e retenção de líquido da pele.', 30, '75.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_sbfy_usuario`
--

CREATE TABLE `t_sbfy_usuario`
(
  `cd_usuario` int
(11) NOT NULL,
  `nm_cliente` varchar
(100) NOT NULL,
  `nm_usuario` varchar
(30) NOT NULL,
  `ds_email` varchar
(100) NOT NULL,
  `nr_cpf` char
(11) NOT NULL,
  `dt_nascimento` datetime NOT NULL,
  `ds_senha` varchar
(16) NOT NULL,
  `ds_sexo` varchar
(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `t_sbfy_usuario`
--

INSERT INTO `t_sbfy_usuario` (`
cd_usuario`,
`nm_cliente
`, `nm_usuario`, `ds_email`, `nr_cpf`, `dt_nascimento`, `ds_senha`, `ds_sexo`) VALUES
(1, 'Joana Durvalo', 'JOBS', 'j.durval@gmail.com', '44816696830', '1997-03-12 00:00:00', 'J7wKwsV6B', 'F'),
(2, 'Gustavo', 'gtorrente', 'prof.gustavotorrente@fiap.com.br', '01234567890', '1992-09-28 00:00:00', 'eufuinafeira11', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_sbfy_categoria`
--
ALTER TABLE `t_sbfy_categoria`
ADD PRIMARY KEY
(`cd_categoria`),
ADD UNIQUE KEY `UN_SBFY_CATEGORIA`
(`nm_categoria`);

--
-- Indexes for table `t_sbfy_servico`
--
ALTER TABLE `t_sbfy_servico`
ADD PRIMARY KEY
(`cd_servico`);

--
-- Indexes for table `t_sbfy_usuario`
--
ALTER TABLE `t_sbfy_usuario`
ADD PRIMARY KEY
(`cd_usuario`),
ADD UNIQUE KEY `UN_SBFY_EMAIL`
(`ds_email`),
ADD UNIQUE KEY `UN_SBFY_CPF`
(`nr_cpf`),
ADD UNIQUE KEY `UN_SBFY_NMUSUARIO`
(`nm_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_sbfy_categoria`
--
ALTER TABLE `t_sbfy_categoria`
  MODIFY `cd_categoria` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_sbfy_servico`
--
ALTER TABLE `t_sbfy_servico`
  MODIFY `cd_servico` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `t_sbfy_usuario`
--
ALTER TABLE `t_sbfy_usuario`
  MODIFY `cd_usuario` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
