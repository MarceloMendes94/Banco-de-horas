# Progehpe:  Projeto de getenciamento de horas do Polo Embrapii
Trabalho desenvolvido por uma bolsa de iniciação científica, junto ao polo de inovação vitória, que fica localizado no campus Ifes campus Vitória.

# Sumário

### 1. COMPONENTES<br>
Integrantes do grupo<br>
Marcelo Passamai Mendes : marceloestudoifes@gmail.com<br>

### 2.INTRODUÇÃO E MOTIVAÇAO<br>
Os pólos Embrapii são centros tecnológicos que tem a missão de atender demandas de pesquisa do setor produtivo.
Atualmente o pólo de inovação Vitória, que fica localizado dentro do IFES Campus Vitória esta vinculado a Embrapii.
O processo de contabilização de horas das bolsas de iniciação científica do pólo de inovação Vitória é feito de forma manual, com um relatório feito em papel.
Segundo o representante do pólo há uma necessidade de tornar esse porcesso Online, com um pequeno sistema de bando de horas,
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
Em casos de projetos financiados 100% pelo **Pólo de inovação.**
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
  
![modelo](https://github.com/MarceloMendes94/trab01/blob/master/modelo/imagem_modelo_conceitual.PNG)  



![notação UML](https://github.com/MarceloMendes94/trab01/blob/master/modelo/diagrama_de_classe.PNG)  

#### 5.2 DECISÕES DE PROJETO
  

#### 5.3 DESCRIÇÃO DOS DADOS 

1. tabela funcao <br>

| campo | descrição |
|----|----|
| codigo | numero que representa uma função desempenhada |
| nome | nome de uma função dentro de um projeto |

2. tabela pessoa <br>

| campo | descrição |
|----|----|
| matricula | valor da matricula do acadêmico, chave primaria |
| nome | primeiro nome da pessoa |
| sobrenome | sobrenome da pessoa |
| cpf | valor do cpf da pessoa |
| horas | numero de horas trabalhadas dem IC valor máximo 20 horas |

``` a tabela pessoa precisa de uma chave estrageira para receber função ```

3. tabela tarefa <br>

| campo | descrição |
|----|----|
| id_ registro | chave primaria para registro de atividades |
| dia | data da atividade realizada |
| hora_inicio | horario do começo das atividades |
| hora_fim | horario do fim atividades |
| descrição | o que foi feito na atividade |
| autor | chave estrageira com a matricula de quem realizou a atividade |

4. tabela projeto <br>

| campo | descrição |
|----|----|
| idenficador | chave primaria que identifica o projeto |
| nome | nome do projeto |
| descricao | descriçaõ breve do projeto |
| fiador | chave estrangeira com dado refente a quem financiou o projeto |

5. tabela finacimento <br>

| campo | descrição |
|----|----|
| codigo | chave primária refente ao  fiador |
| nome | nome do fiador |	

### 6	MODELO LÓGICO<br>


### 7	MODELO FÍSICO<br>
          
        
### 8	INSERT APLICADO NAS TABELAS DO BANCO DE DADOS<br>
#### 8.1 DETALHAMENTO DAS INFORMAÇÕES
        Detalhamento sobre as informações e processo de obtenção ou geração dos dados.
        Referenciar todas as fontes referentes a :
        a) obtenção dos dados
        b) obtenção de códigos reutilizados
        c) fontes de estudo para desenvolvimento do projeto


#### 8.2 INCLUSÃO DO SCRIPT DE INSERÇÃO DOS DADOS
        a) inclusão das instruções de inserção dos dados nas tabelas criadas pelo script de modelo físico
        b) inclusão das instruções para execução de outros procedimentos necessários (caso existam)
        c) formato .SQL

#### 8.3 INCLUSÃO DO SCRIPT PARA CRIAÇÃO DE TABELA E INSERÇÃO DOS DADOS
        a) Junção dos scripts anteriores em um único script 
        (tabelas e estruturas de dados + dados a serem inseridos)
        b) Criar um novo banco de dados para testar a restauracao 
        (em caso de falha na restauração o grupo não pontuará neste quesito)
        c) formato .SQL
        

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
### 11	TUTORIAL COMPLETO DE PASSOS PARA RESTAURACAO DO BANCO E EXECUCAO DE PROCEDIMENTOS ENVOLVIDOS NO TRABALHO PARA OBTENÇÃO DOS RESULTADOS<br>
        a) Outros grupos deverão ser capazes de restaurar o banco 
        b) executar todas as consultas presentes no trabalho
        c) executar códigos que tenham sido construídos para o trabalho 
        d) realizar qualquer procedimento executado pelo grupo que desenvolveu o trabalho
        
### 12   DIFICULDADES ENCONTRADAS PELO GRUPO<br>
### 13   TRABALHO DE MINERAÇÃO DE DADOS
        a) captura das informaçõs
        b) integração com banco de dados em desenvolvimento
        c) atualização da documentação do trabalho incluindo a mineração de dados
        
### 13  FORMATACAO NO GIT: https://help.github.com/articles/basic-writing-and-formatting-syntax/

### 14 Backup completo do banco de dados postgres 
    a) deve ser realizado no formato "backup" 
        (Em Dump Options #1 Habilitar opções Don't Save Owner e Privilege)
    b) antes de postar o arquivo no git o mesmo deve ser testado/restaurado por outro grupo de alunos/dupla
    c) informar aqui o grupo de alunos/dupla que realizou o teste.
    
### OBSERVAÇÕES IMPORTANTES

#### Todos os arquivos que fazem parte do projeto (Imagens, pdfs, arquivos fonte, etc..), devem estar presentes no GIT. Os arquivos do projeto vigente não devem ser armazenados em quaisquer outras plataformas.
1. Caso existam arquivos com conteúdos sigilosos, comunicar o professor que definirá em conjunto com o grupo a melhor forma de armazenamento do arquivo.

#### Todos os grupos deverão fazer Fork deste repositório e dar permissões administrativas ao usuário deste GIT, para acompanhamento do trabalho.

#### Os usuários criados no GIT devem possuir o nome de identificação do aluno (não serão aceitos nomes como Eu123, meuprojeto, pro456, etc). Em caso de dúvida comunicar o professor.


Link para BrModelo:<br>
http://sis4.com/brModelo/brModelo/download.html
