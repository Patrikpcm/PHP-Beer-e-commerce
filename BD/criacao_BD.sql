CREATE SCHEMA baruk_alkh DEFAULT CHARACTER SET utf8; -- Criação do eschema do BANCO

USE baruk_alkh; -- Selecionando o esquema criado para trabalhar.

/*CRIANDO AS TABELAS*/

-- Tabela que armazena informações dos usuários do nosso site.
CREATE TABLE usuarios (
    id_usuario INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100),
    email VARCHAR(100),
    endereco TEXT,
    telefone VARCHAR(20),
    senha VARCHAR(32),
    UNIQUE KEY(email),
    PRIMARY KEY(id_usuario)
);


-- Tabela que armazena informações dos produtos contidos no site.
CREATE TABLE produtos(
    id_produto INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100),
    descricao TEXT,
    ibu TINYINT DEFAULT NULL,
    abv TINYINT DEFAULT NULL,
    categoria VARCHAR(10) DEFAULT 'cerveja',
    tipo VARCHAR(50) DEFAULT NULL,
    preco DECIMAL(15,2),
    foto VARCHAR(70)
);


/*
Tabela que armazena as informações gerais dos pedidos de cada usuário
e cria uma chave primária para cada pedido. É uma relação de:
UM PARA MUITOS
*/
CREATE TABLE pedidos_usuarios(
    id_pedido INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT UNSIGNED NOT NULL,
    data_pedido DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    preco_total DECIMAL(15,2),
    CONSTRAINT id_usuario_fk
    FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario)
);


/*
Tabela que armazena as informações específicas dos pedidos de cada usuário
e não possuí chave primária, pois se trata de uma relação de:
MUITOS PARA MUITOS
*/
CREATE TABLE pedidos_produtos(
    id_pedido INT UNSIGNED NOT NULL,
    id_produto INT UNSIGNED NOT NULL,
    /*Demais informações que poderiamos ter nessa tabela:
    Forma de pagamento, Data entrega, Frete, Endereço de Entrega, etc*/
    preco DECIMAL(15,2), 
    /*É importante armazenar o preço do produto no pedido, pois com o tempo
    o valor pode variar. Quando formos resgatar essa informação o que queremos
    é saber quanto o usuário pagou na data em que fez o pedido(e não o valor atual).*/
    quantidade SMALLINT,
    CONSTRAINT id_pedido_fk
    FOREIGN KEY (id_pedido) REFERENCES pedidos_usuarios(id_pedido),
    CONSTRAINT id_produto_fk
    FOREIGN KEY (id_produto) REFERENCES produtos(id_produto)
);


-- Tabela que armazena as avaliações dos produtos que podem ser realizadas pelos usuários.
CREATE TABLE avaliacoes_produtos(
    id_avaliacao INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_produto INT UNSIGNED NOT NULL,
    id_usuario INT UNSIGNED NOT NULL,
    avaliacao_text TEXT,
    avaliacao_nota TINYINT,
    CONSTRAINT id_produto_avaliacao_fk
    FOREIGN KEY (id_produto) REFERENCES produtos(id_produto),
    CONSTRAINT id_usuario_avaliacao_fk
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);