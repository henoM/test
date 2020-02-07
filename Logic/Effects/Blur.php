<?php

namespace App;

use Main\Effect;
use Main\Manipulate;

class Blur extends Effect
{
    use Manipulate;

    public function index($data, $file_paths)
    {
        foreach ($file_paths as $file_path){
            $this->changeBlur($data['size'],$file_path);
        }
    }

    private function changeBlur($size,$file_path)
    {
        $command = "ffmpeg -i $file_path -vf scale=$size input.jpg";
        $this->changeImageParameters($command);
    }
}
