<?php

namespace APPLI\C;

class Mouvement extends \MVC\Controleur {

    static function liste() {
        $mouvements = \APPLI\M\Mouvement::getInstance()->getAll();
        self::getVue()->liste = $mouvements;
    }

    static function mouvement() {
        
    }

}
