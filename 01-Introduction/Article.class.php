<?php
/*--
* Création d'une Classe Article
* Une Classe est une entité regroupant des variables / propriété et des fonctions
*/

class Article{
  //Déclaration des propriétés de notre Class "Article"
  private $Titre,
          $Accroche,
          $Description,
          $FeaturedImage,
          $DateCreationArticle,
          $Auteur;
/**
* Afin de pouvoir attribuer une valeur à mes différentes variables,
* je vais mettre en place un constructeur
*/

public function __construct(
    $Titre,
    $Accroche,
    $Description,
    $FeaturedImage,
    $DateCreationArticle) {

// -- ici nous allons attribuer à chaque valeur propriété de notre classe,
//-- la valeur qui a été passée au contsructeur.

    $this->Titre                =$Titre;
    $this->Accroche             =$Accroche;
    $this->Description          =$Description;
    $this->FeaturedImage        =$FeaturedImage;
    $this->DateCreationArticle  =$DateCreationArticle;
  }// fin de mon constructeur

/**
*Getters : Fonctions qui vont avoir la charge de nous renvoyer nos informations.
*Nous aurrons une fonction par propriété de notre Classe.
*/

  public function getTitre() {
    return $this->Titre;
  }
  public function getAccroche(){
  return $this->Accroche;
  }
  public function getDescription(){
  return $this->Description;
  }
  public function getFeaturedImage(){
  return $this->FeaturedImage;
  }
  public function getDateCreationArticle(){
  return $this->DateCreationArticle;
  }

/**
* Setters : Fonctions qui vont avoir la charge de modifier les propriétés de notre Classe
*/

  public function setTitre ($MonNouveauTitre) {
  $this->Titre = $MonNouveauTitre;
  }

  public function setAuteur(Auteur $Auteur){
    $this->Auteur = $Auteur;
  }
  public function getAuteur(){
    return $this->Auteur;
  }

} //-- fin de ma Classe Article
