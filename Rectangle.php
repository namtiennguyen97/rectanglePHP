<?php


class Rectangle
{
    public $width;
    public $height;
    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height= $height;
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

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
    // phuong thuc tinh dien tich
    public function getArea(){
        return $this->width * $this->height;
    }
    //phuong thuc tinh chu vi
    public function getPer(){
        return ($this->width + $this->height)*2;
    }
    // phuong thuc display
    public function display(){
        echo 'Hinh chu nhat nay co chieu dai la: '.$this->width.' Va chieu rong la: '.$this->height;
        echo 'Dien tich cua hinh chu nhat la: '.$this->getArea();
        echo 'CHu vi cua hinh chu nhat la: '.$this->getPer();
    }

}