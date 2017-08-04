<?php

//voir Article.class.php pour le détail des étapes.

// Début de ma classe Categorie
class Categorie{
private $Libelle,
        $CollectionArticles;

public function __construct(
    $Libelle) {
      $this->Libelle =$Libelle;

}
  public function getLibelle(){
  return $this->Libelle;
  }

/**
*@return the $CollectionArticles
*/
public function getCollectionArticles() {
  return $this->CollectionArticles;
}

  public function setLibelle($MonNouveauLibelle) {
  $this->Libelle = $MonNouveauLibelle;
  }

/**
* Permet d'ajouter un Objet Article à notre tableau (Collection) d'Articles
*/

  public function AjouterUnArticle(Article $Article) {
    $this->CollectionArticles[] = $Article;
  }





}//fin de ma classe Categorie
