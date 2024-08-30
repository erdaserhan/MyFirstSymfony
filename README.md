# MyFirstSymfony

## Installation

```bash
symfony new MyFirstSymfony
cd MyFirstSymfony
```

## Installation de maker

```bash
composer require --dev symfony/maker-bundle
```

Pour voir ce que l'on peut faire dans la console

```bash
symfony console
php bin/console
```

Pour voir les actions possible de maker :

```bash
php bin/console make:
```

###Création d'un Controller

```bash
php bin/console make:controller
```

Le nom dois être en Pascal case

Un fichier est créé dans `src/Controller/FirstController.php`

Pour voir une route depuis la console :

```bash
php bin/console debug:router
```

Pour voir le détail d'une route

```bash
php bin/console debug:router nom_de_la_route
```


    