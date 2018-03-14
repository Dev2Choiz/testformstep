# Test FormStep

Exemple d'utilisation du bundle _dev2choiz/formstep_ pour générer des formulaires par étape.

## Installation

Installation avec git

```bash
git clone git@github.com:Dev2Choiz/testformstep.git testformstep
cd testformstep
./launch.sh
```

le script *launch.sh* *build* puis *run* tous les containers necessaires
au bon fonctionnement l'appli.
Il lance ensuite le script *initAppli.sh* qui :
- Supprime les eventuelles dossier *vendor* et fichier *composer.lock*.
- Lance composer install 
- Crée la base de données et ses fixtures
 
L'application devrait maintenant être disponible sur l'url :
[http://localhost:8080/formstep/web/app_dev.php](http://localhost:8080/formstep/web/app_dev.php)
