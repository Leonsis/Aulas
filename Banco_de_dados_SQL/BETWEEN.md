# BETWEEN
Com o BETWEEN é possivel fazer mais um filtro de pesquisa, o BETWEEN seria um entre;

```
SELECT * 
FROM payment
WHERE amount BETWEEN 1.99 AND 3.99;
```
Então na query acima estou pesquisando todos das linas da tabela payment onde o valor de amount está entre(BETWEEN) 1.99 e 3.99, incluindo os valores citado.