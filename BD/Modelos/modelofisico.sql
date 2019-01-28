/*php my admim*/
CREATE TABLE Projeto (
    codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(75),
    descicao varchar(288),
    fk_Fiador_codigo INT NOT NULL
);

CREATE TABLE Bolsista (
    matricula varchar(20) PRIMARY KEY,
    nome varchar(20),
    sobrenome varchar(20),
    fk_Projeto_codigo INT NOT NULL
);

CREATE TABLE Fiador (
    codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(30)
);

CREATE TABLE Coordenador (
    matricula varchar(20) PRIMARY KEY,
    nome varchar(20),
    sobrenome varchar(20),
    fk_Projeto_codigo INT NOT NULL
);

CREATE TABLE atividade (
    codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descricao varchar(288),
    data date,
    hora_inicio time,
    hora_fim time,
    fk_Projeto_codigo INT NOT NULL,
    fk_Bolsista_matricula varchar(20) NOT NULL
); 
 
ALTER TABLE Projeto ADD CONSTRAINT FK_Projeto_1
    FOREIGN KEY (fk_Fiador_codigo)
    REFERENCES Fiador (codigo)
    ON DELETE RESTRICT;
 
ALTER TABLE Bolsista ADD CONSTRAINT FK_Bolsista_1
    FOREIGN KEY (fk_Projeto_codigo)
    REFERENCES Projeto (codigo);
 
/*ALTER TABLE Fiador ADD CONSTRAINT FK_Fiador_1
    FOREIGN KEY (fk_Projeto_codigo)
    REFERENCES Projeto (codigo)
    ON DELETE RESTRICT;*/
 
ALTER TABLE Coordenador ADD CONSTRAINT FK_Coordenador_1
    FOREIGN KEY (fk_Projeto_codigo)
    REFERENCES Projeto (codigo)
    ON DELETE RESTRICT;
 
ALTER TABLE atividade ADD CONSTRAINT FK_atividade_1
    FOREIGN KEY (fk_Projeto_codigo)
    REFERENCES Projeto (codigo);
 
ALTER TABLE atividade ADD CONSTRAINT FK_atividade_2
    FOREIGN KEY (fk_Bolsista_matricula)
    REFERENCES Bolsista (matricula);