<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Projeto Laravel Health Clinic

Bem-vindo ao Projeto Laravel Health Clinic! Este é um projeto Laravel para uma clínica de saúde. Siga as instruções abaixo para configurar e executar o projeto em seu ambiente local.

## Instalação do Laravel

Certifique-se de ter o PHP e o Composer instalados em seu sistema.

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/seu-usuario/seu-projeto.git


## Instalação Laravel 

1. **Composer**

Composer install


 ## Navegue ate o seu diretorio

 cd landingpage-newton


## Copie o arquivo .env.example
cp .env.example .env


## Gere a chave de aplicação 
php artisan key:generate


## Configuração do Banco de Dados


1. **Crie um banco de dados**
Utilize seu sistema de gerenciamento de banco de dados favorito (como MySQL, PostgreSQL, SQLite, etc.) para criar um banco de dados chamado health_clinic.

2. **Configure o arquivo .env**
Abra o arquivo .env no seu editor de texto preferido e atualize as configurações do banco de dados conforme suas credenciais:

DB_CONNECTION=mysql
DB_HOST=seu-host
DB_PORT=seu-port
DB_DATABASE=health_clinic
DB_USERNAME=seu-usuario
DB_PASSWORD=sua-senha

Substitua seu-host, seu-port, seu-usuario, e sua-senha pelos valores correspondentes do seu ambiente.

## Execução das Migrations

1. **Execute o seguinte comando para aplicar as migrations e criar as tabelas no banco de dados:**
php artisan migrate


2. **(Opcional) Preencha o banco de dados com dados de exemplo**


## Iniciar o Servidor de Desenvolvimento
Para visualizar o projeto, inicie o servidor embutido do Laravel com o seguinte comando:
php artisan serve




