<?php

class AsciiFigure {
    public $size;
    public function __construct($size) {
        $this->size = $size;
    }

    public function draw() {
        for ($row = 0; $row < $this->size; $row++) {
            $slashes = ($this->size - 1 - $row) * 4;
            $stars = $row * 8;

            for ($i = 0; $i < $slashes; $i++) {
                echo "/";
            }

            for ($i = 0; $i < $stars; $i++) {
                echo "*";
            }

            for ($i = 0; $i < $slashes; $i++) {
                echo "\\";
            }
            echo "\n";
        }
    }
}

$newSize = readline("Please enter the size of a shape: ");
$shapeSize = new AsciiFigure($newSize);
$shapeSize->draw();