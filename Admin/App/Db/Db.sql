CREATE DATABASE `padaria`;

CREATE TABLE `produtos` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(45) DEFAULT NULL,
    `descricao` text,
    `quantidade` INT DEFAULT NULL,
    `tipo` varchar(45) DEFAULT NULL,
    `pedido_id` INT DEFAULT NULL,
    `promocoes_id` INT DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `promocoes`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(45) DEFAULT NULL,
    `descricao` text,
    `desconto` FLOAT DEFAULT NULL,
    `dataInicio` date DEFAULT NULL,
    `dataTermino` date DEFAULT NULL,
    `pedido_id` INT DEFAULT NULL,
    `pedido_pagamento_id` INT DEFAULT NULL,
    `pedido_usuario_id` INT DEFAULT NULL,
    `pedido_cliente_id` INT DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `usuario`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(45) DEFAULT NULL,
    `senha` varchar(45) DEFAULT NULL,
    `cargo` varchar(45) DEFAULT NULL,
    `email` varchar(45) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `categorias`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(45) DEFAULT NULL,
     `produtos_id` INT DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `pedido`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `valor` float DEFAULT NULL,
    `aprovapedido` boolean DEFAULT NULL,
    `data` date DEFAULT NULL,
    `descricao` text,
    `valor_tele_entrega` float DEFAULT NULL,
    `pagamento_id` INT DEFAULT NULL,
    `usuario_id` INT DEFAULT NULL,
    `cliente_id` INT DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `pagamento`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `debito` float DEFAULT NULL,
    `credito` float DEFAULT NULL,
    `pix` float DEFAULT NULL,
    `dinheiro` float DEFAULT NULL,
    `parcela` int DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `cliente`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(45) DEFAULT NULL,
    `senha` varchar(45) DEFAULT NULL,
    `cidade` varchar(45) DEFAULT NULL,
    `telefone` bigint DEFAULT NULL,
    `endereco` varchar(45) DEFAULT NULL,
    `email` varchar(45) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `feedback`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nota` int,
    `comentario` text,
    `cliente_id` int DEFAULT NULL,
    PRIMARY KEY (`id`)
);