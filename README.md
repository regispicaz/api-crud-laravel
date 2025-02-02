# API RESTful CRUD com Laravel 11

## Descrição
Esta API RESTful foi desenvolvida para gerenciamento de entidades utilizando Laravel 11.
Ela permite realizar operações CRUD (Create, Read, Update e Delete) de maneira eficiente e escalável.

## Requisitos
- **PHP** 8.2+
- **Composer** 2+
- **Banco de Dados** relacional (MySQL ou equivalente)

## Instalação e Execução

### 1. Clonar o Repositório
```bash
git clone https://github.com/regispicaz/api-crud-laravel.git
```

### 2. Acessar o Diretório do Projeto
```bash
cd api-crud-laravel
```

### 3. Configurar o Ambiente
Crie uma cópia do arquivo `.env.example` e configure a conexão com o banco de dados:
```bash
cp .env.example .env
```
Edite o arquivo `.env` e ajuste os parâmetros conforme seu banco de dados:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 4. Instalar Dependências
```bash
composer install
```

### 5. Gerar Chave da Aplicação
```bash
php artisan key:generate
```

### 6. Executar Migrações e Popular o Banco
```bash
php artisan migrate --seed
```

### 7. Iniciar o Servidor
```bash
php artisan serve
```
A API estará disponível em: `http://127.0.0.1:8000`

## Uso da API
A API pode ser testada utilizando ferramentas como [Insomnia](https://insomnia.rest/download) ou Postman.

### Endpoints Disponíveis

| Método | Endpoint | Descrição |
|---------|----------|-------------|
| **GET** | `/api/users` | Lista todos os usuários |
| **GET** | `/api/users/{id}` | Obtém um usuário específico |
| **POST** | `/api/users` | Cria um novo usuário |
| **PUT** | `/api/users/{id}` | Atualiza um usuário |
| **DELETE** | `/api/users/{id}` | Remove um usuário |

### Exemplo de Dados para Popular o Banco
```php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
    'name' => 'Admin',
    'email' => 'admin@admin.com',
    'password' => Hash::make('password'),
]);

User::create([
    'name' => 'User',
    'email' => 'user@user.com',
    'password' => Hash::make('password'),
]);
```

## Autor
[Regis Picaz](https://github.com/regispicaz) - Desenvolvedor da API RESTful CRUD com Laravel 11.

