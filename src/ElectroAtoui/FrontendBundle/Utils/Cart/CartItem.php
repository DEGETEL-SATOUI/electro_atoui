<?php

namespace ElectroAtoui\FrontendBundle\Utils\Cart;


class CartItem
{
    private $quantity         = 0;
    private $cart             = null;
    private $product          = null;


    public function __construct($cart, $product, $quantity)
    {
        $this->product      = $product;
        $this->cart         = $cart;
        $this->quantity     = $quantity;
    }


    public function getProduct()
    {
        return $this->product;
    }


    public function setProduct($product)
    {
        $this->product = $product;
    }


    public function getCart()
    {
        return $this->cart;
    }


    public function setCart($cart)
    {
        $this->cart = $cart;
    }


    public function getQuantity()
    {
        return $this->quantity;
    }


    public function setQuantity($quantity)
    {
        if (!preg_match('~^\d+$~', $quantity)) {
            $this->quantity = 1;
        } else {
            $this->quantity = $quantity;
        }
    }


    public function addQuantity($quantity)
    {
        $this->quantity += $quantity;
    }
}

?>