<?php

namespace ElectroAtoui\FrontendBundle\Utils\Cart;

use ElectroAtoui\FrontendBundle\Utils\Cart\CartItem;


class Cart
{
    private $items   = array();
    private $user    = null;


    public function __construct($user = null)
    {
        $this->user = $user;
    }


    public function getUser()
    {
        return $this->user;
    }


    public function setUser($user)
    {
        $this->user = $user;
    }


    public function isEmpty()
    {
        return count($this->items) > 0 ? true : false;
    }


    public function addItem($product, $quantity = 1)
    {
        if ($quantity <= $product->getQuantity()) {
            if (!array_key_exists($product->getId(), $this->items)) {
                $item = new CartItem($this, $product, $quantity);
                $this->items[$product->getId()] = $item;
            } else {
                $item = $this->items[$product->getId()];
                if (($item->getQuantity() + $quantity) <= $product->getQuantity()) {
                    $item->addQuantity($quantity);
                }
            }
        }
    }


    public function updateItem($product, $quantity = 1)
    {
        if (array_key_exists($product->getId(), $this->items)) {
            $item = $this->items[$product->getId()];
            if ($quantity > 0) {
                if ($quantity <= $product->getQuantity()) {
                    $item->setQuantity($quantity);
                }
            } else {
                $this->removeItem($product);
            }
        }
    }


    public function removeItem($product)
    {
        if (array_key_exists($product->getId(), $this->items)) {
            unset($this->items[$product->getId()]);
        }
    }


    public function getItem($product)
    {
        if (array_key_exists($product->getId(), $this->items)) {
            return $this->items[$product->getId()];
        }

        return null;
    }


    public function getItems()
    {
        $data = array();

        foreach ($this->items as $id => $item) {
            $data[] = array(
                'quantity' => $item->getQuantity(),
                'product' => $item->getProduct(),
                'product_total' => $item->getQuantity() * $item->getProduct()->getPrice(),
                'product_rest' => $item->getProduct()->getQuantity() - $item->getQuantity(),
            );
        }

        return $data;
    }


    public function getCountItems()
    {
        return count($this->items);
    }


    public function getTotal()
    {
        $total = 0.00;

        foreach ($this->items as $id => $item) {
            $total += $item->getQuantity() * $item->getProduct()->getPrice();
        }

        return $total;
    }


    public function clear()
    {
        $this->items = array();
    }
}

?>