# Correction exercice « commandes avancées »

## 1. Afficher la version linux :
```shell
uname
```

## 2. Afficher le contenu du dossier de travail avec detaila :
Avec détails et avec fichiers invisibles :
```shell
ls -l
ls -al
```

## 3. Exécuter une commande avec les droits root :
```shell
sudo apt-get update
```

## 4. Comprendre les notions d'utilisateur et de groupe :
Chaque utilisateur appartient à au moins un groupe.
Afficher les groupes de l'utilisateur actuel :
```shell
groups
```
Créer un nouveau groupe :
```shell
sudo groupadd mongroupe
```
Ajouter un utilisateur à un groupe :
```shell
sudo usermod -aG mongroupe user
```
Changer le groupe d'un fichier :
```shell
sudo chown user:group fichier.txt
```

## 5. Comprendre les droits d'accès et les permissions :
Changer les droits d'accès d'un fichier :
```shell
chmod g+w fichier.txt
```
Droits d'accès d'un répertoire :
```shell
chmod g+x test
```
Permission d'exécution :
```shell
chmod +x script.sh
```

## 6. Créer un script et le rendre exécutable :
```shell
nano script.sh
chmod +x script.sh
```

## 7. Stocker le résultat d'une commande dans un fichier :
```shell
ls > resultat.txt
```

## 8. Utiliser des variables :
```shell
NOM="Alan Turing"
echo $NOM
```
Afficher toutes les variables :
```shell
env
printenv
```
Quelques variables utiles :
```shell
echo $HOME
echo $USER
echo $PATH
echo $EDITOR
echo $TERM
```
