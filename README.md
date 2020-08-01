## Projeto Shop Catalog - Laravel e VueJS

## Development

### Pré Requisitos

Você deve instalar:
- [git](https://git-scm.com/downloads)
- [composer](https://getcomposer.org/download)
- [php 7.4 ou superior](https://www.php.net/downloads.php)

Realize os seguintes procedimentos para instalação:

### Cloning Repository
`$ git clone`

`$ cd directory`

### Variáveis de Ambiente

Crie uma cópia do arquivo [.env.example](./.env.example), e edite as configurações de acordo com seu ambiente.

`$ cp -p .env.example .env`

### Dependências

Instale as dependências executando os seguinte comandos:

`$ composer install`

`$ npm install`

`$ php artisan key:generate`

`$ php artisan migrate --step -v`

### Database Desenvolvimento

Para popular dados fictícios na database de desenvolvimento, execute o database seeder do Laravel:

`php artisan db:seed`

### Executando Localmente

`$ php artisan serve`

`$ npm run dev`

A aplicação deverá estar disponível em: http://127.0.0.1:8000



