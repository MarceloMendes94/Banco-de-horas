insert into Fiador(nome)values
    ('vale'),('polo vitoria'),('arcelor mittal'),('bnds'),('embrapii');

insert into Projeto (nome, descicao,fk_Fiador_codigo)values
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
    ('elaboração de modelos'                    ,'01-15-2019','12:15:03','17:00:05',1,'20151bsi0436'),
    ('validando modelos com o orientador'       ,'01-16-2019','12:05:03','16:39:07',1,'20151bsi0436'),
    ('estudo de plataformas de interfca grafica','01-17-2019','12:35:03','16:49:05',1,'20151bsi0436'),
    ('desvolvimento do back-end'                ,'01-18-2019','12:15:03','17:00:05',1,'20151bsi0436'),
    ('Elaboração de uma API'                    ,'01-19-2019','11:55:03','16:00:05',1,'20151bsi0436'),
    /* bolsista 2*/
    ('validação de materiais'               ,'01-15-2019','12:05:03','15:00:05',2,'20162cat3256'),
    ('prospecção de laborátorio'            ,'01-16-2019','12:05:03','16:39:07',2,'20162cat3256'),
    ('realização de testes'                 ,'01-17-2019','12:35:03','16:49:19',2,'20162cat3256'),
    ('conclusaão do feita sobre o resultado','01-21-2019','12:25:03','17:01:11',2,'20162cat3256'),
    ('desvolvimento do relatório'           ,'01-22-2019','11:35:03','16:37:05',2,'20162cat3256'),
    /*bolsista 3*/
    ('compra do material'                   ,'01-14-2019','12:05:03','15:00:05',2,'20141eme4568'),
    ('validação com colega de projeto'      ,'01-15-2019','12:05:03','16:39:07',2,'20141eme4568'),
    ('prospecção de laborátorio'            ,'01-16-2019','12:35:03','16:49:19',2,'20141eme4568'),
    ('inicio do relatório'                  ,'01-17-2019','12:25:03','17:01:11',2,'20141eme4568'),
    ('pesquisa bibliografica'               ,'01-18-2019','11:35:03','16:37:05',2,'20141eme4568'),
    /* bolsista 4*/
    ('analise dos requisistos'                  ,'01-15-2019','11:55:13','16:46:55',1,'20152eme1597'),
    ('finzalizando a documentação'              ,'01-16-2019','13:05:03','16:39:07',1,'20152eme1597'),
    ('estudo de plataformas de interfca grafica','01-17-2019','12:05:47','16:49:05',1,'20152eme1597'),
    ('desvolvimento do front-end'               ,'01-18-2019','12:37:03','17:00:49',1,'20152eme1597'),
    ('estudo sobre formação de API'             ,'01-19-2019','11:34:16','16:36:15',1,'20152eme1597'),
    /*bolsista 5*/
    ('analise dos requisistos'                  ,'01-15-2019','12:55:13','18:46:55',3,'20141bsi1234'),
    ('finzalizando a documentação'              ,'01-16-2019','13:05:03','18:38:07',3,'20141bsi1234'),
    ('estudo de plataformas de interfca grafica','01-17-2019','14:05:47','18:48:05',3,'20141bsi1234'),
    ('desvolvimento do front-end'               ,'01-18-2019','12:37:03','17:00:49',3,'20141bsi1234'),
    ('estudo sobre formação de API'             ,'01-19-2019','14:34:16','16:36:15',3,'20141bsi1234'),
    /*bolsista 6*/
    ('documentação inicial'             ,'01-14-2019','12:15:03','17:00:05',3,'20151bsi0436'),
    ('realização de casos de uso'       ,'01-15-2019','12:05:03','16:39:07',3,'20151bsi0436'),
    ('elaboração de mapas conceituais'  ,'01-17-2019','12:35:03','16:49:05',3,'20151bsi0436'),
    ('testes unitários '                ,'01-18-2019','12:15:03','17:00:05',3,'20151bsi0436'),
    ('pesquisa bibliografica'           ,'01-19-2019','11:55:03','16:00:05',3,'20151bsi0436'),
    /*bolsista 7*/
    ('esolha dos pontos de amostragem'  ,'02-04-2019','12:15:03','17:00:05',4,'20111tpmi0314'),
    ('captação de amostras'             ,'02-05-2019','14:05:03','17:19:07',4,'20111tpmi0314'),
    ('captação de amostras'             ,'02-06-2019','13:35:03','16:09:05',4,'20111tpmi0314'),
    ('captação de amostras'             ,'02-07-2019','12:15:03','17:00:05',4,'20111tpmi0314'),
    ('envio para laboratório'           ,'02-08-2019','13:15:03','16:00:05',4,'20111tpmi0314'),
    /*bolsista 8*/
    ('esolha dos pontos de amostragem'  ,'02-04-2019','11:15:03','17:00:05',4,'20132bsi9856'),
    ('captação de amostras'             ,'02-05-2019','13:45:03','17:19:07',4,'20132bsi9856'),
    ('captação de amostras'             ,'02-06-2019','13:35:03','16:29:12',4,'20132bsi9856'),
    ('incio da documentção'             ,'02-07-2019','12:15:03','17:07:07',4,'20132bsi9856'),
    ('envio para laboratório'           ,'02-08-2019','13:15:03','16:00:05',4,'20132bsi9856'),
    /*bolsista 9*/
    ('pesquisa bibliográfica'       ,'02-04-2019','12:37:43','17:00:57',5,'20081bsi0012'),
    ('pesquisa bibliográfica'       ,'02-05-2019','13:07:35','17:19:47',5,'20081bsi0012'),
    ('pesquisa bibliográfica'       ,'02-06-2019','12:47:35','16:29:12',5,'20081bsi0012'),
    ('prospecção de valores de epi' ,'02-07-2019','12:38:03','17:03:00',5,'20081bsi0012'),
    ('compra de materiais'          ,'02-08-2019','12:29:03','16:00:05',5,'20081bsi0012'),
    /*bolsista 10*/
    ('contato com empresas e agendamento de visitas'    ,'02-11-2019','12:37:43','17:00:57',5,'20171eme1235'),
    ('visita técnica'                                   ,'02-12-2019','13:07:35','17:19:47',5,'20171eme1235'),
    ('visita técnica'                                   ,'02-13-2019','12:47:35','16:29:12',5,'20171eme1235'),
    ('analise de resultados'                            ,'02-14-2019','12:38:03','17:03:00',5,'20171eme1235'),
    ('inicio do relatório dos dados obtidos'            ,'02-15-2019','12:29:03','16:00:05',5,'20171eme1235'),
    /*bolsista 11*/
    ('pesquisa bibliográfica'   ,'01-15-2019','11:21:11','16:31:01',6,'20171eme3595'),
    ('pesquisa bibliográfica'   ,'01-16-2019','13:47:15','17:22:47',6,'20171eme3595'),
    ('desenvolvimento de um API','01-22-2019','11:43:35','16:52:06',6,'20171eme3595'),
    ('elaboração de software'   ,'01-23-2019','12:25:12','17:30:03',6,'20171eme3595'),
    ('elaboração de software'   ,'01-29-2019','12:11:11','17:27:01',6,'20171eme3595'),    
    /*bolsista 12*/
    ('pesquisa bibliográfica'   ,'01-14-2019','11:37:01','15:17:10',6,'20181cat2564'),
    ('desenvolvimento de um API','01-18-2019','11:25:35','16:37:29',6,'20181cat2564'),
    ('desenvolvimento de um API','01-21-2019','12:01:39','17:27:19',6,'20181cat2564'),
    ('elaboração de software'   ,'01-25-2019','11:52:35','16:19:06',6,'20181cat2564'),
    ('elaboração de software'   ,'01-28-2019','12:39:45','15:48:01',6,'20181cat2564');
    


