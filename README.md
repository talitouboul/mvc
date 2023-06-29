# Sciences-U - B3 IW - PHP MVC - 2023

## Démarrage

### Composer

Pour récupérer les dépendances déclarées dans `composer.json` et générer l'autoloader PSR-4, exécuter la commande suivante :

```bash
composer install
```

### DB Configuration

La configuration de la base de données doit être inscrite dans un fichier `.env.local`, sur le modèle du fichier `.env`.

### Démarrer l'application

Commande :

```bash
composer start
```

### FileService


La classe `App\Service\FileService` est utilisée dans le projet pour gérer le téléchargement de fichiers. 
Elle fournit la méthode `uploadFile` permettant d'uploader les fichiers soumis par les utilisateurs.

Utilisation : 

Pour utiliser la classe FileService, suivez les étapes suivantes :

Inclure le fichier de classe FileService.php dans votre projet.

Créer une instance de la classe FileService :

```bash
$fileService = new FileService();
```

Appeler la méthode uploadFile en lui passant le tableau `$_FILES['fichier']` contenant les informations sur le fichier soumis :

```bash
$message = $fileService->uploadFile($_FILES['fichier']);
```

Cette méthode effectue le téléchargement du fichier soumis vers un emplacement spécifié et retourne un message indiquant le succès ou l'échec de l'opération.

`uploadFile($file)`: Cette méthode permet de télécharger un fichier vers un emplacement spécifié. Elle prend en paramètre le tableau `$_FILES['fichier']` contenant les informations sur le fichier soumis. La méthode retourne un message indiquant le succès ou l'échec du téléchargement.

Voici un exemple d'utilisation de la classe FileService dans le projet :

```bash
$fileService = new FileService();
$message = $fileService->uploadFile($_FILES['fichier']);

return $this->twig->render('file-upload/index.html.twig', ['message' => $message]);
```

Dans cet exemple, la méthode uploadFile est appelée avec le tableau $_FILES['fichier'] contenant les informations sur le fichier soumis. Le message de retour est ensuite passé à la vue Twig pour être affiché à l'utilisateur.

N'oubliez pas d'adapter le code en fonction de votre projet et des emplacements de fichiers spécifiés dans votre environnement.

## Cours

Le cours complet se trouve à [cette adresse](https://ld-web.github.io/su-2023-php-mvc-course/).
