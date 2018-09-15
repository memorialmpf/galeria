## Galeria de Membros - Memorial ##

Solução desenvolvida utilizando linguagem PHP e o framework Laravel 5.7 (https://github.com/laravel/laravel)

**Galeria de Membros - Memorial** é uma das aplicações desenvolvidas para preservar a memória dos membros do Ministério Público Federal, estamos liberando o código fonte aqui no Github para que essa solução possa ser adaptada para outros ramos e instâncias do Ministério Público e instituições em geral.

### Instalação ###

* `git clone https://github.com/memorialmpf/galeria.git galeria`
* `cd galeria`
* `composer install`
* `php artisan key:generate`
* Crie uma base de dados e atualize o arquivo *.env*
* `php artisan serve` para iniciar a aplicação em  http://localhost:8000/

### Já implementado ###

* Estrutura da aplicação (rotas, views, controllers, etc)
* Design inicial utilizando o framework Bootstrap (https://github.com/twbs/bootstrap)

### Falta implementar ###

* Camada de dados
* Regras de negócio
* Formulários de edição de dados
* Painel de administração
* Sistema de autenticação e autorização
 
