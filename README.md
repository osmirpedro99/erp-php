<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="100" alt="Laravel Logo">
  </a>
  <a href="https://getbootstrap.com" target="_blank">
    <img src="https://logo.svgcdn.com/d/bootstrap-original-wordmark-8x.png" width="40" height="40" alt="Bootstrap Logo">
  </a> 
</p>

<h1 align="center">🧾 Basic ERP</h1>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12-red?style=flat-square&logo=laravel" />
  <img src="https://img.shields.io/badge/PHP-8.3-blue?style=flat-square&logo=php" />
  <img src="https://img.shields.io/badge/License-MIT-green?style=flat-square" />
</p>

---

## 📄 Sobre o Projeto

<details>
  <summary><strong>🇧🇷 Descrição (Português)</strong></summary>
  <p>
    Este é um projeto de ERP básico desenvolvido com Laravel e Bootstrap.  
    O objetivo principal é demonstrar boas práticas de modularização, reaproveitamento de componentes e uso prático de recursos do Laravel.
  </p>

  ### 📦 Módulos disponíveis:
  - **Produtos** – Cadastro e listagem de produtos.
  - **Storage** – Pode representar estoque ou categorias.
  - **Cupons** – Controle de cupons de desconto com validade e quantidade.

  ### 🖥️ Front-end:
  O front-end é composto por:
  - Página principal (dashboard)
  - Componente reutilizável de tabela (components/table)
  - Componente de formulário dinâmico (components/form)
</details>

<details>
  <summary><strong>🇺🇸 Description (English)</strong></summary>
  <p>
    This project is a minimalist ERP (Enterprise Resource Planning) system built with Laravel and Bootstrap.
    The goal is to demonstrate modular design, component reuse, and practical use of Laravel features.
    It includes basic modules for managing products, storage, and discount coupons.
  </p>
</details>

---

## ⚙️ Instalação
<details>
<summary><strong>Siga os passos abaixo para rodar o projeto localmente:</strong></summary>


    ```bash
    # Clone o repositório
    git clone https://github.com/seu-usuario/seu-repo.git

    # Acesse o diretório do projeto
    cd seu-repo

    # Instale as dependências
    composer install

    # Crie o arquivo .env
    cp .env.example .env

    # Gere a chave da aplicação
    php artisan key:generate

    # Configure o banco de dados no .env

    # Rode as migrações (se existirem)
    php artisan migrate

    # Inicie o servidor
    php artisan serve
    npm run dev

</details>