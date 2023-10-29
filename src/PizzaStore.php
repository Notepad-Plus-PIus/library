<?php
abstract class PizzaStore
{
    abstract public function createPizza(string $type);

    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->cut();

        return $pizza;
    }
}
