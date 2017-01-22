<?php

namespace Utils;

class FileReader
{

    private $filename;
    private $file;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->file = fopen($filename, 'r');
    }

    public function lines() {
        while(($line = fgets($this->file)) !== false) {
            yield $line;
        }
    }

}