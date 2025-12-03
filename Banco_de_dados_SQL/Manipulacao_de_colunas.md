# Manipulado dados das colunas
É possivel cria uma nova coluna com dados manipulados de outras colunas.
E suando o `AS` podemos dar nome a essas novas colunas.
<br>
Por exemplo, nesta query estamos fazendo um `SELECT`  das colunas customer_id, amount. Onde o customer_id e igual a 1;
```
SELECT 
	customer_id, 
    amount
FROM payment
WHERE customer_id = 1;
```
<br>
Agora eu vou cirar uma nova coluna na qual vou pedar os dados do amount e aplicar um desconto:
    
```
SELECT 
	customer_id, 
    amount
    amount - (amount * 5) AS '10% Desconto'
FROM payment
WHERE customer_id = 1;
```
Na query de cima tem a seguinte linha `amount - (amount * 5) AS '10% Desconto'`, com o `AS` estou dando nome a nova coluna no qual estou manipulando os dados da coluna amount.