/* loógico_novo: NOT NULL AUTO_INCREMENT */
/* loógico_novo: */

CREATE TABLE coordenador (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50),
    sobrenome varchar(75),
    email varchar(100),
    senha varchar(50),
    matricula varchar(25)
);

CREATE TABLE orientador (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50),
    sobrenome varchar(75),
    email varchar(100),
    senha varchar(50),
    matricula varchar(25)
);

CREATE TABLE bolsista (
    id  int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50),
    sobrenome varchar(75),
    email varchar(100),
    senha varchar(50),
    matricula varchar(25)
);

CREATE TABLE atividade (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descricao varchar(244) ,
    data DATE,
    hora_inicio TIME,
    hora_fim TIME,
    validacao int ,
    fk_bolsista int,
    fk_projeto int
);

CREATE TABLE projeto (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo varchar(100),
    descricao varchar(300),
    fk_orientador int,
    fk_fiador int
);

CREATE TABLE fiador (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50)
);
 
ALTER TABLE atividade ADD CONSTRAINT FK_atividade_2
    FOREIGN KEY (fk_projeto)
    REFERENCES projeto (id);
 
ALTER TABLE atividade ADD CONSTRAINT FK_atividade_3
    FOREIGN KEY (fk_bolsista)
    REFERENCES bolsista (id );
 
ALTER TABLE projeto ADD CONSTRAINT FK_projeto_1
    FOREIGN KEY (fk_orientador)
    REFERENCES orientador (id);
 
ALTER TABLE projeto ADD CONSTRAINT FK_projeto_2
    FOREIGN KEY (fk_fiador)
    REFERENCES fiador (id);