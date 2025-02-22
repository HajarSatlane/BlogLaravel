# Projet Blog Laravel

Un simple blog basé sur Laravel où les utilisateurs peuvent créer, modifier, voir et supprimer des articles. Comprend l'authentification des utilisateurs.

## Prérequis

Assurez-vous d'avoir les éléments suivants installés :

- PHP 7.3 ou supérieur
- Composer
- Node.js et npm
- MySQL ou SQLite

## Installation

### 1. Clonez le dépôt

git clone https://github.com/HajarSatlane/BlogLaravel.git
cd BlogLaravel

### 2. Installez les dépendances PHP

composer install

### 3. Configurez le fichier .env
Renommez .env.example en .env et mettez à jour vos paramètres de base de données :

mv .env.example .env
Exemple pour MySQL :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_laravel
DB_USERNAME=root
DB_PASSWORD=

### 4. Générez la clé de l'application

php artisan key:generate

### 5. Exécutez les migrations de la base de données

php artisan migrate

### 6. Installez les dépendances frontend
npm install

### 7. Compilez les assets

npm run dev

### 8. Servez l'application

php artisan serve
Visitez http://localhost:8000 dans votre navigateur pour accéder à l'application.
