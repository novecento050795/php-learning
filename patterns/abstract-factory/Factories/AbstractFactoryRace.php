<?php
namespace Factory;

abstract class AbstractFactoryRace
{
    abstract public function createFootman();
    abstract public function createTransport();
    abstract public function createWeaponry();
}