# BasicPHP — Notas de Estudo

> 📝 Notas do módulo de PHP básico. Organizado para consulta rápida.

---

## Módulo 00: Algoritmos

### Exemplo de Algoritmo — Validação de Cadastro

Um formulário de cadastro verifica os dados passo a passo antes de registrar:

```
--- Formulário de Cadastro ---
** Formulário enviado **

{
    1. Email correto?
        Se SIM → 2. Nome correto?
                    Se SIM → 3. CPF correto?
                                    Se SIM → FORMULÁRIO REGISTRADO COM SUCESSO ✅
                                    Se NÃO → CPF inválido ❌
                    Se NÃO → Nome inválido ❌
        Se NÃO → E-mail inválido ❌
}
```

💡 **Dica:** Esse padrão de "aninhar condições uma dentro da outra" funciona, mas gera muito *indent nesting*. Em PHP, é mais limpo validar **cada campo separadamente** e acumular erros:

```php
$errors = [];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "E-mail inválido.";
}
if (empty($name)) {
    $errors[] = "Nome inválido.";
}
if (!validaCPF($cpf)) {
    $errors[] = "CPF inválido.";
}

if (empty($errors)) {
    echo "Formulário registrado com sucesso!";
} else {
    echo implode("<br>", $errors);
}
```

---

## Módulo 01: PHP Básico

### Variáveis de Servidor (`$_SERVER`)

Informações fornecidas automaticamente pelo servidor web (Apache/Nginx).

```php
echo $_SERVER['SERVER_NAME']; // Exibe o nome do servidor
```

Para visualizar **todas** as variáveis do servidor de forma organizada:

```php
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
```

> 📌 Use `<pre>` para formatar arrays de forma legível no navegador.

---

### Variáveis

Criadas com `$` seguido do nome da variável. Não é necessário declarar o tipo.

```php
$name = 'Bernardo';
echo $name; // Saída: Bernardo
```

---

### Booleanos

Valores que representam verdadeiro ou falso.

```php
$isValid = true;
echo $isValid; // Saída: 1
```

> 📌 No PHP, `true` é impresso como `1` e `false` como **nada** (string vazia).

---

### Constantes

Valores que **não podem ser alterados** durante a execução.

```php
define('PI', 3.14);
echo PI; // Saída: 3.14
```

Também é possível usar a sintaxe `const` (recomendada dentro de classes ou escopo global):

```php
const PI = 3.14;
echo PI;
```

| Forma | Uso |
|-------|-----|
| `define()` | Pode ser usado em qualquer lugar, incluindo dentro de funções |
| `const` | Mais rápido, mas deve ser declarado no escopo global ou dentro de uma classe |

---

### Arrays

Estruturas que armazenam **coleções de valores**.

#### Array Indexado (por número)

```php
$fruits = ['apple', 'banana', 'orange'];
echo $fruits[0]; // Saída: apple
```

#### Array Associativo (por chave)

```php
$pessoa = [
    'nome' => 'Bernardo',
    'idade' => 25,
    'cidade' => 'São Paulo'
];
echo $pessoa['nome']; // Saída: Bernardo
```

> 📌 Arrays associativos são muito úteis para representar dados de formulários, usuários, configurações, etc.

---

### Concatenação

O operador `.` une duas ou mais strings.

```php
$name = 'Bernardo';
echo 'Olá, ' . $name; // Saída: Olá, Bernardo
```

Você também pode usar a forma abreviada `.= ` para concatenar e atribuir ao mesmo tempo:

```php
$message = 'Olá, ';
$message .= $name; // equivalente a $message = $message . $name;
echo $message; // Saída: Olá, Bernardo
```

---

### Condições (`if / elseif / else`)

Executa um bloco de código apenas se a condição for verdadeira.

```php
if ($age >= 18) {
    echo 'Você é maior de idade.';
} elseif ($age >= 16) {
    echo 'Você tem 16 ou 17 anos.';
} else {
    echo 'Você é menor de idade.';
}
```

> 📌 `elseif` (sem espaço) é a forma correta no PHP, embora `else if` também funcione.

---

### Operadores

#### Operadores de Comparação

| Operador | Nome | Descrição |
|----------|------|-----------|
| `==` | Igual | Verdadeiro se os **valores** forem iguais (ignora tipo) |
| `===` | Idêntico | Verdadeiro se os **valores E tipos** forem iguais |
| `!=` | Diferente | Verdadeiro se os valores forem diferentes |
| `<>` | Diferente | Mesmo que `!=` (alternativo) |
| `!==` | Não idêntico | Verdadeiro se valores ou tipos forem diferentes |
| `>` | Maior que | Verdadeiro se o primeiro valor for maior |
| `<` | Menor que | Verdadeiro se o primeiro valor for menor |
| `>=` | Maior ou igual | Verdadeiro se o primeiro for maior ou igual |
| `<=` | Menor ou igual | Verdadeiro se o primeiro for menor ou igual |

> ⚠️ **Atenção:** `==` faz comparação **fraca** (converte tipos automaticamente). Use `===` para comparação **forte** (segura).
>
> ```php
> var_dump(1 == '1');   // true  (PHP converte a string para número)
> var_dump(1 === '1');  // false (tipos diferentes: int vs string)
> ```

#### Operadores Lógicos

| Operador | Nome | Descrição |
|----------|------|-----------|
| `&&` | E | Verdadeiro se **ambas** as condições forem verdadeiras |
| `\|\|` | OU | Verdadeiro se **pelo menos uma** condição for verdadeira |
| `xor` | XOR | Verdadeiro se **apenas uma** condição for verdadeira (não ambas) |
| `!` | NÃO | Inverte o valor (verdadeiro torna-se falso e vice-versa) |

---

### Loops (Laços de Repetição)

#### `for` — Repete um número definido de vezes

```php
for ($i = 0; $i < 5; $i++) {
    echo $i . ' ';
}
// Saída: 0 1 2 3 4
```

#### `while` — Repete enquanto a condição for verdadeira

```php
$count = 0;
while ($count < 3) {
    echo $count . ' ';
    $count++;
}
// Saída: 0 1 2
```

#### `do-while` — Executa **pelo menos uma vez**, depois verifica a condição

```php
$x = 0;
do {
    echo $x . ' ';
    $x++;
} while ($x < 3);
// Saída: 0 1 2
```

#### `foreach` — Itera sobre arrays

```php
// Array indexado
$fruits = ['apple', 'banana', 'orange'];
foreach ($fruits as $fruit) {
    echo $fruit . ' ';
}
// Saída: apple banana orange

// Array associativo
$pessoa = ['nome' => 'Bernardo', 'idade' => 25];
foreach ($pessoa as $key => $value) {
    echo $key . ' = ' . $value . '<br>';
}
// Saída: nome = Bernardo
//        idade = 25
```

> ⚠️ **Correção:** Os laços `for-in`, `for-of` e `for-await-of` **não existem em PHP**. Eles são estruturas do **JavaScript**. No PHP, use `foreach` para iterar sobre arrays e objetos.

---

## Referências Rápidas

| Tópico | Sintaxe Básica |
|--------|---------------|
| Variável | `$nome = 'valor';` |
| Constante | `define('NOME', valor);` |
| Concatenação | `'A' . 'B'` |
| Array | `$arr = [1, 2, 3];` |
| Array Associativo | `$arr = ['chave' => 'valor'];` |
| Condicionais | `if / elseif / else` |
| Loop Array | `foreach ($arr as $key => $value)` |
| Comparação Segura | `===` e `!==` |

---

*Última atualização: 2026-08-26*
