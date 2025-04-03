📊 Tabela de Corretores - Sistema de Cadastro e Gerenciamento

📝 Descrição

Este projeto é um sistema simples de cadastro e gerenciamento de corretores, desenvolvido com PHP, MySQL, HTML5, CSS3 e JavaScript. Ele permite o armazenamento, exibição, edição e exclusão de corretores em um banco de dados.

O objetivo do projeto é demonstrar a integração entre front-end e back-end, utilizando PHP para processar as requisições e MySQL para armazenar os dados.

🚀 Funcionalidades
✔️ Cadastro de corretores (Nome, E-mail, Telefone, CRECI, etc.)
✔️ Listagem de corretores em uma tabela dinâmica
✔️ Edição de dados do corretor
✔️ Exclusão de registros
✔️ Busca de corretores no banco de dados

🛠️ Tecnologias Utilizadas
PHP: Manipulação dos dados e integração com o banco de dados

MySQL: Armazenamento dos dados dos corretores

HTML5 & CSS3: Estrutura e estilização da página

JavaScript: Interatividade e validação de formulários

📂 Estrutura do Projeto
pgsql
Copiar
Editar



📂 tabela-corretores  
 ┣ 📂 assets  
 ┃ ┣ 📂 css  
 ┃ ┃ ┗ style.css  
 ┃ ┣ 📂 js  
 ┃ ┃ ┗ script.js  
 ┣ 📂 config  
 ┃ ┗ database.php  
 ┣ 📂 views  
 ┃ ┣ index.php  
 ┃ ┣ cadastrar.php  
 ┃ ┣ editar.php  
 ┃ ┗ deletar.php  
 ┣ 📂 controllers  
 ┃ ┣ cadastrar_corretor.php  
 ┃ ┣ editar_corretor.php  
 ┃ ┗ deletar_corretor.php  
 ┣ 📂 sql  
 ┃ ┗ script_banco.sql  
 ┗ README.md  
 
🎯 Como Executar o Projeto

1️⃣ Configure o banco de dados MySQL utilizando o arquivo script_banco.sql.
2️⃣ Atualize as credenciais do banco no arquivo config/database.php.
3️⃣ Inicie um servidor local (XAMPP, WAMP ou PHP embutido).
4️⃣ Acesse no navegador: http://localhost/tabela-corretores

