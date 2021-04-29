# Registros
<img src="https://user-images.githubusercontent.com/60578173/115021465-fbf86400-9e89-11eb-8bf2-cef0b083c272.png" width="90%"></img> </br></br></br></br>
# pequeno sistema em PHP de registro de notas que podem ser compartilhadas por usuarios cadastrados: </br>
-- conta com dois niveis de permissão Adm/ Usuario
<img src="https://user-images.githubusercontent.com/60578173/115022235-1bdc5780-9e8b-11eb-80ae-d22a3223be71.png" width="90%"></img> </br></br></br></br>
-- administrador pode cadastrar novos usuarios alem de deletar registros, criação e consulta de novos registros</br>
-- usuario pode criar novos registros consultar registros e trocar de senha</br>
-- busca por titulo ou data de criação</br>
.</br>
.</br>
.</br>
-Banco MYSQL</br>
-Script: 

-- Banco de dados: `registros`
--
-- CREATE DATABASE `registros`
-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `descricao` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `usuario` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `nm_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------



-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sobrenome` varchar(200) DEFAULT NULL,
  `permissao` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(300) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- --------------------------------------------------------
-- ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);
-- --------------------------------------------------------  
-- ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
-- --------------------------------------------------------
INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `permissao`, `login`, `senha`, `created`, `modified`) VALUES
(1, 'adm01', 'adm01', 1, 'admin', '$2y$10$/k7GFZpvGTKCL/uncpzyAed776VfuNFMIAx7K4q8uKDXZ8SAkwT5C', '2021-04-17 00:30:50', NULL);
