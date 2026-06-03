# Estrutura de uma Página Web

## Introdução

Uma página web é estruturada em diferentes seções, cada uma com um propósito específico. As principais estruturas são o `<head>` e o `<body>`, além de elementos fundamentais como o `<!DOCTYPE>` e a tag `<html>`.

---

## Elementos Principais

### 1. DOCTYPE
```html
<!DOCTYPE html>
```
Declara o tipo de documento, informando ao navegador que se trata de um arquivo HTML5.

### 2. Tag HTML
```html
<html lang="pt-BR">
```
Define o elemento raiz do documento e encapsula todo o conteúdo HTML. O atributo `lang` especifica o idioma da página.

### 3. Head (Cabeçalho)
```html
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Página</title>
</head>
```

O `<head>` contém **metadados** e informações sobre a página que **não são exibidas diretamente ao usuário**, incluindo:

- **`<title>`** - Título que aparece na aba do navegador (único elemento visível do head para o usuário)
- **`<meta charset="UTF-8">`** - Define a codificação de caracteres (permite acentos e caracteres especiais)
- **`<meta viewport>`** - Configura a responsividade para dispositivos móveis

### 4. Body (Corpo)
```html
<body>
    <!-- Todo o conteúdo visível aqui -->
</body>
```

O `<body>` contém todas as **informações que serão exibidas ao usuário**, como textos, imagens, links, etc.

---

## Meta Tags

Meta tags são elementos informativos adicionais. Alguns exemplos comuns:

| Tag | Função |
|-----|--------|
| `<meta charset="UTF-8">` | Define codificação de caracteres |
| `<meta name="viewport">` | Configura visualização em dispositivos |
| `<meta name="description">` | Descrição da página para buscadores |
| `<meta name="keywords">` | Palavras-chave para SEO |

---

## Dica: Atalho no VS Code

Para criar toda a estrutura HTML5 automaticamente no VS Code:
1. Digite `!` em um arquivo `.html` vazio
2. Pressione `Enter`
3. O editor criará a estrutura completa do HTML5 para você!