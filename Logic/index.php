<?php
require "../vendor/autoload.php";

use App\Blur;
use App\Size;
use App\Grayscale;
use File\Image;

$route = new Index();
$request = $_POST;
$images = $_FILES['images']['name'];
$route->index($request, $images);


class Index
{
    public function __construct()
    {

    }

    public function index($request, $images)
    {
        $file_paths = Image::getInstance()->index($images);
var_dump($file_paths);
        foreach ($request['effect'] as $key => $effect) {
            if (isset($request['effect'][$key]['checked'])) {
                switch ($key) {
                    case 'size':
                        Size::getInstance()->index($request['effect']['size'], $file_paths);
                        break;
                    case 'blur':
                        Blur::getInstance()->index($request['effect']['blur'], $file_paths);
                        break;
                    case 'grayscale':
                        Grayscale::getInstance()->index($request['effect']['grayscale'], $file_paths);
                        break;
                }
            }
        }

    }
}

