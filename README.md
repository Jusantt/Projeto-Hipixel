Olá!
Essa é a versão 1.0 do "HiPixel", um site para fazer pixelart. Nessa versão, tudo que eu fiz foi criar a Home, Login, Cadastro, o interno do Sistema e realizar a conexão entre eles.
Abaixo segue as informações de cada passo que realizei.
1. Sobre o "LOGIN";
- Eu utilizei o html para criar a estrutura do site, aplicando o "estilo embutido" com css para personalizar e deixar uma aparência melhor.
- Nessa parte do projeto, eu tive problemas com o uso de margin, por isso acabei optando por usar "br" mesmo. Toda vez que eu mexia com margin, alterava o tamanho do box de login, do botao e dos containers.

2. Sobre o CADASTRO;
- Utilizei o html novamente para criar toda a estrutura, desde o criamento das inputs para que o usuário possa dar suas respostas, a animação que a label faz de acordo com o preenchimento do usuário etc.
- Com MySQL, criei uma nova 'localhost', em seguida um banco de dados para manter as informações do usuário registrado.
- Com XAMPP, criei meu ambiente de teste para com o projeto.
- Com PHP, criei um 'config' onde pude criar a conexão entre o site de cadastro e o banco de dados.
- Depois, converti meu arquivo formulário.html para php, adicionando as tabelas do MySQL no código, regras de confirmação de senha, atrelando o funcionamento do 'config' junto, etc.


3. Sobre o SISTEMA GERAL;
- Fiz a home, utilizando os mesmos métodos de HTML, PHP e CSS para estruturar o lobby do site. Criei os botões de login e cadastro, onde conectei eles aos arquivos PHP do projeto.
- Também conectei o cadastro e o login para com a home, pois assim o usuário pode retornar à ela caso clique na opção errada.
- O arquivo 'testLogin.php' serve para manipular a lógica php para verificar se a informações colocadas no input já são pré-existentes no banco de dados e se elas coincidem, restringindo o acesso do sistema para um possível usuário não-cadastrado. Se for o caso, ele retorna ao login e impede que o usuário acesse o sistema.
- O arquivo 'Sistema.php' se refere a área interna do sistema, passando pelo cadastro, home e login. Ele manipula a lógica php para verificar se o usuário colocou as informações no input e se elas realmente coincidem no banco de dados, restringindo o acesso dele ao sistema, também previnindo que um possível não-usuário acesse o sistema pela url.
- Um botão de logout foi criado para que o usuário possa sair da sua conta e então voltar ao login. Novamente, ele vai precisar colocar sua senha e email se quiser entrar, não podendo acessar pela url. O 'sair.php' cria a conexão do botão para de volta ao login.
- O 'sair.php' cria a conexão do botão para de volta ao login.
>uwu
>
INFORMAÇÕES ADICIONAIS;

- As imagens no background não são minhas e o projeto não tem intuito lucrativo. Créditos ao @Norma_2d pelas artes colocadas no projeto (Link original: https://norma2d.tumblr.com/post/187535054606/another-space-background-and-an-additional-color)
- Programas utilizados no projeto: Visual Studio Code, MySQL Workbench e XAMPP.
- Linguagens; HTML, CSS e PHP.
- Possíveis mudanças para a versão 2.0; uma área "paint" para desenho, album para manter as artes salvas etc.

Link para a versão 2.0: (Em breve)

Obrigada por visualizar meu projeto! :D
> Julia Santana.
