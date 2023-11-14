![Logo AI Solutions](http://aisolutions.tec.br/wp-content/uploads/sites/2/2019/04/logo.png)

# AI Solutions

## Teste para novos candidatos (PHP/Laravel)

### Introdução

Este teste utiliza PHP 8.1, Laravel 10 e um banco de dados SQLite simples.

1. Faça o clone desse repositório;
1. Execute o `composer install`; ok
1. Crie e ajuste o `.env` conforme necessário ok
1. Execute as migrations e os seeders; ok

### Primeira Tarefa:

Crítica das Migrations e Seeders: Aponte problemas, se houver, e solucione; Implemente melhorias;
Alteração para postgre
Adição de laravel sail
Alteração do campo name para 150 caracteres


### Segunda Tarefa:

Crie a estrutura completa de uma tela que permita adicionar a importação do arquivo `storage/data/2023-03-28.json`, para a tabela `documents`. onde cada registro representado neste arquivo seja adicionado a uma fila para importação. ok

Feito isso crie uma tela com um botão simples que dispara o processamento desta fila. ok

Utilize os padrões que preferir para as tarefas.

Boa sorte!


Execução da fila:

docker exec php-laravel.test-1 php artisan queue:work --stop-when-empty (queue)

