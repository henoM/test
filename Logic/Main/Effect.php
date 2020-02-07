<?php

namespace Main;

abstract class Effect
{
    abstract protected function index($data, $file_paths);

    abstract protected function changeImageParameters($command);
}
