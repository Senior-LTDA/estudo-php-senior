# 🎓 Trilha de Mentoria: De PHP Júnior a PHP Sênior

> Documento-guia completo para sua evolução técnica, baseado no [roadmap.sh/php](https://roadmap.sh/php), com engenharia de software e arquitetura de software incorporadas ao longo da trilha.

**Ponto de partida:** desenvolvedor PHP/Laravel júnior
**Objetivo:** desenvolvedor PHP sênior — domínio profundo da linguagem, do ecossistema, de testes, de arquitetura de software e de boas práticas de engenharia.
**Formato:** estudo iterativo, tópico por tópico, com uma IA (Claude Desktop, Codex, Antigravity, opencode + modelo local, etc.) atuando como seu mentor sênior.

---

## 📌 Como este documento está organizado

O documento está dividido em **16 Fases**, numeradas em ordem de dependência (cada fase assume que a anterior já foi concluída). Cada Fase contém **Tópicos**, e cada Tópico segue sempre a mesma estrutura:

1. **O que é** — explicação do conceito, escrita para quem nunca viu aquilo antes. Zero suposição de conhecimento prévio.
2. **Você precisa dominar** — checklist do que "saber de verdade" significa para aquele tópico (é o que separa quem "usou uma vez" de quem "sabe profundamente").
3. **Perguntas que você deve saber responder** — perguntas de auto-verificação. Se você não conseguir responder sem pesquisar, o tópico ainda não está consolidado.
4. **Exercícios** — sempre 3, em ordem crescente de dificuldade:
   - 🟢 **Fácil** — fixação do conceito isolado.
   - 🟡 **Intermediário** — combina o conceito com algo que você já viu antes.
   - 🔴 **Difícil** — exige pensamento crítico, combina múltiplos conceitos ou casos de borda.

Ao longo da trilha existem **8 Checkpoints de Projeto** (🏗️), em pontos estratégicos, sugerindo a construção de um projeto prático maior que amarra tudo o que foi aprendido até ali. **Nenhum projeto é obrigatório para avançar**, mas são fortemente recomendados — é neles que o conhecimento realmente gruda. Se você entregar um projeto, peça para a IA revisá-lo **considerando apenas o que você já estudou até aquele ponto** (não espere que ela cobre Clean Architecture num projeto do Checkpoint #2, por exemplo).

Use as caixas de seleção para acompanhar seu progresso:

- [ ] Não iniciado
- [x] Concluído (marque manualmente conforme avança)

---

## 🤖 Instruções para a IA mentora (cole isto como prompt de sistema / primeira mensagem)

Copie o bloco abaixo na ferramenta que você for usar (Claude Desktop, Codex, Antigravity, opencode, etc.) junto com este arquivo `.md` inteiro, para que a IA saiba exatamente como conduzir a mentoria.

```
Você é um Engenheiro de Software Sênior PHP/Laravel atuando como meu mentor técnico pessoal.
Estou seguindo o documento de trilha "Trilha de Mentoria: De PHP Júnior a PHP Sênior" (anexado/colado).

Regras de conduta:
1. Sempre que eu disser "vamos para o tópico X", você deve:
   a) Explicar o conceito do zero, como se eu nunca tivesse ouvido falar dele, com exemplos de
      código PHP reais, comentados linha a linha quando fizer sentido.
   b) Comparar com o que eu já vi antes na trilha, quando ajudar a fixar (analogias, contrastes).
   c) Apontar erros comuns de iniciantes e más práticas que eu preciso evitar desde já.
   d) Só depois disso, apresentar os 3 exercícios (fácil, intermediário, difícil) daquele tópico,
      um de cada vez, esperando minha tentativa antes de mostrar a próxima dificuldade.
2. Quando eu enviar minha resposta a um exercício, você deve rodar/revisar o código localmente,
   apontar:
   - Se está funcionalmente correto (o que funciona, o que não funciona, e por quê).
   - Problemas de estilo, aderência a PSR, nomenclatura.
   - Se o princípio central do tópico foi realmente aplicado (não só "funcionou por acaso").
   - Uma versão sênior do mesmo exercício, comentada, para eu comparar meu raciocínio com o de
     alguém experiente — só mostre isso DEPOIS que eu tiver tentado.
3. Não avance de tópico até eu confirmar que entendi ou pedir explicitamente para avançar.
4. Nos Checkpoints de Projeto, me lembre de que são opcionais, mas ofereça-se para revisar o código
   caso eu entregue, usando como critério apenas o que já foi coberto até aquele checkpoint.
5. Seja direto, didático e honesto. Não me elogie por código medíocre. Trate-me como um dev júnior
   que vai virar sênior de verdade, não como alguém que precisa só de validação.
6. Sempre que possível, relacione o conceito atual com "por que isso importa em produção" e "como
   isso aparece em entrevistas técnicas de vaga sênior".
```

---

## 🗺️ Visão geral da trilha (16 Fases)

| Fase | Tema | Status |
|---|---|---|
| 1 | Fundamentos da Web, Ferramentas e Ambiente | [x] |
| 2 | PHP — Fundamentos da Linguagem | [ ] |
| 3 | PHP Intermediário | [ ] |
| 4 | Programação Orientada a Objetos (OOP) | [ ] |
| 5 | Padrões PHP-FIG e Ecossistema (PSR, Composer) | [ ] |
| 6 | Engenharia de Software I — Código Limpo e Design | [ ] |
| 7 | Banco de Dados | [ ] |
| 8 | Testes Automatizados | [ ] |
| 9 | Framework Laravel Essencial | [ ] |
| 10 | Construção de APIs | [ ] |
| 11 | Segurança Web | [ ] |
| 12 | Cache, Filas e Mensageria | [ ] |
| 13 | Engenharia de Software II — Arquitetura de Software | [ ] |
| 14 | DevOps e Infraestrutura para Desenvolvedores | [ ] |
| 15 | Performance e Escalabilidade | [ ] |
| 16 | Habilidades de Sênior (Além do Código) | [ ] |

---
## FASE 1 — Fundamentos da Web, Ferramentas e Ambiente

> Antes de escrever a primeira linha de PHP "de verdade", você precisa entender onde e como esse código vive. Um sênior não só escreve código: ele entende o caminho completo que uma requisição percorre.

### 1.1 Como a Internet Funciona

**O que é:** Quando você digita um endereço no navegador, várias coisas acontecem em milissegundos: o navegador precisa descobrir o endereço IP daquele domínio (isso é feito pelo **DNS**, o "catálogo telefônico da internet"), depois abre uma conexão com o servidor (geralmente via **TCP**, protegida com **TLS/SSL** quando é HTTPS), envia uma **requisição HTTP** pedindo um recurso (uma página, uma imagem, dados de uma API), o servidor processa esse pedido e devolve uma **resposta HTTP** com um código de status (200 OK, 404 Not Found, 500 Internal Server Error, etc.) e um corpo (HTML, JSON, etc.). PHP é uma linguagem que roda no **servidor**: ele recebe a requisição, processa (consulta banco de dados, aplica regras de negócio) e devolve uma resposta — diferente de JavaScript no navegador, que roda no **cliente**.

**Você precisa dominar:**
- Diferença entre cliente e servidor, e o ciclo requisição → processamento → resposta.
- Os verbos HTTP (GET, POST, PUT, PATCH, DELETE) e para que cada um serve semanticamente.
- Famílias de códigos de status HTTP (2xx sucesso, 3xx redirecionamento, 4xx erro do cliente, 5xx erro do servidor) e os mais comuns de cada família.
- O que são headers HTTP (Content-Type, Authorization, Cache-Control) e por que existem.
- Diferença entre HTTP e HTTPS, e o papel básico do TLS.
- O que é DNS e o papel dele antes mesmo da requisição HTTP acontecer.

**Perguntas que você deve saber responder:**
- Por que um formulário de login deveria usar POST e não GET?
- O que significa "stateless" no contexto do HTTP, e por que isso importa para sessões?
- Qual a diferença prática entre um erro 401 e um 403?

**Exercícios:**
- 🟢 Fácil: Liste os 5 códigos de status HTTP mais comuns que você já viu no dia a dia e explique, com suas próprias palavras, o que cada um significa.
- 🟡 Intermediário: Usando as ferramentas de desenvolvedor do navegador (aba Network), acesse um site qualquer e documente: os headers de requisição e resposta de uma chamada, o verbo usado e o código de status retornado.
- 🔴 Difícil: Explique passo a passo (com suas palavras) tudo o que acontece desde o momento em que você aperta Enter numa URL até a página aparecer completamente na tela, incluindo DNS, TCP, TLS, requisição/resposta HTTP e renderização.

---

### 1.2 Terminal e Linha de Comando

**O que é:** O terminal é uma interface de texto para interagir com o sistema operacional sem usar o mouse. Todo desenvolvedor sênior é fluente nele porque é assim que você roda o PHP CLI, o Composer, o Git, o Docker, os testes, os comandos do Artisan (Laravel) e os scripts de deploy. Não é sobre decorar comandos — é sobre perder o medo da tela preta e entender a lógica de navegação em diretórios, execução de programas e encadeamento de comandos.

**Você precisa dominar:**
- Navegação: `cd`, `ls`/`dir`, `pwd`.
- Manipulação de arquivos: `mkdir`, `touch`, `rm`, `mv`, `cp`, `cat`.
- Encadeamento de comandos (`&&`, `|`) e redirecionamento (`>`, `>>`).
- Variáveis de ambiente (`echo $PATH`, `.env`) e por que ferramentas como PHP e Composer dependem do PATH.
- Executar scripts PHP diretamente via `php arquivo.php`.

**Perguntas que você deve saber responder:**
- O que o PATH do sistema tem a ver com o comando `php` funcionar ou não no seu terminal?
- Qual a diferença entre `>` e `>>` ao redirecionar a saída de um comando?

**Exercícios:**
- 🟢 Fácil: Crie, via terminal, uma pasta chamada `estudo-php`, entre nela e crie um arquivo `hello.php`.
- 🟡 Intermediário: Escreva um `hello.php` que imprime "Olá, mundo!" e execute-o com `php hello.php`. Depois redirecione a saída para um arquivo `saida.txt` usando `>`.
- 🔴 Difícil: Crie um pequeno script PHP que recebe argumentos via `$argv` (ex: `php saudacao.php Rafael`) e imprime uma saudação personalizada. Explique o que é `$argv` e `$argc`.

---

### 1.3 Controle de Versão com Git

**O que é:** Git é um sistema que guarda o histórico de tudo que você já mudou no seu código, permitindo voltar no tempo, trabalhar em paralelo com outras pessoas sem sobrescrever o trabalho alheio, e revisar mudanças antes de aceitá-las. Um repositório Git é como uma linha do tempo com "fotografias" (commits) do seu projeto. GitHub é apenas um serviço que hospeda esses repositórios na nuvem e adiciona colaboração (Pull Requests, Issues, Actions).

**Você precisa dominar:**
- `git init`, `git status`, `git add`, `git commit` — o ciclo básico de salvar mudanças.
- `git log`, `git diff` — inspecionar histórico e mudanças.
- Branches: `git branch`, `git checkout -b`/`git switch -c`, e por que isolar trabalho em branches.
- `git merge` vs `git rebase` (conceitualmente, mesmo que use pouco o rebase agora).
- Trabalhar com repositório remoto: `git clone`, `git push`, `git pull`, `git fetch`.
- Resolver um conflito de merge manualmente.
- O fluxo de Pull Request/Merge Request: branch → commit → push → PR → code review → merge.
- Boas mensagens de commit (mensagens que explicam o "porquê", não só o "o quê").

**Perguntas que você deve saber responder:**
- Qual a diferença entre `git fetch` e `git pull`?
- Por que "trabalhar direto na branch main" é considerado uma má prática em times?
- O que é um conflito de merge e por que ele acontece?

**Exercícios:**
- 🟢 Fácil: Crie um repositório Git local, faça 3 commits com mudanças diferentes em um arquivo `README.md`, e veja o histórico com `git log`.
- 🟡 Intermediário: Crie uma branch `feature/saudacao`, faça uma alteração no `hello.php` da seção anterior, comite, volte para a branch principal e dê merge na sua feature branch.
- 🔴 Difícil: Simule um conflito de merge de propósito (edite a mesma linha em duas branches diferentes) e resolva-o manualmente. Depois suba o projeto para um repositório no GitHub e documente o passo a passo que você seguiu.

---

### 1.4 Instalando e Configurando o Ambiente PHP

**O que é:** Para rodar PHP você precisa do **interpretador PHP** instalado (o programa que lê e executa seu código `.php`). Em desenvolvimento local, você tem algumas opções: instalar o PHP diretamente no sistema operacional, usar um pacote tudo-em-um como **Laragon** (Windows) ou **XAMPP** (multiplataforma), ou usar **Docker** para rodar um ambiente isolado e reprodutível (a abordagem mais próxima do que times profissionais usam hoje). O PHP também vem com um **servidor embutido** (`php -S localhost:8000`), ótimo para testar rapidamente sem instalar Apache/Nginx.

**Você precisa dominar:**
- Instalar o PHP e verificar a versão com `php -v`.
- Subir um servidor local com `php -S localhost:8000`.
- O que é o `php.ini` e para que servem configurações como `display_errors`, `memory_limit`, `upload_max_filesize`.
- Diferença entre rodar PHP via CLI (linha de comando) e via SAPI web (servidor).
- Noção do que é Docker e por que ele resolve o clássico "na minha máquina funciona".
- Escolher e configurar um editor (VS Code com extensões de PHP, ou PhpStorm) com autocomplete e debug funcionando.

**Perguntas que você deve saber responder:**
- Por que a mesma versão do PHP em duas máquinas diferentes pode se comportar diferente (dica: extensões e `php.ini`)?
- Qual a vantagem de usar Docker em vez de instalar PHP diretamente no seu sistema operacional?

**Exercícios:**
- 🟢 Fácil: Instale o PHP na sua máquina (ou confirme que já está instalado) e rode `php -v` e `php -m` (lista de extensões carregadas).
- 🟡 Intermediário: Suba um servidor local com `php -S localhost:8000` servindo uma pasta com um `index.php` que mostra a versão do PHP e a data/hora atual do servidor.
- 🔴 Difícil: Escreva um `Dockerfile` simples que instala PHP e roda um `index.php` de exemplo, e explique cada linha do arquivo (mesmo que você ainda não domine Docker por completo — o objetivo aqui é perder o medo e ver o formato).

---

### 🏗️ Checkpoint de Projeto #1 (opcional)

**Projeto sugerido:** Configure do zero um repositório Git com um `index.php` rodando no servidor embutido do PHP, com um `README.md` explicando como rodar o projeto. Suba para o GitHub.
**O que isso comprova:** que você já é capaz de montar o esqueleto de qualquer projeto PHP futuro sem depender de tutoriais.

---
## FASE 2 — PHP: Fundamentos da Linguagem

> Aqui começa o PHP de verdade. Trate cada tópico como se você nunca tivesse programado — mesmo já sendo júnior, vale revisar com atenção, porque muitos devs pulam essa base e isso aparece depois como bug ou código confuso.

### 2.1 Estrutura de um Arquivo PHP, Tags e Saída

**O que é:** Um arquivo PHP mistura código PHP com HTML puro. O interpretador só executa como PHP o que está entre `<?php` e `?>`; tudo fora disso é enviado como texto puro (geralmente HTML) para o navegador. `echo` e `print` são as formas mais básicas de enviar texto para a saída — `echo` é ligeiramente mais rápido e aceita múltiplos argumentos separados por vírgula, `print` sempre retorna `1` e pode ser usado como expressão.

**Você precisa dominar:**
- Diferença entre código dentro e fora das tags `<?php ?>`.
- `echo` vs `print` vs `print_r`/`var_dump` (para depuração).
- Comentários de uma linha (`//`, `#`) e de bloco (`/* */`).
- Ponto e vírgula como terminador de instrução, e por que esquecê-lo é o erro nº1 de iniciante.
- `declare(strict_types=1)` — o que ele muda no comportamento de tipagem (veremos a fundo depois, mas já reconheça essa linha).

**Perguntas que você deve saber responder:**
- O que acontece se você esquecer de fechar uma tag `?>` no meio de um arquivo com HTML depois dela?
- Por que, em arquivos que só têm PHP (sem HTML misturado), é considerado boa prática omitir a tag de fechamento `?>`?

**Exercícios:**
- 🟢 Fácil: Crie um arquivo `index.php` que imprime seu nome usando `echo` e, em outra linha, usando `print`.
- 🟡 Intermediário: Misture HTML e PHP num mesmo arquivo: crie uma página HTML simples onde o `<title>` e um `<h1>` são preenchidos dinamicamente por variáveis PHP.
- 🔴 Difícil: Use `var_dump()` e `print_r()` sobre os mesmos 3 valores (um inteiro, uma string, um array) e explique, com suas palavras, as diferenças no que cada função mostra.

---

### 2.2 Variáveis, Constantes e Tipos de Dados

**O que é:** Uma variável é um espaço nomeado na memória que guarda um valor que pode mudar (por isso "variável"). Em PHP, toda variável começa com `$` (ex: `$idade`). PHP é uma linguagem de **tipagem dinâmica**: você não precisa declarar o tipo da variável, ele é inferido pelo valor atribuído — e pode mudar durante a execução (fraqueza que times sêniores mitigam com tipagem estrita e boas práticas). Os tipos escalares básicos são `int` (inteiro), `float`/`double` (decimal), `string` (texto), `bool` (verdadeiro/falso); os compostos são `array` e `object`; e há tipos especiais como `null` (ausência de valor) e `resource`. Constantes (`define()` ou `const`) guardam valores que nunca mudam durante a execução.

**Você precisa dominar:**
- Regras de nomenclatura de variáveis (case-sensitive, não pode começar com número).
- Os 8 tipos primitivos do PHP e como identificar o tipo de uma variável (`gettype()`, `var_dump()`).
- Conversão de tipos implícita (juggling) vs explícita (`(int)`, `(string)`, `settype()`) — e por que a implícita é fonte de bugs sutis.
- Diferença entre `==` (comparação solta) e `===` (comparação estrita), e por que sêniores preferem sempre `===`.
- Constantes com `define()` vs `const`, e escopo de cada uma.
- Escopo de variáveis: local (dentro de função), global, e por que variáveis globais são geralmente evitadas.

**Perguntas que você deve saber responder:**
- Por que `"10" == 10` retorna `true`, mas `"10" === 10` retorna `false`?
- O que é "type juggling" e me dê um exemplo em que ele causa um bug real.
- Qual a diferença entre `null`, `false` e uma string vazia `""`?

**Exercícios:**
- 🟢 Fácil: Declare uma variável de cada tipo primitivo (int, float, string, bool, array, null) e use `var_dump()` para confirmar o tipo de cada uma.
- 🟡 Intermediário: Escreva um script que recebe uma string vinda de um formulário (simule com `$_GET['idade'] = "25"`) e demonstre a diferença de comportamento entre somar `$_GET['idade'] + 5` sem conversão e convertendo explicitamente para `int` antes.
- 🔴 Difícil: Liste (na prática, testando no código) pelo menos 5 comparações "estranhas" do PHP usando `==` que surpreendem iniciantes (ex: `"abc" == 0` em versões antigas, `"0" == false`, `[] == false`), explique o resultado de cada uma e reescreva todas usando `===` mostrando como o comportamento muda.

---

### 2.3 Operadores

**O que é:** Operadores são símbolos que realizam operações sobre valores. PHP tem operadores aritméticos (`+ - * / % **`), de atribuição (`= += -= *=`), de comparação (`== === != !== < > <= >=`), lógicos (`&& || ! and or xor`), o operador ternário (`condição ? valorSeVerdadeiro : valorSeFalso`), o **null coalescing** (`??`, que retorna o valor da esquerda se ele não for `null`, senão o da direita) e o **null coalescing assignment** (`??=`). Esses últimos dois são extremamente usados em PHP moderno para lidar com valores possivelmente ausentes sem gerar warnings.

**Você precisa dominar:**
- Precedência de operadores (por que `2 + 3 * 4` não é `20`).
- Diferença entre `&&`/`and` e `||`/`or` (precedência diferente — pegadinha clássica).
- O operador `??` e como ele evita o erro clássico "undefined array key".
- O operador spaceship `<=>` usado em funções de ordenação.
- Operador de supressão de erro `@` e por que sêniores evitam usá-lo.

**Perguntas que você deve saber responder:**
- Qual a diferença prática entre usar `??` e usar `isset()` combinado com operador ternário?
- Por que misturar `and`/`or` com `=` numa mesma linha pode gerar um bug silencioso?

**Exercícios:**
- 🟢 Fácil: Escreva expressões usando todos os operadores aritméticos e mostre o resultado de cada uma via `echo`.
- 🟡 Intermediário: Dado um array associativo simulando dados de um usuário vindo de um formulário (que pode não ter a chave `apelido`), use `??` para definir um valor padrão sem gerar warning.
- 🔴 Difícil: Escreva uma função `ordenarPorIdade(array $pessoas)` que usa `usort()` com o operador spaceship (`<=>`) para ordenar um array de arrays associativos por idade, do menor para o maior.

---

### 2.4 Estruturas Condicionais

**O que é:** Estruturas condicionais permitem que o programa tome decisões: "se isso for verdade, faça X; senão, faça Y". `if/elseif/else` é a forma mais básica. `switch` compara um mesmo valor contra vários casos possíveis (cuidado com o "fall-through" quando você esquece o `break`). A partir do PHP 8.0, existe o `match`, uma alternativa mais segura e moderna ao `switch`: ele usa comparação estrita (`===`), não tem fall-through, e é uma expressão (retorna um valor diretamente).

**Você precisa dominar:**
- Sintaxe de `if/elseif/else` e como evitar aninhamentos profundos (early return).
- `switch` e o comportamento de fall-through quando falta `break`.
- `match` (PHP 8+): comparação estrita, ausência de fall-through, uso como expressão.
- Operador ternário e ternário abreviado (`$a ?: $b`).
- Quando um `if` vira "code smell" e pode ser substituído por polimorfismo (veremos isso a fundo na Fase 6).

**Perguntas que você deve saber responder:**
- Por que o `match` é considerado mais seguro que o `switch` em PHP moderno?
- Dê um exemplo real de bug causado por esquecer o `break` num `switch`.

**Exercícios:**
- 🟢 Fácil: Escreva uma função que recebe uma nota (0 a 10) e retorna o conceito (A, B, C, D, F) usando `if/elseif/else`.
- 🟡 Intermediário: Reescreva a mesma função usando `match`, aproveitando a sintaxe de intervalos com `match(true)`.
- 🔴 Difícil: Escreva uma função `statusPedido(string $status)` que usa `switch` propositalmente SEM `break` em um dos casos para demonstrar fall-through controlado (um caso válido de uso), documentando por que aquele fall-through é intencional e como isso seria mais explícito usando `match` com múltiplas condições na mesma linha.

---

### 2.5 Laços de Repetição (Loops)

**O que é:** Loops repetem um bloco de código enquanto uma condição for verdadeira (ou para cada elemento de uma coleção). `for` é usado quando você sabe quantas vezes quer repetir (ou tem um contador). `while` repete enquanto uma condição for verdadeira, verificada antes de cada iteração. `do-while` é igual ao `while`, mas garante pelo menos uma execução (a condição é checada depois). `foreach` é o mais usado no dia a dia PHP: percorre arrays e objetos iteráveis sem precisar controlar índice manualmente. `break` interrompe o loop, `continue` pula para a próxima iteração.

**Você precisa dominar:**
- Quando usar `for` vs `while` vs `foreach` (critério: você sabe a quantidade de repetições? está percorrendo uma coleção?).
- `foreach` com chave e valor (`foreach ($array as $chave => $valor)`).
- `foreach` por referência (`as &$valor`) e o perigo de "esquecer" o `unset()` depois.
- `break` e `continue`, inclusive com nível (`break 2` em loops aninhados).
- Loops infinitos intencionais (`while (true)`) e por que eles precisam de uma condição de saída clara.

**Perguntas que você deve saber responder:**
- Por que usar `foreach ($array as &$valor)` sem dar `unset($valor)` depois pode causar um bug sutil e difícil de encontrar?
- Quando vale mais a pena usar `for` em vez de `foreach`?

**Exercícios:**
- 🟢 Fácil: Escreva um loop `for` que imprime os números de 1 a 20, e um `while` que faz a mesma coisa.
- 🟡 Intermediário: Dado um array associativo de produtos com nome e preço, use `foreach` para imprimir uma listagem formatada e calcular o total somado de todos os preços.
- 🔴 Difícil: Reproduza o bug clássico do `foreach` por referência: crie um array, faça um `foreach` com `&$valor` que dobra cada valor, NÃO dê `unset()`, e depois faça um segundo `foreach` (sem referência) sobre o mesmo array — mostre o resultado inesperado e explique por que ele acontece, e então corrija com `unset($valor)`.

---

### 2.6 Arrays

**O que é:** Arrays em PHP são estruturas extremamente versáteis: podem ser **indexados** (chaves numéricas sequenciais, como uma lista), **associativos** (chaves nomeadas, como um dicionário/objeto simples) ou **multidimensionais** (arrays dentro de arrays, para representar estruturas mais complexas como uma lista de pedidos, cada um com seus próprios itens). PHP tem uma biblioteca enorme de funções nativas para arrays (`array_map`, `array_filter`, `array_reduce`, `array_merge`, `in_array`, `array_keys`, `array_values`, `sort`/`usort`, entre dezenas de outras) que todo sênior conhece de cor para as mais usadas.

**Você precisa dominar:**
- Criar arrays com `[]` (sintaxe moderna) e diferenciar indexado de associativo.
- Arrays multidimensionais e como acessar/percorrer níveis aninhados.
- `array_map`, `array_filter`, `array_reduce` — programação funcional básica sobre coleções (fundamental, muito cobrado em entrevistas sêniores).
- Funções de busca: `in_array`, `array_search`, `array_key_exists` (e por que `isset()` não é o mesmo que `array_key_exists` quando o valor é `null`).
- Funções de ordenação: `sort`, `rsort`, `asort`, `ksort`, `usort` (com callback/closure).
- Desestruturação de arrays com `list()`/`[$a, $b] = $array`.
- Spread operator (`...`) em arrays.
- Diferença entre arrays passados por valor vs (raramente) por referência em funções.

**Perguntas que você deve saber responder:**
- Qual a diferença entre `array_filter` e `array_map`? Quando cada um se aplica?
- Por que `isset($array['chave'])` retorna `false` se o valor daquela chave for `null`, mesmo a chave existindo?
- Como você reduziria uma lista de pedidos para calcular o valor total gasto usando uma única linha funcional?

**Exercícios:**
- 🟢 Fácil: Crie um array associativo representando uma pessoa (nome, idade, cidade) e imprima cada informação formatada.
- 🟡 Intermediário: Dado um array de produtos (cada um com `nome`, `preco`, `categoria`), use `array_filter` para pegar só os produtos de uma categoria, e `array_map` para gerar um novo array só com os nomes formatados em maiúsculo.
- 🔴 Difícil: Dado um array multidimensional de pedidos (cada pedido tem uma lista de itens, cada item tem `preco` e `quantidade`), use `array_reduce` para calcular o valor total de TODOS os pedidos numa única expressão funcional (sem loops explícitos com `foreach`).

---

### 2.7 Strings

**O que é:** Strings representam texto. PHP oferece dezenas de funções nativas para manipulá-las: concatenar (`.` ou interpolação `"Olá, $nome"`), medir tamanho (`strlen`), buscar (`strpos`, `str_contains`), substituir (`str_replace`), cortar (`substr`), dividir em array (`explode`) e juntar array em string (`implode`), formatar (`sprintf`, `number_format`), mudar caixa (`strtoupper`, `strtolower`, `ucfirst`). Entender bem strings é essencial porque é praticamente impossível programar PHP sem manipulá-las constantemente — validação de formulários, montagem de mensagens, geração de relatórios, etc.

**Você precisa dominar:**
- Aspas simples vs duplas (interpolação de variáveis só funciona em aspas duplas ou heredoc).
- Heredoc e Nowdoc para strings longas/multilinhas.
- `sprintf`/`printf` para formatação com placeholders.
- `explode`/`implode` (conversão string ↔ array).
- Funções de busca e substituição (`str_contains`, `str_starts_with`, `str_ends_with` — PHP 8+, `str_replace`, `preg_replace` quando precisar de padrões).
- Multibyte strings (`mb_strlen`, `mb_substr`) e por que são necessárias com acentuação/UTF-8.

**Perguntas que você deve saber responder:**
- Por que `strlen()` pode retornar um valor "errado" para uma string com acentos, e o que usar no lugar?
- Qual a diferença entre `str_replace` e `preg_replace`? Quando você precisaria do segundo?

**Exercícios:**
- 🟢 Fácil: Dado um nome completo em uma única string, use `explode` para separar em array de partes do nome, e `implode` para juntar de volta com um separador diferente.
- 🟡 Intermediário: Escreva uma função `formatarMoeda(float $valor): string` que retorna o valor formatado como "R$ 1.234,56" usando `number_format`.
- 🔴 Difícil: Escreva uma função `mascarrEmail(string $email): string` que transforma `rafael.silva@email.com` em `ra*****va@email.com`, mantendo os 2 primeiros e 2 últimos caracteres do nome de usuário visíveis, usando apenas funções de string (sem regex).

---

### 2.8 Funções

**O que é:** Uma função agrupa um bloco de código reutilizável, que recebe entradas (parâmetros) e opcionalmente devolve uma saída (`return`). Funções são a base da organização de qualquer programa: em vez de repetir código, você o isola numa função nomeada e a chama de vários lugares (princípio DRY, que veremos a fundo depois). PHP moderno permite tipar parâmetros e o retorno (`function soma(int $a, int $b): int`), definir valores padrão, parâmetros nomeados, funções variádicas (`...$args`), funções anônimas (closures) e arrow functions (sintaxe curta `fn($x) => $x * 2`).

**Você precisa dominar:**
- Declaração básica, parâmetros, `return`, e o fato de uma função sem `return` explícito retornar `null`.
- Tipagem de parâmetros e retorno (`: int`, `: string`, `: ?string`, `: void`) — e por que isso é considerado prática sênior obrigatória.
- Valores padrão de parâmetros (`function saudacao(string $nome = "visitante")`).
- Parâmetros nomeados (PHP 8+): `saudacao(nome: "Rafael")`.
- Funções variádicas (`function soma(...$numeros)`).
- Passagem por valor (padrão) vs por referência (`&$variavel`) — e os riscos de efeitos colaterais inesperados.
- Escopo de função e por que variáveis externas não são visíveis dentro dela por padrão (`global`, `use` em closures).
- Closures (`function() use ($variavel) {}`) e arrow functions (`fn() => ...`, que capturam o escopo externo automaticamente).
- Recursão (função que chama a si mesma) e cuidado com condição de parada.

**Perguntas que você deve saber responder:**
- Por que tipar parâmetros e retorno reduz bugs em produção, mesmo o PHP sendo dinamicamente tipado?
- Qual a diferença entre uma closure com `use ($var)` e uma arrow function `fn() => $var`?
- Quando você usaria passagem por referência (`&`) de propósito, e por que isso deve ser exceção, não regra?

**Exercícios:**
- 🟢 Fácil: Escreva uma função `calcularArea(float $base, float $altura): float` totalmente tipada, e chame-a com valores de teste.
- 🟡 Intermediário: Escreva uma função `aplicarDesconto(array $produtos, float $percentual): array` que usa uma arrow function dentro de `array_map` para retornar um novo array com os preços já descontados, sem alterar o array original.
- 🔴 Difícil: Implemente uma função recursiva `fatorial(int $n): int` com validação de entrada (lançando uma exceção — adiante veremos isso a fundo — se `$n` for negativo), e depois reescreva o mesmo cálculo de forma iterativa, comparando os dois approaches em termos de legibilidade e risco de estouro de pilha.

---

### 2.9 Superglobais e Formulários HTML

**O que é:** Superglobais são variáveis especiais do PHP, disponíveis em qualquer escopo, que carregam dados da requisição HTTP: `$_GET` (dados na URL, ex: `?busca=laravel`), `$_POST` (dados enviados no corpo de um formulário), `$_REQUEST` (combina GET+POST+COOKIE — evitado por sêniores por ser ambíguo), `$_SERVER` (informações do servidor e da requisição), `$_SESSION` (dados persistidos entre requisições do mesmo usuário), `$_COOKIE` (dados salvos no navegador do usuário) e `$_FILES` (uploads). Entender isso é o que conecta o PHP "puro" ao mundo real de formulários web.

**Você precisa dominar:**
- Diferença entre `$_GET` e `$_POST` e quando usar cada um (idempotência, dados sensíveis na URL).
- Como um formulário HTML (`<form method="POST">`) chega até o PHP.
- `$_SERVER` — variáveis mais usadas (`REQUEST_METHOD`, `HTTP_HOST`, `REQUEST_URI`).
- `$_SESSION` e o comando `session_start()` — como o PHP identifica "o mesmo usuário" entre requisições (cookie de sessão).
- Por que **nunca** confiar em dado vindo de superglobal sem validar/sanitizar (ligação direta com Segurança, Fase 11).
- `htmlspecialchars()` como primeira linha de defesa contra XSS ao exibir dados do usuário de volta na tela.

**Perguntas que você deve saber responder:**
- Por que dados de um formulário de login nunca deveriam ir por `$_GET`?
- Como o servidor "sabe" que duas requisições HTTP diferentes (que por natureza são stateless) pertencem ao mesmo usuário logado?

**Exercícios:**
- 🟢 Fácil: Crie um formulário HTML simples com um campo de nome, método POST, que envia para um `processa.php` que imprime "Olá, [nome]!" usando `$_POST`.
- 🟡 Intermediário: Adicione validação básica: se o campo nome vier vazio, redirecione de volta ao formulário com uma mensagem de erro guardada em `$_SESSION` (padrão "flash message").
- 🔴 Difícil: Construa um mini sistema de contador de visitas: use `$_SESSION` para não contar o mesmo usuário duas vezes na mesma sessão, e `$_COOKIE` para lembrar se é a "primeira visita" do navegador mesmo depois de fechar o site, exibindo mensagens diferentes para visitante novo vs recorrente.

---

### 🏗️ Checkpoint de Projeto #2 (opcional)

**Projeto sugerido:** Mini sistema de lista de tarefas (To-Do List) em PHP puro e procedural: formulário para adicionar tarefa, listagem das tarefas salvas (pode ser em um arquivo `.json` ou `.txt` por enquanto, ainda sem banco de dados), opção de marcar como concluída e remover. Use tudo que você viu até aqui: variáveis, arrays, funções, loops, condicionais, superglobais e strings.
**O que isso comprova:** que você já consegue construir uma aplicação web funcional do zero, mesmo que ainda "malcheirosa" em termos de organização — isso é esperado e será resolvido nas próximas fases.

---
## FASE 3 — PHP Intermediário

> Aqui você sai do "sei escrever um script" para "sei escrever código que sobrevive a erros e situações inesperadas" — uma das marcas mais claras de maturidade técnica.

### 3.1 include, require e Organização de Arquivos

**O que é:** À medida que seu código cresce, você não quer tudo em um único arquivo. `include` e `require` trazem o conteúdo de outro arquivo PHP para dentro do arquivo atual. A diferença entre eles é o que acontece quando o arquivo não existe: `include` gera um **warning** e o script continua; `require` gera um **erro fatal** e o script para. As versões `_once` (`include_once`, `require_once`) garantem que o mesmo arquivo não seja carregado duas vezes (evitando erro de "função já declarada"). Hoje em dia, em projetos com Composer, o autoloading (Fase 5) substitui a maior parte do uso manual de `require`, mas entender o mecanismo por trás é essencial.

**Você precisa dominar:**
- Diferença de comportamento entre `include` e `require` diante de arquivo ausente.
- Por que `_once` existe e que problema ele evita.
- Organização básica de projeto em múltiplos arquivos (ex: separar funções em `funcoes.php`, configuração em `config.php`).

**Perguntas que você deve saber responder:**
- Em que situação faria sentido usar `include` (que não quebra o script) em vez de `require`?
- Por que carregar o mesmo arquivo de definição de função duas vezes sem `_once` gera erro fatal?

**Exercícios:**
- 🟢 Fácil: Separe o `hello.php` da Fase 1 em dois arquivos: um com uma função `saudacao()` e outro que faz `require` dele e chama a função.
- 🟡 Intermediário: Crie um `config.php` com constantes de configuração (ex: nome do app, versão) e importe-o em 3 arquivos diferentes usando `require_once`, comprovando que não há erro de redeclaração.
- 🔴 Difícil: Provoque de propósito o erro de "função já declarada" usando `require` (sem `_once`) duas vezes no mesmo script, capture o comportamento, e depois corrija com `require_once`, documentando a diferença observada.

---

### 3.2 Manipulação de Arquivos e Diretórios

**O que é:** PHP oferece funções para ler e escrever arquivos no sistema operacional: `fopen`/`fwrite`/`fclose` (controle fino, abre um "ponteiro" para o arquivo), `file_get_contents`/`file_put_contents` (forma simplificada, lê/escreve tudo de uma vez), `file_exists`, `unlink` (deletar), `mkdir` (criar diretório), `scandir` (listar conteúdo de diretório). Isso é a base de qualquer sistema que precisa persistir dados sem banco (logs, cache em arquivo, uploads) e também é a base para entender como frameworks like Laravel abstraem isso depois.

**Você precisa dominar:**
- Modos de abertura de arquivo (`r`, `w`, `a`, `r+` etc.) e o que cada um faz (sobrescreve, adiciona, só leitura).
- `file_get_contents`/`file_put_contents` para casos simples vs `fopen`/`fwrite` para controle fino ou arquivos grandes.
- Verificar existência/permissões antes de operar (`file_exists`, `is_writable`).
- Trabalhar com caminhos de forma portátil (`__DIR__`, `DIRECTORY_SEPARATOR`) em vez de caminhos "hardcoded".
- Por que abrir um arquivo grande inteiro na memória (`file_get_contents`) pode ser problemático, e quando usar leitura em stream.

**Perguntas que você deve saber responder:**
- Por que usar `__DIR__ . '/dados.txt'` é mais seguro/portável do que escrever `'/home/usuario/projeto/dados.txt'` fixo no código?
- Qual o risco de usar o modo `w` para "adicionar" uma linha a um arquivo de log?

**Exercícios:**
- 🟢 Fácil: Escreva um script que cria um arquivo `log.txt` e adiciona uma linha com a data/hora atual toda vez que é executado (sem apagar o conteúdo anterior).
- 🟡 Intermediário: Reescreva o Checkpoint #2 (lista de tarefas) para persistir as tarefas em um arquivo `tarefas.json`, usando `file_get_contents` + `json_decode` para ler e `file_put_contents` + `json_encode` para salvar.
- 🔴 Difícil: Escreva uma função `lerLogsRecentes(string $caminho, int $minutos): array` que lê um arquivo de log (uma linha por evento, com timestamp no início) e retorna apenas as linhas dos últimos N minutos, tratando o caso de o arquivo não existir.

---

### 3.3 Tratamento de Erros e Exceções

**O que é:** Nem tudo dá certo: um arquivo pode não existir, uma divisão por zero pode acontecer, uma API externa pode falhar. PHP tem um sistema de **exceções**: quando algo excepcional acontece, você (ou o PHP internamente) "lança" (`throw`) um objeto de exceção, e o fluxo do programa pula imediatamente para o bloco `catch` mais próximo que sabe lidar com aquele tipo de exceção. O bloco `finally` sempre executa, dando erro ou não (ótimo para "limpeza", como fechar uma conexão). PHP diferencia **Error** (problemas graves, geralmente do próprio PHP, como chamar um método inexistente) de **Exception** (problemas esperados do domínio da aplicação, que você mesmo lança) — ambos implementam a interface `Throwable`.

**Você precisa dominar:**
- `try/catch/finally` — mecânica completa, inclusive múltiplos `catch` para tipos diferentes de exceção.
- `throw new Exception("mensagem")` e como criar suas próprias classes de exceção estendendo `Exception`.
- Hierarquia: `Throwable` → `Error` | `Exception`, e por que capturar `Throwable` genérico é geralmente má prática (você deveria capturar tipos específicos).
- Diferença entre um erro "esperado" (ex: usuário não encontrado → exceção customizada) e um "inesperado" (bug).
- Por que engolir uma exceção (`catch (Exception $e) {}` vazio) é considerado péssima prática.
- `set_exception_handler` e a ideia de tratamento centralizado de erros (relevante quando virmos Laravel).

**Perguntas que você deve saber responder:**
- Por que criar exceções customizadas (ex: `UsuarioNaoEncontradoException`) é melhor do que sempre lançar `Exception` genérica?
- O que acontece com o código depois de um `throw` dentro de um `try` sem `catch` correspondente?
- Para que serve, na prática, o bloco `finally`?

**Exercícios:**
- 🟢 Fácil: Escreva uma função `dividir(float $a, float $b): float` que lança uma exceção quando `$b` for zero, e trate essa exceção ao chamar a função, exibindo uma mensagem amigável.
- 🟡 Intermediário: Crie uma classe `SaldoInsuficienteException extends Exception` e uma função `sacar(float $saldo, float $valor): float` que a lança quando o saque for maior que o saldo. Trate especificamente esse tipo de exceção, diferente de outras.
- 🔴 Difícil: Construa uma função `buscarUsuario(array $usuarios, int $id): array` que lança uma `UsuarioNaoEncontradoException` customizada (com uma propriedade extra guardando o `$id` buscado) quando o usuário não existir, e um bloco de chamada com múltiplos `catch` tratando esse erro específico de forma diferente de um `Throwable` genérico (logando algo distinto para cada caso), usando `finally` para simular o fechamento de um recurso (ex: `echo "Busca finalizada."`).

---

### 3.4 Expressões Regulares

**O que é:** Expressões regulares (regex) são padrões usados para buscar, validar ou extrair partes de um texto de forma muito mais poderosa que `str_contains`/`str_replace`. Em PHP, usamos a família de funções `preg_*` (`preg_match`, `preg_match_all`, `preg_replace`, `preg_split`), baseadas na sintaxe PCRE. Regex é uma daquelas ferramentas que todo sênior sabe usar com confiança para validação de formatos (email, CPF, telefone) e parsing simples de texto — mas também sabe reconhecer quando regex é a ferramenta errada (ex: parsear HTML/JSON complexo).

**Você precisa dominar:**
- Sintaxe básica: âncoras (`^ $`), quantificadores (`* + ? {n,m}`), classes de caracteres (`[a-z]`, `\d`, `\w`, `\s`), grupos (`()`), alternância (`|`).
- `preg_match` (encontra a primeira ocorrência) vs `preg_match_all` (encontra todas).
- `preg_replace` para substituição baseada em padrão.
- Grupos de captura e como acessá-los no array de resultado.
- Quando NÃO usar regex (ex: parsing de HTML/XML — usar um parser apropriado).

**Perguntas que você deve saber responder:**
- Qual a diferença entre `preg_match` e `preg_match_all`?
- Por que regex não é a ferramenta certa para "parsear" um HTML complexo?

**Exercícios:**
- 🟢 Fácil: Escreva uma regex e use `preg_match` para validar se uma string tem o formato básico de um e-mail (`algo@algo.algo`).
- 🟡 Intermediário: Use `preg_match_all` para extrair todos os hashtags (`#algumacoisa`) de um texto simulando um post de rede social.
- 🔴 Difícil: Escreva uma função `formatarTelefone(string $numero): string` que usa `preg_replace` com grupos de captura para transformar uma string de 11 dígitos (ex: `11987654321`) no formato `(11) 98765-4321`.

---

### 3.5 Datas e Horas

**O que é:** Trabalhar com datas é surpreendentemente cheio de armadilhas (fusos horários, anos bissextos, formatos regionais). PHP tem duas formas principais: as funções antigas baseadas em `date()`/`time()` (timestamps Unix) e a API orientada a objetos `DateTime`/`DateTimeImmutable` (recomendada hoje em dia), que também traz `DateInterval` (para somar/subtrair períodos) e `DateTimeZone` (para lidar com fuso horário corretamente). `DateTimeImmutable` é preferida por sêniores porque, como o nome diz, não altera o objeto original ao modificá-lo — sempre retorna uma nova instância, evitando bugs de efeito colateral.

**Você precisa dominar:**
- `date()` e formatos de máscara mais comuns (`Y-m-d`, `d/m/Y H:i:s`).
- `DateTime` vs `DateTimeImmutable` — e por que a segunda é a escolha sênior por padrão.
- Somar/subtrair datas com `DateInterval`/`modify()`.
- Calcular diferença entre duas datas com `diff()`.
- Fuso horário: `date_default_timezone_set()` e `DateTimeZone`.

**Perguntas que você deve saber responder:**
- Por que `DateTimeImmutable` é geralmente preferida a `DateTime` em código sênior?
- O que pode dar errado se você não configurar o fuso horário da aplicação explicitamente?

**Exercícios:**
- 🟢 Fácil: Use `DateTimeImmutable` para exibir a data de hoje formatada como "quinta-feira, 10 de outubro de 2026" (em português, usando `IntlDateFormatter` ou montagem manual dos nomes).
- 🟡 Intermediário: Escreva uma função `calcularIdade(DateTimeImmutable $nascimento): int` que retorna a idade atual de uma pessoa em anos completos.
- 🔴 Difícil: Escreva uma função `diasUteisEntre(DateTimeImmutable $inicio, DateTimeImmutable $fim): int` que calcula quantos dias úteis (segunda a sexta, sem considerar feriados) existem entre duas datas.

---

### 3.6 JSON e Dados Estruturados

**O que é:** JSON (JavaScript Object Notation) é o formato padrão de troca de dados entre sistemas hoje em dia — praticamente toda API que você vai construir ou consumir fala JSON. `json_encode()` transforma um array/objeto PHP em uma string JSON; `json_decode()` faz o caminho inverso (por padrão retorna objetos `stdClass`, mas com `true` no segundo argumento retorna arrays associativos, que geralmente é mais prático).

**Você precisa dominar:**
- `json_encode`/`json_decode` e a flag `JSON_PRETTY_PRINT` para debug legível.
- Diferença entre decodificar para `stdClass` (padrão) vs array associativo (`json_decode($json, true)`).
- Tratamento de erro de decodificação (`json_last_error()`), já que um JSON malformado não lança exceção por padrão.
- Serializar objetos customizados implementando a interface `JsonSerializable`.

**Perguntas que você deve saber responder:**
- O que acontece se você tentar `json_decode` de uma string que não é um JSON válido, e como você detecta isso corretamente?
- Quando faz sentido implementar `JsonSerializable` numa classe própria?

**Exercícios:**
- 🟢 Fácil: Transforme um array associativo representando um produto em uma string JSON, e depois decodifique de volta, comparando o resultado.
- 🟡 Intermediário: Escreva uma função `carregarConfiguracao(string $caminhoJson): array` que lê um arquivo `.json`, decodifica e trata corretamente o caso de JSON inválido usando `json_last_error()`.
- 🔴 Difícil: Crie uma classe `Pedido` com propriedades privadas e implemente `JsonSerializable` para controlar exatamente quais campos aparecem (e em que formato) quando o objeto é passado para `json_encode()`.

---

### 3.7 Debugging

**O que é:** Debugar é o processo de descobrir por que seu código não está se comportando como esperado. As ferramentas básicas são `var_dump()`/`print_r()` (inspecionar valores em qualquer ponto do código) e `die()`/`exit()` para parar a execução ali (a técnica clássica "dd" — dump and die). O passo seguinte, usado por profissionais, é o **Xdebug**: uma extensão que permite colocar breakpoints reais no seu editor (VS Code/PhpStorm) e navegar pela execução linha a linha, inspecionando variáveis sem precisar espalhar `var_dump` pelo código.

**Você precisa dominar:**
- `var_dump`, `print_r`, e a técnica "dd" (dump and die) para depuração rápida.
- Ler uma mensagem de erro do PHP: entender arquivo, linha e stack trace.
- Configurar e usar o Xdebug com breakpoints no editor (pelo menos uma vez, mesmo que ainda não use no dia a dia).
- Ler logs de erro do PHP (`error_log`, `display_errors` em desenvolvimento vs produção).

**Perguntas que você deve saber responder:**
- Por que `display_errors` deve estar desligado em produção, mas ligado em desenvolvimento?
- Qual a vantagem de um breakpoint real (Xdebug) sobre espalhar `var_dump` pelo código?

**Exercícios:**
- 🟢 Fácil: Pegue um script com um bug proposital (ex: uma variável com nome errado) e use `var_dump` estrategicamente para encontrar o problema.
- 🟡 Intermediário: Configure o Xdebug no seu editor, coloque um breakpoint dentro de uma função com um loop, e percorra a execução passo a passo observando como as variáveis mudam.
- 🔴 Difícil: Pegue o Checkpoint #2 (lista de tarefas) e, usando apenas Xdebug (sem `var_dump`), debugue e corrija um bug proposital que você mesmo vai inserir (ex: uma condição invertida ao marcar tarefa como concluída), documentando o caminho que você percorreu no debugger até achar a causa.

---
## FASE 4 — Programação Orientada a Objetos (OOP)

> Esta é, sem exagero, a fase mais importante da trilha. Praticamente todo código Laravel (e todo código PHP profissional moderno) é orientado a objetos. Um dev que "usa classes porque o framework obriga" é diferente de um dev que **entende** por que a OOP existe e resolve problemas reais de organização e manutenção de código. Vá com calma aqui.

### 4.1 Classes e Objetos

**O que é:** Uma **classe** é um molde/planta que define quais dados (propriedades) e comportamentos (métodos) um tipo de "coisa" vai ter. Um **objeto** é uma instância concreta criada a partir desse molde — se `Carro` é a classe, `$meuCarro = new Carro()` é um objeto específico, com seus próprios valores para cor, modelo etc. Isso resolve um problema real: em vez de ter várias variáveis soltas (`$nomeUsuario`, `$emailUsuario`, `$idadeUsuario`) e funções soltas que operam sobre elas, você agrupa dado + comportamento relacionado numa única unidade coesa.

**Você precisa dominar:**
- Sintaxe: `class NomeDaClasse { }`, propriedades (`public string $nome;`), métodos, e instanciação com `new`.
- `$this` — como uma classe se refere aos seus próprios dados dentro de um método.
- Diferença entre a classe (o molde) e o objeto (a instância) — e que você pode criar N objetos da mesma classe, cada um com seus próprios valores.
- Por que agrupar dado e comportamento relacionado é mais organizado do que funções soltas manipulando arrays soltos.

**Perguntas que você deve saber responder:**
- Qual a diferença entre uma classe e um objeto, com suas próprias palavras (sem usar a palavra "molde", para garantir que você realmente entendeu)?
- O que `$this` representa dentro de um método de uma classe?

**Exercícios:**
- 🟢 Fácil: Crie uma classe `Produto` com propriedades `nome` e `preco`, e um método `exibir()` que imprime "Produto: [nome] - R$ [preco]". Instancie 2 produtos diferentes e chame `exibir()` em cada um.
- 🟡 Intermediário: Adicione um método `aplicarDesconto(float $percentual): void` na classe `Produto` que altera o `preco` do próprio objeto.
- 🔴 Difícil: Refatore o Checkpoint #2 (lista de tarefas): crie uma classe `Tarefa` (com `titulo`, `concluida`) e reescreva a listagem para trabalhar com um array de objetos `Tarefa` em vez de um array associativo solto, mantendo toda a funcionalidade original (adicionar, marcar como concluída, listar).

---

### 4.2 Visibilidade e Encapsulamento

**O que é:** Encapsulamento é o princípio de esconder os detalhes internos de uma classe e expor apenas o que é necessário para quem vai usá-la. PHP controla isso com os modificadores de visibilidade: `public` (acessível de qualquer lugar), `protected` (acessível pela própria classe e por classes filhas), `private` (acessível apenas dentro da própria classe). Por que isso importa? Porque protege a **consistência interna** do objeto: se qualquer código externo pode alterar qualquer propriedade livremente, é impossível garantir que o objeto esteja sempre em um estado válido.

**Você precisa dominar:**
- Diferença prática entre `public`, `protected` e `private`.
- Getters e setters — quando eles fazem sentido (validação, cálculo derivado) e quando são só burocracia desnecessária.
- Por que deixar tudo `public` "para facilitar" é uma armadilha que gera bugs difíceis de rastrear em projetos grandes.
- O conceito de "invariante" de um objeto — uma regra que deve ser sempre verdadeira (ex: saldo nunca pode ficar negativo) e como o encapsulamento protege isso.

**Perguntas que você deve saber responder:**
- Por que deixar uma propriedade `saldo` como `public` numa classe `ContaBancaria` é perigoso?
- Qual a diferença de acesso entre `protected` e `private` na prática, com um exemplo de herança?

**Exercícios:**
- 🟢 Fácil: Reescreva a classe `Produto` tornando `preco` `private`, e crie um método `getPreco()` para lê-lo de fora.
- 🟡 Intermediário: Crie uma classe `ContaBancaria` com `saldo` privado, um método `depositar(float $valor)` e um método `sacar(float $valor)` que lança uma exceção (relembrando a Fase 3) se o saque deixar o saldo negativo.
- 🔴 Difícil: Adicione à `ContaBancaria` um método `transferir(ContaBancaria $destino, float $valor)` que só é bem-sucedido se ambas as contas permanecerem em estado válido (nenhuma negativa) — se der erro no meio, nada deve ser alterado em nenhuma das duas contas (tudo ou nada).

---

### 4.3 Construtores, Destrutores e Constructor Promotion

**O que é:** O **construtor** (`__construct`) é um método especial chamado automaticamente quando você cria um objeto com `new`, usado para inicializar o estado inicial (ex: garantir que todo `Produto` já nasça com nome e preço definidos, em vez de precisar setar depois). O **destrutor** (`__destruct`) é chamado quando o objeto é destruído/sai de escopo — raramente usado no dia a dia PHP web (diferente de linguagens com gerenciamento manual de memória), mas útil para liberar recursos externos (ex: fechar um arquivo). Desde o PHP 8.0, existe o **constructor property promotion**: uma forma abreviada de declarar e já atribuir propriedades diretamente na assinatura do construtor.

**Você precisa dominar:**
- Por que forçar dados obrigatórios no construtor evita objetos "meio prontos" (em estado inconsistente).
- Constructor promotion (`public function __construct(private string $nome, private float $preco) {}`) e como ele reduz repetição.
- Quando (raramente) `__destruct` é realmente necessário.
- Valores padrão em parâmetros do construtor.

**Perguntas que você deve saber responder:**
- Por que é considerado melhor exigir dados obrigatórios no construtor em vez de deixar o objeto ser criado "vazio" e preenchido depois?
- O que o constructor promotion elimina de código repetitivo, comparado à forma tradicional?

**Exercícios:**
- 🟢 Fácil: Reescreva a classe `Produto` para exigir `nome` e `preco` no construtor (sem constructor promotion ainda, do jeito tradicional: propriedade + atribuição manual).
- 🟡 Intermediário: Reescreva a mesma classe usando constructor promotion, comparando visualmente as duas versões.
- 🔴 Difícil: Crie uma classe `LogFile` cujo construtor abre um arquivo (`fopen`) e cujo `__destruct` garante o fechamento (`fclose`) mesmo se o objeto sair de escopo de forma inesperada. Demonstre isso criando o objeto dentro de uma função e mostrando (com uma mensagem no destrutor) o momento exato em que ele é destruído.

---

### 4.4 Herança

**O que é:** Herança permite que uma classe (filha/subclasse) reaproveite propriedades e métodos de outra classe (mãe/superclasse), usando `extends`, e ainda adicione ou sobrescreva comportamento próprio. É útil quando existe uma relação genuína de "é um tipo de" (`Cachorro` é um tipo de `Animal`). Um erro comum de iniciante é usar herança para "reaproveitar código" mesmo quando não existe essa relação semântica real — isso gera hierarquias frágeis e difíceis de manter (por isso sêniores costumam preferir composição a herança quando a relação não é clara, algo que revisitaremos na Fase 6).

**Você precisa dominar:**
- Sintaxe `class Filha extends Mae`, e como métodos/propriedades `public`/`protected` da mãe ficam disponíveis na filha.
- `parent::` para chamar explicitamente o construtor/método da classe mãe.
- Sobrescrita de método (override) — a filha redefine o comportamento herdado.
- Por que herança deveria representar "é um" (is-a) e não "tem um" (has-a) — esse segundo caso é composição.
- O problema da herança profunda (muitos níveis) e por que ela dificulta manutenção.

**Perguntas que você deve saber responder:**
- Qual a diferença semântica entre herança ("é um") e composição ("tem um")? Dê um exemplo de cada.
- Por que herdar de uma classe só para reaproveitar um método, sem relação semântica real, é considerado um anti-padrão?

**Exercícios:**
- 🟢 Fácil: Crie uma classe `Animal` com um método `emitirSom()` genérico, e uma classe `Cachorro extends Animal` que sobrescreve `emitirSom()` para retornar "Au au!".
- 🟡 Intermediário: Crie uma classe `Funcionario` com propriedades comuns (nome, salário) e um método `calcularBonus()`, e uma classe `Gerente extends Funcionario` que sobrescreve `calcularBonus()` com uma regra diferente, usando `parent::calcularBonus()` dentro dela para reaproveitar parte do cálculo original.
- 🔴 Difícil: Modele um cenário onde herança seria uma má escolha (ex: `Pato` herdando de `Ave` só por causa do método `voar()`, mas um `Pinguim` também é uma `Ave` e não voa) e reescreva a solução usando composição/interfaces (mesmo que você só veja interfaces a fundo no próximo tópico — pesquise brevemente ou aguarde e volte a este exercício depois de 4.5).

---

### 4.5 Interfaces e Polimorfismo

**O que é:** Uma **interface** define um "contrato": quais métodos uma classe promete implementar, sem dizer como. Qualquer classe que `implements` uma interface é obrigada a implementar todos os métodos dela. Isso é a base do **polimorfismo**: a capacidade de tratar objetos de classes diferentes de forma uniforme, desde que implementem a mesma interface — você escreve código que trabalha com "qualquer coisa que sabe fazer X", sem se importar com a classe concreta por trás. É um dos conceitos mais poderosos da OOP e extremamente cobrado em entrevistas sêniores porque é a base de código desacoplado e testável.

**Você precisa dominar:**
- Sintaxe `interface NomeInterface { public function metodo(): tipo; }` e `class X implements NomeInterface`.
- Uma classe pode implementar múltiplas interfaces (diferente de herança, que em PHP é única).
- Polimorfismo: uma função/método que recebe `NomeInterface $algo` funciona com qualquer classe concreta que a implemente.
- Por que "programar para uma interface, não para uma implementação" é um princípio central de código sênior (é literalmente o "D" do SOLID, que veremos na Fase 6).
- Diferença entre interface e classe abstrata (próximo tópico) — quando usar cada uma.

**Perguntas que você deve saber responder:**
- Por que uma função que recebe um parâmetro tipado como interface (`function notificar(Notificavel $canal)`) é mais flexível do que uma que recebe uma classe concreta (`function notificar(EmailService $canal)`)?
- O que significa "polimorfismo" com suas próprias palavras, com um exemplo fora do mundo da programação?

**Exercícios:**
- 🟢 Fácil: Crie uma interface `FormaGeometrica` com um método `calcularArea(): float`, e duas classes (`Retangulo`, `Circulo`) que a implementam, cada uma com sua própria fórmula.
- 🟡 Intermediário: Escreva uma função `imprimirArea(FormaGeometrica $forma): void` que funciona igualmente para `Retangulo` e `Circulo` sem saber qual classe concreta está recebendo, e chame-a passando um array misto de formas diferentes num `foreach`.
- 🔴 Difícil: Crie uma interface `MetodoPagamento` com um método `processar(float $valor): bool`, e pelo menos 3 implementações (`PagamentoCartao`, `PagamentoPix`, `PagamentoBoleto`), cada uma "simulando" sua lógica própria. Escreva uma classe `Checkout` que recebe uma `MetodoPagamento` (via construtor) e a usa para processar um pedido, sem nunca saber qual implementação concreta está usando — depois demonstre trocar o método de pagamento em tempo de execução sem alterar uma linha da classe `Checkout`.

---

### 4.6 Classes Abstratas

**O que é:** Uma classe abstrata é um meio-termo entre uma interface (só contrato, zero implementação) e uma classe comum (tudo implementado). Ela pode ter métodos já implementados (comportamento compartilhado) **e** métodos abstratos (sem corpo, que as classes filhas são obrigadas a implementar). Você não pode instanciar uma classe abstrata diretamente (`new ClasseAbstrata()` dá erro) — ela existe só para ser herdada.

**Você precisa dominar:**
- Sintaxe `abstract class` e `abstract public function metodo(): tipo;` (sem corpo).
- Diferença de quando usar interface vs classe abstrata: interface quando não há comportamento compartilhado nenhum e você quer múltiplos "contratos" numa classe; classe abstrata quando há código comum reaproveitável entre as filhas, além do contrato.
- Uma classe pode `extends` só uma classe abstrata, mas `implements` várias interfaces ao mesmo tempo.

**Perguntas que você deve saber responder:**
- Por que você não consegue instanciar uma classe abstrata diretamente?
- Dê um cenário real onde uma classe abstrata é mais apropriada do que uma interface pura.

**Exercícios:**
- 🟢 Fácil: Crie uma classe abstrata `Funcionario` com um método concreto `exibirNome(): void` e um método abstrato `calcularSalario(): float`, e duas classes filhas (`FuncionarioCLT`, `FuncionarioPJ`) com regras de cálculo diferentes.
- 🟡 Intermediário: Adicione à classe abstrata `Funcionario` um método concreto `gerarHolerite(): string` que usa internamente o resultado de `calcularSalario()` (que é abstrato) — demonstrando que a classe mãe pode orquestrar lógica usando métodos que só as filhas sabem implementar.
- 🔴 Difícil: Modele um sistema de notificações com uma classe abstrata `Notificacao` que tem um método concreto `enviar(): void` (contendo lógica comum, como logging) que chama um método abstrato `montarMensagem(): string`, implementado de forma diferente por `NotificacaoEmail`, `NotificacaoSMS` e `NotificacaoPush`. Explique por que isso é um exemplo do padrão "Template Method" (você vai formalizar esse nome na Fase 6).

---

### 4.7 Traits

**O que é:** PHP não permite herança múltipla de classes (uma classe só pode ter uma mãe), mas às vezes você precisa reaproveitar o mesmo bloco de código em classes que não têm relação de herança entre si. **Traits** resolvem isso: são blocos de método reutilizáveis que você "importa" para dentro de uma classe com `use NomeDoTrait;`, como se fosse uma cópia colada do código ali dentro. É diferente de interface (que não tem implementação) e de herança (que é uma relação única e hierárquica).

**Você precisa dominar:**
- Sintaxe `trait NomeTrait { }` e `use NomeTrait;` dentro de uma classe.
- Uma classe pode usar múltiplos traits ao mesmo tempo.
- Resolução de conflitos quando dois traits têm método de mesmo nome (`insteadof`, `as`).
- Por que traits são úteis mas também podem ser abusados (esconder acoplamento, dificultar entender de onde vem um método só lendo a classe) — use com moderação.

**Perguntas que você deve saber responder:**
- Qual a diferença fundamental entre um trait e uma interface?
- Por que o uso excessivo de traits pode dificultar a leitura de uma classe?

**Exercícios:**
- 🟢 Fácil: Crie um trait `TemTimestamps` com métodos `getCriadoEm()`/`setCriadoEm()`, e use-o em duas classes diferentes (`Post`, `Comentario`) que não têm relação de herança entre si.
- 🟡 Intermediário: Crie dois traits com um método de mesmo nome (`log()`) e use ambos numa mesma classe, resolvendo o conflito explicitamente com `insteadof` e `as`.
- 🔴 Difícil: Refatore a classe `Notificacao` (do exercício difícil de 4.6) extraindo a lógica de logging comum para um trait `RegistraLog`, e discuta (em comentário no código) se essa é uma boa aplicação de trait ou se a classe abstrata já resolvia bem o suficiente — não existe resposta única aqui, o objetivo é você desenvolver critério.

---

### 4.8 Membros Estáticos e Constantes de Classe

**O que é:** Propriedades e métodos `static` pertencem à **classe em si**, não a uma instância específica — você acessa com `NomeDaClasse::$propriedade` ou `NomeDaClasse::metodo()`, sem precisar de `new`. Constantes de classe (`const NOME = valor;`) são valores fixos associados à classe. Uso comum de `static`: contadores globais (quantos objetos foram criados), métodos utilitários que não dependem de estado de instância (ex: `Matematica::somar(2, 3)`), e o padrão Singleton (que veremos na Fase 6). Cuidado: abuso de `static` cria acoplamento forte e dificulta testes (é praticamente "estado global disfarçado").

**Você precisa dominar:**
- Sintaxe `static` em propriedades e métodos, e acesso via `::`.
- `self::` vs `static::` (relevante para Late Static Binding, próximo tópico).
- Constantes de classe (`const`) vs propriedades estáticas (a diferença é que constantes nunca mudam).
- Por que métodos estáticos são mais difíceis de testar (não dá para "trocar" a implementação em um teste, diferente de um objeto injetado).

**Perguntas que você deve saber responder:**
- Por que abusar de métodos estáticos torna uma classe mais difícil de testar isoladamente?
- Qual a diferença entre `const` numa classe e `static` numa propriedade?

**Exercícios:**
- 🟢 Fácil: Crie uma classe `Contador` com uma propriedade estática `$total` que é incrementada toda vez que um novo objeto é instanciado (usando o construtor), e um método estático `getTotal()`.
- 🟡 Intermediário: Crie uma classe `ConversorMoeda` com constantes de classe para taxas de câmbio fixas e um método estático `converter(float $valor, string $moeda): float`.
- 🔴 Difícil: Discuta e demonstre em código por que uma classe `Logger` inteiramente estática (todos os métodos `static`) é mais difícil de testar do que uma versão baseada em objeto instanciável injetado via construtor — implemente as duas versões e escreva (em comentário) o motivo pelo qual a segunda seria preferida em código sênior.

---

### 4.9 Métodos Mágicos

**O que é:** PHP tem um conjunto de métodos especiais, todos começando com `__`, que são chamados automaticamente pelo interpretador em situações específicas: `__construct`/`__destruct` (já vimos), `__get`/`__set` (chamados ao acessar/atribuir uma propriedade inexistente ou privada de fora), `__call`/`__callStatic` (chamados ao tentar chamar um método que não existe), `__toString` (chamado quando o objeto é tratado como string, ex: `echo $objeto`), `__invoke` (permite "chamar" um objeto como se fosse uma função), `__clone` (customiza o comportamento ao clonar um objeto). São poderosos para criar APIs elegantes, mas também podem tornar o código "mágico demais" e difícil de rastrear — use com intenção clara.

**Você precisa dominar:**
- `__get`/`__set` e o caso de uso clássico (propriedades dinâmicas controladas, ex: um objeto tipo "container" de configuração).
- `__call`/`__callStatic` e como frameworks como Laravel usam isso extensivamente (ex: métodos de query builder "mágicos").
- `__toString` para permitir que um objeto seja impresso diretamente como texto legível.
- `__invoke` e onde isso aparece (ex: classes de ação única, Single Action Controllers no Laravel).
- O trade-off entre "código elegante" e "código rastreável" ao usar métodos mágicos.

**Perguntas que você deve saber responder:**
- Por que métodos mágicos tornam mais difícil "ir para a definição" de um comportamento no editor?
- Dê um exemplo real do Laravel onde `__call` é usado por trás dos panos.

**Exercícios:**
- 🟢 Fácil: Crie uma classe `Dinheiro` com um método `__toString()` que formata o valor interno como moeda (ex: "R$ 10,50") ao fazer `echo $dinheiro`.
- 🟡 Intermediário: Crie uma classe `ConfiguracaoDinamica` que usa `__get`/`__set` para permitir acessar/definir configurações como se fossem propriedades públicas (`$config->nomeApp = "Meu App"; echo $config->nomeApp;`), mas guardando tudo internamente num array privado.
- 🔴 Difícil: Crie uma classe `SomadorInvocavel` que implementa `__invoke(int $a, int $b): int`, permitindo usá-la como `$somar = new SomadorInvocavel(); echo $somar(2, 3);`. Depois discuta (comentário no código) um cenário real do Laravel onde essa técnica é usada (dica: Single Action Controllers e classes de "Action").

---

### 4.10 Namespaces e Autoloading (PSR-4)

**O que é:** Conforme um projeto cresce, você vai ter dezenas ou centenas de classes, e nomes vão colidir (duas bibliotecas diferentes podem ter uma classe `Request`, por exemplo). **Namespaces** resolvem isso agrupando classes em "pastas lógicas" (`namespace App\Models; class Produto {}` faz a classe se chamar, de fato, `App\Models\Produto`). O **autoloading** é o mecanismo que carrega automaticamente o arquivo certo quando você usa uma classe, sem precisar de `require` manual — o padrão universal para isso é o **PSR-4**, que mapeia namespaces para pastas do disco, e o Composer implementa isso automaticamente a partir do seu `composer.json`.

**Você precisa dominar:**
- Declarar namespace no topo do arquivo (`namespace App\Models;`) e importar classes de outros namespaces com `use App\Services\ProdutoService;`.
- Como o PSR-4 mapeia `Namespace\Classe` para um caminho de arquivo em disco (ex: `App\Models\Produto` → `src/Models/Produto.php`, conforme configurado no `composer.json`).
- Diferença entre `use` de namespace (importar classe) e `use` de trait (dentro de classe) e `use` de closure (capturar variável) — mesmo símbolo, três significados diferentes por contexto.
- Alias de importação (`use App\Models\Produto as ProdutoModel;`).
- Por que namespaces eliminam a necessidade de nomes de classe gigantes tipo `App_Models_Produto` (convenção antiga, pré-namespace).

**Perguntas que você deve saber responder:**
- Como o autoloader do Composer "sabe" em qual arquivo procurar a classe `App\Services\PedidoService`?
- Por que duas classes com o mesmo nome curto (`Request`) podem coexistir no mesmo projeto sem conflito?

**Exercícios:**
- 🟢 Fácil: Organize 2 classes já criadas anteriormente (ex: `Produto`, `ContaBancaria`) em namespaces diferentes (`App\Models`, `App\Financeiro`) e demonstre importá-las e usá-las juntas num script.
- 🟡 Intermediário: Configure um `composer.json` do zero com autoload PSR-4 mapeando o namespace `App\` para a pasta `src/`, rode `composer dump-autoload`, e comprove que consegue instanciar uma classe de dentro de `src/` sem nenhum `require` manual.
- 🔴 Difícil: Crie duas classes de nome idêntico (`Logger`) em namespaces diferentes (`App\Infra\Logger` e `App\Testes\Logger`), e escreva um script que usa as duas ao mesmo tempo, uma delas com alias (`use ... as`), demonstrando que não há conflito.

---

### 4.11 Late Static Binding

**O que é:** Este é um tópico avançado que costuma confundir até devs pleno. Quando você usa `self::` dentro de um método, ele sempre se refere à classe onde o método foi **fisicamente escrito**, mesmo que chamado a partir de uma classe filha. `static::` (Late Static Binding), por outro lado, se refere à classe que foi **realmente usada na chamada** em tempo de execução. Isso importa muito em métodos estáticos de fábrica herdados (`Modelo::criar()`) onde você quer que o método da classe mãe retorne uma instância da classe filha correta, não sempre da classe mãe.

**Você precisa dominar:**
- Diferença de comportamento entre `self::` e `static::` quando chamados via herança.
- Cenário clássico: um método estático de "fábrica" na classe mãe que precisa instanciar a classe filha correta.

**Perguntas que você deve saber responder:**
- Se uma classe `Animal` tem um método estático que usa `self::class` e uma classe `Cachorro extends Animal` chama esse método herdado, qual classe é referenciada? E se fosse `static::class`?

**Exercícios:**
- 🟢 Fácil: Crie uma classe `Animal` com um método estático `criar(): self` que usa `self::class` e uma filha `Cachorro extends Animal`. Chame `Cachorro::criar()` e observe (com `get_class()`) qual classe realmente foi instanciada.
- 🟡 Intermediário: Troque `self::class` por `static::class` no mesmo método e repita o teste, comparando o resultado.
- 🔴 Difícil: Implemente um mini "Active Record" simplificado: uma classe abstrata `Modelo` com um método estático `criar(array $dados): static` que usa Late Static Binding para sempre retornar uma instância da classe filha correta (`Usuario::criar([...])` deve retornar um `Usuario`, não um `Modelo`), e demonstre com pelo menos duas classes filhas diferentes.

---

### 4.12 PHP Moderno: Enums, Readonly, Attributes e Tipagem Estrita

**O que é:** Versões recentes do PHP (8.1, 8.2, 8.3+) trouxeram recursos que tornam o código mais seguro e expressivo. **Enums** representam um conjunto fixo e nomeado de valores possíveis (ex: status de um pedido: Pendente, Pago, Cancelado) — muito melhor do que usar strings ou números "mágicos" soltos pelo código. **Readonly properties** garantem que uma propriedade só pode ser atribuída uma vez (geralmente no construtor), reforçando imutabilidade. **Attributes** (`#[NomeDoAttribute]`) são metadados estruturados anexados a classes/métodos/propriedades, lidos em tempo de execução via Reflection (base de muita "mágica" de frameworks modernos). `declare(strict_types=1)` faz o PHP parar de converter tipos automaticamente em chamadas de função, lançando `TypeError` em vez de converter silenciosamente.

**Você precisa dominar:**
- Enums puros (`enum Status { case Pendente; case Pago; }`) e enums com valor de backup (`enum Status: string { case Pendente = 'pendente'; }`).
- Métodos dentro de enums.
- `readonly` em propriedades e por que isso ajuda a modelar Value Objects (Fase 13) e evitar mutação acidental.
- O que muda de comportamento com `declare(strict_types=1)` no topo do arquivo.
- Noção básica de Attributes (não precisa dominar Reflection a fundo agora, só reconhecer a sintaxe e o propósito).

**Perguntas que você deve saber responder:**
- Por que um `enum StatusPedido` é melhor do que usar strings soltas (`'pendente'`, `'pago'`) espalhadas pelo código?
- O que muda, na prática, ao adicionar `declare(strict_types=1)` no topo de um arquivo que tem uma função `function soma(int $a, int $b): int` chamada com `soma("2", "3")`?

**Exercícios:**
- 🟢 Fácil: Crie um enum `StatusPedido` com os casos `Pendente`, `Pago`, `Cancelado`, `Entregue`, e use-o numa classe `Pedido` no lugar de uma propriedade string solta.
- 🟡 Intermediário: Adicione ao enum `StatusPedido` um método `podeSerCancelado(): bool` que retorna `true` apenas para `Pendente` e `Pago`, usando `match($this)` dentro do próprio enum.
- 🔴 Difícil: Crie uma classe `Dinheiro` totalmente imutável usando `readonly` em todas as propriedades, com `declare(strict_types=1)` no arquivo, e um método `somar(Dinheiro $outro): Dinheiro` que retorna uma **nova** instância (nunca modifica `$this`). Demonstre que tentar reatribuir uma propriedade `readonly` depois de criada lança um erro.

---

### 4.13 SPL: Iterators, Generators e Interfaces Nativas

**O que é:** A SPL (Standard PHP Library) é um conjunto de interfaces e estruturas de dados nativas do PHP. As mais relevantes no dia a dia: `Iterator`/`IteratorAggregate` (permitem que um objeto customizado seja percorrido com `foreach` como se fosse um array), `ArrayAccess` (permite acessar um objeto com colchetes, `$objeto['chave']`), `Countable` (permite usar `count($objeto)`). **Generators** (função com `yield` no lugar de `return`) são uma forma extremamente eficiente de percorrer grandes coleções de dados sem carregar tudo na memória de uma vez — o valor é "gerado" sob demanda, item a item.

**Você precisa dominar:**
- Implementar `Iterator` (ou a versão simplificada `IteratorAggregate`) numa classe para permitir `foreach` sobre ela.
- `ArrayAccess` para permitir sintaxe de array num objeto customizado.
- `yield` em uma função geradora, e por que isso economiza memória comparado a retornar um array gigante de uma vez.
- Diferença conceitual entre um array "todo na memória" e um generator "sob demanda" (lazy evaluation).

**Perguntas que você deve saber responder:**
- Por que percorrer um arquivo de 2GB linha a linha com um Generator é viável, mas carregar tudo num array de uma vez pode travar a aplicação?
- O que `yield` faz de diferente de `return` dentro de uma função?

**Exercícios:**
- 🟢 Fácil: Escreva uma função geradora `numerosPares(int $limite)` que usa `yield` para gerar os números pares de 0 até o limite, e percorra o resultado com `foreach`.
- 🟡 Intermediário: Crie uma classe `Colecao` que implementa `IteratorAggregate` para envolver um array interno privado de itens, permitindo `foreach ($colecao as $item)` mesmo com o array sendo privado.
- 🔴 Difícil: Escreva uma função geradora `lerLinhasDeArquivo(string $caminho)` que usa `yield` para devolver uma linha por vez de um arquivo grande (sem usar `file()` que carregaria tudo de uma vez), e demonstre processando um arquivo de texto linha a linha com uso de memória constante (você pode comprovar isso com `memory_get_usage()` antes e depois).

---

### 🏗️ Checkpoint de Projeto #3 (opcional)

**Projeto sugerido:** Refatore completamente o Checkpoint #2 (lista de tarefas) para OOP: uma classe `Tarefa`, uma classe `RepositorioDeTarefas` (responsável por salvar/carregar do arquivo `.json`), separação clara entre "regra de negócio" (classes) e "roteamento/exibição" (os arquivos `.php` que recebem a requisição). Use pelo menos: encapsulamento correto, uma interface, um enum de status, e constructor promotion.
**O que isso comprova:** que você entende OOP não como decoração, mas como ferramenta real de organização — dá para perceber a diferença de manutenibilidade comparando com a versão procedural da Fase 2.

---
## FASE 5 — Padrões PHP-FIG e Ecossistema (PSR, Composer)

> Um dev júnior escreve código que funciona na sua máquina. Um dev sênior escreve código que qualquer outro dev PHP do mundo consegue ler, integrar e confiar — e isso só é possível porque existem padrões compartilhados pela comunidade.

### 5.1 PSRs — Padrões de Estilo de Código (PSR-1, PSR-12)

**O que é:** O **PHP-FIG** (PHP Framework Interop Group) é uma organização que define padrões (PSRs — PHP Standard Recommendations) para que código PHP de diferentes autores/frameworks seja consistente e interoperável. **PSR-1** define regras básicas (ex: arquivos devem usar só `<?php` ou só HTML, nomes de classe em `PascalCase`, nomes de método em `camelCase`). **PSR-12** é o padrão de estilo de código mais detalhado hoje (substituiu o antigo PSR-2): indentação, chaves, espaçamento, ordem de declarações. Seguir isso não é "frescura" — é o que permite que qualquer sênior abra seu código e leia fluentemente, sem se adaptar a um estilo pessoal esquisito.

**Você precisa dominar:**
- As regras centrais do PSR-12 (indentação de 4 espaços, chaves de método em linha própria, um `use` por linha, etc.).
- Convenções de nomenclatura: `PascalCase` para classes, `camelCase` para métodos/propriedades, `SCREAMING_SNAKE_CASE` para constantes.
- Ferramentas que aplicam isso automaticamente: **PHP_CodeSniffer** (detecta violações) e **PHP-CS-Fixer** (corrige automaticamente).
- Por que consistência de estilo importa mais em time do que "qual estilo é objetivamente melhor".

**Perguntas que você deve saber responder:**
- Por que times adotam uma ferramenta automática (PHP-CS-Fixer) em vez de confiar em cada dev seguir o padrão manualmente?
- Cite 3 regras do PSR-12 que você consegue lembrar sem consultar.

**Exercícios:**
- 🟢 Fácil: Pegue um trecho de código PHP propositalmente "bagunçado" (indentação inconsistente, chaves em lugares diferentes) e reformate manualmente seguindo o PSR-12.
- 🟡 Intermediário: Instale o PHP-CS-Fixer via Composer no seu projeto de estudo e rode-o sobre o código da Fase 4, corrigindo automaticamente qualquer desvio.
- 🔴 Difícil: Configure um arquivo `.php-cs-fixer.php` customizado escolhendo um conjunto de regras PSR-12 + regras extras de sua preferência (ex: ordenação de imports), e documente por que você escolheu cada regra extra.

---

### 5.2 PSR-4 — Autoloading Aprofundado

**O que é:** Já usamos PSR-4 na Fase 4 de forma prática; aqui você aprofunda o entendimento do mecanismo. PSR-4 define uma convenção clara: um **prefixo de namespace** é mapeado para um **diretório base**, e a partir daí, a estrutura de subpastas espelha a estrutura de sub-namespaces, e o nome do arquivo é exatamente o nome da classe + `.php`. O Composer lê isso da seção `autoload` do `composer.json` e gera um autoloader otimizado.

**Você precisa dominar:**
- A seção `autoload.psr-4` do `composer.json` e como ela mapeia prefixo → pasta.
- Por que a estrutura de pastas deve espelhar exatamente a estrutura de namespaces.
- `composer dump-autoload` e quando é necessário rodá-lo (ex: depois de adicionar uma nova entrada no autoload, não é necessário para novas classes dentro de pastas já mapeadas).
- `composer dump-autoload -o` (otimizado) e a diferença para ambiente de produção.

**Perguntas que você deve saber responder:**
- Se o `composer.json` mapeia `"App\\": "src/"`, em qual arquivo o Composer vai procurar a classe `App\Services\Pagamento\GatewayPix`?

**Exercícios:**
- 🟢 Fácil: Adicione uma nova pasta `src/Services/` ao projeto de estudo com uma classe `App\Services\Calculadora`, mapeada corretamente no `composer.json`, e instancie-a sem `require`.
- 🟡 Intermediário: Quebre de propósito o mapeamento (namespace não bate com a pasta) e documente a mensagem de erro exata que o PHP mostra, explicando por que ela acontece.
- 🔴 Difícil: Configure múltiplos mapeamentos PSR-4 no mesmo `composer.json` (ex: `App\` para `src/` e `App\Tests\` para `tests/`), e explique quando faz sentido separar assim.

---

### 5.3 Composer — Gerenciador de Dependências

**O que é:** Composer é a ferramenta que gerencia as bibliotecas (pacotes) externas que seu projeto depende, junto com o autoloading. O `composer.json` declara quais pacotes e quais versões seu projeto precisa; o `composer.lock` trava as versões exatas instaladas (garantindo que todo mundo do time — e produção — use exatamente as mesmas versões). O **versionamento semântico** (semver: `MAJOR.MINOR.PATCH`) é a convenção que permite ao Composer saber quais atualizações são seguras (`^1.2.3` aceita atualizações que não quebram compatibilidade).

**Você precisa dominar:**
- `composer require pacote/nome`, `composer install` (instala conforme o `.lock`), `composer update` (atualiza respeitando as restrições do `.json`).
- Diferença entre `composer.json` (o que você pediu) e `composer.lock` (o que foi realmente instalado) — e por que o `.lock` deve ir para o controle de versão.
- Versionamento semântico: `^`, `~`, e faixas exatas, e o que cada símbolo permite atualizar.
- `require` (dependências de produção) vs `require-dev` (dependências só de desenvolvimento, como PHPUnit).
- Scripts do Composer (`"scripts": {"test": "phpunit"}`) para padronizar comandos do projeto.
- Noção de como publicar um pacote próprio no Packagist (mesmo que só conceitualmente por agora).

**Perguntas que você deve saber responder:**
- Por que o `composer.lock` deve sempre ser commitado no Git, mesmo sendo um arquivo "gerado"?
- Qual a diferença prática entre `^1.2.3` e `~1.2.3` nas restrições de versão?
- Por que uma biblioteca de teste como PHPUnit deveria ir em `require-dev`, não em `require`?

**Exercícios:**
- 🟢 Fácil: Inicialize um `composer.json` do zero com `composer init`, adicione uma dependência real (ex: `phpunit/phpunit` como `require-dev`), e explore o `composer.lock` gerado.
- 🟡 Intermediário: Adicione um script customizado no `composer.json` (ex: `"lint": "phpcs src/"`) e execute-o com `composer lint`.
- 🔴 Difícil: Simule um cenário de "quebra de versão": instale uma dependência fixando uma versão exata, force uma atualização manual do `composer.json` para uma versão maior incompatível, rode `composer update` e documente o que acontece e como você resolveria esse tipo de conflito num projeto real em time.

---
## FASE 6 — Engenharia de Software I: Código Limpo e Design

> A partir daqui a trilha deixa de ser "sintaxe do PHP" e passa a ser "como pensar como engenheiro de software". Isso é o que realmente separa júnior de sênior — a linguagem é só a ferramenta; o raciocínio de design é a habilidade.

### 6.1 Clean Code (Código Limpo)

**O que é:** Clean Code é um conjunto de práticas (popularizadas pelo livro de mesmo nome, de Robert C. Martin) para escrever código que é fácil de **ler e entender**, não só de "fazer funcionar". A ideia central: código é lido muito mais vezes do que é escrito (por outros devs, por você mesmo daqui a 6 meses), então otimizar para legibilidade tem retorno real em produtividade e menos bugs. Isso inclui: nomes descritivos (uma variável `$d` diz nada; `$diasDesdeUltimoLogin` diz tudo), funções pequenas que fazem uma coisa só, evitar comentários que só explicam um código mal escrito (o código deveria se explicar sozinho), e evitar duplicação.

**Você precisa dominar:**
- Nomenclatura significativa: variáveis, funções e classes com nomes que revelam intenção, sem abreviações obscuras.
- Funções pequenas e com um único nível de abstração (uma função que só orquestra chamadas não deveria também ter lógica de baixo nível misturada).
- "Code smells" mais comuns: função muito longa, muitos parâmetros, comentário que compensa nome ruim, código duplicado, aninhamento profundo de `if`.
- Diferença entre comentário útil (explica o "porquê", uma decisão não óbvia) e comentário desnecessário (repete o que o código já diz).

**Perguntas que você deve saber responder:**
- Por que "o código deveria se explicar sozinho" não significa "nunca escrever comentário nenhum"?
- Dê um exemplo de nome de variável ruim e reescreva-o de forma que revele intenção.

**Exercícios:**
- 🟢 Fácil: Pegue uma função com nomes ruins (`$d`, `$x`, `function proc($a, $b)`) e renomeie tudo para nomes que revelam intenção, sem mudar o comportamento.
- 🟡 Intermediário: Pegue uma função longa (com 30+ linhas, misturando validação, cálculo e formatação de saída) e quebre-a em 3-4 funções menores, cada uma com uma única responsabilidade clara.
- 🔴 Difícil: Pegue o código do Checkpoint #3 (lista de tarefas em OOP) e faça uma "auditoria de code smells": liste pelo menos 5 pontos de melhoria possíveis (nomenclatura, funções grandes, duplicação, aninhamento) e refatore pelo menos 3 deles.

---

### 6.2 DRY, KISS e YAGNI

**O que é:** Três princípios curtos que guiam decisões de design no dia a dia. **DRY** (Don't Repeat Yourself): cada pedaço de conhecimento/regra de negócio deveria existir em um único lugar no sistema — duplicação significa que uma mudança de regra exige lembrar de atualizar em vários lugares (fonte clássica de bugs). **KISS** (Keep It Simple, Stupid): prefira a solução mais simples que resolve o problema, evite complexidade desnecessária "por elegância". **YAGNI** (You Aren't Gonna Need It): não construa flexibilidade/abstração para um requisito futuro hipotético que ainda não existe — isso é over-engineering, e é tão prejudicial quanto código bagunçado.

**Você precisa dominar:**
- Identificar duplicação de **regra de negócio** (que precisa ser eliminada) vs duplicação **acidental** de estrutura de código que representa coisas conceitualmente diferentes (que não precisa).
- Reconhecer quando uma solução está complexa demais para o problema real (KISS).
- Reconhecer over-engineering: abstrações, interfaces e configurabilidade construídas "para o futuro" sem necessidade real hoje (YAGNI).
- O equilíbrio entre os três — DRY em excesso pode virar acoplamento desnecessário; YAGNI em excesso pode virar código difícil de estender depois. Sênior é quem calibra isso com julgamento, não regra cega.

**Perguntas que você deve saber responder:**
- Dê um exemplo de duplicação que NÃO deveria ser eliminada (é só coincidência estrutural, não a mesma regra de negócio).
- Por que criar uma interface com 5 implementações "para o futuro", quando você só precisa de uma hoje, geralmente viola YAGNI?

**Exercícios:**
- 🟢 Fácil: Encontre um trecho de código com lógica de validação duplicada em dois lugares diferentes e extraia para uma única função/método reaproveitado (DRY).
- 🟡 Intermediário: Pegue uma solução que você (ou um exemplo dado pela IA mentora) tenha deixado "genérica demais" (ex: um sistema de configuração super flexível para um caso de uso simples) e simplifique-a aplicando YAGNI, removendo a flexibilidade não usada.
- 🔴 Difícil: Analise um cenário onde DRY e YAGNI entram em conflito (ex: dois módulos têm uma regra parecida, mas não idêntica, e evoluem por razões diferentes) e escreva uma justificativa técnica para NÃO unificá-los, mesmo parecendo duplicação à primeira vista.

---

### 6.3 Princípios SOLID

**O que é:** SOLID é um acrônimo para 5 princípios de design orientado a objetos, formulados para produzir código mais fácil de manter e estender. É, sem dúvida, o assunto mais cobrado em entrevistas técnicas de nível pleno/sênior em PHP/Laravel. Vamos ver cada letra a fundo, com exemplo, porque entender superficialmente ("ah, SOLID, já ouvi falar") não é suficiente para o nível que você quer atingir.

**S — Single Responsibility Principle (Princípio da Responsabilidade Única):** uma classe deveria ter um, e somente um, motivo para mudar. Se uma classe `Pedido` calcula o total, formata um e-mail de confirmação e salva no banco, ela tem 3 motivos diferentes para mudar (regra de cálculo, template de e-mail, esquema de banco) — isso é um sinal de que deveria ser 3 classes.

**O — Open/Closed Principle (Aberto/Fechado):** o código deveria estar aberto para extensão, mas fechado para modificação. Em vez de adicionar um novo `if` toda vez que surge um novo caso (ex: um novo método de pagamento), você deveria conseguir **adicionar** uma nova implementação (uma nova classe) sem **alterar** o código existente que já funciona e já foi testado. Interfaces e polimorfismo (Fase 4.5) são a ferramenta principal para isso.

**L — Liskov Substitution Principle (Substituição de Liskov):** se `B` é uma subclasse de `A`, você deveria poder usar um objeto `B` em qualquer lugar que espera um `A`, sem quebrar o comportamento esperado. O exemplo clássico de violação: `Quadrado extends Retangulo` parece fazer sentido geometricamente, mas quebra porque alterar só a largura de um quadrado (herdado do comportamento de retângulo) não faz sentido — a substituição quebra a expectativa.

**I — Interface Segregation Principle (Segregação de Interface):** é melhor ter várias interfaces pequenas e específicas do que uma interface grande e genérica que força classes a implementar métodos que não fazem sentido para elas. Se uma interface `Trabalhador` tem `trabalhar()` e `comer()`, uma classe `Robo` que implementa isso é forçada a ter um método `comer()` sem sentido.

**D — Dependency Inversion Principle (Inversão de Dependência):** módulos de alto nível (regras de negócio) não deveriam depender diretamente de módulos de baixo nível (detalhes de implementação, como qual banco de dados ou qual serviço de e-mail); ambos deveriam depender de abstrações (interfaces). Isso é a base da Injeção de Dependência, que veremos com força total no Laravel (Fase 9).

**Você precisa dominar:**
- Reconhecer, olhando para uma classe real, qual princípio ela está violando.
- Refatorar código violando SRP, OCP, LSP, ISP e DIP para uma versão que respeita cada princípio.
- Entender que SOLID não são regras absolutas e cegas — são heurísticas, e aplicá-las demais também pode gerar over-engineering (conexão direta com YAGNI).

**Perguntas que você deve saber responder:**
- Explique, com um exemplo próprio (não o do quadrado/retângulo), uma violação do Liskov Substitution Principle.
- Como o Dependency Inversion Principle se relaciona com Injeção de Dependência, que veremos no Laravel?
- Dê um exemplo real de uma classe do Laravel/PHP que provavelmente viola SRP e como você a dividiria.

**Exercícios:**
- 🟢 Fácil: Pegue uma classe `Pedido` que calcula total, formata mensagem de e-mail E salva em arquivo — identifique a violação de SRP e separe em 3 classes (`Pedido`, `FormatadorDeEmail`, `RepositorioDePedidos`).
- 🟡 Intermediário: Reescreva o exercício difícil da Fase 4.5 (`MetodoPagamento`) garantindo explicitamente que ele respeita o Open/Closed Principle: demonstre adicionando um 4º método de pagamento sem alterar nenhuma linha da classe `Checkout`.
- 🔴 Difícil: Pegue o Checkpoint #3 (lista de tarefas) e faça uma auditoria SOLID completa: para cada uma das 5 letras, escreva se o código respeita ou viola o princípio, com justificativa, e refatore pelo menos 2 violações reais encontradas.

---

### 6.4 Design Patterns — Padrões Criacionais

**O que é:** Design Patterns são soluções reutilizáveis para problemas de design que aparecem repetidamente. Padrões **criacionais** lidam com a forma como objetos são criados. **Factory Method**: delega a decisão de qual classe concreta instanciar para um método dedicado, em vez de espalhar `new ClasseX()` pelo código (facilita trocar a implementação depois). **Singleton**: garante que uma classe tenha uma única instância compartilhada em toda a aplicação (ex: uma conexão de banco) — poderoso, mas com fama de ser usado em excesso, criando estado global disfarçado; sêniores usam com moderação. **Builder**: constrói um objeto complexo passo a passo, útil quando a construção tem muitas variações/parâmetros opcionais.

**Você precisa dominar:**
- Implementar um Factory Method para centralizar a criação de objetos que variam por tipo.
- Implementar um Singleton corretamente (construtor privado, método estático de acesso) e articular os riscos (dificulta testes, esconde dependência).
- Implementar um Builder para um objeto com muitas combinações de configuração opcional.
- Reconhecer QUANDO cada padrão resolve um problema real, e quando é aplicação desnecessária (voltando a YAGNI).

**Perguntas que você deve saber responder:**
- Por que o Singleton é controverso e frequentemente citado como "anti-padrão" em código moderno testável?
- Quando um Builder é preferível a um construtor com muitos parâmetros opcionais?

**Exercícios:**
- 🟢 Fácil: Implemente um `MetodoPagamentoFactory` com um método estático `criar(string $tipo): MetodoPagamento` que retorna a implementação correta (reaproveitando as classes da Fase 4.5).
- 🟡 Intermediário: Implemente um Singleton `ConexaoBanco` (simulado, sem banco real ainda) e demonstre, com `spl_object_id()`, que duas chamadas retornam exatamente o mesmo objeto.
- 🔴 Difícil: Implemente um `RelatorioBuilder` que constrói um objeto `Relatorio` complexo (com título, filtros opcionais, ordenação opcional, formato de saída opcional) através de uma interface fluente (`$builder->comTitulo("Vendas")->comFiltro("mes", "10")->build()`), e discuta por que isso é mais legível do que um construtor com 6 parâmetros opcionais.

---

### 6.5 Design Patterns — Padrões Estruturais

**O que é:** Padrões estruturais lidam com como classes e objetos se compõem para formar estruturas maiores. **Adapter**: "traduz" uma interface incompatível para outra que seu código espera — muito usado ao integrar bibliotecas externas sem acoplar seu código diretamente a elas. **Decorator**: adiciona comportamento a um objeto dinamicamente, envolvendo-o, sem alterar sua classe original (ex: adicionar cache, logging ou validação "por fora" de um serviço). **Facade**: oferece uma interface simplificada para um subsistema complexo com muitas partes móveis (o próprio Laravel usa "Facades" como conceito central, embora de forma um pouco diferente do padrão GoF clássico — vale entender a diferença).

**Você precisa dominar:**
- Implementar um Adapter para "encaixar" uma biblioteca externa numa interface própria do seu domínio.
- Implementar um Decorator que envolve um objeto e adiciona comportamento (ex: logging) sem alterar a classe original.
- Entender a diferença entre a Facade do padrão GoF (simplifica um subsistema) e as Facades do Laravel (acesso estático conveniente a serviços do container).

**Perguntas que você deve saber responder:**
- Por que usar um Adapter para uma biblioteca de terceiros é melhor do que usar a biblioteca diretamente espalhada pelo seu código?
- Dê um exemplo prático de quando um Decorator seria mais apropriado do que simplesmente alterar a classe original.

**Exercícios:**
- 🟢 Fácil: Suponha duas bibliotecas fictícias de envio de e-mail com interfaces diferentes (`EnviadorAntigo::mandar($para, $msg)` vs `EnviadorNovo::send(array $dados)`) — crie um Adapter que unifica ambas atrás de uma interface própria `Notificador`.
- 🟡 Intermediário: Implemente um `LoggingDecorator` que envolve uma implementação de `MetodoPagamento` (da Fase 4.5/6.4) e registra um log antes e depois de `processar()`, sem alterar nenhuma classe de pagamento existente.
- 🔴 Difícil: Empilhe dois decorators diferentes sobre o mesmo objeto (ex: `LoggingDecorator` + `RetryDecorator`, este último tentando novamente em caso de falha) e demonstre que a ordem de empilhamento importa, com um exemplo concreto do comportamento mudando conforme a ordem.

---

### 6.6 Design Patterns — Padrões Comportamentais

**O que é:** Padrões comportamentais lidam com como objetos se comunicam e dividem responsabilidades. **Strategy**: encapsula um algoritmo/comportamento intercambiável numa classe própria, permitindo trocar o algoritmo em tempo de execução (você já implementou isso na prática na Fase 4.5/6.3, com `MetodoPagamento` — aquilo é o padrão Strategy). **Observer**: permite que um objeto ("sujeito") notifique automaticamente uma lista de "observadores" quando algo acontece, sem acoplamento direto entre eles (base de Events/Listeners do Laravel). **Repository**: embora tecnicamente mais associado a Domain-Driven Design do que ao catálogo GoF clássico, é onipresente em PHP/Laravel moderno — abstrai o acesso a dados (banco, API, arquivo) atrás de uma interface, para que a regra de negócio nunca dependa diretamente de "como" os dados são persistidos.

**Você precisa dominar:**
- Reconhecer que Strategy é o mesmo princípio já aplicado com `MetodoPagamento`/`FormaGeometrica` nas fases anteriores — conectar teoria e prática.
- Implementar um Observer simples (sujeito com `attach()`/`notify()`, observadores implementando uma interface comum).
- Implementar um Repository que abstrai a origem dos dados (por enquanto em arquivo/array; no futuro, banco de dados) atrás de uma interface.

**Perguntas que você deve saber responder:**
- Qual a diferença entre Strategy e Factory (ambos lidam com "várias implementações possíveis", mas resolvem problemas diferentes — qual)?
- Por que um Repository ajuda a aplicar o Dependency Inversion Principle (SOLID)?

**Exercícios:**
- 🟢 Fácil: Volte ao seu código de `MetodoPagamento` e documente explicitamente, em comentário, por que aquilo é uma aplicação do padrão Strategy.
- 🟡 Intermediário: Implemente um `NotificadorDeEstoque` (Observer) que, quando o estoque de um produto chega a zero, notifica automaticamente uma lista de observadores (ex: `EmailObserver`, `LogObserver`) sem que a classe de estoque conheça os observadores concretos.
- 🔴 Difícil: Implemente uma interface `RepositorioDeTarefas` com dois métodos (`salvar`, `listarTodas`) e duas implementações concretas: uma salvando em arquivo `.json` (reaproveitando a Fase 3) e outra guardando em memória (um array, útil para testes). Demonstre que uma classe de serviço que depende apenas da interface funciona identicamente com as duas implementações trocadas em tempo de execução.

---

### 6.7 Refatoração

**O que é:** Refatorar é melhorar a estrutura interna do código **sem mudar seu comportamento externo observável**. É uma disciplina, não um "arrumar por arrumar": você faz pequenas mudanças incrementais, mantendo os testes passando (ou escrevendo testes antes, se não existirem — veremos isso na Fase 8), e comita com frequência. Um sênior refatora constantemente como parte do trabalho normal (o chamado "escoteiro": deixar o código um pouco melhor do que encontrou), em vez de deixar a dívida técnica acumular até virar um projeto de "reescrever tudo".

**Você precisa dominar:**
- A regra de ouro: refatoração nunca muda comportamento observável — se mudou, não foi refatoração, foi uma nova feature ou um bug fix disfarçado.
- Técnicas básicas: extrair método/função, renomear, extrair classe, substituir condicional complexo por polimorfismo (conectando com Fase 4.5/6.3).
- Por que fazer pequenos passos (e testar a cada passo) é mais seguro do que uma refatoração gigante de uma vez.
- A regra do escoteiro ("deixe o código um pouco melhor do que você encontrou") como hábito contínuo, não um projeto à parte.

**Perguntas que você deve saber responder:**
- Por que misturar refatoração com adição de nova funcionalidade no mesmo commit é considerado uma má prática?
- O que significa "os testes são a rede de segurança da refatoração"?

**Exercícios:**
- 🟢 Fácil: Pegue uma função com um `if/elseif` de 5 ramos calculando algo diferente em cada caso, e refatore substituindo por `match` ou por um array de mapeamento, sem mudar o resultado para nenhum caso de teste.
- 🟡 Intermediário: Pegue uma classe do Checkpoint #3 com um método fazendo "coisa demais" e refatore extraindo pelo menos 2 métodos privados menores, cada um com um nome que descreve exatamente o que faz.
- 🔴 Difícil: Pegue um trecho de código com um condicional complexo decidindo comportamento por tipo (`if ($tipo === 'cartao') {...} elseif ($tipo === 'pix') {...}`) e refatore-o para polimorfismo (Strategy), em pequenos passos documentados (antes/depois de cada passo), demonstrando que o comportamento final é idêntico ao original.

---

### 🏗️ Checkpoint de Projeto #4 (opcional)

**Projeto sugerido:** Pegue o Checkpoint #3 (lista de tarefas em OOP) e faça uma reengenharia completa aplicando: SOLID em todas as classes, pelo menos 2 Design Patterns justificados (não forçados), e uma sessão de refatoração documentada (antes/depois, com justificativa de cada mudança). O objetivo não é adicionar feature nova — é deixar o design mais robusto.
**O que isso comprova:** que você já pensa em design de código, não só em "fazer funcionar" — esse é o divisor de águas entre júnior e pleno/sênior.

---
## FASE 7 — Banco de Dados

> Praticamente toda aplicação real precisa persistir dados. Um sênior não só "usa o Eloquent" — ele entende o que está acontecendo por baixo, porque é isso que permite diagnosticar problemas de performance e modelar dados corretamente.

### 7.1 Fundamentos de SQL

**O que é:** SQL (Structured Query Language) é a linguagem usada para conversar com bancos de dados relacionais. As operações básicas são chamadas **CRUD**: `INSERT` (criar), `SELECT` (ler), `UPDATE` (atualizar), `DELETE` (remover). `SELECT` sozinho já tem um mundo: `WHERE` filtra linhas, `ORDER BY` ordena, `GROUP BY` agrupa (geralmente com funções agregadas como `COUNT`, `SUM`, `AVG`), `JOIN` combina dados de tabelas relacionadas (`INNER JOIN` só traz o que casa nas duas tabelas, `LEFT JOIN` traz tudo da tabela da esquerda mesmo sem correspondência). Índices são estruturas que aceleram buscas em colunas específicas, ao custo de espaço e de escrita ligeiramente mais lenta.

**Você precisa dominar:**
- `INSERT`, `SELECT`, `UPDATE`, `DELETE` com `WHERE` para filtrar exatamente as linhas certas.
- `JOIN`s: diferença entre `INNER JOIN`, `LEFT JOIN`, `RIGHT JOIN`, e quando usar cada um.
- `GROUP BY` com funções agregadas (`COUNT`, `SUM`, `AVG`, `MAX`, `MIN`), e a diferença entre `WHERE` (filtra antes de agrupar) e `HAVING` (filtra depois de agrupar).
- Chaves primárias (identificam unicamente uma linha) e chaves estrangeiras (referenciam outra tabela, garantindo integridade referencial).
- O que é um índice, por que ele acelera buscas, e por que não se deve indexar tudo (custo em escrita e espaço).
- Normalização básica (evitar dados duplicados/redundantes espalhando informação em tabelas relacionadas corretamente).

**Perguntas que você deve saber responder:**
- Qual a diferença entre `INNER JOIN` e `LEFT JOIN`, com um exemplo em que o resultado seria diferente entre os dois?
- Por que `WHERE` e `HAVING` não são intercambiáveis quando você usa `GROUP BY`?
- Por que colocar um índice em toda coluna "só para garantir" não é uma boa prática?

**Exercícios:**
- 🟢 Fácil: Escreva as queries SQL de `CREATE TABLE` para duas tabelas relacionadas (`usuarios` e `pedidos`, onde `pedidos.usuario_id` referencia `usuarios.id`), e insira alguns dados de exemplo.
- 🟡 Intermediário: Escreva uma query com `JOIN` que lista o nome de cada usuário junto com a quantidade total de pedidos que ele fez, usando `GROUP BY` e `COUNT`, incluindo usuários que ainda não fizeram nenhum pedido (dica: qual tipo de JOIN resolve isso?).
- 🔴 Difícil: Modele um esquema de banco para um sistema de e-commerce simples (usuários, produtos, pedidos, itens_pedido) respeitando normalização, com chaves primárias e estrangeiras corretas, e escreva uma query que retorna o produto mais vendido (em quantidade) do último mês.

---

### 7.2 Trabalhando com MySQL/PostgreSQL na Prática

**O que é:** MySQL e PostgreSQL são os bancos relacionais mais usados no ecossistema PHP. Ambos falam SQL padrão com pequenas particularidades próprias. Nesta etapa, o objetivo é sair da teoria e realmente instalar, conectar, criar um banco e rodar queries reais — seja via terminal (`mysql`/`psql`), seja via uma ferramenta gráfica (TablePlus, DBeaver, phpMyAdmin).

**Você precisa dominar:**
- Instalar/rodar um MySQL ou PostgreSQL localmente (ou via Docker).
- Criar bancos, tabelas e usuários com permissões via linha de comando.
- Rodar queries via terminal e via alguma ferramenta gráfica.
- Diferenças básicas entre MySQL e PostgreSQL que valem a pena saber (tipos de dados específicos, `AUTO_INCREMENT` vs `SERIAL`, etc. — não precisa decorar tudo, só reconhecer que existem diferenças).

**Perguntas que você deve saber responder:**
- Por que é útil ter uma ferramenta gráfica de banco de dados além do terminal, no dia a dia?

**Exercícios:**
- 🟢 Fácil: Suba um MySQL ou PostgreSQL local (ou via Docker) e crie o banco de dados do exercício difícil da seção 7.1 via terminal.
- 🟡 Intermediário: Popule as tabelas com pelo menos 10 registros de teste em cada uma, usando `INSERT` em lote.
- 🔴 Difícil: Escreva um script `.sql` completo de "seed" (popular o banco com dados de teste realistas, incluindo relacionamentos consistentes entre as tabelas) que possa ser rodado do zero para recriar um ambiente de teste completo.

---

### 7.3 PDO e Prepared Statements

**O que é:** PDO (PHP Data Objects) é a interface padrão do PHP para conectar e conversar com bancos de dados relacionais (abstrai o banco específico — o mesmo código PDO funciona com pequenas mudanças entre MySQL, PostgreSQL, SQLite). O ponto mais crítico aqui é entender **Prepared Statements**: em vez de montar a query concatenando strings com dados do usuário (o que abre a porta para **SQL Injection**, uma das vulnerabilidades mais graves e mais fáceis de evitar), você usa placeholders (`?` ou `:nome`) e passa os valores separadamente — o driver do banco garante que o valor nunca será interpretado como parte do comando SQL.

**Você precisa dominar:**
- Conectar via `new PDO($dsn, $usuario, $senha)` e tratar erros de conexão.
- `prepare()` + `execute()` com placeholders posicionais (`?`) e nomeados (`:nome`).
- `fetch()`/`fetchAll()` e os modos de retorno (`PDO::FETCH_ASSOC` é o mais comum).
- Por que concatenar diretamente `$_POST` numa query SQL é uma vulnerabilidade crítica de SQL Injection — e como Prepared Statements resolvem isso estruturalmente (não é "boa vontade", é a ferramenta certa).
- Transações (`beginTransaction`, `commit`, `rollBack`) para operações que precisam ser tudo-ou-nada.

**Perguntas que você deve saber responder:**
- Por que um Prepared Statement previne SQL Injection de forma estrutural, e não apenas "escapando caracteres perigosos"?
- Quando você precisaria envolver múltiplas queries numa transação?

**Exercícios:**
- 🟢 Fácil: Conecte-se ao banco criado na seção 7.2 via PDO e execute um `SELECT` simples, exibindo os resultados com `fetchAll(PDO::FETCH_ASSOC)`.
- 🟡 Intermediário: Escreva uma função `buscarUsuarioPorEmail(PDO $pdo, string $email): ?array` usando Prepared Statement com placeholder nomeado, retornando `null` se não encontrar.
- 🔴 Difícil: Demonstre, propositalmente, uma query vulnerável a SQL Injection (concatenando `$_POST` diretamente) e um "ataque" de exemplo que ela permite (ex: um input como `' OR '1'='1`), documentando o resultado. Depois reescreva a mesma função usando Prepared Statement e demonstre que o mesmo input malicioso não tem mais efeito algum. Adicione também um exemplo de transação envolvendo duas tabelas (ex: debitar de uma conta e creditar em outra), com `rollBack()` em caso de erro no meio.

---

### 7.4 Migrations — Controle de Versão de Schema

**O que é:** Migrations são arquivos que descrevem, em código, as mudanças na estrutura do banco de dados (criar tabela, adicionar coluna, criar índice) — funcionando como um "Git para o schema do banco". Isso resolve um problema real de time: em vez de cada dev alterar o banco manualmente e torcer para lembrar de replicar em produção, as migrations são versionadas, revisadas em code review e aplicadas de forma automática e reprodutível em qualquer ambiente. Vamos ver isso conceitualmente aqui em PHP puro/SQL; na Fase 9 você vai usar o sistema completo de Migrations do Laravel.

**Você precisa dominar:**
- O conceito de "up" (aplicar a mudança) e "down" (reverter a mudança) numa migration.
- Por que alterar o banco de produção manualmente, sem migration, é uma prática arriscada e não reproduzível.
- Como uma tabela de controle (ex: `migrations`) registra quais migrations já foram aplicadas, evitando reaplicar a mesma mudança duas vezes.

**Perguntas que você deve saber responder:**
- Por que uma migration deveria sempre ter uma forma de reverter ("down"), mesmo que você raramente precise usá-la?
- O que pode dar errado num time onde alguns membros alteram o banco de produção manualmente, fora do fluxo de migrations?

**Exercícios:**
- 🟢 Fácil: Escreva, em SQL puro, um par de scripts `up.sql`/`down.sql` que cria e depois remove uma tabela `categorias`.
- 🟡 Intermediário: Escreva uma migration (up/down) que adiciona uma coluna `categoria_id` (chave estrangeira) à tabela `produtos`, e o down correspondente que remove essa coluna.
- 🔴 Difícil: Escreva uma pequena classe PHP `MigrationRunner` (bem simplificada) que lê arquivos de uma pasta `migrations/`, verifica numa tabela de controle quais já foram executadas, e aplica apenas as pendentes, em ordem — um mini "reinvente a roda" só para entender o mecanismo por trás de ferramentas como o `artisan migrate`.

---

### 7.5 Introdução a ORMs

**O que é:** Um ORM (Object-Relational Mapper) mapeia tabelas do banco para classes PHP e linhas para objetos, permitindo trabalhar com dados usando orientação a objetos em vez de escrever SQL manualmente o tempo todo (ex: `Usuario::find(1)` em vez de escrever um `SELECT` com PDO). Isso acelera desenvolvimento e reduz boilerplate, mas tem trade-offs importantes que todo sênior precisa entender: abstrair demais pode esconder queries ineficientes (o clássico problema **N+1**, que veremos com detalhe na Fase 9 e na Fase 15), e para relatórios complexos, SQL puro/Query Builder ainda pode ser a ferramenta certa. O Laravel usa o **Eloquent** como seu ORM; o ecossistema PHP também tem o **Doctrine** (mais próximo do padrão Data Mapper, usado bastante no Symfony).

**Você precisa dominar:**
- O que um ORM resolve (produtividade, menos SQL manual repetitivo) e o que ele custa (abstração pode esconder ineficiência, curva de aprendizado própria).
- Diferença conceitual entre o padrão **Active Record** (o objeto sabe salvar a si mesmo — abordagem do Eloquent) e **Data Mapper** (uma classe separada mapeia objeto ↔ banco — abordagem do Doctrine).
- Por que "eu uso ORM, então nunca preciso entender SQL" é uma crença perigosa para um sênior.

**Perguntas que você deve saber responder:**
- Qual a diferença conceitual entre Active Record e Data Mapper?
- Por que um sênior deveria continuar entendendo SQL mesmo trabalhando o tempo todo com Eloquent?

**Exercícios:**
- 🟢 Fácil: Pesquise e escreva, com suas palavras, 3 vantagens e 3 desvantagens de usar um ORM em vez de SQL puro/PDO direto.
- 🟡 Intermediário: Pegue uma das queries que você escreveu na seção 7.1/7.3 e escreva, ao lado, como você imagina que ficaria a mesma operação "pensando em Eloquent" (mesmo sem ainda ter estudado a sintaxe exata — o objetivo é o raciocínio de tradução, que você vai confirmar na Fase 9).
- 🔴 Difícil: Escreva um mini "ORM" propositalmente simplificado: uma classe `Modelo` abstrata com um método estático `find(PDO $pdo, int $id): static` que executa um `SELECT ... WHERE id = ?` e popula um objeto da classe filha correta (reaproveitando Late Static Binding da Fase 4.11). Isso vai te dar uma intuição real de "o que o Eloquent faz por baixo dos panos".

---
## FASE 8 — Testes Automatizados

> Se tem uma habilidade que mais separa dev júnior de sênior no mercado real, é essa. Júnior testa manualmente clicando na tela. Sênior escreve testes que rodam em segundos, sempre, e pegam regressões antes que cheguem em produção.

### 8.1 Por Que Testar? A Pirâmide de Testes

**O que é:** Testes automatizados são código que verifica se outro código se comporta como esperado, sem intervenção manual. A **pirâmide de testes** é um modelo mental: na base (mais numerosos, mais rápidos, mais baratos de manter) ficam os **testes unitários** (testam uma unidade isolada, como uma classe ou função, sem tocar banco/rede); no meio ficam os **testes de integração** (testam a colaboração entre partes reais, ex: um repositório conversando com um banco de dados real de teste); no topo (poucos, mais lentos, mais caros) ficam os **testes end-to-end/feature** (simulam um fluxo completo do usuário, ex: uma requisição HTTP inteira). A regra prática: quanto mais próximo da base, mais testes você deveria ter.

**Você precisa dominar:**
- Diferença entre teste unitário, de integração e end-to-end/feature, com exemplos concretos de cada um.
- Por que a pirâmide sugere "muitos unitários, poucos e2e" (velocidade, custo de manutenção, isolamento de causa quando um teste falha).
- O que significa uma "unidade" isolada e por que dependências externas (banco, API, sistema de arquivos) geralmente não deveriam estar presentes num teste unitário puro.

**Perguntas que você deve saber responder:**
- Por que um teste que abre uma conexão real de banco de dados não é, estritamente falando, um teste unitário?
- Se você tem pouco tempo, por que geralmente vale mais a pena investir em testes unitários do que em testes end-to-end?

**Exercícios:**
- 🟢 Fácil: Escolha 3 funções/métodos já escritos ao longo desta trilha e classifique, para cada um, que tipo de teste (unitário, integração, e2e) faria sentido escrever, justificando.
- 🟡 Intermediário: Desenhe (pode ser em texto/ASCII mesmo) a pirâmide de testes aplicada ao Checkpoint #3 (lista de tarefas), indicando o que testaria em cada camada.
- 🔴 Difícil: Escreva um pequeno documento (pode ser um comentário/markdown) definindo a estratégia de testes que você adotaria para o e-commerce modelado na Fase 7.1: quais partes mereceriam teste unitário, quais integração, e por quê.

---

### 8.2 PHPUnit — Fundamentos

**O que é:** PHPUnit é o framework de testes mais tradicional e amplamente usado no ecossistema PHP. Um teste é uma classe que estende `TestCase`, com métodos começando com `test` (ou anotados com `#[Test]`), cada um fazendo asserções (`assertEquals`, `assertTrue`, `assertNull`, `assertCount`, etc.) sobre o comportamento esperado. `setUp()`/`tearDown()` rodam antes/depois de cada teste, úteis para preparar e limpar estado. **Data Providers** permitem rodar o mesmo teste com vários conjuntos de dados de entrada, evitando duplicação de testes quase idênticos.

**Você precisa dominar:**
- Instalar o PHPUnit via Composer e configurar o `phpunit.xml`.
- Estrutura básica de um teste: `class ProdutoTest extends TestCase`, métodos `test*`, asserções mais usadas.
- `setUp()`/`tearDown()` para preparar/limpar estado entre testes.
- Data Providers para testar múltiplos cenários com o mesmo teste.
- Rodar a suíte via `vendor/bin/phpunit` e interpretar a saída (verde = passou, vermelho = falhou, com stack trace do assert que falhou).
- O princípio AAA (Arrange, Act, Assert) para estruturar um teste de forma legível.

**Perguntas que você deve saber responder:**
- Por que testes deveriam ser independentes entre si (a ordem de execução não deveria importar)?
- O que o padrão AAA (Arrange-Act-Assert) representa na estrutura de um teste?

**Exercícios:**
- 🟢 Fácil: Instale o PHPUnit no seu projeto de estudo e escreva o primeiro teste, verificando que a classe `Produto` (Fase 4) calcula corretamente o total com desconto aplicado.
- 🟡 Intermediário: Escreva testes cobrindo a classe `ContaBancaria` (Fase 4.2): depósito, saque válido, e saque que deveria lançar exceção (usando `expectException`).
- 🔴 Difícil: Escreva uma suíte de testes usando Data Provider para a função `formatarTelefone` (Fase 3.4), cobrindo pelo menos 5 formatos de entrada diferentes (incluindo um caso inválido), e organize os testes em `describe`-like grupos usando `#[Group]` ou nomenclatura clara de métodos.

---

### 8.3 Pest PHP

**O que é:** Pest é uma camada sobre o PHPUnit (usa o mesmo motor por trás) que oferece uma sintaxe mais enxuta e expressiva, muito popular no ecossistema Laravel atual. Em vez de classes e métodos, você escreve testes como funções (`test('descrição', function () { ... })` ou `it('faz algo', function () { ... })`), com uma API de asserção fluente (`expect($valor)->toBe(5)`). É praticamente sintático — tudo que você aprendeu de PHPUnit se aplica conceitualmente aqui.

**Você precisa dominar:**
- Sintaxe básica: `test()`/`it()`, `expect()->toBe()`, `beforeEach()`/`afterEach()` (equivalentes a `setUp`/`tearDown`).
- `dataset()` como equivalente ao Data Provider do PHPUnit.
- Como Pest e PHPUnit coexistem (Pest roda sobre o PHPUnit por baixo).

**Perguntas que você deve saber responder:**
- Por que Pest é considerado "sintaticamente mais expressivo", mesmo compartilhando o motor de execução com o PHPUnit?

**Exercícios:**
- 🟢 Fácil: Instale o Pest no projeto e reescreva 3 testes já feitos em PHPUnit (seção 8.2) para a sintaxe do Pest.
- 🟡 Intermediário: Use `dataset()` para reescrever o teste de `formatarTelefone` do exercício difícil anterior na sintaxe Pest.
- 🔴 Difícil: Explore e use pelo menos um "plugin"/expectativa customizada do Pest (ex: `expect($array)->toHaveCount()`, ou crie sua própria expectativa customizada com `expect()->extend()`), aplicando num teste real do seu projeto.

---

### 8.4 TDD — Test-Driven Development

**O que é:** TDD é uma disciplina de desenvolvimento onde você escreve o teste **antes** do código de produção, seguindo o ciclo **Red-Green-Refactor**: (1) **Red** — escreva um teste que falha, porque o código ainda não existe; (2) **Green** — escreva o código mínimo necessário para o teste passar, sem se preocupar ainda com elegância; (3) **Refactor** — agora, com a segurança do teste passando, melhore o design do código sem quebrar o comportamento. Isso força você a pensar no comportamento esperado antes da implementação, e garante que todo código de produção tenha cobertura desde o nascimento.

**Você precisa dominar:**
- O ciclo Red-Green-Refactor na prática, passo a passo.
- Por que escrever o teste primeiro muda a forma como você pensa a interface/design da função (você é forçado a pensar "como eu gostaria de USAR isso" antes de "como eu vou implementar isso").
- Reconhecer que TDD é uma ferramenta, não dogma — nem todo código precisa nascer via TDD, mas é uma habilidade que todo sênior deveria saber aplicar quando faz sentido.

**Perguntas que você deve saber responder:**
- Por que, no TDD, você deveria ver o teste falhar (fase Red) antes de fazê-lo passar — por que não pular direto para escrever a implementação e o teste juntos?

**Exercícios:**
- 🟢 Fácil: Pratique TDD puro numa função nova, ainda não escrita: `validarCPF(string $cpf): bool`. Escreva primeiro um teste com um CPF inválido esperando `false`, veja falhar (a função nem existe ainda), implemente o mínimo, veja passar.
- 🟡 Intermediário: Continue o TDD da função `validarCPF`, adicionando testes incrementais (CPF com todos os dígitos iguais, CPF com dígito verificador errado, CPF válido real) um de cada vez, sempre no ciclo Red-Green-Refactor.
- 🔴 Difícil: Usando TDD do zero, implemente uma classe `CarrinhoDeCompras` com métodos `adicionarItem`, `removerItem`, `total()` e uma regra de negócio (ex: desconto de 10% acima de determinado valor), documentando cada ciclo Red-Green-Refactor que você percorreu (pode ser em comentários numerados no código ou um changelog à parte).

---

### 8.5 Test Doubles: Mocks, Stubs e Fakes

**O que é:** Quando uma classe depende de outra (ex: um serviço que depende de um cliente HTTP externo, ou de um repositório de banco), testar unitariamente exige "substituir" essa dependência por uma versão controlada — chamada de **Test Double**. **Stub** é uma versão simplificada que retorna dados fixos predefinidos (não verifica se foi chamada, só fornece dados). **Mock** vai além: verifica se determinado método foi realmente chamado, quantas vezes, com quais argumentos (usado para testar comportamento/interação, não só estado). **Fake** é uma implementação funcional simplificada (ex: um repositório "em memória" no lugar de um banco real — você já construiu um desses na Fase 6.6!).

**Você precisa dominar:**
- Diferença conceitual entre Stub, Mock e Fake, e quando cada um se aplica.
- Como criar mocks com o próprio PHPUnit (`createMock()`) ou com a biblioteca Mockery (muito usada no ecossistema Laravel).
- Por que a Injeção de Dependência (SOLID, Fase 6.3) é o que **torna possível** substituir dependências reais por Test Doubles em teste — sem DIP, testar isoladamente é muito mais difícil.

**Perguntas que você deve saber responder:**
- Qual a diferença prática entre um Stub e um Mock — em qual dos dois você verifica "o método X foi chamado exatamente uma vez"?
- Por que uma classe que instancia suas dependências diretamente dentro do construtor (`new PdoRepositorio()`) é mais difícil de testar do que uma que as recebe via injeção?

**Exercícios:**
- 🟢 Fácil: Crie uma classe `ServicoDeNotificacao` que depende de uma interface `Notificador` (injetada via construtor), e em teste, crie um Stub simples (uma classe implementando a interface, sem lógica real) para testar `ServicoDeNotificacao` isoladamente.
- 🟡 Intermediário: Reescreva o teste anterior usando `createMock()` do PHPUnit (ou Mockery), verificando explicitamente que o método `enviar()` do `Notificador` foi chamado exatamente uma vez, com os argumentos esperados.
- 🔴 Difícil: Pegue a interface `RepositorioDeTarefas` (Fase 6.6) e escreva testes para uma classe de serviço `GerenciadorDeTarefas` que depende dela, usando um Fake (a implementação em memória) para os testes "de comportamento geral" e um Mock específico para um teste que verifica que `salvar()` é chamado exatamente uma vez quando uma nova tarefa é criada.

---

### 8.6 Testes de Integração e Feature (Introdução)

**O que é:** Testes de integração verificam que partes reais do sistema colaboram corretamente entre si (ex: seu repositório realmente salva e busca do banco de dados corretamente, não um Fake). Testes de "Feature" (terminologia usada pelo Laravel) simulam uma requisição HTTP completa contra a aplicação e verificam a resposta — são testes de mais alto nível, mais próximos da experiência real do usuário. Vamos formalizar Feature Tests com força total na Fase 9, quando estivermos dentro do Laravel; aqui o objetivo é só entender o conceito antes de ver a ferramenta.

**Você precisa dominar:**
- Diferença entre "testar com um Fake em memória" (unitário) e "testar contra um banco de dados de teste real" (integração).
- A necessidade de um banco de dados isolado para testes (nunca rodar testes contra o banco de produção ou de desenvolvimento com dados reais).
- Ideia de "transação de teste" (rodar cada teste dentro de uma transação que é revertida no final, mantendo o banco limpo entre testes).

**Perguntas que você deve saber responder:**
- Por que rodar testes automatizados contra o banco de produção é uma prática perigosa e a ser evitada a todo custo?

**Exercícios:**
- 🟢 Fácil: Configure um banco de dados SQLite (ou um schema separado) exclusivamente para testes, e escreva um teste de integração real para a função `buscarUsuarioPorEmail` (Fase 7.3), inserindo um registro de teste e depois buscando.
- 🟡 Intermediário: Escreva um teste de integração para o `MigrationRunner` (Fase 7.4), rodando as migrations contra um banco de teste limpo e verificando que a tabela esperada foi criada.
- 🔴 Difícil: Configure a suíte de testes para rodar cada teste de integração dentro de uma transação revertida ao final (usando `beginTransaction`/`rollBack` no `setUp`/`tearDown`), e demonstre que dois testes que inserem dados com o mesmo identificador único não conflitam entre si.

---

### 🏗️ Checkpoint de Projeto #5 (opcional)

**Projeto sugerido:** Escreva uma suíte de testes completa (PHPUnit ou Pest) para o Checkpoint #4 (lista de tarefas refatorada com SOLID/patterns), cobrindo: testes unitários para cada classe de regra de negócio, uso de pelo menos um Mock/Fake para isolar dependências, e um teste de integração real contra o repositório de persistência. Tente rodar `phpunit --coverage-text` (ou equivalente) e mirar em uma cobertura significativa das classes de domínio.
**O que isso comprova:** que você sai desta fase capaz de confiar no seu próprio código sem precisar testar manualmente clicando na tela a cada mudança — um divisor de águas gigantesco para o nível sênior.

---
## FASE 9 — Framework Laravel Essencial

> Você já sabia Laravel como júnior — mas agora, com OOP sólida, SOLID, patterns e testes na bagagem, vai entender **por que** o Laravel é desenhado do jeito que é. Muita coisa que antes parecia "mágica" vai fazer sentido estrutural.

### 9.1 Estrutura de Diretórios e Ciclo de Vida da Requisição

**O que é:** Todo pedido HTTP que chega numa aplicação Laravel passa por um caminho bem definido: entra pelo `public/index.php`, que inicializa o **kernel** da aplicação, passa por uma série de **middlewares** globais, é despachado para a **rota** correspondente (definida em `routes/web.php` ou `routes/api.php`), a rota aciona um **Controller** (ou uma Closure), que devolve uma **Response**, que passa de volta pelos middlewares antes de ser enviada ao navegador. Entender esse fluxo do início ao fim é o que separa "eu sei mexer no Laravel" de "eu entendo o Laravel".

**Você precisa dominar:**
- O papel de cada pasta principal: `app/`, `routes/`, `database/`, `resources/`, `config/`, `public/`.
- O caminho completo de uma requisição: `index.php` → Kernel → Middlewares → Rota → Controller → Response → Middlewares (de novo, na volta) → navegador.
- Onde ficam as configurações de ambiente (`.env`) e por que elas nunca devem ir para o controle de versão com dados sensíveis reais.

**Perguntas que você deve saber responder:**
- Por que o `.env` não deveria nunca ser commitado no Git com credenciais reais, e o que deveria ir no lugar (`.env.example`)?
- Descreva, com suas palavras, o caminho completo que uma requisição HTTP percorre dentro de uma aplicação Laravel.

**Exercícios:**
- 🟢 Fácil: Crie um novo projeto Laravel do zero (`laravel new` ou `composer create-project`) e explore a estrutura de pastas, documentando (num README próprio) o que você entende que cada pasta principal faz.
- 🟡 Intermediário: Adicione um `Log::info()` em pontos estratégicos (uma rota, um middleware, um controller) e, acompanhando o arquivo de log, trace na prática a ordem exata de execução de uma requisição simples.
- 🔴 Difícil: Explique e demonstre, criando um middleware customizado simples que loga "antes" e "depois", como o Laravel implementa o padrão de "cebola" (onion) dos middlewares — onde cada camada envolve a próxima.

---

### 9.2 Roteamento

**O que é:** Rotas mapeiam uma URL + verbo HTTP para uma ação (Closure ou método de Controller). O Laravel oferece rotas com parâmetros (`/produtos/{id}`), **Route Model Binding** (o Laravel busca automaticamente o model correspondente ao ID na URL e já entrega o objeto pronto no Controller), grupos de rota (compartilhando prefixo, middleware, namespace) e nomeação de rotas (`->name('produtos.show')`, para gerar URLs sem hardcoded).

**Você precisa dominar:**
- Sintaxe básica: `Route::get`, `post`, `put`, `patch`, `delete`, e rotas com Closure vs `[Controller::class, 'metodo']`.
- Parâmetros de rota, opcionais e com restrição (`->where()`).
- Route Model Binding implícito e explícito.
- Grupos de rota (`Route::prefix()->middleware()->group()`).
- Rotas nomeadas e a função helper `route()` para gerar URLs.
- `php artisan route:list` para inspecionar todas as rotas registradas.

**Perguntas que você deve saber responder:**
- O que o Route Model Binding faz "por baixo dos panos" para transformar `/produtos/5` diretamente num objeto `Produto` já carregado no Controller?
- Por que usar rotas nomeadas (`route('produtos.show', $id)`) é preferível a escrever a URL literal no código?

**Exercícios:**
- 🟢 Fácil: Crie rotas CRUD completas (`index`, `show`, `create`, `store`, `edit`, `update`, `destroy`) para um recurso `Tarefa`, usando `Route::resource`.
- 🟡 Intermediário: Adicione Route Model Binding na rota de `show`/`edit`/`update`/`destroy`, e demonstre o que acontece (código de status) quando um ID inexistente é acessado.
- 🔴 Difícil: Crie um grupo de rotas com prefixo `/admin`, protegido por um middleware customizado que você mesmo vai escrever (mesmo que a lógica de autenticação ainda seja simulada), e demonstre o comportamento de bloqueio de acesso.

---

### 9.3 Controllers, Requests e Responses

**O que é:** Um Controller recebe a requisição já roteada e orquestra a resposta: busca/valida dados, chama a lógica de negócio (idealmente delegada para outras classes — um Controller "gordo" fazendo tudo sozinho é um code smell, ligação direta com SRP da Fase 6.3), e retorna uma Response (uma view HTML, um JSON, um redirect). O objeto `Request` (injetado automaticamente via Service Container, que veremos na 9.10) dá acesso a tudo da requisição: inputs, headers, arquivos, método HTTP.

**Você precisa dominar:**
- Controllers de recurso (`resource controller`, com os 7 métodos padrão de CRUD) vs Single Action Controllers (`__invoke`, conectando com a Fase 4.9).
- Acessar dados da requisição via `Request $request` (`$request->input()`, `$request->all()`, `$request->query()`).
- Tipos de Response: `view()`, `response()->json()`, `redirect()`.
- Por que um Controller "gordo" (com regra de negócio, queries complexas e formatação tudo misturado) viola SRP e como delegar isso para Services/Actions.

**Perguntas que você deve saber responder:**
- Por que um Controller idealmente deveria ser "magro" — só orquestrar, sem conter regra de negócio pesada?
- Qual a diferença entre um resource controller e um Single Action Controller, e quando cada um faz sentido?

**Exercícios:**
- 🟢 Fácil: Implemente o Controller completo de `Tarefa` (a partir das rotas da 9.2), com métodos que só orquestram (sem lógica de negócio pesada ainda).
- 🟡 Intermediário: Refatore um método do Controller que estava fazendo cálculo/formatação complexa, extraindo essa lógica para uma classe de serviço separada (aplicando SRP na prática).
- 🔴 Difícil: Implemente uma Single Action Controller (`__invoke`) para uma ação específica (ex: `MarcarTarefaComoConcluidaController`), e discuta (comentário no código) em que cenários Single Action Controllers deixam o código mais organizado do que um resource controller genérico.

---

### 9.4 Blade — Templates

**O que é:** Blade é o motor de templates do Laravel: permite misturar HTML com diretivas PHP simplificadas (`@if`, `@foreach`, `{{ $variavel }}` que já escapa automaticamente contra XSS). Suporta **layouts** (uma estrutura base reaproveitada por várias páginas, via `@extends`/`@section`/`@yield`) e **componentes** (blocos de UI reutilizáveis, com props próprias) — essencial para não repetir HTML pelo projeto (DRY, Fase 6.2).

**Você precisa dominar:**
- Sintaxe básica: `{{ }}` (escapado, seguro contra XSS) vs `{!! !!}` (não escapado — usar com extremo cuidado).
- Diretivas de controle: `@if/@elseif/@else`, `@foreach`, `@forelse` (com `@empty`).
- Layouts com `@extends`, `@section`, `@yield`, `@include`.
- Componentes Blade (`<x-nome-componente>`), com slots e propriedades.
- Por que `{{ }}` escapar automaticamente é uma defesa direta contra XSS (conectando com Segurança, Fase 11).

**Perguntas que você deve saber responder:**
- Por que `{!! !!}` deveria ser evitado sempre que possível, e quando (raramente) seu uso é realmente necessário?
- Qual a vantagem de extrair um pedaço de HTML repetido para um componente Blade em vez de usar `@include` simples?

**Exercícios:**
- 🟢 Fácil: Crie um layout base (`layouts/app.blade.php`) com header/footer comuns, e uma view de listagem de tarefas que o estende.
- 🟡 Intermediário: Crie um componente Blade `<x-tarefa-card>` reutilizável que recebe uma tarefa como prop e renderiza seu card, usado dentro de um `@foreach` na listagem.
- 🔴 Difícil: Crie um componente Blade com slot nomeado (ex: um componente `<x-modal>` com slots para título e corpo), demonstrando composição de UI reutilizável mais avançada.

---

### 9.5 Eloquent ORM — Models e Relacionamentos

**O que é:** Eloquent é o ORM do Laravel (Active Record, conectando com o conceito visto na Fase 7.5). Cada `Model` representa uma tabela; cada instância, uma linha. Relacionamentos são definidos como métodos na classe: `hasOne`/`belongsTo` (1:1), `hasMany`/`belongsTo` (1:N), `belongsToMany` (N:N, com tabela pivô), `hasManyThrough` (relação indireta através de uma tabela intermediária). O problema mais crítico de performance aqui é o famoso **N+1**: buscar uma lista de registros e, para cada um, disparar uma query adicional para buscar dados relacionados (ex: 1 query para pedidos + N queries, uma por pedido, para buscar o cliente de cada um) — resolvido com **Eager Loading** (`with()`), que busca tudo em poucas queries otimizadas.

**Você precisa dominar:**
- Convenções do Eloquent (nome de tabela no plural, chave primária `id`, timestamps automáticos) e como sobrescrevê-las quando necessário.
- `$fillable`/`$guarded` e por que existem (proteção contra Mass Assignment — conectando com Segurança, Fase 11).
- Os 4 tipos principais de relacionamento (`hasOne`, `hasMany`, `belongsTo`, `belongsToMany`) e como identificar qual usar em cada cenário.
- O problema de N+1 queries — reconhecer quando ele está acontecendo (ex: via `Laravel Debugbar` ou logging de queries) e como o `with()` (Eager Loading) resolve.
- Accessors e Mutators (transformar dados ao ler/escrever um atributo do Model).
- Scopes locais (métodos reutilizáveis de filtro de query) e Scopes globais.

**Perguntas que você deve saber responder:**
- Explique, com um exemplo concreto, o que é o problema de N+1 queries e como o Eager Loading (`with()`) resolve.
- Por que deixar todos os campos de um Model em `$fillable` sem critério é um risco de segurança (Mass Assignment)?
- Qual a diferença entre `hasMany` e `belongsToMany`?

**Exercícios:**
- 🟢 Fácil: Crie os Models `Tarefa` e `Categoria` com um relacionamento `belongsTo`/`hasMany` entre eles, e liste as tarefas de uma categoria específica.
- 🟡 Intermediário: Crie um relacionamento `belongsToMany` entre `Tarefa` e `Etiqueta` (tags), com tabela pivô, e demonstre associar/remover etiquetas de uma tarefa.
- 🔴 Difícil: Provoque de propósito um problema de N+1 (liste 20 tarefas e, para cada uma, acesse `$tarefa->categoria->nome` dentro de um loop sem eager loading), meça a quantidade de queries executadas (via `DB::listen()` ou Debugbar), corrija com `with('categoria')`, e documente a diferença de quantidade de queries antes/depois.

---

### 9.6 Query Builder

**O que é:** Antes/além do Eloquent, o Laravel tem o Query Builder (`DB::table()`), uma forma fluente de construir SQL sem escrever a query como string manual, mas sem o overhead de um Model completo — útil para relatórios complexos ou consultas de performance crítica onde o Eloquent adicionaria overhead desnecessário.

**Você precisa dominar:**
- `DB::table()->where()->get()`, `select()`, `join()`, `groupBy()`, `orderBy()`.
- Quando usar Query Builder puro em vez de Eloquent (relatórios agregados complexos, otimizações finas).
- `DB::raw()` para trechos de SQL que o Query Builder não expressa nativamente, e o cuidado com SQL Injection ao usá-lo com dados do usuário (nunca concatenar direto).

**Perguntas que você deve saber responder:**
- Em que tipo de cenário você preferiria Query Builder puro em vez de Eloquent?
- Por que usar `DB::raw()` com valores vindos diretamente do usuário, sem bindings, reabre risco de SQL Injection mesmo dentro do Laravel?

**Exercícios:**
- 🟢 Fácil: Reescreva uma consulta simples de listagem de tarefas usando `DB::table('tarefas')->where(...)->get()` em vez de Eloquent.
- 🟡 Intermediário: Escreva, com Query Builder, um relatório agregado (ex: quantidade de tarefas concluídas por categoria) usando `join`, `groupBy` e `selectRaw`/agregações.
- 🔴 Difícil: Compare a mesma consulta agregada complexa implementada via Eloquent (com relacionamentos + `groupBy`) e via Query Builder puro, medindo e documentando diferença de legibilidade e (se possível) de performance/quantidade de queries.

---

### 9.7 Migrations e Seeders/Factories no Laravel

**O que é:** O Laravel formaliza tudo que vimos conceitualmente na Fase 7.4: `php artisan make:migration` gera um arquivo com métodos `up()`/`down()` usando o **Schema Builder** (uma API fluente para definir colunas, sem escrever SQL bruto na maioria dos casos). **Seeders** populam o banco com dados iniciais/de teste; **Factories** geram dados falsos realistas em massa (integradas com a biblioteca Faker), essenciais para testes e para popular ambientes de desenvolvimento rapidamente.

**Você precisa dominar:**
- Criar e rodar migrations (`make:migration`, `migrate`, `migrate:rollback`, `migrate:fresh`).
- Schema Builder: tipos de coluna comuns, `foreignId()->constrained()`, índices, colunas nullable/default.
- Seeders (`make:seeder`, `db:seed`) e Factories (`make:factory`, `definition()`, estados customizados).
- Diferença entre rodar seeders em desenvolvimento (dados de teste fartos) vs em produção (só dados essenciais, como um usuário admin inicial).

**Perguntas que você deve saber responder:**
- Qual a diferença de propósito entre um Seeder e uma Factory?
- Por que `migrate:fresh` nunca deveria ser rodado em produção?

**Exercícios:**
- 🟢 Fácil: Crie a migration completa de `tarefas` e `categorias` usando o Schema Builder do Laravel, com chave estrangeira e índices apropriados.
- 🟡 Intermediário: Crie uma Factory para `Tarefa` que gera dados realistas (título com Faker, status aleatório entre os valores do enum da Fase 4.12), e um Seeder que cria 50 tarefas de teste.
- 🔴 Difícil: Crie estados customizados na Factory (ex: `Tarefa::factory()->concluida()->count(10)->create()`), e um Seeder que usa relacionamentos entre Factories (ex: criar categorias e, para cada uma, algumas tarefas associadas automaticamente).

---

### 9.8 Validação (Form Requests)

**O que é:** Antes de confiar em qualquer dado vindo do usuário (relembrando a Fase 2.9 e a Fase 11), você precisa validá-lo. O Laravel permite validar direto no Controller (`$request->validate([...])`) ou, de forma mais organizada e testável, extraindo isso para uma classe **Form Request** dedicada (`php artisan make:request`), que centraliza as regras de validação e autorização daquela ação específica, mantendo o Controller magro (conectando com SRP, Fase 6.3, e com Controllers, 9.3).

**Você precisa dominar:**
- Regras de validação mais comuns (`required`, `string`, `max`, `min`, `email`, `unique`, `exists`, `confirmed`).
- Extrair validação para uma Form Request, e como ela se integra automaticamente ao Controller via injeção de tipo.
- Mensagens de erro customizadas e como elas chegam até a view (`$errors` compartilhado automaticamente).
- O método `authorize()` de uma Form Request (conectando com Policies/Gates, Fase 9.15).

**Perguntas que você deve saber responder:**
- Por que extrair validação para uma Form Request deixa o código mais testável do que validar diretamente dentro do método do Controller?
- O que acontece automaticamente (fluxo de resposta) quando uma validação falha numa requisição web tradicional vs numa requisição de API?

**Exercícios:**
- 🟢 Fácil: Adicione validação simples direto no Controller para o `store` de `Tarefa` (título obrigatório, mínimo de caracteres).
- 🟡 Intermediário: Extraia essa validação para uma `StoreTarefaRequest` (Form Request dedicada), incluindo mensagens de erro customizadas em português.
- 🔴 Difícil: Crie uma regra de validação customizada (`Rule` própria ou closure) que verifica uma regra de negócio específica (ex: não permitir duas tarefas com o mesmo título para o mesmo usuário), e escreva testes (Fase 8) cobrindo tanto o caso válido quanto o inválido.

---
### 9.9 Middleware

**O que é:** Middleware é código que intercepta a requisição antes dela chegar no Controller (e/ou a resposta antes dela voltar ao navegador) — como camadas de uma cebola, cada middleware pode inspecionar, modificar ou até interromper o fluxo (ex: bloquear acesso se o usuário não estiver autenticado). O Laravel já vem com middlewares prontos (`auth`, `throttle`, `verified`) e permite criar os seus próprios.

**Você precisa dominar:**
- Criar um middleware (`php artisan make:middleware`) e entender o método `handle(Request $request, Closure $next)`.
- A diferença entre executar lógica **antes** de `$next($request)` e **depois**.
- Registrar middlewares globalmente, em grupo, ou nomeados para uso em rotas específicas.
- Middlewares parametrizados (ex: `throttle:60,1`).

**Perguntas que você deve saber responder:**
- O que acontece se um middleware não chamar `$next($request)`?
- Dê um exemplo de lógica que faria sentido rodar "depois" de `$next()`, e não "antes".

**Exercícios:**
- 🟢 Fácil: Crie um middleware `LogRequisicao` que registra no log o método e a URL de cada requisição, e registre-o globalmente.
- 🟡 Intermediário: Crie um middleware `VerificaHorarioComercial` que bloqueia (retorna 403) o acesso a certas rotas fora de um horário configurável, e aplique-o só num grupo específico de rotas.
- 🔴 Difícil: Crie um middleware parametrizado `VerificaPapel:admin` que recebe o papel exigido como parâmetro e bloqueia o acesso se o usuário (simulado por enquanto) não tiver esse papel, demonstrando o uso com múltiplos parâmetros diferentes em rotas diferentes.

---

### 9.10 Service Container e Injeção de Dependência

**O que é:** Este é o coração arquitetural do Laravel e a aplicação prática mais direta do Dependency Inversion Principle (Fase 6.3) que você vai ver no framework. O **Service Container** é responsável por resolver automaticamente as dependências de uma classe: quando você tipa `__construct(PagamentoService $servico)` num Controller, o Laravel automaticamente cria (ou reaproveita) uma instância de `PagamentoService` e a entrega pronta — sem você escrever `new` manualmente. Você pode até **fazer bind** de uma interface para uma implementação concreta (`$this->app->bind(Notificador::class, EmailNotificador::class)`), permitindo trocar a implementação real sem alterar nenhuma classe que depende da interface (exatamente o que você praticou manualmente na Fase 6.6).

**Você precisa dominar:**
- Injeção de dependência via type-hint no construtor (resolução automática) e via método (em algumas situações, como métodos de Controller).
- `bind()` (nova instância a cada resolução) vs `singleton()` (mesma instância reaproveitada durante o ciclo de vida da requisição).
- Como o Service Container permite trocar uma implementação inteira (ex: de e-mail real para um "fake" em testes) sem alterar o código que consome a interface.
- Resolução automática (autowiring) vs binding explícito — quando o Laravel consegue resolver sozinho e quando você precisa dizer explicitamente qual implementação usar.

**Perguntas que você deve saber responder:**
- Como o Service Container "sabe" o que instanciar quando você tipa uma interface no construtor de um Controller, em vez de uma classe concreta?
- Qual a diferença prática entre `bind()` e `singleton()`?

**Exercícios:**
- 🟢 Fácil: Crie uma interface `Notificador` e uma implementação `NotificadorLog` (que só escreve no log), faça o bind no `AppServiceProvider`, e injete a interface em um Controller, comprovando que a implementação concreta é resolvida automaticamente.
- 🟡 Intermediário: Crie uma segunda implementação `NotificadorEmail`, troque o bind no Service Provider, e demonstre que nenhuma linha do Controller precisou mudar para trocar de comportamento.
- 🔴 Difícil: Refaça o exercício difícil da Fase 6.6 (`RepositorioDeTarefas` com implementação em arquivo e em memória) dentro do Laravel: registre um bind condicional (ex: usar a implementação em memória apenas no ambiente de teste, e a implementação real de banco/Eloquent nos demais ambientes), usando `$this->app->environment()` no Service Provider.

---

### 9.11 Service Providers

**O que é:** Service Providers são o lugar central de "boot" (inicialização) da aplicação Laravel — é onde você registra bindings no Service Container, registra eventos, publica configurações de pacotes, etc. Todo pacote/funcionalidade do Laravel (e de pacotes de terceiros) se registra através de um Service Provider. Entender isso é entender "onde configurar as coisas de baixo nível" da aplicação.

**Você precisa dominar:**
- Diferença entre o método `register()` (só registra bindings, não deveria resolver nada ainda) e `boot()` (roda depois que todos os providers já registraram, seguro para usar qualquer binding já registrado).
- Como criar um Service Provider próprio (`php artisan make:provider`) e registrá-lo em `config/app.php` (ou via auto-discovery).
- Por que colocar lógica pesada dentro de `register()` pode causar bugs sutis de ordem de inicialização.

**Perguntas que você deve saber responder:**
- Por que você não deveria resolver (usar) um binding dentro do próprio método `register()` de um Service Provider?

**Exercícios:**
- 🟢 Fácil: Crie um Service Provider customizado `DominioServiceProvider` e mova para lá os binds feitos no exercício da seção 9.10.
- 🟡 Intermediário: Use o método `boot()` do seu provider para registrar uma diretiva Blade customizada (ex: `@moeda($valor)` formatando como "R$ 10,50").
- 🔴 Difícil: Crie um Service Provider que registra condicionalmente diferentes implementações de uma interface dependendo de uma configuração customizada no `.env` (ex: `NOTIFICADOR_DRIVER=log` vs `NOTIFICADOR_DRIVER=email`), lendo o valor via `config()`.

---

### 9.12 Events, Listeners e Observers

**O que é:** Events permitem desacoplar "o que aconteceu" de "o que fazer a respeito" — a aplicação prática direta do padrão Observer (Fase 6.6) dentro do Laravel. Você dispara um evento (`event(new PedidoCriado($pedido))`) sem saber (nem se importar) quem está ouvindo; um ou mais **Listeners** reagem a esse evento de forma totalmente desacoplada (enviar e-mail, atualizar estoque, registrar log). **Observers** são um caso especializado para Models: reagem automaticamente ao ciclo de vida do Eloquent (`creating`, `created`, `updating`, `deleted`, etc.) sem precisar disparar eventos manualmente.

**Você precisa dominar:**
- Criar um Event e um (ou mais) Listener, e registrar essa relação (`EventServiceProvider` ou auto-discovery).
- A diferença entre disparar um evento de forma síncrona (Listener roda na mesma requisição) vs enfileirado (Listener implementa `ShouldQueue`, roda em background — conectando com Filas, Fase 12).
- Criar um Observer para um Model e entender os hooks disponíveis do ciclo de vida do Eloquent.
- Quando usar Events/Listeners vs simplesmente chamar um método diretamente — o critério é desacoplamento: múltiplos ouvintes independentes, ou extensibilidade futura sem alterar a classe original (conectando com o Open/Closed Principle, Fase 6.3).

**Perguntas que você deve saber responder:**
- Por que disparar um Event em vez de simplesmente chamar os métodos diretamente no Controller é mais aderente ao Open/Closed Principle?
- Qual a diferença entre um Observer e um Listener de evento comum?

**Exercícios:**
- 🟢 Fácil: Crie um evento `TarefaConcluida` disparado quando uma tarefa é marcada como concluída, e um Listener `RegistrarLogDeConclusao` que apenas escreve no log.
- 🟡 Intermediário: Adicione um segundo Listener ao mesmo evento (ex: `NotificarResponsavel`), demonstrando que múltiplos comportamentos independentes reagem ao mesmo evento sem se conhecerem.
- 🔴 Difícil: Crie um Observer para o Model `Tarefa` que, automaticamente, ao ser criada (`creating`), preenche um campo `slug` gerado a partir do título — e discuta (comentário) em que casos você preferiria um Observer a um Event/Listener explícito, e vice-versa.

---

### 9.13 Jobs e Filas (Queues)

**O que é:** Algumas operações não precisam (e não deveriam) travar a resposta ao usuário esperando terminar — enviar um e-mail, processar uma imagem, gerar um relatório pesado. Um **Job** encapsula essa tarefa; despachado para uma **fila** (`dispatch()`), ele é processado de forma assíncrona por um processo **worker** rodando em background (`php artisan queue:work`), enquanto o usuário já recebeu sua resposta HTTP imediatamente. Isso melhora drasticamente a percepção de performance da aplicação e é essencial para qualquer sistema real em produção.

**Você precisa dominar:**
- Criar um Job (`php artisan make:job`) implementando `ShouldQueue`, e despachá-lo (`MeuJob::dispatch($dados)`).
- Configuração de driver de fila (`sync` para desenvolvimento/depuração local, `database`/`redis` para produção).
- Retry e falhas: `tries`, `backoff`, e o que acontece quando um Job falha repetidamente (fila de "failed jobs").
- Rodar o worker (`queue:work`) e a diferença de comportamento comparado a `queue:listen` (recarrega código a cada job vs precisa reiniciar manualmente após deploy).

**Perguntas que você deve saber responder:**
- Por que enviar um e-mail de forma síncrona dentro do fluxo de uma requisição HTTP é uma má prática de performance em produção?
- O que acontece, por padrão, quando um Job lança uma exceção não tratada durante o processamento?

**Exercícios:**
- 🟢 Fácil: Crie um Job `EnviarEmailBoasVindas` (pode simular o envio só com um log) e despache-o com driver `sync`, comprovando que funciona antes de mexer em fila real.
- 🟡 Intermediário: Configure o driver de fila `database`, rode `queue:work`, e despache o Job de forma realmente assíncrona, observando o processamento em background enquanto a resposta HTTP já retornou.
- 🔴 Difícil: Configure um Job que falha propositalmente (lance uma exceção) e explore o comportamento de `tries`/`backoff`, além de inspecionar a tabela `failed_jobs` e implementar o método `failed()` do Job para tratar a falha definitiva (ex: notificar um administrador).

---

### 9.14 Artisan — Comandos Customizados

**O que é:** Artisan é a interface de linha de comando do Laravel (`php artisan migrate`, `make:model`, etc.). Você também pode criar seus próprios comandos (`php artisan make:command`) para tarefas administrativas/manutenção (ex: limpar dados antigos, gerar relatórios, importar dados em lote) — extremamente útil no dia a dia de um time, e frequentemente esquecido por devs júnior que fazem tudo "na mão".

**Você precisa dominar:**
- Criar um comando customizado, definir sua assinatura (`signature`) com argumentos e opções.
- Interagir com o usuário no terminal (`$this->info()`, `$this->error()`, `$this->ask()`, barras de progresso).
- Agendar comandos (`Schedule`) para rodar automaticamente em intervalos (relacionado ao cron do servidor).

**Perguntas que você deve saber responder:**
- Por que colocar uma rotina de manutenção (ex: limpar registros antigos) num Artisan Command é melhor do que rodar um script solto manualmente de vez em quando?

**Exercícios:**
- 🟢 Fácil: Crie um comando `tarefas:listar` que lista no terminal todas as tarefas pendentes.
- 🟡 Intermediário: Crie um comando `tarefas:limpar-concluidas {dias}` que recebe um argumento (quantidade de dias) e remove tarefas concluídas há mais tempo do que isso, com confirmação (`$this->confirm()`) antes de executar.
- 🔴 Difícil: Agende esse comando para rodar automaticamente toda madrugada usando o `Schedule` do Laravel, e documente como isso se conecta ao cron real do servidor operacional (Fase 14).

---

### 9.15 Policies e Gates (Autorização)

**O que é:** Autenticação responde "quem é você?"; **autorização** responde "você tem permissão para fazer isso?". **Gates** são closures simples para regras de autorização gerais (ex: "só admins podem acessar o painel"). **Policies** são classes dedicadas à autorização de um Model específico, com métodos correspondendo a ações (`view`, `update`, `delete`) — ex: "um usuário só pode editar suas próprias tarefas, a menos que seja admin".

**Você precisa dominar:**
- Criar uma Policy (`php artisan make:policy`) e registrar sua relação com um Model.
- Usar `$this->authorize()` em Controllers, `@can`/`@cannot` em Blade, e `Gate::allows()` programaticamente.
- Diferença de quando usar Gate (regra simples, sem Model específico) vs Policy (regra ligada a um recurso/Model específico).

**Perguntas que você deve saber responder:**
- Qual a diferença de propósito entre um Gate e uma Policy?
- Por que autorização deveria ficar centralizada em Policies/Gates em vez de espalhada em `if`s dentro dos Controllers?

**Exercícios:**
- 🟢 Fácil: Crie uma Policy `TarefaPolicy` com um método `update(User $user, Tarefa $tarefa)` que só permite edição se a tarefa pertencer ao usuário, e aplique-a no Controller com `$this->authorize()`.
- 🟡 Intermediário: Adicione um método `delete` à mesma Policy com uma regra diferente (ex: só o dono OU um admin podem deletar), e use `@can('delete', $tarefa)` na view Blade para esconder o botão de exclusão quando não permitido.
- 🔴 Difícil: Crie um Gate customizado (`Gate::define`) para uma regra que não está ligada a um Model específico (ex: "acessar o painel administrativo"), combine-o com a Policy de tarefas num mesmo fluxo, e escreva testes (Fase 8) cobrindo os cenários de permissão concedida e negada.

---

### 9.16 Autenticação

**O que é:** Autenticação confirma "quem você é" — geralmente via login com e-mail/senha, gerando uma sessão (para aplicações web tradicionais) ou um token (para APIs). O Laravel oferece **Sessions** (autenticação stateful clássica, cookie de sessão), **Sanctum** (tokens leves, ótimo para SPAs e APIs simples de primeira parte) e **Passport** (implementação completa de OAuth2, para cenários mais complexos com terceiros consumindo sua API).

**Você precisa dominar:**
- Autenticação baseada em sessão (`Auth::attempt()`, `Auth::user()`, `Auth::logout()`) e o middleware `auth`.
- Hashing de senha (`Hash::make()`, `Hash::check()`) e por que senha nunca deveria ser armazenada em texto plano (conectando com Segurança, Fase 11).
- Sanctum: tokens de API pessoais e autenticação de SPA via cookie.
- Quando considerar Passport (OAuth2 completo) em vez de Sanctum — geralmente quando terceiros externos precisam se autenticar na sua API seguindo o fluxo OAuth2 padrão.

**Perguntas que você deve saber responder:**
- Qual a diferença fundamental entre autenticação via sessão (cookie) e autenticação via token (Sanctum/API)?
- Por que senhas devem ser armazenadas com hash (e nunca criptografadas de forma reversível)?

**Exercícios:**
- 🟢 Fácil: Implemente um fluxo de login/logout tradicional baseado em sessão (pode usar o scaffolding do Laravel Breeze como referência, mas tente entender/reimplementar manualmente).
- 🟡 Intermediário: Proteja as rotas de tarefas com o middleware `auth`, garantindo que cada usuário só veja/gerencie suas próprias tarefas (conectando com a Policy da 9.15).
- 🔴 Difícil: Configure o Sanctum para expor uma API autenticada por token, gere um token pessoal para um usuário, e faça uma requisição autenticada via `curl`/Postman demonstrando acesso autorizado e outra sem token demonstrando bloqueio (401).

---

### 9.17 Cache no Laravel

**O que é:** O Laravel oferece uma API unificada de cache (`Cache::get()`, `Cache::put()`, `Cache::remember()`) independente do driver por trás (arquivo, banco, Redis, Memcached — aprofundaremos os drivers na Fase 12). Cache é usado para evitar recalcular ou reconsultar algo caro (uma query pesada, uma chamada de API externa) repetidamente, guardando o resultado por um tempo.

**Você precisa dominar:**
- `Cache::remember(chave, tempo, closure)` — o padrão mais usado no dia a dia (busca do cache; se não existir, executa a closure, guarda o resultado, e retorna).
- Invalidação de cache (`Cache::forget()`) e por que "cache desatualizado" é uma das categorias de bug mais traiçoeiras (o famoso "tem duas coisas difíceis em computação: nomear variáveis e invalidar cache").
- Cache de configuração/rotas do próprio Laravel (`config:cache`, `route:cache`) — outro tipo de cache, em nível de framework.

**Perguntas que você deve saber responder:**
- Por que cache mal invalidado é considerado uma das fontes de bug mais difíceis de rastrear?
- Em que situação você usaria `Cache::remember()` em vez de simplesmente consultar o banco toda vez?

**Exercícios:**
- 🟢 Fácil: Use `Cache::remember()` para cachear a lista de categorias (que muda raramente) por 60 minutos.
- 🟡 Intermediário: Implemente a invalidação correta: sempre que uma categoria for criada/editada/removida, chame `Cache::forget()` na chave correspondente.
- 🔴 Difícil: Implemente uma estratégia de cache para um relatório agregado custoso (ex: total de tarefas concluídas por categoria), incluindo uma chave de cache que varia por parâmetro (ex: por mês consultado), e documente sua estratégia de invalidação/expiração escolhida e por quê.

---

### 9.18 Notifications, Mail e File Storage

**O que é:** O sistema de **Notifications** do Laravel unifica o envio de avisos por múltiplos canais (e-mail, banco de dados/notificação in-app, SMS, Slack) através de uma única classe. **Mail** é especificamente para e-mails transacionais mais elaborados (com views Blade próprias para o corpo do e-mail). O sistema de **File Storage** (`Storage::disk()`) abstrai onde os arquivos são realmente salvos (disco local, S3, etc.), permitindo trocar o "disco" de armazenamento sem reescrever a lógica de upload.

**Você precisa dominar:**
- Criar uma Notification (`php artisan make:notification`) e enviá-la via `$user->notify()`.
- Criar uma Mailable (`make:mail`) com uma view Blade dedicada para o corpo do e-mail.
- Upload de arquivo via `Storage::disk('local')->put()` (ou `public`), e como servir arquivos enviados pelo usuário de forma segura.
- Por que abstrair o storage atrás de `Storage::disk()` facilita trocar de armazenamento local para S3 em produção sem reescrever a lógica de negócio.

**Perguntas que você deve saber responder:**
- Qual a vantagem de usar o sistema de Notifications (multi-canal) em vez de só enviar um e-mail diretamente via `Mail::send()`?
- Por que abstrair o local de armazenamento de arquivos (`Storage::disk()`) é uma boa prática de design, conectando com os princípios da Fase 6?

**Exercícios:**
- 🟢 Fácil: Crie uma Notification `TarefaAtribuida` enviada por e-mail quando uma tarefa é atribuída a um usuário (pode usar o driver de e-mail `log` para não precisar de um servidor SMTP real ainda).
- 🟡 Intermediário: Adicione o canal de banco de dados (`database`) à mesma Notification, exibindo as notificações não lidas numa área do painel do usuário.
- 🔴 Difícil: Implemente upload de um anexo numa tarefa usando `Storage::disk('local')`, com validação de tipo/tamanho de arquivo (conectando com Validação, 9.8, e Segurança, Fase 11), e depois demonstre como você trocaria o disco de `local` para `s3` alterando apenas configuração, sem tocar no código da lógica de upload.

---

### 🏗️ Checkpoint de Projeto #6 (opcional)

**Projeto sugerido:** Reescreva a lista de tarefas como uma aplicação Laravel completa: autenticação de usuários, CRUD de tarefas com categorias e etiquetas (relacionamentos), autorização via Policy (cada um só vê/edita suas tarefas), notificação por e-mail quando uma tarefa é atribuída, Job assíncrono para algum processamento pesado (ex: gerar um relatório em PDF/CSV das tarefas), testes cobrindo pelo menos os fluxos principais.
**O que isso comprova:** que você sai desta fase capaz de construir, sozinho, uma aplicação Laravel real de ponta a ponta, usando os recursos centrais do framework de forma consciente — não só copiando de tutoriais.

---
## FASE 10 — Construção de APIs

> APIs são como sistemas conversam entre si — front-ends SPA, apps mobile, outros serviços. Saber desenhar uma API bem feita é uma habilidade central de qualquer sênior backend.

### 10.1 Princípios REST

**O que é:** REST (Representational State Transfer) é um estilo arquitetural (não um protocolo rígido) para desenhar APIs sobre HTTP, usando os verbos HTTP com seu significado semântico correto (`GET` para ler sem efeito colateral, `POST` para criar, `PUT`/`PATCH` para atualizar — o primeiro substitui o recurso inteiro, o segundo atualiza parcialmente, `DELETE` para remover), recursos identificados por URLs (`/tarefas/5`, não `/getTarefa?id=5`), e uso correto dos códigos de status HTTP para comunicar o resultado.

**Você precisa dominar:**
- Modelar URLs em torno de recursos (substantivos), não ações (verbos) — `/tarefas` e não `/listarTarefas`.
- Uso semântico correto de cada verbo HTTP, incluindo a diferença entre `PUT` (substitui tudo) e `PATCH` (atualiza parcialmente).
- Idempotência: `GET`, `PUT`, `DELETE` deveriam ser idempotentes (chamar várias vezes tem o mesmo efeito que chamar uma vez); `POST` geralmente não é.
- Uso correto e consistente de códigos de status (200, 201, 204, 400, 401, 403, 404, 422, 500) nas respostas da sua API.

**Perguntas que você deve saber responder:**
- Por que `PUT` deveria ser idempotente, mas `POST` geralmente não é?
- Qual a diferença semântica entre um 422 e um 400 numa API bem desenhada?

**Exercícios:**
- 🟢 Fácil: Desenhe (em texto, sem implementar ainda) as URLs e verbos de uma API REST completa para o recurso `tarefas`, seguindo convenções REST corretas.
- 🟡 Intermediário: Implemente essas rotas no Laravel (`routes/api.php`), retornando respostas JSON com os códigos de status corretos para cada cenário (sucesso, validação falha, não encontrado).
- 🔴 Difícil: Refatore uma API "quase REST" propositalmente malfeita (ex: `/getTarefas`, `/deletarTarefa?id=5` via GET) para os princípios REST corretos, documentando cada mudança e por que ela melhora a API.

---

### 10.2 API Resources e Versionamento

**O que é:** **API Resources** (`php artisan make:resource`) são classes que controlam exatamente como um Model é serializado para JSON — evitando expor colunas sensíveis/desnecessárias do banco diretamente, e permitindo formatar/agregar dados de forma consistente. **Versionamento de API** (ex: `/api/v1/tarefas`) permite evoluir a API sem quebrar clientes que ainda dependem do comportamento antigo — essencial em qualquer API usada por terceiros ou por um app mobile que não é atualizado instantaneamente.

**Você precisa dominar:**
- Criar um API Resource e uma Resource Collection, controlando exatamente os campos expostos.
- Por que expor o Model Eloquent diretamente (`return $tarefa`) é geralmente uma má prática (acopla o formato da API à estrutura interna do banco).
- Estratégias comuns de versionamento (prefixo de URL, header customizado) e trade-offs de cada uma.

**Perguntas que você deve saber responder:**
- Por que retornar um Model Eloquent diretamente como resposta JSON é considerado um acoplamento perigoso entre banco de dados e contrato de API?
- Cite uma vantagem e uma desvantagem de versionar a API via prefixo de URL (`/api/v1/`) comparado a versionar via header HTTP customizado.

**Exercícios:**
- 🟢 Fácil: Crie um `TarefaResource` que expõe apenas os campos relevantes (escondendo, por exemplo, timestamps internos que não interessam ao cliente da API).
- 🟡 Intermediário: Adicione dados agregados/derivados no Resource (ex: um campo calculado `dias_em_aberto`) que não existe como coluna no banco.
- 🔴 Difícil: Estruture a API com versionamento explícito (`/api/v1/tarefas`), implemente uma mudança de contrato incompatível numa v2 (ex: renomear um campo no JSON de resposta) mantendo a v1 funcionando sem quebra, e documente sua estratégia de depreciação da v1.

---

### 10.3 Autenticação de API

**O que é:** Retomando e aprofundando a Fase 9.16 no contexto específico de APIs: tokens (Sanctum) são o padrão mais simples para APIs de primeira parte; **JWT** (JSON Web Token) é um formato de token autocontido (carrega os dados do usuário assinados digitalmente, sem precisar consultar o banco a cada requisição) muito usado em arquiteturas distribuídas; **OAuth2** é o protocolo padrão da indústria para autorização delegada (ex: "logar com Google", ou permitir que um app terceiro acesse sua API em nome do usuário, com escopos de permissão bem definidos).

**Você precisa dominar:**
- Fluxo de autenticação via token Bearer no header `Authorization`.
- Estrutura básica de um JWT (header, payload, assinatura) e por que ele é "autocontido" (não precisa de consulta ao banco para validar, só verificar a assinatura).
- Conceito de escopos (scopes) em OAuth2 — permissões granulares por token.
- Rate limiting (`throttle`) como camada complementar de proteção de API.

**Perguntas que você deve saber responder:**
- Por que um JWT é chamado de "autocontido", e que risco isso traz se ele for roubado/vazado antes de expirar?
- Qual a diferença de propósito entre autenticação simples por token (Sanctum) e um fluxo OAuth2 completo com escopos?

**Exercícios:**
- 🟢 Fácil: Proteja a API de tarefas (10.1) com Sanctum, exigindo token Bearer válido em todas as rotas.
- 🟡 Intermediário: Adicione rate limiting (`throttle:60,1`) nas rotas de API e demonstre o comportamento (código 429) ao ultrapassar o limite.
- 🔴 Difícil: Decodifique manualmente (sem biblioteca, só explode/base64_decode) um JWT de exemplo, explicando cada uma das 3 partes, e discuta por que a assinatura impede que alguém falsifique o payload sem a chave secreta do servidor.

---

### 10.4 Documentação de API (OpenAPI/Swagger)

**O que é:** Documentação de API bem feita é o que permite que outro time (ou você mesmo, 6 meses depois) integre com sua API sem precisar ler o código-fonte. **OpenAPI** (antigo Swagger) é o padrão de especificação mais usado: um arquivo (YAML/JSON) descrevendo cada endpoint, parâmetros, formato de resposta, códigos de status possíveis — que pode gerar automaticamente uma documentação interativa navegável (Swagger UI) e até validar contratos automaticamente.

**Você precisa dominar:**
- Estrutura básica de um arquivo OpenAPI (paths, parameters, responses, schemas).
- Gerar documentação a partir de anotações no código (bibliotecas como `l5-swagger` no Laravel) ou escrever manualmente.
- Por que manter a documentação sincronizada com o código real é um desafio constante, e estratégias para mitigar isso (geração automática a partir de anotações/testes).

**Perguntas que você deve saber responder:**
- Por que documentação de API desatualizada é pior, em certos aspectos, do que nenhuma documentação?

**Exercícios:**
- 🟢 Fácil: Escreva manualmente um arquivo OpenAPI (YAML) documentando 2 endpoints da API de tarefas (listar e criar).
- 🟡 Intermediário: Instale uma biblioteca de geração de documentação Swagger no Laravel e gere a documentação via anotações direto nos Controllers/Form Requests.
- 🔴 Difícil: Documente a API completa de tarefas (todos os endpoints CRUD + autenticação), incluindo exemplos de request/response e todos os códigos de status possíveis para cada endpoint, e publique-a localmente via Swagger UI.

---

### 10.5 GraphQL (Conceitos)

**O que é:** GraphQL é uma alternativa ao REST: em vez de múltiplos endpoints fixos retornando um formato fixo, o cliente envia uma única query descrevendo **exatamente** quais campos quer, de quais recursos relacionados, numa única requisição — resolvendo dois problemas clássicos do REST: **over-fetching** (receber mais dados do que precisa) e **under-fetching** (precisar de várias requisições encadeadas para montar a tela). Você não precisa se tornar um especialista em GraphQL nesta trilha, mas um sênior precisa saber quando ele é (ou não) a escolha certa comparado a REST.

**Você precisa dominar:**
- O conceito de Schema, Query, Mutation e Resolver.
- Como GraphQL resolve over-fetching/under-fetching comparado a REST.
- Trade-offs: GraphQL tem curva de aprendizado própria, cache HTTP tradicional fica mais difícil (tudo é POST para um único endpoint), e nem todo projeto se beneficia da flexibilidade extra.

**Perguntas que você deve saber responder:**
- Explique, com um exemplo concreto, o que é "over-fetching" no REST e como o GraphQL resolveria esse cenário específico.
- Por que cache HTTP tradicional (baseado em URL) fica mais complicado com GraphQL?

**Exercícios:**
- 🟢 Fácil: Pesquise e escreva, com suas palavras, um cenário real onde GraphQL seria claramente vantajoso sobre REST, e outro onde REST continuaria sendo a escolha mais simples e adequada.
- 🟡 Intermediário: Instale uma biblioteca de GraphQL para Laravel (ex: `lighthouse-php`) e exponha o recurso `tarefas` com uma Query simples de listagem.
- 🔴 Difícil: Implemente uma Query GraphQL que busca tarefas junto com sua categoria e etiquetas relacionadas numa única requisição, e compare (documentando) quantas requisições REST separadas seriam necessárias para montar a mesma tela sem GraphQL.

---

### 🏗️ Checkpoint de Projeto #7 (opcional)

**Projeto sugerido:** Construa uma API RESTful completa e documentada para o sistema de tarefas: autenticação via Sanctum, API Resources bem definidos, versionamento (`/api/v1`), rate limiting, tratamento consistente de erros (formato de erro padronizado em JSON), e documentação OpenAPI navegável via Swagger UI.
**O que isso comprova:** que você é capaz de expor um backend PHP de forma profissional para consumo por qualquer cliente (app mobile, SPA em React/Vue, outro serviço) — uma habilidade extremamente valorizada no mercado.

---

## FASE 11 — Segurança Web

> Segurança não é um "módulo opcional" — é uma responsabilidade constante em cada linha de código. Um sênior pensa em segurança desde o design, não como um "adendo" no final.

### 11.1 OWASP Top 10 Aplicado a PHP

**O que é:** OWASP (Open Web Application Security Project) mantém uma lista das vulnerabilidades mais críticas e comuns em aplicações web, atualizada periodicamente. Não é sobre decorar a lista — é sobre internalizar o modo de pensar "todo dado externo é hostil até prova em contrário" e saber reconhecer os padrões de vulnerabilidade mais comuns no dia a dia PHP/Laravel.

**Você precisa dominar:**
- Reconhecer as categorias mais relevantes para uma aplicação PHP típica: Injection (SQL, comando), Broken Access Control, Cryptographic Failures, falhas de configuração de segurança, componentes desatualizados/vulneráveis.
- O princípio central: nunca confiar cegamente em nenhum dado vindo de fora da aplicação (input do usuário, headers, cookies, resposta de API externa).
- Manter dependências atualizadas (`composer audit`) como parte da rotina de segurança, não uma tarefa esporádica.

**Perguntas que você deve saber responder:**
- Por que "nunca confiar em dado externo" deveria ser um princípio aplicado em toda camada da aplicação, não só na "porta de entrada"?

**Exercícios:**
- 🟢 Fácil: Rode `composer audit` no seu projeto Laravel e documente (mesmo que não haja nada crítico) o que essa ferramenta verifica.
- 🟡 Intermediário: Escolha 3 categorias do OWASP Top 10 e escreva, para cada uma, um exemplo concreto de como ela poderia se manifestar especificamente numa aplicação Laravel.
- 🔴 Difícil: Faça uma auditoria de segurança manual no Checkpoint #6 (aplicação Laravel completa), documentando qualquer ponto de risco encontrado (mesmo pequeno) e a correção aplicada.

---

### 11.2 SQL Injection, XSS, CSRF e Mass Assignment

**O que é:** Estas são as 4 vulnerabilidades mais concretas e recorrentes no dia a dia PHP/Laravel, e você já tocou em todas ao longo da trilha — aqui formalizamos e aprofundamos. **SQL Injection**: já visto na Fase 7.3, resolvido estruturalmente com Prepared Statements/Eloquent. **XSS** (Cross-Site Scripting): injetar script malicioso que roda no navegador de outro usuário, geralmente através de dado não escapado exibido de volta na página (resolvido pelo escape automático do Blade, `{{ }}`, Fase 9.4). **CSRF** (Cross-Site Request Forgery): um site malicioso induz o navegador da vítima (já autenticada em outro site) a enviar uma requisição indesejada sem o consentimento dela — o Laravel protege isso automaticamente com um token CSRF em formulários. **Mass Assignment**: preencher em massa propriedades de um Model a partir de input do usuário sem controle, permitindo que um atacante defina campos que não deveria (ex: `is_admin`) — mitigado por `$fillable`/`$guarded` (Fase 9.5).

**Você precisa dominar:**
- Explicar cada uma dessas 4 vulnerabilidades com suas próprias palavras e um exemplo concreto de exploração.
- Como o Laravel mitiga cada uma por padrão (Eloquent/PDO para SQLi, Blade para XSS, `@csrf`/middleware `VerifyCsrfToken` para CSRF, `$fillable` para Mass Assignment) — e reconhecer quando um dev pode acidentalmente desativar essas proteções (ex: usando `{!! !!}` sem necessidade, ou colocando tudo em `$guarded = []`).
- Sanitização e validação de entrada como primeira linha de defesa, complementar (não substituta) às proteções estruturais do framework.

**Perguntas que você deve saber responder:**
- Como um atacante poderia explorar Mass Assignment se um Model tivesse `protected $guarded = [];` e um campo `is_admin` na tabela?
- Explique, com um exemplo prático, como um ataque de CSRF funciona, mesmo a vítima nunca tendo digitado a senha no site malicioso.

**Exercícios:**
- 🟢 Fácil: Revise todos os Models do Checkpoint #6 e confirme que `$fillable`/`$guarded` estão configurados corretamente, sem excesso de exposição.
- 🟡 Intermediário: Demonstre, num ambiente de teste controlado, um payload de XSS (`<script>alert(1)</script>`) sendo neutralizado automaticamente pelo escape do Blade ao tentar exibi-lo, e mostre o que aconteceria se você usasse `{!! !!}` sem necessidade nesse mesmo campo.
- 🔴 Difícil: Escreva um relatório curto (pode ser um markdown) descrevendo, para SQL Injection, XSS, CSRF e Mass Assignment: (1) como cada ataque funciona, (2) como o Laravel protege por padrão, (3) um exemplo de código que acidentalmente desativaria essa proteção, para cada um dos 4 casos.

---

### 11.3 Hashing de Senhas e Sessões Seguras

**O que é:** Senhas nunca devem ser armazenadas em texto plano nem criptografadas de forma reversível — devem ser **hasheadas** com um algoritmo lento e resistente a força bruta (o Laravel usa `bcrypt`/`argon2` por padrão via `Hash::make()`). Sessões seguras envolvem configurações como cookies `HttpOnly` (não acessível via JavaScript, mitigando roubo via XSS), `Secure` (só enviado via HTTPS) e `SameSite` (mitigando CSRF).

**Você precisa dominar:**
- Por que hash é diferente de criptografia (hash não é reversível por design), e por que isso é exatamente o que se quer para senhas.
- `Hash::make()`/`Hash::check()` e por que comparar senha hasheada nunca deve ser feito com `==` simples (timing attacks — reconhecer o conceito, não precisa implementar defesa manual, o Laravel já cuida disso).
- Configurações de cookie de sessão seguras (`HttpOnly`, `Secure`, `SameSite`) e o que cada uma mitiga.

**Perguntas que você deve saber responder:**
- Por que "criptografar" a senha (de forma reversível) seria pior do que fazer hash dela?
- O que a flag `HttpOnly` num cookie de sessão impede especificamente?

**Exercícios:**
- 🟢 Fácil: Confirme (no código do seu Checkpoint #6) que as senhas estão sendo salvas via `Hash::make()`, nunca em texto plano.
- 🟡 Intermediário: Revise as configurações de sessão do Laravel (`config/session.php`) e documente o que cada configuração relevante de segurança (`http_only`, `secure`, `same_site`) faz.
- 🔴 Difícil: Escreva um pequeno script isolado (fora do Laravel) que demonstra a diferença entre `md5()` (rápido, inadequado para senha) e `password_hash()` (lento de propósito, adequado), medindo o tempo de execução de cada um em milhares de iterações, e explique por que a "lentidão" do segundo é uma característica de segurança, não um defeito.

---

### 11.4 Boas Práticas de Validação, Sanitização e Headers de Segurança

**O que é:** Validação (Fase 9.8) garante que o dado está no formato esperado; sanitização remove/neutraliza conteúdo potencialmente perigoso antes de usar/exibir. Headers de segurança HTTP (`Content-Security-Policy`, `X-Frame-Options`, `X-Content-Type-Options`, `Strict-Transport-Security`) são instruções que o servidor manda ao navegador para reforçar proteções adicionais (ex: prevenir que seu site seja carregado dentro de um `<iframe>` malicioso — clickjacking).

**Você precisa dominar:**
- A diferença entre validar (rejeitar o que não está no formato certo) e sanitizar (limpar/neutralizar o que está perigoso mas ainda aceitável).
- Os headers de segurança HTTP mais relevantes e o que cada um mitiga.
- HTTPS obrigatório em produção como base de tudo (sem TLS, mesmo as melhores práticas de código não impedem interceptação de dados em trânsito).

**Perguntas que você deve saber responder:**
- Qual a diferença entre validação e sanitização, com um exemplo de cada aplicado ao mesmo campo de input?
- O que o header `X-Frame-Options: DENY` protege especificamente (clickjacking)?

**Exercícios:**
- 🟢 Fácil: Adicione os headers de segurança básicos (`X-Frame-Options`, `X-Content-Type-Options`) via um middleware customizado global na sua aplicação.
- 🟡 Intermediário: Configure um `Content-Security-Policy` básico restringindo de onde scripts podem ser carregados, e documente o que quebraria se você esquecesse de liberar um domínio legítimo que seu site realmente usa.
- 🔴 Difícil: Faça uma checklist de segurança completa de pré-deploy (HTTPS forçado, headers configurados, `APP_DEBUG=false` em produção, senhas hasheadas, `.env` fora do controle de versão, dependências atualizadas) e aplique-a integralmente no Checkpoint #6, documentando cada item verificado.

---
## FASE 12 — Cache, Filas e Mensageria

> Sistemas em produção real precisam lidar com volume, latência e picos de carga. Essas ferramentas são como você escala sem simplesmente "colocar um servidor maior".

### 12.1 Redis e Memcached

**O que é:** Redis e Memcached são bancos de dados **em memória**, usados como cache (dados temporários, acesso extremamente rápido) e, no caso do Redis, também como estrutura de dados mais rica (listas, sets, filas) e broker de filas/pub-sub. A diferença central para um banco relacional: dados em memória são muito mais rápidos, mas voláteis por natureza (podem ser perdidos, dependendo da configuração de persistência) — por isso cache nunca deveria ser a única fonte de verdade de um dado importante.

**Você precisa dominar:**
- Diferença conceitual entre Redis (mais rico, estruturas de dados variadas, persistência opcional) e Memcached (mais simples, só cache puro de chave-valor).
- Configurar o Laravel para usar Redis como driver de cache/sessão/fila.
- TTL (time-to-live) de uma chave em cache e por que quase todo dado em cache deveria ter expiração.
- Por que cache nunca deveria ser a única fonte de verdade — ele deve sempre poder ser reconstruído a partir da fonte real de dados.

**Perguntas que você deve saber responder:**
- Por que você não deveria guardar um dado crítico de negócio (ex: o saldo real de uma conta) apenas em Redis, sem também existir numa fonte durável (banco)?
- Que tipo de estrutura de dados o Redis oferece além de simples chave-valor, que o Memcached não oferece?

**Exercícios:**
- 🟢 Fácil: Suba um Redis local (via Docker) e configure o Laravel para usar Redis como driver de cache, repetindo o exercício de cache de categorias da Fase 9.17, agora sobre Redis de verdade.
- 🟡 Intermediário: Use comandos Redis diretamente (via `redis-cli` ou `Redis::` facade do Laravel) para armazenar e consultar uma estrutura de dados mais rica (ex: uma lista ou um sorted set representando um ranking).
- 🔴 Difícil: Implemente um rate limiter customizado usando Redis diretamente (sem usar o `throttle` pronto do Laravel), usando uma estratégia de janela fixa ou sliding window, e explique o raciocínio da sua implementação.

---

### 12.2 Filas Assíncronas e Workers em Profundidade

**O que é:** Retomando a Fase 9.13 com uma visão mais operacional: em produção, você precisa gerenciar workers de fila como processos de longa duração (supervisionados, reiniciados automaticamente se caírem — ferramentas como **Supervisor** cuidam disso), lidar com deploys (o worker precisa ser reiniciado para pegar código novo), e pensar em escalabilidade horizontal (rodar múltiplos workers em paralelo para processar mais itens simultaneamente).

**Você precisa dominar:**
- Diferença entre `queue:work` (processo de longa duração, precisa de supervisão) e `queue:listen` (mais lento, mas recarrega código automaticamente — só para desenvolvimento).
- O papel de um supervisor de processos (ex: Supervisor no Linux) para garantir que workers voltem a rodar se caírem.
- Escalar horizontalmente rodando múltiplos workers simultâneos, e a necessidade de idempotência nos Jobs (o que acontece se o mesmo Job rodar duas vezes por engano?).
- Filas nomeadas/priorizadas (`--queue=alta,padrao`) para dar prioridade a certos tipos de tarefa.

**Perguntas que você deve saber responder:**
- Por que um Job idealmente deveria ser idempotente (seguro de rodar mais de uma vez com o mesmo efeito)?
- Por que você precisa reiniciar os workers de fila depois de um deploy que alterou código de um Job?

**Exercícios:**
- 🟢 Fácil: Configure múltiplas filas nomeadas (`padrao`, `urgente`) e despache Jobs diferentes para cada uma, rodando um worker que processa a fila urgente com prioridade.
- 🟡 Intermediário: Escreva um Job que, de propósito, não é idempotente (ex: incrementa um contador sem verificação), rode-o duas vezes manualmente simulando reprocessamento, e depois corrija-o para ser idempotente (ex: verificando se a ação já foi realizada antes de repetir).
- 🔴 Difícil: Configure o Supervisor (ou documente detalhadamente como configuraria, se não tiver acesso a um Linux completo agora) para manter 3 workers rodando permanentemente, reiniciando automaticamente em caso de falha, e descreva o processo de deploy seguro (reiniciar workers) que você adotaria.

---

### 12.3 Message Brokers (RabbitMQ, Kafka) — Conceitos

**O que é:** Enquanto as filas do Laravel (mesmo usando Redis por trás) são geralmente pensadas para comunicação dentro da própria aplicação, **Message Brokers** dedicados como RabbitMQ e Kafka são desenhados para comunicação **entre sistemas/serviços diferentes** (relevante em arquiteturas de microsserviços, Fase 13.6). RabbitMQ segue o modelo de filas tradicionais com roteamento flexível (exchanges, routing keys). Kafka é um **log de eventos distribuído**: mensagens não são "consumidas e removidas" como numa fila tradicional, mas ficam armazenadas por um período, permitindo múltiplos consumidores independentes lerem o mesmo stream de eventos em seu próprio ritmo — muito usado para processamento de eventos em larga escala.

**Você precisa dominar:**
- Diferença conceitual entre uma fila tradicional (RabbitMQ) e um log de eventos distribuído (Kafka).
- O conceito de "producer" (quem publica mensagens) e "consumer" (quem processa), desacoplados um do outro.
- Quando essa infraestrutura extra se justifica (comunicação entre múltiplos serviços/times) versus quando as filas nativas do Laravel já resolvem o problema (comunicação dentro da própria aplicação monolítica).

**Perguntas que você deve saber responder:**
- Qual a diferença fundamental entre RabbitMQ e Kafka em termos de "o que acontece com a mensagem depois de consumida"?
- Em que ponto da evolução de um sistema costuma fazer sentido introduzir um Message Broker dedicado, em vez de continuar com as filas nativas da aplicação?

**Exercícios:**
- 🟢 Fácil: Pesquise e escreva, com suas palavras, um cenário real onde RabbitMQ seria mais apropriado que Kafka, e outro onde Kafka seria mais apropriado.
- 🟡 Intermediário: Suba um RabbitMQ local via Docker e, usando uma biblioteca cliente PHP (ex: `php-amqplib`), publique e consuma uma mensagem simples fora do contexto do Laravel, só para entender o mecanismo básico.
- 🔴 Difícil: Desenhe (em diagrama de texto/ASCII ou descrição detalhada) como você desacoplaria dois serviços fictícios (ex: um serviço de "Pedidos" e um serviço de "Estoque") usando um Message Broker, descrevendo o fluxo de eventos entre eles e por que isso é mais resiliente do que uma chamada HTTP síncrona direta entre os dois serviços.

---

## FASE 13 — Engenharia de Software II: Arquitetura de Software

> Esta é a fase que realmente distingue um sênior de um pleno avançado. Não é sobre "saber mais frameworks" — é sobre saber **organizar sistemas inteiros** de forma que sobrevivam a anos de mudança sem virarem um pesadelo de manutenção.

### 13.1 Arquitetura em Camadas e os Limites do MVC

**O que é:** MVC (Model-View-Controller) é o padrão arquitetural que o Laravel usa na superfície, e você já trabalhou com ele bastante. Mas em projetos que crescem, um problema clássico aparece: o **"Model gordo"** ou o **"Controller gordo"** — toda a regra de negócio complexa vai parar dentro dos Models Eloquent ou dos Controllers, porque "é onde já está tudo", misturando persistência, regra de negócio e apresentação numa bagunça difícil de testar e entender. Arquitetura em camadas propõe separar explicitamente: camada de apresentação (Controllers/views), camada de aplicação/serviço (orquestra casos de uso), camada de domínio (regras de negócio puras) e camada de infraestrutura (banco, APIs externas, filesystem).

**Você precisa dominar:**
- Reconhecer sinais de "Model gordo"/"Controller gordo" em código real.
- A ideia de uma camada de **Service** (ou "Use Case"/"Action") entre o Controller e o Model, contendo a orquestração da regra de negócio.
- Por que separar camadas melhora testabilidade (você pode testar a regra de negócio sem precisar simular uma requisição HTTP inteira).
- Que MVC, por si só, não é "arquitetura completa" — ele descreve a camada de apresentação, mas não dita como organizar o domínio/regras de negócio complexas por baixo.

**Perguntas que você deve saber responder:**
- Por que colocar toda a regra de negócio dentro do Model Eloquent dificulta testá-la isoladamente?
- Qual a diferença de responsabilidade entre um Controller e uma classe de Service/Action?

**Exercícios:**
- 🟢 Fácil: Pegue um Controller do Checkpoint #6 que tem lógica de negócio misturada com orquestração HTTP, e extraia a regra de negócio para uma classe de Service dedicada.
- 🟡 Intermediário: Refatore um Model Eloquent que tinha métodos de regra de negócio complexa (não só relacionamentos/acessores simples), movendo essa lógica para fora do Model.
- 🔴 Difícil: Redesenhe a arquitetura em camadas completa de uma funcionalidade do Checkpoint #6 (ex: "criar um pedido com múltiplos itens, calcular total, aplicar desconto, notificar"), desenhando explicitamente onde fica cada responsabilidade (Controller, Service/Use Case, Model/Repository, Notification), e implemente essa separação.

---

### 13.2 Clean Architecture

**O que é:** Clean Architecture (proposta por Robert C. Martin) organiza o sistema em círculos concêntricos, com uma regra central: **dependências só podem apontar para dentro**. No centro fica o **domínio** (entidades e regras de negócio puras, sem nenhuma dependência de framework, banco ou HTTP). Ao redor, os **casos de uso** (orquestram o domínio para realizar uma ação específica). Nas camadas mais externas, **interfaces/adapters** (Controllers, apresentação) e **infraestrutura** (banco de dados, frameworks, bibliotecas externas). A consequência prática: seu domínio não deveria "saber" que o Laravel existe — ele deveria funcionar identicamente mesmo se você trocasse de framework inteiro.

**Você precisa dominar:**
- A regra de dependência: código de fora (infraestrutura, framework) pode depender de código de dentro (domínio), nunca o contrário.
- Como isso se relaciona diretamente com o Dependency Inversion Principle (Fase 6.3) — o domínio define interfaces, a infraestrutura as implementa.
- Reconhecer o que significa, na prática, "regra de negócio não deveria depender do Eloquent" — e os trade-offs disso (mais desacoplamento, mas também mais código de "tradução" entre camadas).
- Que Clean Architecture não é gratuita: para um CRUD simples, pode ser over-engineering (conectando de volta com YAGNI, Fase 6.2) — o valor aparece em domínios com regra de negócio genuinamente complexa.

**Perguntas que você deve saber responder:**
- Por que, em Clean Architecture, o domínio nunca deveria importar uma classe do Eloquent diretamente?
- Em que tipo de projeto Clean Architecture completa seria over-engineering, e em qual tipo ela realmente compensaria o esforço extra?

**Exercícios:**
- 🟢 Fácil: Pegue uma regra de negócio pura do seu projeto (ex: cálculo de desconto) e reescreva-a como uma classe/função que não importa absolutamente nada do Laravel (nem `Model`, nem `Request`, nem facades) — só PHP puro.
- 🟡 Intermediário: Desenhe as 4 camadas (domínio, casos de uso, interfaces, infraestrutura) para a funcionalidade "criar pedido" do seu projeto, e implemente ao menos o domínio e um caso de uso, mesmo que a infraestrutura ainda dependa do Eloquent por trás de uma interface.
- 🔴 Difícil: Implemente completamente uma funcionalidade do zero seguindo Clean Architecture nas 4 camadas, com o domínio 100% livre de dependências do Laravel (testável com PHPUnit puro, sem precisar do framework "de pé"), e escreva testes unitários do domínio que rodam em milissegundos, sem nenhuma dependência de banco/framework.

---

### 13.3 Arquitetura Hexagonal (Ports & Adapters)

**O que é:** Arquitetura Hexagonal (Alistair Cockburn) é conceitualmente muito próxima da Clean Architecture, com um vocabulário próprio: o núcleo da aplicação (domínio + casos de uso) se comunica com o mundo externo através de **Ports** (interfaces que definem "o que" o núcleo precisa ou oferece) e **Adapters** (implementações concretas dessas interfaces — um adapter de banco de dados, um adapter de API REST, um adapter de fila). A metáfora do "hexágono" é só para deixar visualmente claro que não existe uma direção privilegiada de "entrada" única (diferente do MVC tradicional, onde tudo começa pelo Controller) — você pode ter múltiplos adapters de entrada (HTTP, CLI, mensageria) todos conversando com o mesmo núcleo de aplicação.

**Você precisa dominar:**
- Ports de entrada (driving/primary — como o mundo externo aciona sua aplicação) vs Ports de saída (driven/secondary — como sua aplicação aciona o mundo externo, ex: persistência).
- Como isso permite, na prática, trocar um Adapter (ex: trocar de MySQL para outro banco, ou adicionar um novo Adapter de entrada via CLI além do HTTP) sem tocar no núcleo da aplicação.
- Que Hexagonal e Clean Architecture resolvem essencialmente o mesmo problema central (isolar o domínio de detalhes técnicos), com nomenclatura e ênfase ligeiramente diferentes.

**Perguntas que você deve saber responder:**
- Qual a diferença entre um Port de entrada e um Port de saída, com um exemplo de cada no contexto do seu projeto?
- Por que a arquitetura hexagonal facilita adicionar, por exemplo, um comando Artisan que aciona o mesmo caso de uso que já é acionado via API HTTP, sem duplicar lógica?

**Exercícios:**
- 🟢 Fácil: Identifique, no seu projeto atual, quais seriam os Ports de saída (ex: persistência de tarefas, envio de notificação) e desenhe as interfaces correspondentes, mesmo que a implementação real continue a mesma por enquanto.
- 🟡 Intermediário: Implemente um segundo Adapter de entrada para um caso de uso já existente (ex: se "criar tarefa" já funciona via API HTTP, crie também um comando Artisan que aciona exatamente o mesmo caso de uso), comprovando reaproveitamento total da lógica de aplicação.
- 🔴 Difícil: Pegue a funcionalidade "criar pedido" implementada na Fase 13.2 (Clean Architecture) e reorganize-a explicitamente na nomenclatura de Ports & Adapters, implementando dois Adapters de saída diferentes para persistência (um Eloquent, um em memória para testes) e demonstrando a troca entre eles via configuração, sem alterar o núcleo.

---

### 13.4 Domain-Driven Design (DDD) — Tático e Estratégico

**O que é:** DDD é uma abordagem para lidar com a complexidade de domínios de negócio genuinamente complicados, dividida em duas partes. O **DDD estratégico** foca em como dividir um sistema grande em **Bounded Contexts** (contextos delimitados — ex: "Vendas" e "Estoque" podem ter conceitos com o mesmo nome, como "Produto", mas com significados e regras diferentes em cada contexto) e como esses contextos se relacionam. O **DDD tático** oferece um vocabulário de padrões de modelagem dentro de um contexto: **Entities** (objetos com identidade própria que persiste ao longo do tempo, ex: um `Pedido` específico), **Value Objects** (objetos definidos inteiramente pelo seu valor, sem identidade própria, e imutáveis — ex: um `Dinheiro` ou um `Endereco`, conectando com `readonly` da Fase 4.12), **Aggregates** (um agrupamento de entities/value objects tratado como uma unidade de consistência, com uma "raiz" que controla o acesso), **Repositories** (já visto na Fase 6.6) e **Domain Events** (algo relevante que aconteceu no domínio, conectando com Fase 9.12).

**Você precisa dominar:**
- Diferença entre Entity (tem identidade, ex: dois `Pedido` com os mesmos dados ainda são pedidos diferentes se têm IDs diferentes) e Value Object (não tem identidade, ex: dois `Dinheiro` de R$ 10 são iguais se o valor é igual).
- O conceito de Aggregate e sua "raiz" (Aggregate Root) — por que mudanças num Aggregate deveriam sempre passar pela raiz, para proteger invariantes (conectando com encapsulamento, Fase 4.2).
- Bounded Context — por que o mesmo termo de negócio pode (e deve) ter modelagens diferentes em contextos diferentes do sistema.
- Que DDD é uma ferramenta pesada, indicada para domínios de negócio genuinamente complexos — aplicá-la a um CRUD simples é over-engineering (mais uma conexão com YAGNI).

**Perguntas que você deve saber responder:**
- Dê um exemplo, no seu domínio de estudo, de algo que seria melhor modelado como Value Object do que como Entity, e explique por quê.
- Por que um Aggregate deveria ter uma única "raiz" controlando todo acesso/modificação às suas partes internas?

**Exercícios:**
- 🟢 Fácil: Modele um Value Object `Dinheiro` (imutável, com operações como `somar()`, `multiplicar()`) e um Value Object `Endereco`, usando `readonly` (Fase 4.12), aplicando-os no lugar de tipos primitivos soltos (`float $preco`, strings soltas de endereço) no seu domínio.
- 🟡 Intermediário: Modele um Aggregate `Pedido` (Aggregate Root) contendo uma coleção de `ItemPedido` (parte do mesmo Aggregate, sem existência independente), garantindo que qualquer adição/remoção de item só possa acontecer através de métodos do `Pedido`, nunca manipulando a coleção diretamente de fora.
- 🔴 Difícil: Desenhe (documento/diagrama) pelo menos 2 Bounded Contexts para um sistema maior (ex: "Catálogo" e "Vendas" de um e-commerce), identificando um conceito que existe nos dois contextos com significado diferente (ex: "Produto" no Catálogo tem descrição/fotos; "Produto" em Vendas só precisa de preço e disponibilidade), e explique como cada contexto teria seu próprio modelo, mesmo compartilhando um identificador comum.

---

### 13.5 CQRS e Event Sourcing (Introdução)

**O que é:** **CQRS** (Command Query Responsibility Segregation) propõe separar explicitamente os caminhos de **escrita** (Commands — mudam o estado do sistema) dos caminhos de **leitura** (Queries — só consultam, sem efeito colateral), podendo até usar modelos de dados diferentes/otimizados para cada caso (ex: escrita num modelo normalizado, leitura num modelo desnormalizado otimizado para exibição). **Event Sourcing** é uma técnica mais radical: em vez de guardar apenas o **estado atual** de uma entidade, você guarda a **sequência completa de eventos** que levaram até aquele estado — o estado atual é sempre derivável reconstruindo (replaying) os eventos. São técnicas avançadas, usadas em sistemas com necessidades específicas de auditoria completa ou de escala de leitura/escrita muito assimétrica — não são o padrão default para a maioria dos sistemas.

**Você precisa dominar (nível conceitual, não implementação completa em produção):**
- A diferença entre separar Command/Query (CQRS) mesmo mantendo um único banco de dados, vs a versão mais avançada com bancos de leitura/escrita totalmente separados.
- A ideia central de Event Sourcing: o log de eventos é a fonte da verdade; o "estado atual" é uma projeção derivada, reconstruível.
- Vantagens (auditoria completa e nativa, capacidade de "voltar no tempo") e custos (complexidade real de implementação e operação) dessas técnicas — e por que a maioria dos sistemas NÃO precisa delas.

**Perguntas que você deve saber responder:**
- Qual problema real o CQRS resolve que uma arquitetura CRUD tradicional não resolve tão bem?
- Por que Event Sourcing oferece auditoria "de graça", comparado a um sistema que só guarda o estado atual?

**Exercícios:**
- 🟢 Fácil: Pesquise e escreva, com suas palavras, um cenário de negócio real onde Event Sourcing faria sentido (ex: sistemas financeiros/contábeis que precisam de trilha de auditoria completa) e um onde seria over-engineering claro.
- 🟡 Intermediário: Implemente uma separação simples de CQRS no seu projeto: classes de "Command" (ex: `CriarTarefaCommand` + `CriarTarefaHandler`) separadas de classes de "Query" (ex: `ListarTarefasQuery` + `ListarTarefasHandler`), mesmo ainda usando o mesmo banco de dados para ambos.
- 🔴 Difícil: Implemente uma versão simplificada de Event Sourcing para uma única entidade do seu domínio (ex: `Tarefa`): guarde uma sequência de eventos (`TarefaCriada`, `TarefaRenomeada`, `TarefaConcluida`) numa tabela de eventos, e escreva uma função que reconstrói o estado atual da tarefa "reproduzindo" (replaying) esses eventos em ordem.

---

### 13.6 Monolito vs Microsserviços

**O que é:** Um **monolito** é uma aplicação única, com um único deploy, compartilhando um único banco de dados (ou não necessariamente, mas tipicamente sim) — é onde praticamente todo projeto começa, e frequentemente onde deveria permanecer por muito tempo. **Microsserviços** dividem o sistema em múltiplos serviços independentes, cada um com sua própria responsabilidade, deploy e (geralmente) banco de dados próprio, comunicando-se via rede (REST, mensageria). A decisão entre os dois **não é sobre qual é "melhor"** de forma absoluta — é sobre trade-offs reais: microsserviços resolvem problemas de escala organizacional (times grandes trabalhando de forma mais independente) e escala técnica assimétrica, mas introduzem complexidade operacional significativa (rede, consistência distribuída, observabilidade) que muitos times subestimam.

**Você precisa dominar:**
- Os problemas reais que microsserviços resolvem (deploy independente, escala independente por serviço, isolamento de falha, times trabalhando de forma mais autônoma).
- Os custos reais que microsserviços introduzem (complexidade de rede, consistência eventual em vez de transações ACID simples, necessidade de observabilidade distribuída madura, latência de rede entre serviços).
- Por que "começar com microsserviços" é geralmente um erro para a maioria dos projetos/times — um **monolito bem modularizado internamente** (usando os princípios das seções 13.1-13.4!) é frequentemente o ponto de partida mais sensato, com a opção de extrair serviços depois, quando a necessidade real aparecer.

**Perguntas que você deve saber responder:**
- Cite dois problemas reais que microsserviços resolvem e dois custos reais que eles introduzem.
- Por que um monolito bem modularizado (com Bounded Contexts internos claros, Fase 13.4) facilita uma futura extração para microsserviços, se algum dia for realmente necessária?

**Exercícios:**
- 🟢 Fácil: Escreva um comparativo (tabela ou lista) de prós e contras de monolito vs microsserviços, baseado no que você aprendeu, sem copiar de nenhuma fonte externa.
- 🟡 Intermediário: Pegue os Bounded Contexts desenhados na Fase 13.4 e avalie: se cada um virasse um microsserviço separado hoje, quais dificuldades reais de consistência de dados e comunicação apareceriam entre eles?
- 🔴 Difícil: Escreva um documento de decisão arquitetural (ADR — veremos formalmente na Fase 16.2) simulando uma decisão real: "Devemos migrar nosso monolito de tarefas para microsserviços agora?" — considerando o tamanho real do seu projeto de estudo, argumentando a favor e contra, e concluindo com uma recomendação justificada.

---

### 13.7 Comunicação Entre Serviços

**O que é:** Quando você tem múltiplos serviços (ou até dentro de um sistema distribuído com componentes externos), eles precisam se comunicar. As opções principais: **REST/HTTP síncrono** (simples, mas o serviço chamador fica esperando a resposta, e uma falha do serviço chamado propaga imediatamente); **gRPC** (comunicação binária de alta performance, com contratos fortemente tipados via Protocol Buffers, mais comum em ecossistemas poliglota de alta performance); **mensageria assíncrona** (via Message Broker, Fase 12.3 — desacopla o tempo de resposta, o serviço chamador não precisa esperar, mas introduz consistência eventual em vez de imediata).

**Você precisa dominar:**
- Trade-off central entre comunicação síncrona (mais simples de raciocinar, mas acopla disponibilidade dos serviços entre si) e assíncrona (mais resiliente a falhas parciais, mas exige lidar com consistência eventual).
- Noção básica do que é gRPC e quando ele seria escolhido em vez de REST simples (performance, contratos fortemente tipados entre serviços internos).
- Padrões de resiliência para chamadas síncronas entre serviços: timeout, retry com backoff, circuit breaker (interromper temporariamente chamadas para um serviço que está falhando, evitando sobrecarregar ainda mais um sistema já com problema).

**Perguntas que você deve saber responder:**
- Por que uma chamada síncrona direta entre dois serviços cria um acoplamento de disponibilidade entre eles (se um cai, o outro é afetado)?
- O que um Circuit Breaker faz, conceitualmente, e por que ele protege o sistema como um todo?

**Exercícios:**
- 🟢 Fácil: Desenhe (diagrama de texto) a comunicação entre dois serviços fictícios (ex: "Pedidos" chama "Estoque" para verificar disponibilidade) usando REST síncrono, identificando o que acontece se "Estoque" ficar indisponível.
- 🟡 Intermediário: Redesenhe a mesma comunicação usando mensageria assíncrona (ex: "Pedidos" publica um evento "PedidoCriado"; "Estoque" reage de forma assíncrona), discutindo como a experiência do usuário mudaria (ex: confirmação imediata vs confirmação posterior).
- 🔴 Difícil: Implemente um Circuit Breaker simples (pode ser uma classe PHP própria, sem biblioteca pronta) que envolve uma chamada HTTP simulada a um serviço externo: depois de N falhas consecutivas, o circuito "abre" e passa a falhar rapidamente sem nem tentar a chamada real por um período, depois volta a testar ("half-open"). Escreva testes cobrindo os 3 estados (fechado, aberto, half-open).

---

### 13.8 Introdução a System Design

**O que é:** System Design é a disciplina de projetar sistemas que atendem requisitos não-funcionais em escala: disponibilidade, consistência, latência, throughput. É um tópico enorme por si só (frequentemente uma área de estudo à parte para entrevistas de nível sênior/staff), mas aqui o objetivo é uma introdução sólida aos conceitos que todo sênior deveria reconhecer e saber discutir, mesmo sem ser um especialista em sistemas de escala massiva.

**Você precisa dominar:**
- Vocabulário básico: latência vs throughput, disponibilidade (uptime, os famosos "9s"), escalabilidade vertical (servidor maior) vs horizontal (mais servidores).
- O Teorema CAP (Consistência, Disponibilidade, Tolerância a Particionamento — na presença de uma falha de rede, você escolhe entre consistência ou disponibilidade, não pode ter as duas simultaneamente).
- Load balancing (distribuir requisições entre múltiplas instâncias da aplicação) e a necessidade de a aplicação ser **stateless** para escalar horizontalmente sem problema (conectando de volta com a Fase 1.1 — HTTP é stateless por natureza, mas sessões tradicionais quebram isso, exigindo soluções como sessão compartilhada via Redis).
- Estratégias básicas de escalar um banco de dados (réplicas de leitura, particionamento/sharding) em alto nível conceitual.

**Perguntas que você deve saber responder:**
- Por que uma aplicação que guarda sessão em arquivo local no próprio servidor tem dificuldade de escalar horizontalmente com múltiplas instâncias atrás de um load balancer?
- Explique o Teorema CAP com suas próprias palavras e um exemplo prático de decisão entre consistência e disponibilidade.

**Exercícios:**
- 🟢 Fácil: Explique por que a configuração de sessão do Laravel usando driver `redis` (em vez de `file`) é necessária para rodar múltiplas instâncias da aplicação atrás de um load balancer.
- 🟡 Intermediário: Desenhe (diagrama de texto) a arquitetura de infraestrutura de uma aplicação Laravel escalada horizontalmente: load balancer, múltiplas instâncias da aplicação (stateless), Redis compartilhado para sessão/cache, banco de dados com réplica de leitura.
- 🔴 Difícil: Faça um exercício clássico de entrevista de system design, em versão simplificada: desenhe, em alto nível (sem implementar), como você projetaria um sistema de encurtador de URLs (como bit.ly) capaz de lidar com alto volume de leitura, considerando: geração de códigos curtos únicos, cache do redirecionamento mais acessado, e réplicas de leitura do banco.

---

### 🏗️ Checkpoint de Projeto #8 (opcional)

**Projeto sugerido:** Refatore a API do Checkpoint #7 aplicando Clean Architecture (ou Hexagonal): domínio isolado do Laravel (testável sem framework), pelo menos uma Entity e um Value Object bem modelados (DDD tático), Repository desacoplado via interface, e um caso de uso completo implementado nas 4 camadas.
**O que isso comprova:** que você não só entende arquitetura na teoria, mas consegue aplicá-la a um sistema real, com todos os trade-offs (mais arquivos, mais indireção) sendo uma escolha consciente, não acidental — essa é literalmente a definição de pensamento arquitetural sênior.

---
## FASE 14 — DevOps e Infraestrutura para Desenvolvedores

> Você não precisa virar um especialista em infraestrutura, mas um sênior sabe conversar com quem é, entende o que acontece depois que o código sai da sua máquina, e consegue debugar problemas de produção com autonomia.

### 14.1 Docker e Docker Compose

**O que é:** Retomando a introdução da Fase 1.4: Docker empacota uma aplicação com tudo que ela precisa para rodar (sistema, dependências, configuração) num **container** — uma unidade isolada e reprodutível, que roda igual em qualquer máquina (sua, de um colega, do servidor de produção). Um **Dockerfile** descreve como construir a imagem da sua aplicação. **Docker Compose** orquestra múltiplos containers relacionados (ex: sua aplicação PHP + MySQL + Redis) definidos num único arquivo `docker-compose.yml`, subindo tudo junto com um comando.

**Você precisa dominar:**
- Escrever um `Dockerfile` para uma aplicação PHP/Laravel (imagem base, instalar extensões PHP necessárias, copiar código, configurar).
- `docker-compose.yml` orquestrando aplicação + banco + Redis, com variáveis de ambiente e volumes (para persistir dados do banco entre reinicializações e para hot-reload de código em desenvolvimento).
- Diferença entre imagem (o "molde" construído a partir do Dockerfile) e container (uma instância rodando dessa imagem).
- Comandos básicos: `docker build`, `docker-compose up`, `docker-compose down`, `docker exec` (entrar num container rodando).

**Perguntas que você deve saber responder:**
- Qual a diferença entre uma imagem Docker e um container?
- Por que usar volumes no Docker Compose é importante para não perder os dados do banco toda vez que você reinicia os containers?

**Exercícios:**
- 🟢 Fácil: Escreva um `Dockerfile` completo para rodar sua aplicação Laravel (PHP-FPM), e construa a imagem localmente.
- 🟡 Intermediário: Escreva um `docker-compose.yml` completo orquestrando aplicação + MySQL + Redis + Nginx, com volumes apropriados, e suba o ambiente completo com `docker-compose up`.
- 🔴 Difícil: Configure um ambiente Docker com **múltiplos estágios de build** (multi-stage build) otimizado para produção (imagem final enxuta, sem ferramentas de desenvolvimento desnecessárias), comparando o tamanho final da imagem com uma versão sem multi-stage.

---

### 14.2 CI/CD

**O que é:** **CI** (Continuous Integration) é a prática de, a cada mudança de código enviada ao repositório, automaticamente rodar verificações (testes, linters, análise estática) antes de aceitar a mudança — pegando problemas cedo, antes de chegarem em produção. **CD** (Continuous Delivery/Deployment) automatiza o processo de levar código aprovado até produção, reduzindo erro humano e permitindo deploys mais frequentes e menos arriscados. **GitHub Actions** é uma das ferramentas mais usadas hoje para implementar pipelines de CI/CD, com arquivos de configuração `.yml` definindo os passos (workflows).

**Você precisa dominar:**
- Estrutura básica de um workflow do GitHub Actions (`.github/workflows/*.yml`): triggers (quando rodar), jobs, steps.
- Um pipeline de CI típico para PHP: instalar dependências (Composer), rodar linter (PHP-CS-Fixer), rodar testes (PHPUnit/Pest), opcionalmente análise estática (PHPStan/Psalm — ferramentas que detectam erros de tipo sem executar o código).
- A diferença entre Continuous Delivery (pronto para deploy, mas com aprovação manual) e Continuous Deployment (deploy totalmente automático a cada merge aprovado).
- Por que rodar a suíte de testes automaticamente em cada Pull Request é uma rede de segurança essencial em qualquer time.

**Perguntas que você deve saber responder:**
- Qual a diferença entre Continuous Delivery e Continuous Deployment?
- Por que um pipeline de CI que roda testes automaticamente em cada PR reduz o risco de regressões chegarem à branch principal?

**Exercícios:**
- 🟢 Fácil: Crie um workflow do GitHub Actions que, a cada push, instala as dependências via Composer e roda a suíte de testes (PHPUnit/Pest) do seu projeto.
- 🟡 Intermediário: Adicione ao mesmo workflow um passo de lint (PHP-CS-Fixer em modo `--dry-run`) e, opcionalmente, análise estática (PHPStan), fazendo o pipeline falhar se qualquer verificação não passar.
- 🔴 Difícil: Configure o workflow para rodar em paralelo contra múltiplas versões do PHP (matrix build, ex: 8.2 e 8.3), e adicione um segundo workflow de deploy automático (ainda que simulado, ex: apenas fazendo `echo "deploy simulado"`) disparado apenas quando um merge acontece na branch principal e todos os testes passam.

---

### 14.3 Servidores Web e Deploy

**O que é:** Em produção, PHP não roda sozinho — ele é processado por um servidor web. **Nginx** ou **Apache** recebem a requisição HTTP e a repassam para o **PHP-FPM** (FastCGI Process Manager, que gerencia um pool de processos PHP prontos para processar requisições de forma eficiente). Fazer deploy manual (copiar arquivos, rodar migrations, reiniciar serviços) é propenso a erro — times profissionais automatizam isso (scripts de deploy, ou plataformas gerenciadas).

**Você precisa dominar:**
- O papel de Nginx/Apache como proxy reverso/servidor de arquivos estáticos, e do PHP-FPM como executor do código PHP.
- Configuração básica de um virtual host Nginx apontando para o `public/` de uma aplicação Laravel.
- Passos típicos de um deploy de aplicação Laravel: `git pull`, `composer install --no-dev`, `php artisan migrate`, `php artisan config:cache`/`route:cache`, reiniciar PHP-FPM/workers de fila.
- Diferença entre configuração de ambiente de desenvolvimento (`APP_DEBUG=true`, erros visíveis) e produção (`APP_DEBUG=false`, erros logados mas nunca expostos ao usuário — conectando com Segurança, Fase 11).

**Perguntas que você deve saber responder:**
- Por que `APP_DEBUG` deveria estar sempre `false` em produção?
- Descreva, em ordem, os passos essenciais de um deploy de uma aplicação Laravel em produção.

**Exercícios:**
- 🟢 Fácil: Configure um virtual host Nginx local apontando para o `public/` da sua aplicação Laravel, servindo via PHP-FPM (pode ser dentro do próprio ambiente Docker da Fase 14.1).
- 🟡 Intermediário: Escreva um script de deploy (`deploy.sh`) que executa, em ordem, todos os passos necessários para atualizar a aplicação em produção com segurança (incluindo colocar a aplicação em modo de manutenção durante o processo, `php artisan down`/`up`).
- 🔴 Difícil: Contrate (ou simule com uma conta gratuita) uma VPS real, e faça o deploy completo da sua aplicação Laravel do zero: Nginx, PHP-FPM, MySQL, configuração de domínio/HTTPS (ex: com Let's Encrypt), documentando cada passo realizado.

---

### 14.4 Monitoramento e Logs

**O que é:** Em produção, você não está olhando a tela o tempo todo — precisa que o próprio sistema avise quando algo dá errado. **Logging estruturado** registra eventos importantes (erros, ações críticas) de forma consistente e pesquisável. Ferramentas como **Sentry** capturam exceções automaticamente em produção, com contexto completo (stack trace, dados da requisição), alertando o time em tempo real. **Observabilidade** básica envolve métricas (quantas requisições, tempo de resposta, taxa de erro) e a capacidade de investigar rapidamente "o que está acontecendo agora" quando algo foge do esperado.

**Você precisa dominar:**
- Níveis de log (`debug`, `info`, `warning`, `error`, `critical`) e quando usar cada um.
- Configurar canais de log do Laravel (`config/logging.php`) e integrar uma ferramenta como Sentry para captura automática de exceções em produção.
- A diferença entre "log solto por todo lado" (ruído, difícil de filtrar) e log estruturado com contexto relevante (o que realmente ajuda a diagnosticar um problema depois).
- Noção básica de métricas de aplicação (tempo de resposta médio, taxa de erro) como sinal de saúde do sistema.

**Perguntas que você deve saber responder:**
- Por que uma ferramenta como Sentry é mais eficaz do que depender só de arquivos de log para descobrir que algo deu errado em produção?
- Que informação de contexto você incluiria num log de erro para realmente ajudar a diagnosticar o problema depois (além da mensagem de erro em si)?

**Exercícios:**
- 🟢 Fácil: Configure logs estruturados no seu projeto, registrando eventos relevantes (ex: falha de autenticação, erro de pagamento simulado) com o nível apropriado e contexto útil (`Log::error('mensagem', ['contexto' => 'aqui'])`).
- 🟡 Intermediário: Integre o Sentry (conta gratuita) na sua aplicação Laravel, provoque uma exceção de propósito em ambiente de teste, e confirme que ela aparece capturada no painel do Sentry com o contexto completo.
- 🔴 Difícil: Configure um "health check" endpoint (`/health`) que verifica a conectividade com banco, cache e fila, retornando um status consolidado — e documente como isso se integraria a um sistema de monitoramento externo que verifica esse endpoint periodicamente e alerta o time em caso de falha.

---

## FASE 15 — Performance e Escalabilidade

> Código correto que é lento demais para o uso real ainda é um problema em produção. Performance não é sobre microotimização prematura — é sobre saber medir, identificar o gargalo real e resolver o que realmente importa.

### 15.1 Profiling — Encontrando Gargalos Reais

**O que é:** Profiling é medir onde o tempo/memória realmente está sendo gasto na execução do seu código, em vez de "adivinhar" e otimizar o lugar errado (uma das armadilhas mais comuns até em devs experientes: otimizar prematuramente algo que não era o gargalo real). O **Xdebug** (já visto na Fase 3.7 para debug) também tem um modo de profiling que gera um arquivo detalhado de quanto tempo cada função consumiu. **Blackfire** é uma ferramenta profissional dedicada a profiling contínuo, inclusive em produção.

**Você precisa dominar:**
- A regra de ouro: **meça antes de otimizar**. Nunca otimize "no escuro" com base só em intuição.
- Gerar e interpretar um profile do Xdebug (call graph, tempo por função, quantas vezes cada função foi chamada).
- A ideia de "80/20" em performance: geralmente uma pequena parte do código é responsável pela maior parte do tempo gasto — é aí que vale a pena focar o esforço de otimização.

**Perguntas que você deve saber responder:**
- Por que "otimizar sem medir primeiro" é considerado uma prática arriscada, mesmo por devs experientes?

**Exercícios:**
- 🟢 Fácil: Habilite o modo de profiling do Xdebug e gere um profile de uma página do seu projeto que você suspeita ser lenta.
- 🟡 Intermediário: Analise o profile gerado (usando uma ferramenta como QCacheGrind/Webgrind) e identifique qual função consome a maior parte do tempo total.
- 🔴 Difícil: Otimize especificamente o gargalo identificado no exercício anterior (pode ser uma query N+1, um loop ineficiente, uma chamada externa repetida), gere um novo profile depois da correção, e documente a diferença de tempo total antes/depois com números reais.

---

### 15.2 Otimização de Queries

**O que é:** Retomando o problema de N+1 (Fase 9.5) com mais profundidade: além de resolver com Eager Loading, um sênior sabe usar `EXPLAIN` para entender como o banco está executando uma query (está usando um índice? está fazendo uma varredura completa da tabela — "full table scan"?), e sabe quando adicionar um índice realmente resolve o problema vs quando o problema é a query em si (ex: buscar colunas demais, filtrar de forma ineficiente).

**Você precisa dominar:**
- Rodar `EXPLAIN` numa query SQL e interpretar o resultado básico (está usando índice? quantas linhas está varrendo?).
- Identificar quando adicionar um índice resolve uma query lenta, e os trade-offs (índices aceleram leitura, mas custam espaço e desaceleram escrita).
- Usar ferramentas do Laravel (`DB::listen()`, Laravel Debugbar/Telescope) para visualizar todas as queries disparadas numa requisição, e identificar N+1 e queries redundantes.
- `select()` explícito trazendo só as colunas necessárias, em vez de sempre `SELECT *`.

**Perguntas que você deve saber responder:**
- O que significa uma query estar fazendo "full table scan", segundo o `EXPLAIN`, e por que isso geralmente é um sinal de alerta em tabelas grandes?
- Por que adicionar índice em toda coluna não é uma solução gratuita?

**Exercícios:**
- 🟢 Fácil: Rode `EXPLAIN` numa query de listagem do seu projeto e documente o que o resultado diz sobre uso de índice.
- 🟡 Intermediário: Adicione um índice numa coluna frequentemente usada em `WHERE`/`ORDER BY`, rode o mesmo `EXPLAIN` de novo, e compare a diferença.
- 🔴 Difícil: Usando o Laravel Telescope (ou Debugbar), audite uma tela completa da sua aplicação, listando todas as queries disparadas, identificando qualquer N+1 ou query redundante restante, e otimizando até reduzir significativamente o número total de queries daquela tela.

---

### 15.3 OPcache e Otimizações do PHP

**O que é:** PHP, por padrão, recompila o código-fonte para bytecode a cada requisição — um desperdício de trabalho repetido, já que o código não muda entre requisições (em produção). **OPcache** é uma extensão nativa do PHP que guarda esse bytecode compilado em memória, eliminando a recompilação repetida e acelerando significativamente a execução em produção.

**Você precisa dominar:**
- O que o OPcache faz conceitualmente (cache de bytecode compilado) e por que ele é essencial em produção (e geralmente desnecessário/atrapalha em desenvolvimento, já que você quer ver mudanças de código imediatamente).
- Configurações básicas do OPcache (`opcache.enable`, `opcache.memory_consumption`, `opcache.validate_timestamps`).
- Outras otimizações de nível de aplicação Laravel: `config:cache`, `route:cache`, `view:cache` (pré-compilam configuração/rotas/views, evitando reprocessamento a cada requisição).

**Perguntas que você deve saber responder:**
- Por que o OPcache deveria estar habilitado em produção mas configurado de forma diferente (ou desabilitado) em desenvolvimento?
- O que `php artisan config:cache` faz, e por que você precisa lembrar de rodá-lo de novo depois de alterar uma variável de ambiente em produção?

**Exercícios:**
- 🟢 Fácil: Habilite o OPcache no seu ambiente (Docker/local) e confirme, via `phpinfo()` ou `opcache_get_status()`, que ele está ativo.
- 🟡 Intermediário: Rode um benchmark simples (ex: uma rota que faz algum processamento moderado) com OPcache desabilitado e depois habilitado, comparando o tempo de resposta médio.
- 🔴 Difícil: Configure o processo de deploy (retomando a Fase 14.3) para sempre rodar `config:cache`, `route:cache` e `view:cache` após cada deploy, e documente o que aconteceria (um bug real e comum) se alguém alterasse o `.env` em produção sem rodar `config:cache` novamente depois.

---

### 15.4 Estratégias de Cache em Múltiplas Camadas

**O que é:** Cache não é só "uma chamada ao Redis" — pensamento sênior de performance considera cache em várias camadas: cache de query/resultado (já visto, Fase 9.17), cache de página inteira (para conteúdo que muda raramente), cache HTTP via headers (`Cache-Control`, `ETag` — permitindo que o próprio navegador ou uma CDN evite refazer a requisição), e CDN (Content Delivery Network, para servir arquivos estáticos/imagens de servidores geograficamente próximos ao usuário).

**Você precisa dominar:**
- As diferentes camadas onde cache pode existir: aplicação (Redis/Memcached), HTTP (headers de cache), CDN (para assets estáticos).
- Headers HTTP de cache básicos (`Cache-Control: max-age=`, `ETag`) e como eles permitem que o navegador evite requisições desnecessárias.
- Por que cache em múltiplas camadas exige uma estratégia de invalidação coerente em todas elas (voltando ao ponto da Fase 9.17: cache mal invalidado é uma fonte clássica de bugs).

**Perguntas que você deve saber responder:**
- Qual a diferença entre cache de aplicação (Redis) e cache HTTP (headers) — em que nível cada um atua?
- Por que uma CDN reduz a latência percebida por usuários geograficamente distantes do seu servidor principal?

**Exercícios:**
- 🟢 Fácil: Configure headers `Cache-Control` apropriados para os assets estáticos (CSS/JS/imagens) da sua aplicação.
- 🟡 Intermediário: Implemente cache de página completa (ou de um fragmento renderizado) para uma tela que muda raramente, usando `Cache::remember()` envolvendo a view inteira renderizada.
- 🔴 Difícil: Desenhe (documento) uma estratégia de cache em camadas completa para a aplicação do Checkpoint #6/#7: o que cachear em cada camada (aplicação, HTTP, CDN), por quanto tempo, e como cada camada seria invalidada quando o dado subjacente muda.

---

## FASE 16 — Tornando-se Sênior: Habilidades Além do Código

> Este é o capítulo final, e não por acaso o mais frequentemente ignorado. Domínio técnico te leva a pleno avançado. O que te leva a sênior de verdade — reconhecido pelo mercado e pelo seu time — é a combinação de tudo isso com estas habilidades.

### 16.1 Code Review Eficaz

**O que é:** Code Review é o processo de revisar o código de um colega antes de integrá-lo ao projeto principal — uma das práticas mais valiosas (e mais mal executadas) da engenharia de software. Um sênior faz review buscando problemas reais (bugs, violações de princípios de design, riscos de segurança/performance) com feedback construtivo, não pedantismo estético, e também sabe **receber** review sem levar para o lado pessoal.

**Você precisa dominar:**
- O que priorizar num review: corretude e riscos primeiro, design/manutenibilidade em segundo, estilo/formatação por último (idealmente automatizado, Fase 5.1, para nem precisar ser discutido em review).
- Como dar feedback construtivo: focar no código, não na pessoa; explicar o "porquê", não só apontar "isso está errado"; diferenciar sugestão de bloqueio.
- Como receber feedback sem defensividade — encarar review como aprendizado mútuo, não como ataque.

**Perguntas que você deve saber responder:**
- Por que discussões de estilo de código (indentação, nomenclatura de espaçamento) deveriam ser resolvidas por ferramenta automática, e não em discussão manual de code review?
- Qual a diferença entre um comentário de review que é "bloqueante" e um que é "sugestão opcional", e por que essa distinção importa?

**Exercícios:**
- 🟢 Fácil: Pegue um Pull Request seu (de qualquer Checkpoint anterior) e escreva um autorreview crítico e honesto, como se fosse outra pessoa revisando.
- 🟡 Intermediário: Peça para a IA mentora simular um Pull Request "problemático" (com pelo menos 3 tipos diferentes de problema: um bug, uma violação de SOLID, um risco de segurança) e pratique escrever comentários de review para cada um, seguindo os critérios de feedback construtivo.
- 🔴 Difícil: Escreva um guia de Code Review (checklist) próprio, baseado em tudo que você aprendeu nesta trilha (segurança, SOLID, testes, performance), que você usaria como referência real ao revisar código de colegas.

---

### 16.2 Documentação Técnica e ADRs

**O que é:** Documentação técnica boa é o que permite que decisões e conhecimento sobrevivam à rotatividade de pessoas num time. **ADRs** (Architecture Decision Records) são documentos curtos que registram uma decisão arquitetural importante: o contexto do problema, as opções consideradas, a decisão tomada e por quê, e as consequências esperadas — extremamente valiosos para que, meses depois, ninguém precise perguntar "por que fizemos assim?" sem resposta.

**Você precisa dominar:**
- Estrutura básica de um ADR (Título, Status, Contexto, Decisão, Consequências).
- Quando vale a pena escrever um ADR (decisões que são caras de reverter, ou que geram dúvida recorrente) vs quando é burocracia desnecessária.
- Documentação de código (README de projeto, comentários de decisão não óbvia) vs documentação de arquitetura (ADRs, diagramas) — propósitos diferentes.

**Perguntas que você deve saber responder:**
- Por que um ADR deveria registrar não só a decisão, mas também as alternativas consideradas e descartadas?

**Exercícios:**
- 🟢 Fácil: Escreva um README completo e profissional para o seu projeto principal desta trilha (Checkpoint #7/#8), incluindo como rodar, como testar, e a estrutura geral do projeto.
- 🟡 Intermediário: Escreva 2 ADRs reais sobre decisões que você tomou ao longo da trilha (ex: "por que escolhemos Clean Architecture para o módulo de pedidos" ou "por que não usamos microsserviços neste projeto").
- 🔴 Difícil: Monte uma pasta `docs/adr/` no seu projeto com um índice de todos os ADRs, numerados cronologicamente, incluindo pelo menos um ADR que documenta uma decisão que você **reverteu** depois (mostrando a evolução do pensamento — isso é extremamente valioso e realista).

---

### 16.3 Mentoria e Liderança Técnica

**O que é:** Sênior não é só "quem sabe mais" — é quem multiplica conhecimento no time. Isso envolve pair programming eficaz, dar feedback de carreira a devs mais júniores, tomar decisões técnicas quando o time está travado, e saber quando **não** impor sua opinião, dando espaço para outros crescerem através de erro próprio supervisionado.

**Você precisa dominar:**
- A diferença entre "dar a resposta pronta" e "guiar alguém até a resposta" ao mentorar (você já está vivenciando isso nesta própria trilha, do lado de quem aprende — internalize o padrão para aplicar do outro lado no futuro).
- Como conduzir uma sessão de pair programming produtiva (alternância de quem "dirige" o teclado, comunicação constante de raciocínio).
- Reconhecer quando é hora de decidir tecnicamente por conta própria vs quando é hora de levar a decisão para discussão coletiva do time.

**Perguntas que você deve saber responder:**
- Por que "sempre dar a resposta pronta" para um dev júnior que pergunta algo pode, no longo prazo, prejudicar o crescimento dele?

**Exercícios:**
- 🟢 Fácil: Escreva, como se estivesse explicando para um dev júnior real, uma explicação didática de um dos conceitos mais difíceis desta trilha para você (ex: Late Static Binding, ou Clean Architecture) — ensinar é uma das melhores formas de testar seu próprio domínio.
- 🟡 Intermediário: Peça para a IA mentora simular ser um dev júnior com uma dúvida real (ex: "por que meu código Laravel está lento?"), e pratique guiá-lo com perguntas até ele mesmo descobrir a causa (N+1), em vez de simplesmente dar a resposta.
- 🔴 Difícil: Escreva um plano de onboarding técnico de 2 semanas para um dev júnior entrando no seu projeto de estudo (Checkpoint #7/#8), incluindo o que ele deveria ler primeiro, que parte do código explorar, e um primeiro "bom primeiro problema" (good first issue) que você designaria para ele.

---

### 16.4 Comunicação com Stakeholders e Estimativas

**O que é:** Sênior frequentemente precisa traduzir complexidade técnica para quem não é técnico (product managers, clientes, liderança), e fazer estimativas de prazo realistas — uma das habilidades mais subestimadas e mais impactantes na carreira. Isso envolve saber comunicar riscos e trade-offs técnicos em linguagem de negócio (impacto, custo, prazo), sem jargão desnecessário, e saber dizer "não sei ainda, mas aqui está meu plano para descobrir" em vez de inventar um número.

**Você precisa dominar:**
- Traduzir uma decisão técnica (ex: "vamos precisar de uma migration que trava a tabela por alguns minutos") para o impacto de negócio correspondente (ex: "vamos ter uma janela de indisponibilidade parcial, melhor agendar fora do horário de pico").
- Técnicas básicas de estimativa (quebrar tarefas grandes em menores, reconhecer incerteza explicitamente, estimar em faixas em vez de números únicos falsamente precisos).
- Por que "isso é rápido, é só..." é uma das frases mais perigosas que um dev pode dizer sem análise cuidadosa antes.

**Perguntas que você deve saber responder:**
- Por que estimar em faixas ("entre 3 e 5 dias") costuma ser mais honesto e útil do que estimar um número único e falsamente preciso?

**Exercícios:**
- 🟢 Fácil: Escreva, em linguagem para um stakeholder não técnico, uma explicação de por que "resolver o N+1" (Fase 9.5/15.2) é importante para o negócio, sem usar o termo "N+1" nem jargão técnico.
- 🟡 Intermediário: Quebre uma funcionalidade grande e ambígua (ex: "sistema de relatórios customizáveis") em tarefas técnicas menores, estimando cada uma em faixas, e identificando explicitamente quais partes têm mais incerteza e por quê.
- 🔴 Difícil: Escreva um documento curto de proposta técnica (para um stakeholder fictício não técnico) sobre migrar o monolito de tarefas para uma arquitetura mais escalável, incluindo: o problema de negócio real que motiva a mudança, o custo estimado (tempo/risco), e os benefícios esperados — sem nenhum jargão técnico não explicado.

---

### 16.5 Preparação para Entrevistas de Nível Sênior

**O que é:** Fechando a trilha: entrevistas de nível sênior em PHP/Laravel tipicamente cobrem (em proporções variáveis): fundamentos sólidos da linguagem (OOP, tipos, tratamento de erro), SOLID e Design Patterns aplicados (não só definição, mas reconhecimento em código real), arquitetura (como você estruturaria um sistema X), banco de dados (modelagem, otimização de query), e comportamentais (como você lidou com um conflito técnico, como você tomou uma decisão de arquitetura difícil). Todo o conteúdo desta trilha, se genuinamente internalizado, cobre isso.

**Você precisa dominar:**
- Explicar, sem hesitar e com exemplo concreto (não só definição), cada princípio SOLID, pelo menos 5 Design Patterns, e as diferenças entre as abordagens arquiteturais vistas na Fase 13.
- Resolver, ao vivo, um problema de modelagem de banco de dados ou de design de classe partindo de um requisito ambíguo (característica central de entrevista sênior: lidar com ambiguidade, fazer boas perguntas antes de codificar).
- Contar, de forma estruturada (ex: método STAR — Situação, Tarefa, Ação, Resultado), pelo menos 3 histórias reais de decisões técnicas difíceis que você tomou ao longo desta trilha (os Checkpoints de projeto são material perfeito para isso).

**Perguntas que você deve saber responder:**
- Consegue explicar, do zero e sem consultar este documento, todos os 5 princípios do SOLID com exemplo próprio (não decorado)?
- Consegue descrever, com confiança, a diferença entre pelo menos 3 arquiteturas diferentes vistas na Fase 13, e quando escolheria cada uma?

**Exercícios:**
- 🟢 Fácil: Escreva, sem consultar nenhuma parte anterior deste documento, um resumo de uma página cobrindo os 5 princípios SOLID com exemplo próprio para cada um. Depois compare com o que você escreveu na Fase 6.3 e veja o que mudou/evoluiu no seu entendimento.
- 🟡 Intermediário: Peça para a IA mentora simular uma entrevista técnica completa de nível sênior PHP/Laravel (perguntas de conceito + um problema de design ao vivo + uma pergunta comportamental), e pratique respondendo como se fosse real.
- 🔴 Difícil: Prepare e escreva 3 histórias no formato STAR baseadas em decisões reais que você tomou nos Checkpoints desta trilha (ex: a decisão de aplicar ou não Clean Architecture no Checkpoint #8), como se fosse responder "me conte sobre uma decisão técnica difícil que você tomou" numa entrevista real.

---

## 🏁 Considerações Finais

Chegar até aqui — de verdade, tendo praticado os exercícios e não só lido — coloca você num patamar bem diferente de onde começou. Mas vale reforçar algo importante: **senioridade não é um diploma que se recebe ao terminar um documento.** É demonstrada de forma contínua, através de decisões consistentes ao longo do tempo, em projetos reais, sob restrições reais (prazo, ambiguidade, pessoas).

Use esta trilha como ela foi desenhada: de forma iterativa, tópico por tópico, sem pular a base achando que "já sabe" — muita coisa que parece básica (Fases 1-3) esconde detalhes que fazem toda diferença mais adiante. Não tenha pressa artificial: é preferível dominar profundamente a Fase 6 (SOLID/Patterns) do que apenas "passar por ela" para chegar mais rápido na Fase 13.

### Sugestão de ritmo

Não existe prazo certo — depende do seu tempo disponível e da profundidade que você quer em cada tópico. Como referência **muito aproximada**, para alguém estudando de forma consistente:

- Fases 1-5 (fundamentos + PSR/Composer): base que, sendo júnior, você deve revisar rápido, mas sem pular.
- Fases 6-8 (Engenharia I + Banco + Testes): o núcleo que mais separa júnior de pleno — vale o tempo que for necessário.
- Fase 9 (Laravel Essencial): a mais longa da trilha — não tenha pressa, é onde tudo se conecta na prática.
- Fases 10-12 (APIs, Segurança, Cache/Filas): consolidação de um perfil backend sólido.
- Fase 13 (Arquitetura): o divisor de águas para sênior — reserve tempo real de reflexão, não só de código.
- Fases 14-16 (DevOps, Performance, Habilidades de Sênior): o que faz você ser reconhecido como sênior pelo mercado e pelo time, além do código em si.

### Como acompanhar seu progresso

Volte à tabela da seção "🗺️ Visão geral da trilha" no início deste documento e marque `[x]` em cada fase concluída. Considere também manter, à parte, um changelog pessoal (pode ser um `PROGRESSO.md` no seu repositório de estudos) com a data de conclusão de cada fase e um link para o Checkpoint de projeto correspondente, quando entregue — isso também vira, com o tempo, um portfólio real para mostrar em entrevistas.

Boa jornada. 🚀
