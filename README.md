\# symfony-ecommerce



Application e-commerce développée avec Symfony 8 dans le cadre de ma formation d'ingénieure en génie informatique (EHEI Oujda).



\## Aperçu

Boutique en ligne permettant de parcourir un catalogue de produits classés par catégories, de gérer un panier et de s'authentifier. \[À COMPLÉTER : objectif du projet, contexte (cours, projet personnel)]



\## Fonctionnalités

\- Catalogue de produits et catégories

\- Panier d'achat

\- Inscription et connexion des utilisateurs

\- Espace profil utilisateur

\- \[À COMPLÉTER : autres fonctionnalités réellement présentes, par exemple espace administrateur, commande, paiement]



\## Technologies

\- PHP \[À COMPLÉTER : version], Symfony 8

\- Doctrine ORM et migrations, base MySQL

\- Twig pour les vues

\- PHPUnit pour les tests \[À COMPLÉTER : préciser si des tests sont écrits]



\## Structure du projet

\- `src/Entity` : entités `Category`, `Product`, `User`

\- `src/Controller` : contrôleurs Home, Product, Category, Cart, Profile, Security

\- `templates` : vues Twig

\- `migrations` : migrations de base de données

\- `config` : configuration de l'application

\- `tests` : tests



\## Installation

```bash

git clone https://github.com/meryemammari23/ecommerce.git

cd ecommerce

composer install

```



\## Configuration

Créer un fichier `.env.local` à la racine (non versionné) :

```env

APP\_SECRET=une\_valeur\_aleatoire\_longue

DATABASE\_URL="mysql://utilisateur:motdepasse@127.0.0.1:3306/ecommerce?serverVersion=8.0\&charset=utf8mb4"

```

Ne jamais publier ce fichier.



\## Lancement

```bash

php bin/console doctrine:database:create

php bin/console doctrine:migrations:migrate

symfony serve

```

Sans la CLI Symfony : `php -S localhost:8000 -t public`.

L'application est alors disponible sur http://localhost:8000.



\## Captures d'écran

\[À COMPLÉTER : ajouter 2 ou 3 captures dans un dossier `docs/`]



\## Améliorations futures

\- \[À COMPLÉTER : 2 ou 3 améliorations réalistes]



\## Auteure

Meryem Ammari — \[LinkedIn](https://www.linkedin.com/in/meryem-a-4627aa227)

