<?php

abstract class Animal 
{
    const SKIN_FEATHER = 1;
    const SKIN_SCALE = 2;
    const SKIN_FUR = 3;

    const ENVIRONMENT_CAGE = 1;
    const ENVIRONMENT_AQUARIUM = 2;
    const ENVIRONMENT_AVIARY = 3;
    const ENVIRONMENT_TERRARIUM = 4;
    
    private $_latinName;
    private $_food = [];
    
    public function __construct($latinName) 
    {
        $this->_latinName = $latinName;
    }
    
    public function setFood($food)
    {
        $this->_food = $food;
    }
    
    public function getFood()
    {
        return $this->_food;
    }
    
    abstract public function getSkin();
    
    abstract public function getEnvironment();
}

class Mammal extends Animal
{
    public function getSkin() 
    {
        return self::SKIN_FUR;
    }
    
    public function getEnvironment() 
    {
        return self::ENVIRONMENT_CAGE;
    }
}

class Bird extends Animal 
{
    private $_flying = true;
    
    public function isFlying() 
    {
        return $this->_flying;
    }
    
    public function setFlying($flying) 
    {
        $this->_flying = $flying;
    }
    
    public function getSkin() 
    {
        return self::SKIN_FEATHER;
    }
    
    public function getEnvironment() 
    {
        return self::ENVIRONMENT_AVIARY;
    }
}
 
class Reptile extends Animal 
{
    public function getSkin() 
    {
        return self::SKIN_SCALE;
    }
    
    public function getEnvironment() 
    {
        return self::ENVIRONMENT_TERRARIUM;
    }
}

class Fish extends Animal 
{
    private $_water = 'seawater';
    
    public function getWaterType() 
    {
        return $this->_water;
    }
    
    public function setWaterType($water) 
    {
        $this->_water = $water;
    }
    
    public function getSkin() 
    {
        return self::SKIN_SCALE;
    }
    
    public function getEnvironment() 
    {
        return self::ENVIRONMENT_AQUARIUM;
    }
}


