FROM php:8.1-apache

# Instalar extensões do PHP necessárias (se houver)
RUN docker-php-ext-install mysqli

# Ativar o mod_rewrite do Apache
RUN a2enmod rewrite

# Expor a porta 80
EXPOSE 80
