<?php

namespace APPLI\C;

class Mouvement extends \MVC\Controleur {

    static function liste() {
         self::getVue()->mouvement_count = \APPLI\M\Mouvement::getInstance()->countRows();
    }

}
