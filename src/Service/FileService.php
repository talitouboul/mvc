<?php

namespace App\Service;

class FileService
{
    public function uploadFile($file)
    {
        $targetDirectory = __DIR__.'/../../public/uploads/';
        $targetFile = $targetDirectory . basename($file['name']);

        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($fileType, $allowedExtensions)) {
            return 'Erreur : Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.';
        }

        if ($file['error'] !== 0) {
            return 'Erreur lors du téléchargement du fichier : ' . $file['error'];
        }

        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return 'Fichier téléchargé avec succès';
        } else {
            return 'Erreur lors du déplacement du fichier vers le répertoire de destination.';
        }
    }

}
