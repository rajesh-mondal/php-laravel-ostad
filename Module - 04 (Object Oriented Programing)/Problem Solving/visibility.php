<?php

class FileReader{
    // public $data = "Reading public data";

    protected $data = "Reading protected data";

    public function getData(){
        return $this->data;
    }
}

$fileReader = new FileReader();

// echo $fileReader->data;
echo $fileReader->getData();