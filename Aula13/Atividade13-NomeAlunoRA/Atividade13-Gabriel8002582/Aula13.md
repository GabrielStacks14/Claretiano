* **Aluno(a):** Gabriel
* **RA:** 8002582
* **Data:** 30/11/2026

Questão 1
Resposta = O arquivo PHP precisa ser executado por um servidor, como o Apache, pois o navegador não interpreta PHP diretamente. Ao abrir com dois cliques, o código não é processado corretamente.

Questão 2
Resposta = A variável $_POST recebe os dados enviados por um formulário HTML. O atributo method="POST" define o envio dos dados, e o atributo name identifica cada campo para que o PHP consiga acessá-lo.

Questão 3
Resposta = Primeiro, utiliza-se mysqli_connect() para conectar ao banco de dados, informando quatro parâmetros: servidor, usuário, senha e nome do banco. Depois, utiliza-se mysqli_query() para executar comandos SQL, como INSERT e SELECT.

Questão 4
Resposta = É possível gerar uma senha utilizando partes do nome e do e-mail do usuário. As funções substr() e strtolower() permitem extrair caracteres e transformar as letras em minúsculas, formando uma senha automática.

Questão 5
Resposta = O INSERT é utilizado para inserir novos dados no banco de dados. O SELECT é utilizado para consultar dados já cadastrados. No sistema, o INSERT realiza o cadastro do assinante, enquanto o SELECT verifica os dados durante o login.

Questão 6
Resposta = Variáveis de sessão armazenam informações do usuário durante sua navegação no site, permitindo manter o acesso autenticado em diferentes páginas. O comando obrigatório é session_start().

Questão 7
Resposta = A página restrita utiliza session_start() para iniciar a sessão e isset() para verificar se o usuário está autenticado. Caso não esteja, utiliza header("Location: login.html") para redirecioná-lo à página de login.

Questão 8
Resposta = Primeiro, utiliza-se session_start() para iniciar a sessão. Depois, session_unset() apaga as variáveis de sessão e session_destroy() encerra a sessão. Por fim, utiliza-se header("Location: login.html") para voltar à tela de login.