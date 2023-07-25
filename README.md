## About Laravel

Projeto pré-configurado para servir de base para todos os projetos em Laravel.

## Stacks Utilizadas

- Laravel Sail
- Laravel Breeze
- Livewire

## Stacks Utilizadas (em DEV)

- Debugbar

## Tecnologias Utilizadas

- MySQL - Banco de Dados

## Como Utilizar o projeto

1. Definir as variáveis de Ambiente referentes Banco de Dados

2. Levantando os containers
~~~~
.vendor/bin/sail up -d
~~~~

3. Rodando as Migrations e as Seeders para popular o Banco de Dados
~~~~
php artisan migrate:seed
~~~~

