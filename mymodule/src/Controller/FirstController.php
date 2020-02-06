<?php
/**
 * @file
 * Contains \Drupal\mymodule\Controller\MyModuleController.
 */

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {
    public function content() {
        return array(
            '#type'=> 'markup',
            '#markup' => t('Hello How are you doing today ? </br> <h1>I hope you have a wonderful day today !!!</h1>'),  
        );
    }

    public function myresultrandom() {
        $sth = time();
        $mymarkup = "<h1> Hope you had a wonderful time here !!! </h1> <div id='delaware'>You can contact me @ pokhrelsishir@gmail.com !!!</div>";

        
        return array(
            '#type'=> 'markup',
            '#markup' => t("$mymarkup"),  
        );
    }
}