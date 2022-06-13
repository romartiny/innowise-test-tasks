<?php

namespace App\Controller;

require_once __DIR__ . './../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{
    public function twigResult($fileName, $fileSize, $fileExif, $dataFiles)
    {
        $loader = new FilesystemLoader(__DIR__ . '/../View');
        $twig = new Environment($loader);

        echo $twig->render('index.html.twig', [
            'name' => $fileName,
            'size' => $fileSize,
            'exif' => $fileExif,
            'data' => $dataFiles
            ]);
    }

    public function twigIndex($dataFiles)
    {
        $loader = new FilesystemLoader(__DIR__ . '/../View');
        $twig = new Environment($loader);

        echo $twig->render('index.html.twig', [
            'data' => $dataFiles
        ]);
    }
}
