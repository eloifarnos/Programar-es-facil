
FROM php:8.2-apache


# Instal·lem i activem l'extensió mysqli per connectar-nos a MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
