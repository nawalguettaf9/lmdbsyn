# Utilisation de l'image PHP Apache avec PHP 8.2
FROM php:8.2-apache

# Installation des extensions PHP nécessaires pour Symfony
RUN docker-php-ext-install pdo_mysql mysqli
RUN apt-get update && apt-get install -y libicu-dev && docker-php-ext-install intl

RUN apt-get update && apt-get install -y zip unzip
RUN apt-get update && apt-get install -y git
RUN apt-get update && apt-get install -y libssl-dev

RUN apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev libonig-dev libpng-dev libxml2-dev libpq-dev libmcrypt-dev libmcrypt4 libcurl3-dev libfreetype6 libjpeg62-turbo-dev libjpeg62-turbo-dev libfreetype6-dev libicu-dev libxslt1-dev libzip-dev

# Activer les modules Apache nécessaires pour Symfony
RUN a2enmod rewrite headers
RUN service apache2 restart

# Copiez les fichiers de configuration Apache de votre projet Symfony
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Installation de MongoDB PHP Extension
RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer


# Définissez le répertoire de travail
WORKDIR /var/www/html

# Copie de votre code source Symfony dans le conteneur
COPY . /var/www/html

# Changez les permissions des fichiers pour Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Réglage des autorisations sur les répertoires Symfony
RUN chown -R www-data:www-data /var/www/html/var

# Exposition du port Apache
EXPOSE 80

# Commande par défaut pour démarrer Apache
CMD ["apache2-foreground"]