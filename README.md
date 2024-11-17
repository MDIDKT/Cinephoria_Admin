CINEPHORIA :
Cinephoria est une application de gestion de cinéma qui permet aux utilisateurs de réserver des places pour des séances de films. 
Ses principales fonctionnalités incluent la gestion des films, la réservation des places, l'administration des utilisateurs et la gestion des séances.

Prérequis :
•	PHP 8.1 ou supérieur
•	Symfony 7.x
•	MySQL 8.x
•	Composer pour la gestion des dépendances
•	Mailtrap pour les tests d’envoi de mails
•	Docker 

Instructions d'installation
1.	Cloner le projet depuis GitHub :
 	 git clone 
3.	Accéder au répertoire du projet :
  	cd ton-projet

5.	Installer les dépendances avec Composer :
  	composer Install

6.	Configure l'environnement en copiant le fichier .env vers .env.local, puis en ajustant les paramètres, tels que le DSN pour la base de données et Mailtrap.
  
7.	Exécuter les migrations pour configurer la base de données :
  	php bin/console doctrine:migrations:migrate
8.	Démarrer le serveur Symfony :
  symfony server:start -d

Commandes supplémentaires :

•	Pour charger des données de test :
  php bin/console doctrine:fixtures:load
  
•	Pour exécuter les tests PHPUnit :
  php bin/phpunit
