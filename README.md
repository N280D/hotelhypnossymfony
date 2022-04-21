
# Projet ECF /Hotel Hypnos

Dans le cadre de ma formation Studi, j'ai crée un site Web pour la gestion des réservations d'un hôtel

## Authors

- [@Nawel](https://github.com/N280D/hotelhypnossymfony)


## Déploiement en local

Pour déployer le projet en local

```bash
  symfony server:start
```
## Déploiement  sur IONOS
Vérifier que le site pointe bien sur le fichier public

Vérifier que les droits d'exécutions et de lecture ont bien été donnée.


Connection au serveur distant
```bash
ssh u108110901@access908105732.webspace-data.io
```
Ajouter le mot de passe

Récupération les données du serveur git
```bash
 git clone https://github.com/N280D/hotelhypnossymfony.git
```

Installation de composer sur le serveur distant

```bash
curl -sS https://getcomposer.org/installer | /usr/bin/php7.1-cli
```


## Instaler le projet

Télécharger Xampp (Apache + MariaDB + PHP + Perl)

[Lien pour installer Xampp](https://www.apachefriends.org/fr/index.html)

Instalation du projet avec Composer
 
 Vérifier si symfony et composer sont installer

```bash
symfony check:requirements
``` 
```bash
composer
``` 
 Sinon lancer ces commandes suivante
```bash
 php composer-setup.php
 composer
```
  
## Lancer le projet en local

Récupérer le projet depuis GitHub dans un dossier "Hotelhypnos"
```bash
 git clone https://github.com/N280D/hotelhypnossymfony.git
```

Depuis VSC code ouvrez le projet

Pour atteidre le prjet depuis le terminal utiliser la commande
```bash
  cd Hotelhypnos
```

Installer les dépendances du projet si ce n'est pas déjà fait

```bash
  composer install
```

Lancer le serveur

```bash
 Symfony server:start
```

## Ligne de commande utilisé lors du projet:

Commande Symfony pour générer une entité User et la configuration du composant sécurity

```bash
symfony console make:user ou php bin/console make:user
```
Commande Symfony pour générer le système d’authentification
```bash
symfony console make:auth ou php bin/console make:auth
```

Commande Symfony pour générer le système d’inscription
```bash
symfony console make:registration-form ou php bin/console make:registration-form
```

Commande Symfony pour générer le système de réinitialisation de mot de passe
```bash
symfony console make:reset-password ou php bin/console make:reset-password
```

Commande Symfony pour générer une entité
```bash
symfony console make:entity ou php bin/console make:entity

```

Commande Symfony pour générer le CRUD selon une entité Doctrine
```bash
symfony console make:crud ou php bin/console make:crud
```

## Tech Stack

**Client:** HTML, CSS, Javascipt

**Server:** Xampp



