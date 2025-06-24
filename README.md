# Impressão Rápida
**Impressão Rápida** é uma aplicação web construída com **PHP 8.3** e o framework **Laravel 12**, utilizando **React** com **Inertia.js** no frontend, **Tailwind CSS** para estilização e **Pest** como ferramenta de testes.

# Descrição
Este projeto tem como objetivo facilitar o acesso a serviços de impressão. Ideal para quem não possui impressora em casa, o sistema permite que o usuário envie seus documentos online e escolha entre duas opções: retirar pessoalmente ou receber a impressão em casa. A plataforma oferece uma experiência simples, prática e rápida, conectando usuários a pontos de impressão de forma eficiente.

# Tecnologias Utilizadas
  - PHP 8.3
  - Laravel 12
  - Tailwind
  - React
  - Inertia.js
  - Pest

# Requisitos
**Antes de começar, você precisa ter as seguintes ferramentas instaladas**:
  - PHP 8.3 ou superior
  - Composer
  - Laravel 12
  - Node.js
  - Um servidor web (Nginx)
  - Um SGBD (MySQL)

# Instalação
1. Clone o Repositório:
```
git clone https://github.com/LmarDark/ImpressaoRapida
```

2. Navegue até o Diretório do Projeto:
```
cd ImpressaoRapida
```

3. Instale as Dependências:
```
composer install
npm install
```

4. Copie o arquivo .env.example para um novo arquivo chamado .env
```
cp .env.example .env
```

5. Crie o arquivo database.sqlite (Desenvolvimento)
```
touch database/database.sqlite
```

7. Configure a conexão com o banco e o Session Driver no arquivo .env:
```
DB_CONNECTION= SGBD
DB_HOST= IP
DB_PORT= PORTA
DB_DATABASE= NOME DO BANCO
DB_USERNAME= USERNAME
DB_PASSWORD= PASSWORD
```

8. Faça a migração do banco
```
php artisan migrate
```

9. Gere a Chave de Aplicação:
```
php artisan key:generate
```

10. Inicie o Servidor de Desenvolvimento:
```
composer run dev
```
A aplicação estará disponível em http://localhost:8000.

Autores e contribuidores
Gostaríamos de expressar nossa sincera gratidão aos seguintes colaboradores que contribuíram para o desenvolvimento deste projeto:

Pedro M. - Desenvolvedor Front-end 
- GitHub: https://github.com/Pedro-Miguel20
- E-mail: pm987162@gmail.com 

Lucas M. - Desenvolvedor Back-end
- GitHub: https://github.com/LmarDark
- E-mail: lucasmatheusalero@gmail.com

## 📄 Licença
Este projeto está licenciado sob a [MIT License](LICENSE).
