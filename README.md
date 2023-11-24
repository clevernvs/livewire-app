# About Laravel

Esse é um projeto pré-configurado para servir de base para futuros os projetos que utilizem o Laravel.

# Informações rápidas sobre a tecnologia do projeto

- Linguagem de Programação: php 8.2
- Framework: Laravel 10
- Banco de Dados: MySQL

## Stacks 

- Containeres: Laravel Sail
- Autenticação: Laravel Breeze
- Componentes: Livewire V2
- Debug: Debugbar (em Dev)

# Como utilizar o projeto

1. Defina as variáveis de ambiente referentes Banco de Dados no arquivo '.env'.

2. Suba os containeres da aplicação.
~~~~
.vendor/bin/sail up -d
~~~~

3. Rode as Migrations e as Seeders para popular o Banco de Dados da aplicação.
~~~~
php artisan migrate:seed
~~~~

