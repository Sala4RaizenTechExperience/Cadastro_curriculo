CREATE DATABASE `candidatos`;

USE `candidatos`;

CREATE TABLE IF NOT EXISTS `candidatos`.`Candidato` (
  `idCandidato` INT NOT NULL AUTO_INCREMENT COMMENT 'Chave de identicação única do candidato',
  `Nome` VARCHAR(50) NOT NULL COMMENT 'Primeiro nome do candidato',
  `Sobrenome` VARCHAR(70) NOT NULL COMMENT 'Sobrenome do candidato',
  `dtNascimento` DATE NOT NULL COMMENT 'Data de nascimento do candidato',
  `Genero` INT NOT NULL COMMENT 'Gênero do candidato conforme opções abaixo\n1-Feminino\n2-Masculino\n3-Não Binário\n4-Prefiro não responder',
  `Email` VARCHAR(100) NOT NULL COMMENT 'Endereço de e-mail do candidato para contato',
  `Telefone` VARCHAR(15) NOT NULL COMMENT 'Número de telefone do candidato para contato',
  `Bio` BLOB(1000) NOT NULL COMMENT 'Biografia detalhando informações como experiência e habilidades',
  `idFormacao` INT NOT NULL COMMENT 'Identificação de formação do candidato\n\n1-Graduação Completa \n2-Graduação Incompleta \n3-Ensino Médio Completo \n4-Ensino Médio Incompleto',
  `CEP` VARCHAR(8) NOT NULL COMMENT 'Código de Endereçamento Postal do candidato',
  `Logradouro` VARCHAR(150) NOT NULL COMMENT 'Endereço do candidato',
  `Bairro` VARCHAR(45) NOT NULL COMMENT 'Bairro do endereço do candidato',
  `Cidade` VARCHAR(45) NOT NULL COMMENT 'Cidade do endereço do candidato',
  `UF` VARCHAR(2) NOT NULL COMMENT 'Unidade Federativa do endereço do candidato',
  `Numero` INT NOT NULL COMMENT 'Número da residência do endereço do candidato',
  `Complemento` VARCHAR(50) NULL COMMENT 'Complemento do endereço do candidato',
  PRIMARY KEY (`idCandidato`),
  UNIQUE INDEX `idCandidato_UNIQUE` (`idCandidato` ASC) VISIBLE,
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) VISIBLE)
ENGINE = InnoDB;

