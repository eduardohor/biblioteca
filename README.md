# TESTE PARA VAGA DE DESENVOLVEDOR BACK END - APP FACILITA

### Back-end feito com laravel

### Arquitetura 

- PHP 8.2.4
- Laravel 9.52.7
- Composer 2.5.5

CRUD de usuários da biblioteca
- Campos Obrigatórios: nome, email, Número de Cadastro
- CRUD de Livros
- Campos Obrigatórios: Nome, Autor, número de registro,
Situação(Emprestado ou Disponível )
- Classificação dos livros por Gênero: Ficção, Romance, Fantasia, Aventura,
Etc.
- Funcionalidade de empréstimo dos livros :
- Cadastrar novo empréstimo para um usuário com data de devolução
- Opção de marcar o empréstimo como Atrasado ou devolvido

### Instalação - WINDOWS
```sh
git clone https://github.com/eduardohor/biblioteca.git
```

```sh
cd biblioteca
```

- Instalar as dependências

```sh
composer install
```

- Duplicar o arquivo **.env.example** e renomear a copia para **.env**
```sh
cp .env.example .env
```

- Com um editor altere os dados de banco no arquivo .env para os referente ao seu banco local

- Logo depois execute o comando abaixo para gerar uma nova chave
```PHP
php artisan key:generate
```
- Criar as tabelas no banco

```sh
php artisan migrate
```

- Subir o servidor

```sh
php artisan serve
```

 Verificar se a aplicação está online acessando [http://localhost:8000](http://localhost:8000)
 
Obs: (Para realizar o cadastro de um livro é necessário primiero cadastrar os gêneros)
