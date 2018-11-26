# Correction exercice 01_Commandes_de_base

## 1. Afficher la page de man pour la commande ls :
```shell
man ls
```

## 2. Afficher le répertoire de travail :
```shell
pwd
```

## 3. Créer un sous-répertoire « projets » :
```shell
mkdir projets
```
    
## 4. Changer le répertoire de travail vers « projets » :
```shell
cd projets
```

## 5. Revenir vers le répertoire « home » :
```shell
cd ~
```

## 6. Lister le contenu d'un répertoire :
Le répertoire de travail :
```shell
ls
```
Un sous-répertoire :
```shell
ls projets
```

## 7. Créer un nouveau sous-répertoire :
```shell
mkdir -p projets/exercices/test
```

## 8. Afficher l'arborescence du répertoire de travail :
```shell
tree
```

## 9. Supprimer le répertoire projects/exercice :
D'abord supprimer le sous-répertoire test :
```shell
rmdir projets/exercices/test
rmdir projets/exercices
```

## 10. Créer un nouveau fichier test.txt :
```shell
nano test.txt
```

## 11. Afficher le contenu du fichier test.txt :
```shell
cat test.txt
```

## 12. Renommer le fichier test.txt en test01.txt :
```shell
mv test.txt test01.txt
```

## 13. Supprimer le fichier test01.txt :
```shell
rm test01.txt
```
