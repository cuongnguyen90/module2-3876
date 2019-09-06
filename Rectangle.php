<?php


class Rectangle
{
    public $width;
    public $height;


    public function __construct($_width,$_height)
    {
        $this->width = $_width;
        $this->height = $_height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function getPerimeter ()
    {
        return ($this->height + $this->width)/2;
    }
    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}