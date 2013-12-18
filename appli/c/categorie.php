<?php
namespace APPLI\C;

class Categorie extends \MVC\Controleur{
    
    static function liste() 
    {
        $categorie = \APPLI\M\Categorie::getInstance()->getAll();
        self::getVue()->liste=$categorie;
    }
    
}
