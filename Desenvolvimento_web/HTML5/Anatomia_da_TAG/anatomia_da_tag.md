# Anatomia das Tags HTML

## Tipos de Tags

Existem dois tipos principais de tags em HTML:

### 1. Tags com Fechamento
Tags que envolvem conteúdo e precisam ser fechadas com `/`:

```html
<p>Conteúdo</p>          <!-- Tag de parágrafo -->
<h1>Título</h1>         <!-- Tag de cabeçalho -->
<div>Container</div>     <!-- Tag de divisão -->
```

### 2. Tags sem Fechamento (Auto-fechantes)
Tags que não precisam de fechamento porque não contêm conteúdo:

```html
<img src="logo.png">     <!-- Tag de imagem -->
<br>                     <!-- Tag de quebra de linha -->
<input type="text">      <!-- Tag de entrada -->
```

---

## Atributos das Tags

Nas tags podemos adicionar **atributos** para incrementar suas funcionalidades e propriedades. Alguns exemplos comuns:

- `src` - Define a fonte (imagem, script, etc.)
- `style` - Define estilos CSS inline
- `width` - Define a largura
- `height` - Define a altura
- `class` - Define uma classe CSS
- `id` - Define um identificador único
- `alt` - Texto alternativo para imagens
---

## Estrutura Básica do HTML5

Para iniciar uma página HTML, usamos a seguinte estrutura básica do HTML5:

```html
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Cabeçalho da página -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Título da Página</title>
    </head>
    <body>
        <!-- Corpo da página - Conteúdo visível -->
        
    </body>
</html>
```

### Descrição das Seções:

- **`<!DOCTYPE html>`** - Declara que este é um documento HTML5
- **`<html>`** - Elemento raiz de todo documento HTML
- **`<head>`** - Contém metadados e informações sobre a página
  - **`<meta charset="UTF-8">`** - Define a codificação de caracteres
  - **`<meta viewport>`** - Define a responsividade para dispositivos móveis
  - **`<title>`** - Título que aparece na aba do navegador
- **`<body>`** - Contém todo o conteúdo visível da página