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
            if (isset($_FILES['fichier'])) {
                $fileService = new FileService();
                $message = $fileService->uploadFile($_FILES['fichier']);
            } else {
                $message ='Aucun fichier n\'a été soumis.';
            }
        }

        return $this->twig->render('file-upload/index.html.twig', ['message' => $message]);
    }
}
