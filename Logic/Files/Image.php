<?php

namespace File;

class Image
{

    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function index($images)
    {
        for ($i = 0; $i < count($images); $i++) {
            $file_paths[$i] = $this->uploadFile();

        }
        return $file_paths;

    }

    public function uploadFile()
    {

        //move image and return image path
        return 'image_path';
    }

}
