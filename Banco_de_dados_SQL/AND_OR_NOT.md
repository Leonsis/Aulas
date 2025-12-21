# AND OR NOT
	
AND = e | OR = ou | NOT = Não

```
SELECT * FROM customer
WHERE store_id = 1 AND active = 0;*/
```
Na quety acima estou usando o AND para adicionar mais uma condição 
Ou seja só vai aparecer se o store_id = 1 e active = 0.

```
SELECT * FROM payment
WHERE staff_id = 1 OR amount = 0.99;
```

Na quety acima estou usando o OR para adicionar mais uma condição 
Ou seja só vai aparecer quando o store_id = 1 ou active = 0.

```
SELECT * FROM payment
WHERE NOT staff_id = 1 AND NOT amount = 0.99 AND customer_id < 10;
```

Na quety acima estou usando o NOT para fazer uma negação na condicional 
Ou seja só vai aparecer somente quando o não store_id = 1 e não amount = 0.99 e customer_id < 10
