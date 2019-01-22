CREATE TABLE Projeto (
    codigo serial PRIMARY KEY,
    nome varchar(75),
    descicao varchar(288),
    fk_Fiador_codigo serial/*,
    fk_Bolsista_matricula varchar(20),
    fk_Coordenador_matricula varchar(20)*/
);

CREATE TABLE Bolsista (
    matricula varchar(20) PRIMARY KEY,
    nome varchar(20),
    sobrenome varchar(20),
    fk_Projeto_codigo serial
);

CREATE TABLE Fiador (
    codigo serial PRIMARY KEY,
    nome vachar(30)
);

CREATE TABLE Coordenador (
    matricula varchar(20) PRIMARY KEY,
    nome varchar(20),
    sobrenome varchar(20),
    fk_Projeto_codigo serial
);

CREATE TABLE atividade (
    codigo serial PRIMARY KEY,
    descricao varchar(288),
    data date,
    hora_inicio time,
    hora_fim time,
    fk_Projeto_codigo serial,
    fk_Bolsista_matricula varchar(20)
);
 
/*ALTER TABLE Projeto ADD CONSTRAINT FK_Projeto_1
    FOREIGN KEY (fk_Bolsista_matricula)
    REFERENCES Bolsista (matricula)
    ON DELETE RESTRICT;*/
 
ALTER TABLE Projeto ADD CONSTRAINT FK_Projeto_2
    FOREIGN KEY (fk_Fiador_codigo)
    REFERENCES Fiador (codigo)
    ON DELETE RESTRICT;
 
/*ALTER TABLE Projeto ADD CONSTRAINT FK_Projeto_3
    FOREIGN KEY (fk_Coordenador_matricula)
    REFERENCES Coordenador (matricula)
    ON DELETE RESTRICT;*/
 
ALTER TABLE Bolsista ADD CONSTRAINT FK_Bolsista_1
    FOREIGN KEY (fk_atividade_codigo)
    REFERENCES atividade (codigo)
    ON DELETE RESTRICT;
 
ALTER TABLE Bolsista ADD CONSTRAINT FK_Bolsista_2
    FOREIGN KEY (fk_Projeto_codigo)
    REFERENCES Projeto (codigo);
 
ALTER TABLE Fiador ADD CONSTRAINT FK_Fiador_1
    FOREIGN KEY (fk_Projeto_codigo)
    REFERENCES Projeto (codigo)
    ON DELETE RESTRICT;
 
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