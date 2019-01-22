insert into Fiador(nome)values(
    ("vale"),("polo vitoria"),("arcelor mittal"),("bnds"),("embrapii"));

insert into Projeto (nome, descricao,fk_Fiador_codigo serial)values
(   ("banco de horas","elaboração de uma bando de horas        para registro de bolsistas",2),
 
    ("laminação de aço","estudo sobre tecnicas de laminação",3),
 
    ("prospecção de projetos","elaboração de uma plataforma online de prospecção de projtos",2),
 
    ("residuos no ar","um relatório da quatidade de minério pelos pontos da grande vitória",1),
 
    ("Relatório do uso EPI","pesquisa com empresas da grande vitória sobre acidentes no trabalho",4),
 
    ("Ferramenta de mineração de dados","criação de um ferramenta de mineração de dados para compra de produtos",5) );

insert into Bolsista (matricula, nome, sobrenome)values(
    ("20151bsi0436","marcelo","Mendes",1),
    ("20162cat3256","eduardo","Faria",2),
    ("20141eme4568","silvana","Porto",2),
    ("20152eme1597","eddard","Stark",1),
    ("20141bsi"     ,"Robert","Baratheon",3),
    ("20151eme5566" ,"Theon","Grejoy",3),
    ("20111tpmi0314","Jaime","Lannister",4),
    ("20132bsi9856" ,"Tyrion","Lannister",4),
    ("20081bsi0012" ,"Jhon","Snow",5),
    ("20171eme1235" ,"Arya","Stark",5),
    ("20171eme3595" ,"Jofrey","Baratheon",6),
    ("20181cat2564" ,"Ramsey","Bolton",6)
);

insert into Coordenador (matricula, nome, sobrenome)values(
    ("20111prf0235","Stannis","Baratheon",1),
    ("20151prf1546","Shireen","Baratheon",2),
    ("20102prf1111","Renly","Baratheon",3),
    ("20102prf2222","Cersei","Lannister",4),
    ("20102prf3333","Robbert","Stark",5),
    ("20102prf4444","Jorah","Mormont",6)
);
    
    




