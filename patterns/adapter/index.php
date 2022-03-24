<?php
// Целевой интерфейс, клиент умеет работать только с ним
interface iTarget {

    public function query();
}
// Адаптируемый интерфейс. Клиент с ним не умеет работать, но очень хочет
interface iAdaptee {
    public function request();
}
// Класс, реализующий адаптирумым интерфейс
class Adaptee implements iAdaptee {
    public function request() {
        return "Hello from Adaptee!";
    }
}
class Adapter implements iTarget {
    protected $adaptee = null;

    public function __construct() {
        $this -> adaptee = new Adaptee();
    }

    public function query() {
        return $this -> adaptee -> request();
    }
}

$target = new Adapter();
echo $target->query() . "\n"; // "Adaptee::request"