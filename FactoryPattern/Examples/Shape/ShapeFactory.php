<?php

class ShapeFactory
{
    private Shape $shape;

    public function draw(string $type)
    {
        switch ($type) {
            case 'rectangle':
                $this->shape = new Rectangle();
                break;
            case 'square':
                $this->shape = new Square();
                break;
        }
        if ($this->shape) {
            $this->shape->draw();
        }
    }
}