CREATE DATABASE `padaria`;

CREATE TABLE `produtos` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(45) DEFAULT NULL,
    `descricao` text,
    `quantidade` INT DEFAULT NULL,
    `tipo` INT DEFAULT NULL,
    `imagem` BLOB DEFAULT NULL,
    `pedido_id` INT DEFAULT NULL,
    `promocoes_id` INT DEFAULT NULL,
    PRIMARY KEY (`id`)
);
ALTER TABLE produtos ADD CONSTRAINT pedido_id FOREIGN KEY(pedido_id) REFERENCES pedido (id);
ALTER TABLE produtos ADD CONSTRAINT promocoes_id FOREIGN KEY(promocoes_id) REFERENCES promocoes (id);
ALTER TABLE produtos ADD CONSTRAINT tipo FOREIGN KEY(tipo) REFERENCES categorias (id);

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
ALTER TABLE promocoes ADD CONSTRAINT pedido_id FOREIGN KEY(pedido_id) REFERENCES pedido (id);
ALTER TABLE promocoes ADD CONSTRAINT pedido_pagamento_id FOREIGN KEY(pedido_pagamento_id) REFERENCES pagamento (id);
ALTER TABLE promocoes ADD CONSTRAINT pedido_usuario_id FOREIGN KEY(pedido_usuario_id) REFERENCES usuario (id);
ALTER TABLE promocoes ADD CONSTRAINT pedido_cliente_id FOREIGN KEY(pedido_cliente_id) REFERENCES cliente (id);

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
ALTER TABLE pedido ADD CONSTRAINT pagamento_id FOREIGN KEY(pagamento_id) REFERENCES pagamento (id);
ALTER TABLE pedido ADD CONSTRAINT usuario_id FOREIGN KEY(usuario_id) REFERENCES usuario (id);
ALTER TABLE pedido ADD CONSTRAINT cliente_id FOREIGN KEY(cliente_id) REFERENCES cliente (id);

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
ALTER TABLE feedback ADD CONSTRAINT cliente_id FOREIGN KEY(cliente_id) REFERENCES cliente (id);