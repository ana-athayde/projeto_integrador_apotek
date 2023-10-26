# Apoteck 2.0 - Projeto Integrador

## Descrição
O projeto Apoteck 2.0 é um site de uma farmácia fictícia desenvolvido como parte do Projeto Integrador do curso "Técnico em Informática" no IFSC câmpus Lages, apresentado em 2018.
Aqui, você encontrará informações sobre como configurar, usar e contribuir para o projeto.
Este projeto foi desenvolvido em conjunto por Ana Athayde e Jaqueline Oliveira Santos.

## Estrutura do Repositório
O repositório está organizado nas seguintes pastas:

- `controller`: Contém os controladores do projeto.
- `model`: Contém as classes de modelo do projeto.
- `view`: Contém as visualizações do projeto.
  - `html`: Contém os arquivos HTML que compõem as páginas do site.
    - `clientes`: Páginas relacionadas aos clientes.
    - `login`: Páginas de login e suporte ao login.
- `img`: Possíveis recursos de imagens utilizados no projeto.
- `js`: Possíveis scripts JavaScript utilizados no projeto.
- `css`: Possíveis estilos CSS utilizados no projeto.

## Estrutura das Classes

### Model
- `Cliente.class.php`: Classe para representar um cliente com propriedades como nome, CPF, email, etc.
- `ClienteBusiness.php`: Lida com as operações de negócios relacionadas aos clientes.
- `ClienteDAO.class.php`: Realiza operações de banco de dados relacionadas aos clientes.
- `DBConnection.class.php`: Gerencia a conexão com o banco de dados.

- `login.class.php`: Classe para representar login com propriedades como ID, login, senha, etc.
- `loginBusuness.php`: Lida com as operações de negócios relacionadas ao login.
- `loginDAO.class.php`: Realiza operações de banco de dados relacionadas ao login.

### Controller
- `ClienteController.class.php`: Controlador para operações relacionadas aos clientes.
- `loginController.class.php`: Controlador para operações relacionadas ao login.

### View
- `html`: Arquivos HTML que compõem as páginas do site.

## Configuração

### Banco de Dados
- O projeto utiliza um banco de dados MySQL. Certifique-se de ter um servidor MySQL em execução e crie um banco de dados com o nome desejado.

#### Configuração de Banco de Dados
- Abra o arquivo `model/DBConnection.class.php`.
- Configure as informações de conexão com o banco de dados, incluindo host, nome do banco de dados, nome de usuário e senha.
- Isso garantirá que o projeto possa se conectar ao banco de dados.

## Uso

### Visualização do Site
- O site é composto por várias páginas HTML localizadas na pasta `view/html`. Abra o arquivo `index.php` para iniciar a navegação no site.

### Cadastro de Clientes
- Utilize o formulário presente no site para cadastrar clientes.
- Os dados dos clientes são armazenados no banco de dados por meio das classes `Cliente.class.php`, `ClienteBusiness.php` e `ClienteDAO.class.php`.

### Login
- Os usuários podem fazer login por meio das páginas de login e suporte ao login na pasta `view/html/login`.
- Os dados de login são tratados pelas classes `login.class.php`, `loginBusiness.php` e `loginDAO.class.php.

## Contribuição

Se você deseja contribuir para o projeto "Apoteck 2.0", siga estas etapas:

1. Faça um fork do repositório.
2. Clone o repositório forked para o seu ambiente de desenvolvimento.
3. Faça as alterações desejadas e crie um branch para suas modificações.
4. Faça commit das alterações em seu branch.
5. Envie um pull request para o repositório original.
6. Seus pull requests serão revisados e, se aprovados, mesclados ao projeto.

O projeto pode se beneficiar de contribuições relacionadas a correções de bugs, melhorias de código, recursos adicionais ou documentação aprimorada.

Lembre-se de seguir as boas práticas de desenvolvimento, incluir testes, documentar seu código e garantir que suas alterações sejam compatíveis com a estrutura do projeto.

Agradecemos a sua contribuição!

