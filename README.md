# Projet Laravel 10 - TEST BAMANA

Bienvenue dans le projet Laravel 10 ! Ce projet inclut un système simple de CRUD pour gérer des produits avec des fonctionnalités d'ajout, de modification, de suppression et de filtrage.

## Prérequis

Avant de commencer, voici les outils et logiciels nécessaires :

- **PHP 8.2** ou supérieur : Laravel nécessite PHP pour fonctionner.
- **Composer** : Composer est un gestionnaire de dépendances pour PHP.
- **MySQL** ou un autre système de gestion de base de données compatible avec Laravel.

## Étapes d'installation

### 1. Cloner le dépôt

Commence par cloner ce projet sur ton ordinateur en utilisant Git. Ouvre un terminal et exécute les commandes suivantes :

```bash
git clone https://github.com/etheocledk/bamana_test.git
cd bamana_test
composer install
```
### 2. Créer le fichier .env

Copie le fichier .env.example en un nouveau fichier .env :

```bash
cp .env.example .env
```

### 3. Configurer la base de données

-Crée une base de données MySQL pour le projet (par exemple, test_bamana).
-Ouvre le fichier .env et mets à jour les informations de connexion à la base de données :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_bamana  # Remplace par le nom de ta base de données
DB_USERNAME=root  # Ton nom d'utilisateur MySQL
DB_PASSWORD=        # Laisse vide si tu n'as pas de mot de passe pour MySQL

### 4. Générer la clé d'application

Laravel nécessite une clé d'application pour le bon fonctionnement du projet. Pour la générer, exécute la commande suivante :

```bash
php artisan key:generate
```

### 5. Créer les tables de la base de données et insérer les données

Exécute la commande suivante pour créer les tables de la base de données et insérer des données de test :

```bash
php artisan migrate:fresh --seed
```

### 6. Démarrer le serveur Laravel

Pour démarrer l'application Laravel sur ton ordinateur local, utilise la commande suivante :

```bash
php artisan serve
```
Cela démarrera un serveur local sur l'adresse suivante : http://127.0.0.1:8000.

### 7. Accéder à l'application

Une fois le serveur démarré, ouvre ton navigateur et accède à l'application via l'URL suivante :
```bash
http://127.0.0.1:8000
```

###8. Connexion à l'interface utilisateur

Utilisateur : Un utilisateur peut naviguer dans les produits et les afficher. Il peut aussi filtrer les produits par nom.
Admin : L'administrateur peut ajouter, modifier et supprimer des produits.Il peut aussi filtrer les produits par nom.
Les accès sont configurés dans le fichier UserSeeder, où tu peux voir les utilisateurs avec leurs accès et leurs rôles (admin et client).
