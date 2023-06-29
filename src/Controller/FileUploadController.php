<?php

namespace App\Controller;

use App\Service\FileService;

class FileUploadController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('file-upload/index.html.twig');
    }

    public function post()
    {
        $message = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if
            (isset($_FILES['fichier'])) {
                $file = $_FILES['fichier'];

                // Vérification de la taille maximale du fichier
                $maxFileSize = 1048576; // 1 Mo
                if ($file['size'] > $maxFileSize) {
                    $message = 'Le fichier dépasse la taille maximale autorisée.';
                } else {
                    // Vérification de l'extension du fichier
                    $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf']; // Extensions autorisées
                    $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
                    if (!in_array($fileExtension, $allowedExtensions)) {
                        $message = 'L\'extension du fichier n\'est pas autorisée.';
                    } else {
                        $fileService = new FileService();
                        $message = $fileService->uploadFile($file);
                    }
                }
            } else {
                $message ='Aucun fichier n\'a été soumis.';
            }
        }

        return $this->twig->render('file-upload/index.html.twig', ['message' => $message]);
    }
}
