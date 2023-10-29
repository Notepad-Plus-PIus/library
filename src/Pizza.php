<?php
abstract class Pizza
{
    public string $name;
    public string $sauce;
    public array $toppings;

    public function prepare(): void
    {
        echo 'Началась готовка пиццы: ' . $this->name;
        echo 'Добавлен соус: ' . $this->sauce;
        echo 'Добавлены топинги: ' . implode($this->toppings);
    }
    public function cut(): void
    {
        echo 'Данную пиццу нарезают по диагонали';
    }
}
