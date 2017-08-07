<?php

namespace Core\Controller;

class AppController {

private $_viewparams;

/** Permet de générer l'affichage de la vue passée en paramètres
*@param String $view vue à afficher
@param Array $viewparams Données à passer à la vue
**/

  protected function render($view, $viewparams = '') {

    # Récupération et Affectation des Paramètres de la vue
    $this->_viewparams = $viewparams;

    # Affichage de l'entête
    require(HEADER_SITE);

    # Inclusion de la Vue
    include_once VIEW_SITE.'/'.$view.'.php';

    # Affichage du Pied de PAGE
    require(FOOTER_SITE);
  }
  public function getParams() {
    return $this->_viewparams;
  }
}
