<?php
namespace Car;

class Car
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        echo "My car is - ";
        return $this->model;
    }
}