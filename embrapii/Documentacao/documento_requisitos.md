# DOCUMENTO DE REQUISITOS.
## Minimundo<br> 
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
 
## Diagrama de classe<br>
![diagrama de classes](../imagens/diagrama_de_classes.jpg)

## Requisitos funcionais<br>

## Requisitos não funcionais<br>

## Regras de negócio<br> 

## Diagrama de casos de uso<br>  
```
Foram identificados 3 atores no sistemas
1. Bolsista 
2. Coordenador do polo
3. Orientador do projeto
```
1. Casos de uso geral<br> 
![Casos de uso Geral](../imagens/casos_de_uso_geral.jpg)
<br><br><br>
2. Casos de uso do bolsista<br>
![Casos de uso Bolsista](../imagens/casos_de_uso_bolsista.jpg)
<br><br><br>
3. Casos de uso do coordenador do polo<br>
![Casos de uso Coordenador](../imagens/casos_de_uso_coordenador.jpg)
<br><br><br>
4. Casos de uso do orientador do projeto<br>   
![Casos de uso Orientador](../imagens/orientador.jpg)
<br><br><br>