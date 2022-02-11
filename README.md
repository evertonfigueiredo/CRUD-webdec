# CRUD WebDEC 

Apos clonar o diretorio renomei o arquivo **.env.example** para **.env** e execute os comandos:

```sh
composer install
```
```sh
php artisan key:generate
```

Depois crie um banco de dados e set os paramentros deles no **.env**

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel //NOME DO BANCO
DB_USERNAME=root
DB_PASSWORD=
```
Depois disso utilize o comando para criar as tabelas do banco de dados atraves das migrations

```sh
php artisan migrate:fresh
```

Então execute o comando abaixo:

```sh
npm install 
```

O seu projeto já deve esta funcionando, qualquer dúvida entre em contato.
