# WHERE
Com o comando `WHERE`, podemos filtra qual quer linha de acordo com o dado, por exemplo.
<br>
Com `SELECT actor_id, first_name, last_name FROM actor`, vai aparecer todas as linhas, das colunas `actor_id`, `first_name` e `last_name`, da tabela `actor`.
<br>
Usando o `WHERE`(Onde) `actor_id = 100`, vai aparecer, `actor_id`, `first_name` e `last_name`, da tabela `actor` na qual o `actor_id` é igual a 100. Então o comando vai ficar da seguinte forma:

```
SELECT actor_id, first_name, last_name
FROM actor
WHERE actor_id = 100;
```