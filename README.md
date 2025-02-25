# Projet Barman

MEMBRE : ANTOINE BAYSSAC ET DENIS BUCSPUN

Ce projet "Barman" est une application Symfony permettant de gérer des boissons, des commandes et des utilisateurs.

## Prérequis

- PHP >= 7.4
- Composer
- Symfony CLI
- Une base de données (par exemple, MySQL)

## Installation

### 1. Cloner le dépôt

Clonez le dépôt Git sur votre machine locale :

```bash
git clone https://github.com/votre-utilisateur/barman.git
cd barman

2. Installer les dépendances
Installez les dépendances PHP en utilisant Composer :
bash
Copier le code
composer install

3. Configurer l'environnement
Copiez le fichier .env et configurez vos paramètres de base de données et autres configurations :
bash
Copier le code
cp .env .env.local

Modifiez le fichier .env.local avec vos propres paramètres, par exemple :
makefile
Copier le code
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"

4. Créer la base de données
Créez la base de données et exécutez les migrations :
bash
Copier le code
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

5. Charger les fixtures (optionnel)
Si vous avez des fixtures pour peupler la base de données avec des données de test :
bash
Copier le code
php bin/console doctrine:fixtures:load

6. Démarrer le serveur de développement
Utilisez la CLI Symfony pour démarrer le serveur de développement :
bash
Copier le code
symfony server:start

L'application sera disponible à l'adresse http://127.0.0.1:8000.
Utilisation de Postman
Pour tester les différentes routes de l'API, vous pouvez utiliser Postman. Voici un exemple de configuration pour tester les différentes fonctionnalités de l'API.
1. Créer une Boisson
Méthode : POST
URL : http://127.0.0.1:8000/api/barman/boisson
Body : JSON
json
Copier le code
{
    "nom": "Coca-Cola",
    "prix": 1.5
}

2. Mettre à Jour une Boisson
Méthode : PUT
URL : http://127.0.0.1:8000/api/barman/boisson/{id}
Body : JSON
json
Copier le code
{
    "nom": "Pepsi",
    "prix": 1.8
}

3. Supprimer une Boisson
Méthode : DELETE
URL : http://127.0.0.1:8000/api/barman/boisson/{id}
4. Lister les Boissons
Méthode : GET
URL : http://127.0.0.1:8000/api/boissons
5. Détail d'une Boisson
Méthode : GET
URL : http://127.0.0.1:8000/api/boisson/{id}
Sécurité
Le projet utilise JWT (JSON Web Token) pour l'authentification. Voici comment obtenir un token et l'utiliser pour accéder aux routes sécurisées.
1. Obtenir un Token
Méthode : POST
URL : http://127.0.0.1:8000/auth
Body : JSON
json
Copier le code
{
    "email": "user@example.com",
    "password": "password"
}

2. Utiliser le Token
Dans Postman, ajoutez le token JWT dans l'onglet "Authorization" en tant que "Bearer Token" pour les requêtes nécessitant une authentification.

