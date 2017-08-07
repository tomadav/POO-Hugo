<?php

namespace Core;

class Core {
  public function __construct($params) {
    // print_r($params);

    if(empty($params)) {
      $params['controller'] = 'news';
      $params['action']     = 'index';
    }

    //récupératrion des paramètres
    $controller = 'Application\Controller\\'.ucfirst($params['controller']).'Controller';
    $action     = $params['action'];


    // -- on vérifie si le fichier du controlleur existe avant de l'instancier
    if(file_exists(RACINE_SITE.'\\'.$controller.'.php')) {
      $obj = new $controller;

      // -- Si la méthode existe dans mon controlleur, alors je peux l'exécuter.
      if(method_exists($obj, $action) ) {
        //-- Exécution de l'action
        $obj->$action();
      }else {
        echo "<h1>Erreur 404 - Page introuvable</h1><h3>Aucune vue correspondante.</h3>";
      }

    }else {
      
      //-- Si non, le fichier du controlleur n'existe pas, donc je revoie une erreur 404.
      echo "<h1>Erreur 404 - Page Introuvable</h1><h3>Ce controlleur n'existe pas</h3>";
    }




    // if($controller == "news" && $action =="index"){
    //   echo'<h1>ARTICLE !</h1>';
    // }
      // echo '<h1>Hello World WF3 !</h1>';

  }


}
