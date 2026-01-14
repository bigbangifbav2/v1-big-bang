# Usa uma imagem oficial do PHP 7.4 com Apache já configurado
FROM php:7.4-apache

# Habilita a extensão mysqli (necessária para seu Conexao.php)
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Habilita mod_rewrite do Apache (bom para garantir que rotas funcionem)
RUN a2enmod rewrite

# Copia todos os seus arquivos para a pasta pública do Apache no container
COPY . /var/www/html/

# Ajusta permissões para o Apache conseguir ler/gravar se necessário
RUN chown -R www-data:www-data /var/www/html