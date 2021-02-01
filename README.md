
Quando recebi este teste, fiquei muito feliz por ter a chance de trabalhar em uma grande empresa como a Simonetti. Assim que pude, comecei a estudar os requisitos do Desafio e a aprimorar meus conhecimentos para que pudesse me inscrever rapidamente. 
Apresento muitas coisas que aprendi em minha carreira usando pacotes mínimos.

O desafio:
Crie uma API WEB que mostre ao cliente uma lista de articles com uma consulta por identificação única e registro de formulário.

System Requirements<br>
PHP 7.1+<br>
Composer<br>
MySQL 5.6+<br>

Instalação
Para instalar o projeto você só precisa clonar este repositório no master.

Usando https:
git@github.com:isnaldomsm/desafio-simonetti.git<br>
Para rodar localmente o aplicativo você deve ter o composer instalado (você pode ver aqui).

Eles instalam as dependências com o composer e carregam classes como psr-4:

$ composer install
$ composer dump-autoload
<br>
Modifique o .env e configurar a credencial do banco de dados, em seguida, migrar as tabelas:<br>
bin/console doctrine:migrations:migrate<br>
Após: php -S localhost:8080 -t public<br>
Rotas disponiveis:<br>
Articles:<br>
http://localhost:8080/api/v1/articles<br>

Article: <br>
http://localhost:8080/api/v1/articles/10<br>

Contact:
http://localhost:8080/api/v1/register/show

Register form(POST):<br>
http://localhost:8080/api/v1/register/<br>

Front end:<br>
yarn install<br>
yarn dev<br>
Foi utilizando no back-end PHP(symphony) e no front-end Vue.js(nuxt.js).<br>

Este teste foi ótimo para melhorar meus conhecimentos e habilidades, me senti confortável com o prazo estipulado e aproveitei o máximo que pude para provar minhas habilidades. Sou grato ao Simonetti por esta oportunidade de mostrar o que posso fazer.
 
 



 
