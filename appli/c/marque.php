<?php
namespace APPLI\C;

class Marque extends \MVC\Controleur{
    
    static function liste() 
    {
        $marque = \APPLI\M\Marque::getInstance()->getAll();
        self::getVue()->liste=$marque;
    }
    
}
