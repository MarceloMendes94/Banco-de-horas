/*php my admim*/
CREATE TABLE Projeto (
    codigo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(75),
    descricao varchar(288),
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
	
/*////*/

insert into Fiador(nome)values
    ('vale'),('polo vitoria'),('arcelor mittal'),('bnds'),('embrapii');

insert into Projeto (nome, descricao,fk_Fiador_codigo)values
('banco de horas'                   ,'elaboração de uma bando de horas para registro de bolsistas'           ,2), 
('laminação de aço'                 ,'estudo sobre tecnicas de laminação'                                    ,3), 
('prospecção de projetos'           ,'elaboração de uma plataforma online de prospecção de projetos'         ,2), 
('residuos no ar'                   ,'um relatório da quatidade de minério pelos pontos da grande vitória'   ,1), 
('Relatório do uso EPI'             ,'pesquisa com empresas da grande vitória sobre acidentes no trabalho'   ,4), 
('Ferramenta de mineração de dados' ,'criação de um ferramenta de mineração de dados para compra de produtos',5);

insert into Bolsista (matricula, nome, sobrenome,fk_Projeto_codigo)values
    ('20151bsi0436','marcelo','Mendes',1),
    ('20162cat3256','eduardo','Faria',2),
    ('20141eme4568','silvana','Porto',2),
    ('20152eme1597','eddard','Stark',1),
    ('20141bsi1234' ,'Robert','Baratheon',3),
    ('20151eme5566' ,'Theon','Grejoy',3),
    ('20111tpmi0314','Jaime','Lannister',4),
    ('20132bsi9856' ,'Tyrion','Lannister',4),
    ('20081bsi0012' ,'Jhon','Snow',5),
    ('20171eme1235' ,'Arya','Stark',5),
    ('20171eme3595' ,'Jofrey','Baratheon',6),
    ('20181cat2564' ,'Ramsey','Bolton',6);

insert into Coordenador (matricula, nome, sobrenome,fk_Projeto_codigo)values
    ('20111prf0235','Stannis','Baratheon',1),
    ('20151prf1546','Shireen','Baratheon',2),
    ('20102prf1111','Renly','Baratheon',3),
    ('20102prf2222','Cersei','Lannister',4),
    ('20102prf3333','Robbert','Stark',5),
    ('20102prf4444','Jorah','Mormont',6);
    
insert into atividade ( descricao, data , hora_inicio , hora_fim, fk_Projeto_codigo, fk_Bolsista_matricula)values
    /* bolsista 1*/
    ('elaboração de modelos'                    ,'2019-01-15','12:15:03','17:00:05',1,'20151bsi0436'),
    ('validando modelos com o orientador'       ,'2019-01-16','12:05:03','16:39:07',1,'20151bsi0436'),
    ('estudo de plataformas de interfca grafica','2019-01-17','12:35:03','16:49:05',1,'20151bsi0436'),
    ('desvolvimento do back-end'                ,'2019-01-18','12:15:03','17:00:05',1,'20151bsi0436'),
    ('Elaboração de uma API'                    ,'2019-01-19','11:55:03','16:00:05',1,'20151bsi0436'),
    /* bolsista 2*/
    ('validação de materiais'               ,'2019-01-15','12:05:03','15:00:05',2,'20162cat3256'),
    ('prospecção de laborátorio'            ,'2019-01-16','12:05:03','16:39:07',2,'20162cat3256'),
    ('realização de testes'                 ,'2019-01-17','12:35:03','16:49:19',2,'20162cat3256'),
    ('conclusaão do feita sobre o resultado','2019-01-21','12:25:03','17:01:11',2,'20162cat3256'),
    ('desvolvimento do relatório'           ,'2019-01-22','11:35:03','16:37:05',2,'20162cat3256'),
    /*bolsista 3*/
    ('compra do material'                   ,'2019-01-14','12:05:03','15:00:05',2,'20141eme4568'),
    ('validação com colega de projeto'      ,'2019-01-15','12:05:03','16:39:07',2,'20141eme4568'),
    ('prospecção de laborátorio'            ,'2019-01-16','12:35:03','16:49:19',2,'20141eme4568'),
    ('inicio do relatório'                  ,'2019-01-17','12:25:03','17:01:11',2,'20141eme4568'),
    ('pesquisa bibliografica'               ,'2019-01-18','11:35:03','16:37:05',2,'20141eme4568'),
    /* bolsista 4*/
    ('analise dos requisistos'                  ,'2019-01-15','11:55:13','16:46:55',1,'20152eme1597'),
    ('finzalizando a documentação'              ,'2019-01-16','13:05:03','16:39:07',1,'20152eme1597'),
    ('estudo de plataformas de interfca grafica','2019-01-17','12:05:47','16:49:05',1,'20152eme1597'),
    ('desvolvimento do front-end'               ,'2019-01-18','12:37:03','17:00:49',1,'20152eme1597'),
    ('estudo sobre formação de API'             ,'2019-01-19','11:34:16','16:36:15',1,'20152eme1597'),
    /*bolsista 5*/
    ('analise dos requisistos'                  ,'2019-01-15','12:55:13','18:46:55',3,'20141bsi1234'),
    ('finzalizando a documentação'              ,'2019-01-16','13:05:03','18:38:07',3,'20141bsi1234'),
    ('estudo de plataformas de interfca grafica','2019-01-17','14:05:47','18:48:05',3,'20141bsi1234'),
    ('desvolvimento do front-end'               ,'2019-01-18','12:37:03','17:00:49',3,'20141bsi1234'),
    ('estudo sobre formação de API'             ,'2019-01-19','14:34:16','16:36:15',3,'20141bsi1234'),
    /*bolsista 6*/
    ('documentação inicial'             ,'2019-01-14','12:15:03','17:00:05',3,'20151bsi0436'),
    ('realização de casos de uso'       ,'2019-01-15','12:05:03','16:39:07',3,'20151bsi0436'),
    ('elaboração de mapas conceituais'  ,'2019-01-17','12:35:03','16:49:05',3,'20151bsi0436'),
    ('testes unitários '                ,'2019-01-18','12:15:03','17:00:05',3,'20151bsi0436'),
    ('pesquisa bibliografica'           ,'2019-01-19','11:55:03','16:00:05',3,'20151bsi0436'),
    /*bolsista 7*/
    ('esolha dos pontos de amostragem'  ,'2019-2019-02-04','12:15:03','17:00:05',4,'20111tpmi0314'),
    ('captação de amostras'             ,'2019-2019-02-05','14:05:03','17:19:07',4,'20111tpmi0314'),
    ('captação de amostras'             ,'2019-2019-02-06','13:35:03','16:09:05',4,'20111tpmi0314'),
    ('captação de amostras'             ,'2019-2019-02-07','12:15:03','17:00:05',4,'20111tpmi0314'),
    ('envio para laboratório'           ,'2019-02-08','13:15:03','16:00:05',4,'20111tpmi0314'),
    /*bolsista 8*/
    ('esolha dos pontos de amostragem'  ,'2019-02-04','11:15:03','17:00:05',4,'20132bsi9856'),
    ('captação de amostras'             ,'2019-02-05','13:45:03','17:19:07',4,'20132bsi9856'),
    ('captação de amostras'             ,'2019-02-06','13:35:03','16:29:12',4,'20132bsi9856'),
    ('incio da documentção'             ,'2019-02-07','12:15:03','17:07:07',4,'20132bsi9856'),
    ('envio para laboratório'           ,'2019-02-08','13:15:03','16:00:05',4,'20132bsi9856'),
    /*bolsista 9*/
    ('pesquisa bibliográfica'       ,'2019-02-04','12:37:43','17:00:57',5,'20081bsi0012'),
    ('pesquisa bibliográfica'       ,'2019-02-05','13:07:35','17:19:47',5,'20081bsi0012'),
    ('pesquisa bibliográfica'       ,'2019-02-06','12:47:35','16:29:12',5,'20081bsi0012'),
    ('prospecção de valores de epi' ,'2019-02-07','12:38:03','17:03:00',5,'20081bsi0012'),
    ('compra de materiais'          ,'2019-02-08','12:29:03','16:00:05',5,'20081bsi0012'),
    /*bolsista 10*/
    ('contato com empresas e agendamento de visitas'    ,'2019-02-11','12:37:43','17:00:57',5,'20171eme1235'),
    ('visita técnica'                                   ,'2019-02-12','13:07:35','17:19:47',5,'20171eme1235'),
    ('visita técnica'                                   ,'2019-02-13','12:47:35','16:29:12',5,'20171eme1235'),
    ('analise de resultados'                            ,'2019-02-14','12:38:03','17:03:00',5,'20171eme1235'),
    ('inicio do relatório dos dados obtidos'            ,'2019-02-15','12:29:03','16:00:05',5,'20171eme1235'),
    /*bolsista 11*/
    ('pesquisa bibliográfica'   ,'2019-01-15','11:21:11','16:31:01',6,'20171eme3595'),
    ('pesquisa bibliográfica'   ,'2019-01-16','13:47:15','17:22:47',6,'20171eme3595'),
    ('desenvolvimento de um API','2019-01-22','11:43:35','16:52:06',6,'20171eme3595'),
    ('elaboração de software'   ,'2019-01-23','12:25:12','17:30:03',6,'20171eme3595'),
    ('elaboração de software'   ,'2019-01-29','12:11:11','17:27:01',6,'20171eme3595'),    
    /*bolsista 12*/
    ('pesquisa bibliográfica'   ,'2019-01-14','11:37:01','15:17:10',6,'20181cat2564'),
    ('desenvolvimento de um API','2019-01-18','11:25:35','16:37:29',6,'20181cat2564'),
    ('desenvolvimento de um API','2019-01-21','12:01:39','17:27:19',6,'20181cat2564'),
    ('elaboração de software'   ,'2019-01-25','11:52:35','16:19:06',6,'20181cat2564'),
    ('elaboração de software'   ,'2019-01-28','12:39:45','15:48:01',6,'20181cat2564');