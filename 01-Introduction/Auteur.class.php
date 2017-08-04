<?php

//voir Article.class.php pour le détail des étapes.

// Début de ma classe Auteur
class Auteur{
private   $Nom,
          $Prenom,
          $Email;

public function __construct(
    $Nom,
    $Prenom,
    $Email) {

      $this->Nom       =$Nom;
      $this->Prenom    =$Prenom;
      $this->Email     =$Email;
}
  public function getNom() {
    return $this->Nom;
  }
  
  public function getPrenom(){
  return $this->Prenom;
  }

  public function getEmail(){
  return $this->Email;
  }

  public function getNomComplet() {
    return $this->Prenom." ".$this->Nom;
  }

  public function setPrenom ($MonDeuxiemePrenom) {
  $this->Prenom = $MonDeuxiemePrenom;
  }

}//fin de ma classe Auteur
