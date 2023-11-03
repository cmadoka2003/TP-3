<p align="center"> 
    <h1 align="center"> Projet étudiant pour débuter en HTML/CSS</h1>
</p>

## About 
- Petit projet à partir de maquette d'un site de voyage


## General info / Requirements
- Docker nécessaire
- Services disponibles: db, php-apache, phpmyadmin (dev seulement)

## Architecture of the project
- ./src/ : sources du projet
- .gitignore: les fichiers à suivre ou ignorer dans le projet pour Git
- compose.yml: fichier de configuration pour orchestrer les conteneurs
- Dockerfile: image sur mesure pour php-apache avec l'extension PDO
- README.md: ce fichier que vous lisez
- script.sql: fichier d'initialisation pour la base de donnée/ comprendre la structure à avoir dans la db.

## Installation for the first time
1. Lancer la commande: `cp .env.sample .env`
2. Remplir les variables d'environnement comme souhaité
3. Lancer un terminal qui fonctionne avec Docker 
4. Lancer la commande: `docker compose up`

