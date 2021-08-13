<?php

class Menu
{
    // 引数みたいなもの(プロパティ)
    private $name;
    private $price;
    private $image;

    // menuインスタンス作成時に必ず実行されるメソッド(コンストラクタ)
    public function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
    // hello()で実行(メソッド)
    public function hello()
    {
        echo '私は' . $this->name . 'です';
    }
    public function getName()
    {
        return $this->name;
    }
    public function getImage()
    {
        return $this->image;
    }
    // getOrderCountメソッドを定義してください
    public function getOrderCount()
    {
        return $this->orderCount;
    }

    // setOrderCountメソッドを定義してください
    public function setOrderCount($orderCount)
    {
        $this->orderCount = $orderCount;
    }
    // 消費税精算
    public function getTaxIncludedPrice()
    {
        return floor($this->price * 1.08);
    }
    // getTotalPriceメソッドを定義してください
    public function getTotalPrice()
    {
        return $this->getTaxIncludedPrice() * $this->orderCount;
    }
}
