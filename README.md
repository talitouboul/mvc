# Sciences-U - B3 IW - PHP MVC - 2023

## Démarrage

### Equipe 

Maxime CHOSTAK & Tali TOUBOUL


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

## Nos problèmes

Étant donné que nous étions débutants dans ce projet, notre groupe a eu l'opportunité de découvrir de nouvelles notions. Cela nous a permis d'explorer divers aspects tels que l'organisation du code, la structuration des fichiers, les approches en matière d'architecture logicielle, et bien d'autres encore.


Pendant le développement de ce projet, nous avons été confrontés à deux défis majeurs liés à la gestion des fichiers soumis par les utilisateurs :

Validation des fichiers : Nous avons dû mettre en place une validation rigoureuse pour garantir que les fichiers téléchargés respectaient certaines normes. Cela incluait la vérification du format approprié des fichiers, le respect des limites de taille spécifiées et la prévention de tout risque de sécurité potentiel, tels que la présence de contenus malveillants.

Gestion des erreurs de téléchargement : Tout au long du processus de téléchargement des fichiers, nous avons dû prendre en compte différentes erreurs susceptibles de se produire. Nous avons mis en place des mécanismes de gestion des erreurs afin d'informer les utilisateurs en cas d'échec du téléchargement et de leur fournir des informations détaillées sur la nature de l'erreur rencontrée.


## Cours

Le cours complet se trouve à [cette adresse](https://ld-web.github.io/su-2023-php-mvc-course/).
