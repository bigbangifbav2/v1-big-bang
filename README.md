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

## ⚙️ Configuração de Ambiente (.env)

Para que o sistema se conecte ao banco de dados corretamente, é necessário configurar as variáveis de ambiente na **raiz do projeto**.

O arquivo `.env` define a senha do banco de dados e informa ao PHP onde encontrar o servidor MySQL dentro da rede do Docker.

### Passo a Passo

1.  Na pasta raiz do projeto, localize o arquivo `.env` (se houver) ou crie um arquivo novo chamado **`.env`**.
2.  Preencha as variáveis conforme o modelo abaixo:

| Variável | Descrição | Valor Recomendado (Docker) |
| :--- | :--- | :--- |
| `MYSQL_ROOT_PASSWORD` | Senha para o usuário root do MySQL.
| `MYSQL_DATABASE` | Nome exato do banco de dados (deve bater com o arquivo SQL). | `u844526352_bg` |
| `DB_HOST` | Endereço do host do banco. No Docker Compose, é o nome do serviço.
| `DB_USER` | Usuário para conexão.

### 📝 Exemplo de arquivo `.env` pronto

Copie e cole o conteúdo abaixo no seu arquivo `.env` para rodar o projeto localmente:

```ini
# Configurações do Banco de Dados (MySQL Container)
MYSQL_ROOT_PASSWORD=
MYSQL_DATABASE=u844526352_bg

# Configurações de Conexão do PHP (App Container)
# Nota: 'db' é o nome do serviço definido no docker-compose.yml
DB_HOST=db
DB_USER=usuario
```

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
