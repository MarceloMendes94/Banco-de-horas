insert into fiador(nome)values
    ('embrapii'),('polo vitoria'),('arcelor mittal'),('bnds'),('vale');

insert into orientador (matricula , nome , sobrenome , email , senha)values
    ('20111prf0235','Stannis','Baratheon'   ,'stanis@gmail.com','12345'),
    ('20151prf1546','Shireen','Baratheon'   ,'shireen@gmail.com','12345'),
    ('20102prf1111','Renly','Baratheon'     ,'renly@gmail.com','12345'),
    ('20102prf2222','Cersei','Lannister'    ,'cersei@gmail.com','12345'),
    ('20102prf3333','Robbert','Stark'       ,'robert@gmail.com','12345'),
    ('20102prf4444','Jorah','Mormont'       ,'jorah@gmail.com','12345');

insert into projeto (titulo, descricao,fk_fiador,fk_orientador)values
    ('banco de horas'                   ,'elaboração de uma bando de horas para registro de bolsistas'           ,2,1), 
    ('laminação de aço'                 ,'estudo sobre tecnicas de laminação'                                    ,3,2), 
    ('prospecção de projetos'           ,'elaboração de uma plataforma online de prospecção de projetos'         ,2,3), 
    ('residuos no ar'                   ,'um relatório da quatidade de minério pelos pontos da grande vitória'   ,1,4), 
    ('Relatório do uso EPI'             ,'pesquisa com empresas da grande vitória sobre acidentes no trabalho'   ,4,5), 
    ('Ferramenta de mineração de dados' ,'criação de um ferramenta de mineração de dados para compra de produtos',5,6);   

insert into bolsista (matricula, nome, sobrenome,email,senha)values
    ('20151bsi0436','marcelo','Mendes'      ,'marcelo@gmail.com','12345'),
    ('20162cat3256','eduardo','Faria'       ,'eduardo@gmail.com','12345'),
    ('20141eme4568','silvana','Porto'       ,'silvana@gmail.com','12345'),
    ('20152eme1597','eddard','Stark'        ,'eddard@gmail.com','12345'),
    ('20141bsi1234' ,'Robert','Baratheon'   ,'rovbert@gmail.com','12345'),
    ('20151eme5566' ,'Theon','Grejoy'       ,'theon@gmail.com','12345'),
    ('20111tpmi0314','Jaime','Lannister'    ,'jaime@gmail.com','12345'),
    ('20132bsi9856' ,'Tyrion','Lannister'   ,'tyrion@gmail.com','12345'),
    ('20081bsi0012' ,'Jhon','Snow'          ,'jhon@gmail.com','12345'),
    ('20171eme1235' ,'Arya','Stark'         ,'arya@gmail.com','12345'),
    ('20171eme3595' ,'Jofrey','Baratheon'   ,'joffrey@gmail.com','12345'),
    ('20181cat2564' ,'Ramsey','Bolton'      ,'ramsey@gmail.com','12345');
   
insert into atividade ( descricao, data , hora_inicio , hora_fim, fk_projeto, fk_bolsista)values
    /* bolsista 1*/
    ('elaboração de modelos'                    ,'2019-01-15','12:15:03','17:00:05',1,1),
    ('validando modelos com o orientador'       ,'2019-01-16','12:05:03','16:39:07',1,1),
    ('estudo de plataformas de interfca grafica','2019-01-17','12:35:03','16:49:05',1,1),
    ('desvolvimento do back-end'                ,'2019-01-18','12:15:03','17:00:05',1,1),
    ('Elaboração de uma API'                    ,'2019-01-19','11:55:03','16:00:05',1,1),
    /* bolsista 2*/
    ('validação de materiais'               ,'2019-01-15','12:05:03','15:00:05',2,2),
    ('prospecção de laborátorio'            ,'2019-01-16','12:05:03','16:39:07',2,2),
    ('realização de testes'                 ,'2019-01-17','12:35:03','16:49:19',2,2),
    ('conclusaão do feita sobre o resultado','2019-01-21','12:25:03','17:01:11',2,2),
    ('desvolvimento do relatório'           ,'2019-01-22','11:35:03','16:37:05',2,2),
    /*bolsista 3*/
    ('compra do material'                   ,'2019-01-14','12:05:03','15:00:05',2,3),
    ('validação com colega de projeto'      ,'2019-01-15','12:05:03','16:39:07',2,3),
    ('prospecção de laborátorio'            ,'2019-01-16','12:35:03','16:49:19',2,3),
    ('inicio do relatório'                  ,'2019-01-17','12:25:03','17:01:11',2,3),
    ('pesquisa bibliografica'               ,'2019-01-18','11:35:03','16:37:05',2,3),
    /* bolsista 4*/
    ('analise dos requisistos'                  ,'2019-01-15','11:55:13','16:46:55',1,4),
    ('finzalizando a documentação'              ,'2019-01-16','13:05:03','16:39:07',1,4),
    ('estudo de plataformas de interfca grafica','2019-01-17','12:05:47','16:49:05',1,4),
    ('desvolvimento do front-end'               ,'2019-01-18','12:37:03','17:00:49',1,4),
    ('estudo sobre formação de API'             ,'2019-01-19','11:34:16','16:36:15',1,4),
    /*bolsista 5*/
    ('analise dos requisistos'                  ,'2019-01-15','12:55:13','18:46:55',3,5),
    ('finzalizando a documentação'              ,'2019-01-16','13:05:03','18:38:07',3,5),
    ('estudo de plataformas de interfca grafica','2019-01-17','14:05:47','18:48:05',3,5),
    ('desvolvimento do front-end'               ,'2019-01-18','12:37:03','17:00:49',3,5),
    ('estudo sobre formação de API'             ,'2019-01-19','14:34:16','16:36:15',3,5),
    /*bolsista 6*/
    ('documentação inicial'             ,'2019-01-14','12:15:03','17:00:05',3,6),
    ('realização de casos de uso'       ,'2019-01-15','12:05:03','16:39:07',3,6),
    ('elaboração de mapas conceituais'  ,'2019-01-17','12:35:03','16:49:05',3,6),
    ('testes unitários '                ,'2019-01-18','12:15:03','17:00:05',3,6),
    ('pesquisa bibliografica'           ,'2019-01-19','11:55:03','16:00:05',3,6),
    /*bolsista 7*/
    ('esolha dos pontos de amostragem'  ,'2019-2019-02-04','12:15:03','17:00:05',4,7),
    ('captação de amostras'             ,'2019-2019-02-05','14:05:03','17:19:07',4,7),
    ('captação de amostras'             ,'2019-2019-02-06','13:35:03','16:09:05',4,7),
    ('captação de amostras'             ,'2019-2019-02-07','12:15:03','17:00:05',4,7),
    ('envio para laboratório'           ,'2019-02-08','13:15:03','16:00:05',4,7),
    /*bolsista 8*/
    ('esolha dos pontos de amostragem'  ,'2019-02-04','11:15:03','17:00:05',4,8),
    ('captação de amostras'             ,'2019-02-05','13:45:03','17:19:07',4,8),
    ('captação de amostras'             ,'2019-02-06','13:35:03','16:29:12',4,8),
    ('incio da documentção'             ,'2019-02-07','12:15:03','17:07:07',4,8),
    ('envio para laboratório'           ,'2019-02-08','13:15:03','16:00:05',4,8),
    /*bolsista 9*/
    ('pesquisa bibliográfica'       ,'2019-02-04','12:37:43','17:00:57',5,9),
    ('pesquisa bibliográfica'       ,'2019-02-05','13:07:35','17:19:47',5,9),
    ('pesquisa bibliográfica'       ,'2019-02-06','12:47:35','16:29:12',5,9),
    ('prospecção de valores de epi' ,'2019-02-07','12:38:03','17:03:00',5,9),
    ('compra de materiais'          ,'2019-02-08','12:29:03','16:00:05',5,9),
    /*bolsista 10*/
    ('contato com empresas e agendamento de visitas'    ,'2019-02-11','12:37:43','17:00:57',5,10),
    ('visita técnica'                                   ,'2019-02-12','13:07:35','17:19:47',5,10),
    ('visita técnica'                                   ,'2019-02-13','12:47:35','16:29:12',5,10),
    ('analise de resultados'                            ,'2019-02-14','12:38:03','17:03:00',5,10),
    ('inicio do relatório dos dados obtidos'            ,'2019-02-15','12:29:03','16:00:05',5,10),
    /*bolsista 11*/
    ('pesquisa bibliográfica'   ,'2019-01-15','11:21:11','16:31:01',6,11),
    ('pesquisa bibliográfica'   ,'2019-01-16','13:47:15','17:22:47',6,11),
    ('desenvolvimento de um API','2019-01-22','11:43:35','16:52:06',6,11),
    ('elaboração de software'   ,'2019-01-23','12:25:12','17:30:03',6,11),
    ('elaboração de software'   ,'2019-01-29','12:11:11','17:27:01',6,11),    
    /*bolsista 12*/
    ('pesquisa bibliográfica'   ,'2019-01-14','11:37:01','15:17:10',6,12),
    ('desenvolvimento de um API','2019-01-18','11:25:35','16:37:29',6,12),
    ('desenvolvimento de um API','2019-01-21','12:01:39','17:27:19',6,12),
    ('elaboração de software'   ,'2019-01-25','11:52:35','16:19:06',6,12),
    ('elaboração de software'   ,'2019-01-28','12:39:45','15:48:01',6,12);

/*estefano*/
insert into coordenador (nome, sobrenome,email,senha, matricula)values
('Estéfano','Aparecido Vieira','estefanovieira@ifes.edu.br','12345','011256');
