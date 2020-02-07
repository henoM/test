<?php

namespace App;

use Main\Effect;
use Main\Manipulate;

class Size extends Effect
{
    use Manipulate;

    public function index($data, $file_paths)
    {
        foreach ($file_paths as $file_path){
            $this->changeSize($data['width'], $data['height'],$file_path);
        }
    }

    private function changeSize($width, $height,$file_path)
    {
        $command = "ffmpeg -i $file_path -vf scale=$width,$height input.jpg";
        $this->changeImageParameters($command);
    }

}
