# Utilisation de l'image officielle PHP avec Apache
FROM php:8.1-apache

# Ajout de la directive ServerName pour éviter l'avertissement Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Modifier le port d'écoute d'Apache à 8080
RUN sed -i 's/80/8080/' /etc/apache2/ports.conf
RUN sed -i 's/:80/:8080/' /etc/apache2/sites-available/000-default.conf

# Copier l'application dans le répertoire public d'Apache
COPY . /var/www/html/

# Exposer le port 8080 pour la communication avec l'extérieur
EXPOSE 8080

# Lancer Apache en mode premier plan pour exécuter le serveur
CMD ["apache2-foreground"]
