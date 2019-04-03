# Projeto de Iniciação científica:  Projeto de gerenciamento de horas do Polo Embrapii
Trabalho desenvolvido por uma bolsa de iniciação científica, junto ao polo de inovação vitória, que fica localizado no campus Ifes campus Vitória.

# Sumário

### 1. COMPONENTES<br>
Integrantes do grupo<br>
Marcelo Passamai Mendes : marceloestudoifes@gmail.com<br>

### 2.INTRODUÇÃO E MOTIVAÇAO<br>
Os pólos Embrapii são centros tecnológicos que tem a missão de atender demandas de pesquisa do setor produtivo.
Atualmente o pólo de inovação Vitória, que fica localizado dentro do IFES Campus Vitória esta vinculado a Embrapii.
O processo de contabilização de horas das bolsas de iniciação científica do pólo de inovação Vitória é feito de forma manual, com um relatório feito em papel.
Segundo o representante do pólo há uma necessidade de tornar esse porcesso Online, com um pequeno sistema de banco de horas,
para esse fim foi criado junto a CAPES um processo de iniciação científica para resolver essa demanda. 

    
### 3.MINI-MUNDO<br>

Em entrevista com um representante do pólo Embrapii de inovação no campus vitória, foi relatado a necessidade criação de uma solução para o problema de registro de horas e atividades feitas pelos bolsistas e pesquisadores.
Atualmente existe um problema citado por ele, o relatório possui muitos dados irrelevantes ao sistema ele gostaria de ao final de uma iniciação gerar um relatório com os seguintes dados.   

|Nome bolsista| descrição da atividade| data | hora inicio | hora fim | total de horas|
|----|----|----|----|----|----|
| Marcelo Passamai Mendes | Elaboração de um sistema web para o polo embrapii | 13/12/2018 | 12:30 | 17:00 | 4h 30m |


Os projetos podem ser financiados pela Embrapii ou pelo Pólo de inovação.
Em casos de projetos financiados pela **Embrapii.** 
```
Mínimo de 2 Bolsistas vinculados a quaisquer universidade ou escola técnina do Brasil.
1 Coordenador Responsável credenciado pelo pólo vitória, com horas alocadas dentro do campus vitória.
Pesquisador Somente se for do IFES e com horas alocadas no campus vitória. 
```
Em casos de projetos financiados 100% pelo **Polo de inovação.**
```
Mínimo de 2 Bolsistas vinculados a quaisquer universidade ou escola técnina do Brasil
ou qualquer estudando sem vinculado  empregatício.
O coordenador Deve ser do IFES mas pode ser de qualquer campus.
Pesquisadores Servidores podem ser qualquer um desde que possam se dedicar ao projeto.
```
cada projeto deve ter :
1 coordenador, no mínimo 2 bolsistas e pesquisador é opcional. 
cada coordenador, bolsista e pesquisador podem fazer infinitos projetos desde que não passe de 20 horas.
 

### 4.RASCUNHOS BÁSICOS DA INTERFACE (MOCKUPS)<br>
Neste ponto a codificação não e necessária, somente as ideias de telas devem ser criadas, o princípio aqui é pensar na criação da interface para identificar possíveis informações a serem armazenadas ou descartadas <br>

Software: https://balsamiq.com/products/mockups/<br>
captura de Tela<br>

#### 4.1 TABELA DE DADOS DO SISTEMA:


### 5.MODELO CONCEITUAL<br>
  
![modelo](https://github.com/MarceloMendes94/Banco-de-horas/blob/master/BD/Modelos/modelo_conceitual_imagem.PNG)  

![notação UML](https://github.com/MarceloMendes94/Banco-de-horas/blob/master/An%C3%A1lise/digrama%20de%20classes.PNG)  

#### 5.2 DOCUMENTO DE REQUISISTOS

![Documentos de Requisistos](https://github.com/MarceloMendes94/Banco-de-horas/tree/master/)

#### 5.3 DECISÕES DE PROJETO
  

#### 5.4 DESCRIÇÃO DOS DADOS 



### 6	MODELO LÓGICO<br>

![modelo lógico](https://github.com/MarceloMendes94/Banco-de-horas/blob/master/BD/Modelos/modelo_logico_imagem.PNG)

### 7	MODELO FÍSICO<br>

![modelo físico](https://github.com/MarceloMendes94/Banco-de-horas/blob/master/BD/Modelos/modelo_fisico.sql)         
        
### 8	INSERT APLICADO NAS TABELAS DO BANCO DE DADOS<br>
#### 8.1 DETALHAMENTO DAS INFORMAÇÕES
[script criação do banco](https://github.com/MarceloMendes94/Banco-de-horas/blob/master/BD/script/create.sql)


#### 8.2 INCLUSÃO DO SCRIPT DE INSERÇÃO DOS DADOS

[scritp insert](https://github.com/MarceloMendes94/Banco-de-horas/blob/master/BD/script/insert.sql)

#### 8.3 INCLUSÃO DO SCRIPT PARA CRIAÇÃO DE TABELA E INSERÇÃO DOS DADOS
[scritp de criação e inserção](https://github.com/MarceloMendes94/Banco-de-horas/blob/master/BD/script/create%20insert.sql)
        

### 9	TABELAS E PRINCIPAIS CONSULTAS<br>
    OBS: Incluir para cada tópico as instruções SQL + imagens (print da tela) mostrando os resultados.<br>
#### 9.1	CONSULTAS DAS TABELAS COM TODOS OS DADOS INSERIDOS (Todas) <br>
#### 9.2	CONSULTAS DAS TABELAS COM FILTROS WHERE (Mínimo 3)<br>
#### 9.3	CONSULTAS QUE USAM OPERADORES LÓGICOS, ARITMÉTICOS E CAMPOS RENOMEADOS (Mínimo 2)<br>
#### 9.4	CONSULTAS QUE USAM OPERADORES LIKE (Mínimo 3) <br>
    Entrega até este ponto em: (14/06/2017)
#### 9.5	ATUALIZAÇÃO E EXCLUSÃO DE DADOS (Mínimo 6)<br>
#### 9.6	CONSULTAS COM JUNÇÃO E ORDENAÇÃO (Todas Junções)<br>
        Entrega até este ponto em: (Data a ser definida)
#### 9.7	CONSULTAS COM GROUP BY (Mínimo 5)<br>
#### 9.8	CONSULTAS COM LEFT E RIGHT JOIN (Mínimo 4)<br>
#### 9.9	CONSULTAS COM SELF JOIN E VIEW (Todas Possíveis)<br>
#### 9.10	SUBCONSULTAS (Mínimo 3)<br>
### 10	ATUALIZAÇÃO DA DOCUMENTAÇÃO DOS SLIDES PARA APRESENTAÇAO FINAL (Mínimo 6 e Máximo 10)<br>

