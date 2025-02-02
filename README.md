# API RESTful CRUD com Laravel 11

## Descrição
API RESTful para gerenciamento de [entidade do seu CRUD], utilizando Laravel 11.

## Requisitos
* PHP 8.2+
* Composer 2+
* Banco de dados relacional MySQL, ou de sua preferência

## Como baixar e rodar o projeto

1. Clone o repositório:
    ```bash
    git clone https://github.com/regispicaz/api-crud-laravel.git
    ```

2. Acesse o diretório do projeto:
    ```bash
    cd api-crud-laravel 
    ```

3. Crie um cópia do arquivo .env.example e faça a configuração para conexão com o seu banco de dados
    ```bash
    cp .env.example .env 
    ```

4. Configure o arquivo .env com as informações do seu banco de dados:
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome_do_banco
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha
    ```

5. Instalando as dependências do PHP
    ```bash
    composer install
    ```

6. Gerando a chave da aplicação "APP_KEY"
    ```bash
    php artisan key:generate 
    ```

7. Rodando as migrações
    ```bash
    php artisan migrate 
    ```

8. Populando o banco
    ```bash
    php artisan db:seed 
    ```

9. Inicie o servidor local
    ```bash
    php artisan serve
    ```
   
10. O Acesso a API pode ser feito por meio do [Insomnia](https://insomnia.rest/download) ou similares.
```
http://127.0.0.1:8000/api/users
```

11.


## Como criar seu próprio projeto de API
1. Crie um novo projeto laravel
    ```bash
    composer create-project laravel/laravel nome_do_projeto
    ```

2. Acesse o diretório do projeto
    ```bash
    cd nome_do_projeto
    ```

3. Configure o arquivo .env com as informações do seu banco de dados
    ```bash
     DB_CONNECTION=sqlite
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=laravel
    # DB_USERNAME=root
    # DB_PASSWORD=
    ```

* Instale o pacote para rotas de API
    ```bash
    php artisan install:api
    ```


