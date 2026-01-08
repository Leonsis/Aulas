# LIKE

Com o LIKE é possivel fazer uma pesquisa ainda mais especifica

```
SELECT * 
	FROM actor
    WHERE first_name LIKE 'A%'
```

Na queri assima, está selecionando todas as colunas da table actor, onde o first_name começa apartir do A/a
E para que seja possivel retornar os first_name que termina com a seria '%a'