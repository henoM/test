<?php

namespace App;

use Main\Effect;
use Main\Manipulate;

class Grayscale extends Effect
{
    use Manipulate;

    public function index($data, $file_paths)
    {
        foreach ($file_paths as $file_path){
            $this->changeGrayscale($data['size'],$file_path);
        }
    }

    private function changeGrayscale($size,$file_path)
    {
        $command = "ffmpeg -i $file_path -vf scale=$size input.jpg";
        $this->changeImageParameters($command);
    }
}
