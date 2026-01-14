# 🏛️ Big Bang Game - Versão Legada (v1)

> Repositório oficial da versão original do jogo educacional de química "Big Bang Game", desenvolvida em 2015.

![Status](https://img.shields.io/badge/STATUS-LEGADO-red?style=for-the-badge)
![PHP](https://img.shields.io/badge/php-7.4-blue?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/mysql-5.7-orange?style=for-the-badge&logo=mysql)
![Docker](https://img.shields.io/badge/docker-container-2496ED?style=for-the-badge&logo=docker)

## 📜 Sobre o Projeto

Este projeto é a **versão v1** do Big Bang Game, um software educativo criado para auxiliar no ensino da Tabela Periódica através da gamificação.

Originalmente desenvolvido em **2015** como parte de um projeto de iniciação científica do IFBA (Instituto Federal da Bahia) campus Vitória da Conquista, este código foi preservado e "Dockerizado" em 2025 para garantir sua execução em computadores modernos, servindo como registro histórico e base comparativa para a versão v2.

## 🛠️ Tecnologias (Stack Original)

O sistema foi construído utilizando as tecnologias web padrão da época:

* **Linguagem:** PHP 7.4 (Adaptado, original 5.x)
* **Banco de Dados:** MySQL 5.7
* **Front-end:** HTML5, CSS3, JavaScript (jQuery 1.5.2)
* **Servidor:** Apache

## 🚀 Como Rodar o Projeto

Graças à implementação do Docker, não é necessário instalar XAMPP ou configurar PHP/MySQL manualmente na sua máquina.

### Pré-requisitos

* [Docker](https://www.docker.com/) e Docker Compose instalados.

### Passo a Passo

1.  **Clone este repositório:**
    ```bash
    git clone [https://github.com/bigbangifbav2/v1-big-bang.git](https://github.com/bigbangifbav2/v1-big-bang.git)
    cd v1-big-bang
    ```

2.  **Suba os containers:**
    No terminal, dentro da pasta do projeto, execute:
    ```bash
    docker-compose up --build
    ```

3.  **Acesse o jogo:**
    Abra o seu navegador e acesse:
    > **http://localhost:8080**

> **Nota:** O banco de dados é criado e populado automaticamente na primeira execução após configuração das variáveis de ambiente no arquivo `.env`.

## 📂 Estrutura do Projeto

* `Dockerfile`: Configuração da imagem PHP 7.4 com extensões necessárias (mysqli).
* `docker-compose.yml`: Orquestração dos serviços (Aplicação + Banco de Dados).
* `banco.sql`: Dump original do banco de dados para importação automática.
* `Conexao.php`: Arquivo de conexão adaptado para o ambiente Docker.
* `*.php` (cientista, curioso, iniciante): Lógica das fases do jogo.

## 👥 Equipe Original (2015)

O desenvolvimento deste software foi possível graças ao trabalho de:

* **Breno Lessa** - *Bolsista (Desenvolvedor/Designer)*
* **Daiana Flores** - *Bolsista (Elaboração das Dicas)*
* **Priscila Carvalho** - *Bolsista (Versão Tabuleiro)*
* **Pablo Matos** - *Orientador*
* **Wdson Costa** - *Coorientador*

---
