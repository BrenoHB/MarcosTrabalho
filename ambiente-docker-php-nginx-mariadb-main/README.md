# Ambiente de desenvolvimento com Docker + PHP FPM 8.1.x + Composer + Nginx + MariaDB

## Requisitos

* Docker
* Docker compose

## Docker

Crie um arquivo `.env` com o conte�do de `.env-sample`.

### Buildar os Containers:

`docker-compose up -d --build`

### Parar todos os Containers:

`docker-composer down -v`

### Remover todos os Containers parados:

`docker system prune`

### Acessar o Container do MariaDB e ter acesso ao banco:

`docker exec -it mariadb bash`

### Acessar aplica��o:

`localhost:8888`

# Composer

## Instalar

`docker-compose run --rm php-fpm composer install `

## Requerir pacote:

`docker-compose run --rm php-fpm composer require autor/pacote`





## TABELAS USADAS NO PROJETO: 
## executar no terminal mariaDB com user root, senha mariadb;
CREATE TABLE user (
  ID INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(80) NOT NULL,
  senha VARCHAR(120) NOT NULL
);

CREATE TABLE filme (
  ID INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(120) NOT NULL,
  duracao VARCHAR(120) NOT NULL,
  descricao VARCHAR(150)
);


## PostMAn  headers
Authorization

